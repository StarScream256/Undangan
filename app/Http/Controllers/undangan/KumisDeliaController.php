<?php

namespace App\Http\Controllers\undangan;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KumisDeliaController extends Controller
{
    public function undangan($nama)
    {
        $comments = Comment::latest()->get();
        return view('undangan.kumis-delia.invitation', compact('comments'))->with('nama', $nama);
    }

    public function create(Request $request)
    {
        $nama = $request->input('nama');
        $ucapan = $request->input('ucapan');

        $comment = new Comment;
        $comment->nama = $nama;
        $comment->ucapan = $ucapan;
        $comment->save();

        return redirect()->back();
    }

    public function post()
    {
        Comment::all();
    }
}
