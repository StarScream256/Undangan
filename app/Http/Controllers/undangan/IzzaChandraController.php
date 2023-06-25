<?php

namespace App\Http\Controllers\undangan;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\IzzaChandraComment;

class IzzaChandraController extends Controller
{
    public function undangan($key)
    {
        $guest = Guest::where('key', $key)->first();

        if ($guest) {
            $comments = IzzaChandraComment::latest()->get();
            // dd(count($comments));
            return view('undangan.izza-chandra.invitation', compact('comments'));
        } else {
            abort(404);
        }
    }

    public function create(Request $request)
    {
        $nama = $request->input('name');
        $ucapan = $request->input('message');

        $comment = new IzzaChandraComment();
        $comment->nama = $nama;
        $comment->ucapan = $ucapan;
        $comment->save();

        return redirect()->back();
    }

    public function post()
    {
        IzzaChandraComment::all();
    }
}
