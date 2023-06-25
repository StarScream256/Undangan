<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=ArnoPro:wght@400;500;600&display=swap" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('') }}">

  <title>Kumis & Delia</title>

  <style>
  @font-face {
    font-family: 'Bellasya';
    src: url('{{ asset('./kumis-delia/fonts/Bellasya.ttf') }}') format('truetype');
  }

  @font-face {
    font-family: 'ArnoPro';
    src: url('{{ asset('./kumis-delia/fonts/ARNOPRO-SMBD.OTF') }}') format('opentype');
  }

  @media screen and (max-width: 600px) {
    #share-love {
      background-position: center calc(50% + 75px);
    }
  }

  .fade-out {
    opacity: 0;
    transition: opacity 1.5s ease;
  }
  </style>
</head>
<body>
  <div class="w-full h-fit relative overflow-hidden">
    {{-- Opening Page --}}
    <div id="opening-page" class="w-full max-sm:bg-center max-sm:bg-cover h-screen" style="background-image: url('{{ asset('./kumis-delia/1.png') }}')">
      <div class="h-full w-full bg-slate-800/50 pt-8 flex flex-col justify-center items-center gap-4 max-sm:gap-2">
        <img src="{{ asset('./kumis-delia/kd white.png') }}" alt="" class="h-56 max-sm:h-44 mt-2">
        <p class="text-white text-lg font-medium mt-2" style="font-family: 'Poppins', sans-serif;">Ngunduh Mantu</p>
        <p class="text-6xl max-sm:text-4xl font-semibold text-white mt-2" style="font-family: 'ArnoPro', serif;">Kumis & Delia</p>
        <p class="text-white text-lg font-medium" style="font-family: 'Poppins', sans-serif;">Dear</p>
        <p class="text-white text-lg font-semibold" style="font-family: 'Poppins', sans-serif;">{{ $nama }}</p>
        <button type="button" id="open" class="px-5 py-3 bg-gradient-to-b from-emerald-800 to-teal-900 rounded-md flex items-center gap-3 text-white font-semibold text-lg max-sm:text-md border-2 border-transparent hover:border-2 hover:border-yellow-600 hover:bg-gradient-to-t cursor-pointer" style="font-family: 'Poppins', sans-serif;">
          <i class="fas fa-envelope-open-text text-xl max-sm:text-sm"></i>
          <p class="max-sm:text-md">Open Invitation</p>
        </button>
      </div>
    </div>

    <div class="w-screen">
      {{-- First Page --}}
      <div class="w-full max-sm:h-full flex flex-col gap-4 max-sm:gap-1 justify-center items-center bg-cover bg-center pt-8" style="background-image: url('{{ asset('./kumis-delia/1.png') }}');">
        <img src="{{ asset('./kumis-delia/kd white.png') }}" alt="" class="h-56 max-sm:h-44">
        <p class="text-white text-lg max-sm:text-md font-medium mt-2" style="font-family: 'Poppins', sans-serif;">Ngunduh Mantu</p>
        <p class="text-5xl font-semibold text-white mt-2" style="font-family: 'ArnoPro', serif;">Kumis & Delia</p>
        <div class="w-[38rem] max-sm:w-full max-sm:px-8 mt-2 max-sm:py-4 px-4 py-3 rounded-lg max-sm:rounded-none bg-slate-200/50 flex flex-col items-center justify-center" style="font-family: 'ArnoPro', serif;">
          <p class="w-full text-center text-lg max-sm:text-sm">And of His signs is that He created for you from yourselves mates that you may find tranquility in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.</p>
          <p class="mt-4">QS. Ar-Rum 21</p>
        </div>
        <div class="text-white flex flex-col gap-3 max-sm:gap-1 items-center py-6">
          <h1 class="text-6xl max-sm:text-4xl font-normal" style="font-family: 'Bellasya', serif;">Muhammad Ramadhan</h1>
          <p class="text-center text-lg max-sm:text-xs max-sm:w-full" style="font-family: 'ArnoPro', serif;">Putra dari Bapak Faisal Asra Dinata & Ibu Heppy Vera Mara Purnama <br>Jl. Gurame No. 15 RT03/01 Kedung Waringin Tanah Sereal Kota Bogor</p>
          <h1 class="text-6xl max-sm:text-4xl font-normal" style="font-family: 'Bellasya', serif;">&</h1>
          <h1 class="text-6xl max-sm:text-4xl font-normal" style="font-family: 'Bellasya', serif;">Siti Mulyaningsih</h1>
          <p class="text-center text-lg max-sm:text-xs" style="font-family: 'ArnoPro', serif;">Putri dari Bapak Husen & Siti Aminah (Alm)<br>Kp. Dampit</p>
        </div>
      </div>

      {{-- Second Page --}}
      <div class="w-screen h-screen bg-cover bg-top bg-fixed" style="background-image: url('{{ asset('./kumis-delia/3.png') }}')">
        <div class="w-full h-full bg-white/25 flex flex-col items-center justify-center">
          <p class="w-1/2 max-sm:w-full max-sm:px-4 text-center mt-4 text-lg max-sm:text-sm" style="font-family: 'ArnoPro', serif;">Untuk melaksanakan syariat agama-Mu, mengikuti sunnah rasul-Mu dalam membentuk keluarga yang Sakinah, Mawaddah, Warahmah yang Insya Allah akan diselengarakan pada hari:</p>
          <div class="w-fit max-sm:w-full max-sm:rounded-none max-sm:py-5 mt-4 px-8 py-3 rounded-lg bg-gray-700/50 flex flex-col items-center justify-center text-white text-lg" style="font-family: 'ArnoPro', serif;">
            <p class="text-2xl font-semibold">AKAD NIKAH</p>
            <p class="w-full text-center max-sm:text-sm">Kamis , 18 Mei 2023 <br>Kp. Dampit</p>
          </div>
          <div class="w-full flex flex-col items-center mt-12 text-lg" style="font-family: 'ArnoPro', serif;">
            <p class="text-3xl font-semibold max-sm:text-2xl">NGUNDUH MANTU</p>
            <p class="text-lg font-semibold max-sm:text-sm">Minggu, 28 Mei 2023</p>
            <p class="w-full text-center max-sm:text-sm max-sm:px-4">Jl. Gurame No. 15 RT03/01 Kedung Waringin Tanah Sereal Kota Bogor</p>
            <p class="text-lg font-semibold max-sm:text-sm">Pukul : 10.00 - Selesai WIB</p>
          </div>
          <a href="" class="w-fit mt-5 px-5 py-3 bg-gradient-to-b from-emerald-800 to-teal-900 rounded-md flex items-center gap-3 text-white font-semibold text-lg border-2 border-transparent hover:border-2 hover:border-yellow-600 hover:bg-gradient-to-t mb-12" style="font-family: 'Poppins', sans-serif;">
            <i class="fas fa-map-marker-alt text-xl"></i>
            <p class="">Google Maps</p>
          </a>
        </div>
      </div>
    </div>
    <div class="text-3xl font-semibold py-8 bg-white text-lg" style="font-family: 'ArnoPro', serif;background-color: #F8F5F2;">
      <h1 class="text-teal-800 text-2xl text-center">OUR GALLERY</h1>
      <div class="flex gap-2 w-full px-32 max-sm:px-8 mt-3 max-sm:grid max-sm:grid-cols-3">
        <img src="{{ asset('./kumis-delia/c.jpg') }}" alt="" class="w-1/5 max-sm:w-full rounded-md">
        <img src="{{ asset('./kumis-delia/WhatsApp Image 2023-05-17 at 14.22.23.jpg') }}" alt="" class="w-1/5 max-sm:w-full rounded-md">
        <img src="{{ asset('./kumis-delia/WhatsApp Image 2023-05-17 at 14.22.2x0.jpg') }}" alt="" class="w-1/5 max-sm:w-full rounded-md">
        <img src="{{ asset('./kumis-delia/WhatsApp Image 2023-05-17 at 14.22.20.jpg') }}" alt="" class="w-1/5 max-sm:w-full rounded-md">
        <img src="{{ asset('./kumis-delia/WhatsApp Image 2023-05-17 at 14.22.19.jpg') }}" alt="" class="w-1/5 max-sm:w-full rounded-md">
      </div>
    </div>
    <div class="w-screen pt-12 pb-12 mt-3 flex flex-col items-center bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('./kumis-delia/bg kd 1.png') }}')">
      <img src="{{ asset('./kumis-delia/kd std.png') }}" alt="" class="h-24 max-sm:h-16 mb-2">
      <div class="flex gap-4 pt-3 mb-6">
        <div class="border-r-2 border-white pr-8 pl-4 max-sm:pr-4 max-sm:pl-0 text-white text-lg" style="font-family: 'ArnoPro', serif;">
          <p id="days" class="font-semibold text-8xl max-sm:text-5xl"></p>
          <p class="text-2xl max-sm:text-xl text-center">Days</p>
        </div>
        <div class="border-r-2 border-white pr-8 pl-4 max-sm:pr-4 max-sm:pl-0 text-white text-lg" style="font-family: 'ArnoPro', serif;">
          <p id="hours" class="font-semibold text-8xl max-sm:text-5xl"></p>
          <p class="text-2xl max-sm:text-xl text-center">Hours</p>
        </div>
        <div class="border-r-2 border-white pr-8 pl-4 max-sm:pr-4 max-sm:pl-0 text-white text-lg" style="font-family: 'ArnoPro', serif;">
          <p id="minutes" class="font-semibold text-8xl max-sm:text-5xl"></p>
          <p class="text-2xl max-sm:text-xl text-center">Minutes</p>
        </div>
        <div class=" text-white text-lg" style="font-family: 'ArnoPro', serif;">
          <p id="seconds" class="font-semibold text-8xl max-sm:text-5xl"></p>
          <p class="text-2xl max-sm:text-xl text-center">Seconds</p>
        </div>
      </div>
      {{-- <div class="pt-12 pb-12 w-screen flex flex-col items-center justify-center"> --}}
        <form action="{{ route('kd-post-comment') }}" method="POST" class="w-1/2 max-sm:w-full mt-12 py-dewa flex flex-col items-center justify-center gap-3">
          @csrf
          <p class="text-5xl max-sm:text-3xl text-center font-normal mb-2 text-white" style="font-family: 'ArnoPro', serif;">UCAPAN & DOA</p>
          <input name="nama" type="text" class="w-4/5 rounded-lg pl-4 py-2 bg-slate-200/75 text-slate-900 placeholder-slate-700 border-2 border-teal-900 font-semibold" placeholder="Nama" value="{{ $nama }}" readonly>
          <input name="ucapan" type="text" class="w-4/5 rounded-lg pl-4 py-2 bg-slate-200/75 text-slate-900 placeholder-slate-700 border-2 border-teal-900" placeholder="Ucapan & Doa" required>
          <button type="submit" class="w-fit px-4 py-2 bg-gradient-to-b from-emerald-900 to-teal-900 rounded-md flex items-center gap-3 text-white font-semibold text-lg border-2 border-transparent hover:border-2 hover:border-yellow-600 hover:bg-gradient-to-t" style="font-family: 'Poppins', sans-serif;">
            <i class="fas fa-paper-plane text-xl"></i>
            <p class="">Kirim</p>
          </button>
        </form>
        <p class="font-semibold text-xl text-center mt-8 mb-3 text-slate-200">Ucapan Terbaru</p>
        <div class="w-1/2 max-sm:w-full flex justify-center">
          <div class="w-4/5 px-3 py-3 h-fit max-h-72 flex flex-col gap-3 overflow-scroll bg-transparent rounded-md">
            @foreach ($comments as $item)
                <div class="w-full bg-white shadow-md rounded-md border px-3 py-2">
                  <div class="w-full h-fit flex justify-between">
                    <p class="font-semibold">{{ $item->nama }}</p>
                    {{-- <p class="text-slate-600">{{ $item->created_at }}</p> --}}
                  </div>
                  <p class="">{{{ $item->ucapan }}}</p>
                </div>
            @endforeach
          </div>
        </div>
      {{-- </div> --}}
    </div>
    <div id="share-love" class="flex flex-col items-center pt-14 pb-28 justify-center w-screen bg-cover text-white" style="background-image: url('{{ asset('./kumis-delia/bg kd 14.png') }}')">
      <h1 class="text-7xl max-sm:text-5xl mb-2" style="font-family: 'Bellasya', serif;">Share Love</h1>
      <p class="w-1/2 max-sm:w-full max-sm:px-12 text-center text-white text-lg max-sm:text-sm" style="font-family: 'ArnoPro', serif;">Your prayers & lessin at our wedding is nough as a gift, but if you want to give more, we are happy to recieve it and it will complement our happines even more</p>
      <div class="w-3/4 flex gap-6 justify-center items-center mt-4 max-sm:border-t-2 max-sm:border-white max-sm:pt-4">
        <img src="{{ asset('./kumis-delia/kd bca.png') }}" alt="" class="h-16 max-sm:h-10">
        <div class="text-white" style="font-family: 'ArnoPro', serif;">
          <p class="text-2xl max-sm:text-sm text-center">Muhammad Ramadhan</p>
          <p class="text-5xl max-sm:text-xl">6820921231</p>
        </div>
      </div>
    </div>
    <div class="w-full bg-white flex flex-col items-center justify-center gap-6" style="background-color: #F8F5F2;">
      <p class="w-1/3 max-sm:w-full max-sm:px-8 text-center text-teal-900 font-medium text-lg max-sm:text-sm" style="font-family: 'ArnoPro', serif;">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i dapat berkenan hadir dan memberikan do'a restu</p>
      <img src="{{ asset('./kumis-delia/kd dark.png') }}" alt="" class="h-56 mt02">
      <div class="flex flex-col items-center gap-4 mt-5 pb-8">
        <img src="{{ asset('./kumis-delia/Logo Cendana gelap.png') }}" alt="" class="h-32 max-sm:h-16 mt-2">
        <div class="flex gap-2">
          <a href="" class="w-8 h-8 max-sm:w-6 max-sm:h-6 flex items-center justify-center rounded-md bg-teal-800"><i class="text-lg max-sm:text-md fab fa-instagram text-white"></i></a>
          <a href="" class="w-8 h-8 max-sm:w-6 max-sm:h-6 flex items-center justify-center rounded-md bg-teal-800"><i class="text-lg max-sm:text-md fab fa-tiktok text-white"></i></a>
          <a href="" class="w-8 h-8 max-sm:w-6 max-sm:h-6 flex items-center justify-center rounded-md bg-teal-800"><i class="text-lg max-sm:text-md fab fa-facebook-f text-white"></i></a>
          <a href="" class="w-8 h-8 max-sm:w-6 max-sm:h-6 flex items-center justify-center rounded-md bg-teal-800"><i class="text-lg max-sm:text-md fab fa-pinterest-p text-white"></i></a>
        </div>
      </div>
    </div>
    <div class="w-full h-fit py-4 flex justify-center" style="background-color: #F8F5F2;">
      <p class="text-slate-600 max-sm:text-sm">Copyright © 2023 undanginaku. All rights reserved </p>
    </div>
  </div>
  <audio id="song" loop>
    <source src="{{ asset('./kumis-delia/Arms_of_Heaven.mp3') }}"
    type="audio/mp3">
  </audio>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      var targetDate = new Date("May 28, 2023 00:00:00").getTime();

      var countdown = setInterval(function() {
          var now = new Date().getTime();
          var distance = targetDate - now;

          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          document.querySelector('#days').innerHTML = days;
          document.querySelector('#hours').innerHTML = hours;
          document.querySelector('#minutes').innerHTML = minutes;
          document.querySelector('#seconds').innerHTML = seconds;

          if (distance < 0) {
              clearInterval(countdown);
              document.getElementById("timer").innerHTML = "Countdown selesai";
          }
      }, 1000);

    document.addEventListener('DOMContentLoaded', function() {
    document.body.style.overflow = 'hidden';
    });

    document.addEventListener('DOMContentLoaded', function() {
      var button = document.getElementById('open');

      button.addEventListener('click', function() {
          document.body.style.overflow = '';
          document.querySelector('#song').play();
      });
    });

    document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('open');
    var wrapper = document.getElementById('opening-page');

    button.addEventListener('click', function() {
        wrapper.classList.add('fade-out');
        setTimeout(function() {
            wrapper.style.display = 'none';
        }, 1000);
      });
    });

    document.addEventListener('DOMContentLoaded', function() {
      window.scrollTo(0, 0);
    });
  </script>
</body>
</html>