<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <script src="{{ asset('js/aos.js') }}"></script>
  <title>Izza - Chandra</title>

  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('{{ asset('./izza-chandra/fonts/poppins/Poppins-Regular.otf') }}') format('opentype');
      /* Add additional font formats if needed */
    }

    @font-face {
      font-family: 'Poppins-B';
      src: url('{{ asset('./izza-chandra/fonts/poppins/Poppins-Bold.otf') }}') format('opentype');
      /* Add additional font formats if needed */
    }

    @font-face {
      font-family: 'Poppins-EB';
      src: url('{{ asset('./izza-chandra/fonts/poppins/Poppins-ExtraBold.otf') }}') format('opentype');
      /* Add additional font formats if needed */
    }

    @font-face {
      font-family: 'Rachel';
      src: url('{{ asset('./izza-chandra/fonts/Rachel-Font/Rachel.otf') }}') format('opentype');
      /* Add additional font formats if needed */
    }

    #container {
      transition: bottom 0.3s ease; /* Add CSS transition */
    }

    .fade-out {
    opacity: 0;
    transition: opacity 1.5s ease;
  }

  </style>
</head>
<body class="relative">
  {{-- Opening Page --}}
  <div
    id="opening-page"
    style="background-image: url({{ asset('./izza-chandra/undangan/bg-cover.svg') }})"
    class="h-screen w-full z-50 fixed bg-[#FEFEFE] flex justify-center items-center bg-cover bg-center bg-no-repeat">
    <div class="flex flex-col items-center text-[#5c2a1f] gap-2.5">
      <img 
      src="{{ asset('./izza-chandra/undangan/logo-IC.svg') }}" 
      alt="IC-logo"
      class="w-36">
      <p class="font-semibold font-[Poppins] text-xl tracking-wider">The Wedding Of</p>
      <p class="font-[Rachel] text-6xl">IZZA & CHANDRA</p>
      <p class="font-semibold font-[Poppins] text-xl tracking-wider">Dear:</p>
      <p class="font-semibold font-[Poppins] text-2xl tracking-wider">Muhammad Arif H, Phd</p>
      <button id="open" class="flex items-center gap-2 w-fit px-2.5 py-2 rounded-[4px] bg-[#5c2a1f] hover:bg-[#5c2a1fe8] hover:shadow-lg hover:shadow-[#5c2a1fc1] transition ease-in-out duration-300">
        <img src="{{ asset('./izza-chandra/undangan/icon-amplop-open.svg') }}" alt="" class="w-6">
        <p class="text-md text-white font-[Poppins] font-medium tracking-wide">OPEN INVITATION</p>
      </button>
    </div>
  </div>

  {{-- Container Start --}}
  <div 
    id="container"
    class="w-full flex h-[100%] relative overflow-y-auto justify-end">
    {{-- Desktop Start--}}
    <div 
      id="desktop" 
      style="background-image: url({{ asset('./izza-chandra/undangan/bg-dt-cover.svg') }}); position: fixed;"
      class="max-sm:hidden w-[70%] -z-10 left-0 pb-6 flex justify-center items-end h-screen bg-cover bg-center bg-no-repeat">
      <div class="flex flex-col items-center text-[#5c2a1f] gap-2.5">
        <img 
        src="{{ asset('./izza-chandra/undangan/logo-IC.svg') }}" 
        alt="IC-logo"
        class="w-56">
        <p class="font-semibold font-[Poppins] text-xl tracking-wider">The Wedding Of</p>
        <p class="font-[Rachel] text-6xl">IZZA & CHANDRA</p>
        <p class="font-semibold font-[Poppins] text-2xl tracking-wider">13 . 8 . 23</p>
      </div>
    </div>
    {{-- Desktop End --}}

    {{-- Mobile Start --}}
    <div id="mobile" class="max-sm:w-[100%] w-[30%]">

      {{-- Page 1 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-1.svg') }})"
        class="w-full h-screen flex items-center justify-center pb-20 bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col items-center text-[#5c2a1f] gap-2.5">
          <img 
          data-aos="zoom-in"
          src="{{ asset('./izza-chandra/undangan/logo-IC.svg') }}" 
          alt="IC-logo"
          class="w-48 mb-4">
          <p class="font-semibold font-[Poppins] tracking-wider">The Wedding Of</p>
          <p data-aos="fade-up"
          class="font-[Rachel] text-4xl">IZZA & CHANDRA</p>
          <p data-aos="fade-up" class="font-semibold font-[Poppins] text-lg tracking-wider">13 . 8 . 23</p>
        </div>
      </div>

      {{-- Page 2 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-2.svg') }})"
        class="w-full h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col items-center text-[#5c2a1f] font-[600] gap-5 italic font-[Poppins] text-[11px]" data-aos="fade-up">
          <p class="tracking-wider w-11/12 text-center leading-5">And of His signs is that He created for you from yourselves mates that you may find tranquility in them; and He placed between you affection and mercy. Indeed, in that are signs for a people who give thought</p>
          <p class="">QS. Ar-Rum 21</p>
        </div>
      </div>

      {{-- Page 3 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-3.svg') }})"
        class="w-full h-screen flex flex-col items-center relative justify-center text-[#5c2a1f] bg-cover bg-center bg-no-repeat">
        <div class="w-full flex flex-col gap-3">
          <div class="w-full flex flex-col items-center">
            <p data-aos="fade-left" class="font-[Rachel] text-center text-4xl">Izzalu Anisa</p>
            <p
            data-aos="zoom-in"
            data-aos-delay="300" 
            class="font-semibold text-center font-[Poppins] text-[11px]">Putri dari Bapak Muhammad Mulyawan dan Ibu Elis Maryati</p>
            <p
            data-aos="zoom-in"
            data-aos-delay="300" 
            class="font-semibold text-center font-[Poppins] text-[11px]">Kp. Bojongloa 01/01 No.32, Kec. Rancaekek, <br>Kab. Bandung, Jawa Barat</p>
          </div>
          <div class="w-full flex gap-8 items-center justify-center">
            <a data-aos="fade-right" href="https://instagram.com/izzatuanisa?igshid=NTc4MTIwNjQ2YQ==" 
            class="">
              <img 
              src="{{ asset('./izza-chandra/undangan/instagram.svg') }}" 
              alt="Izza instagram" 
              class="w-8 text-white">
            </a>
            <p
            data-aos="zoom-in"
            data-aos-delay="300" 
            class="font-[Rachel] text-7xl">&</p>
            <a data-aos="fade-left" href="https://instagram.com/izzatuanisa?igshid=NTc4MTIwNjQ2YQ==" 
            class="">
              <img 
              src="{{ asset('./izza-chandra/undangan/instagram.svg') }}" 
              alt="Izza instagram" 
              class="w-8 text-white">
            </a>
          </div>
          <div class="w-full flex flex-col gap-0.5 items-center">
            <p data-aos="fade-right" class="font-[Rachel] text-center text-4xl">Chandra Ardhilama</p>
            <p
            data-aos="zoom-in"
            class="font-semibold text-center font-[Poppins] text-[11px]">Putra dari Bapak Heri Susanto dan Ibu Rochmatul Azizah</p>
            <p
            data-aos="zoom-in"
            class="font-semibold font-[Poppins] text-[11px] text-center">Galuh Mas Blok 2 A5 No.5, Teluk Jambe Timur,<br>Karawang Barat, Jawa Barat</p>
          </div>
        </div>

        <div data-aos="fade-up" class="w-full absolute bottom-0 flex justify-center py-6 px-5 bg-[#00000048] mt-5">
          <p class="font-extrabold text-white font-[Poppins-B] text-[11px] text-center">
            Untuk melaksanakan syariat agama-Mu,
            mengikuti sunnah rasul-Mu dalam membentuk
            keluarga yang Sakinah, Mawaddah, Warahmah
            yang Insya Allah akan diselenggarakan pada hari:
          </p>
        </div>
      </div>

      {{-- Page 4 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-4.svg') }})"
        class="w-full h-fit flex items-center py-6 justify-center bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col items-center text-[#5c2a1f] gap-2">
          <div class="flex flex-col items-center">
            <img 
            data-aos="flip-up"
            src="{{ asset('./izza-chandra/undangan/icon-hari-atas.svg') }}" 
            alt="icon hari atas" 
            class="w-36">
            <h1 class="text-2xl font-[Poppins-EB] mt-2 text-center">AHAD</h1>
            <p class="text-md font-[Poppins] text-center">13 Agustus 2023</p>
            <img 
            data-aos="flip-down"
            src="{{ asset('./izza-chandra/undangan/icon-hari-bawah.svg') }}" 
            alt="icon hari atas" 
            class="w-36">
            <h1 
            data-aos="zoom-in"
            class="text-3xl font-[900] font-[Poppins] mt-4 text-center">AKAD CEREMONY</h1>
            <p class="text-md font-[Poppins] text-center">Pukul : 08.00 - Selesai</p>
            <h1 
            data-aos="zoom-in"
            class="text-3xl font-[900] font-[Poppins] mt-4 text-center">RECEPTION</h1>
            <p class="text-md font-[Poppins] text-center">Pukul : 11.00 - Selesai</p>
            <p class="text-sm font-[Poppins-B] text-center">Gedung Anwar Musaddad UIN Bandung</p>
            <a 
            href="https://goo.gl/maps/tzCoVJjNqLRnQxDy5" 
            target="blank"
            class="mt-3 flex items-center gap-2 w-fit px-2.5 py-2 rounded-[4px] bg-[#5c2a1f] hover:bg-[#5c2a1fe8] hover:shadow-lg hover:shadow-[#5c2a1fc1] transition ease-in-out duration-300">
              {{-- <img src="{{ asset('./izza-chandra/icon-maps.svg') }}" alt="" class="w-6"> --}}
              <i class="fas fa-map-marker-alt" style="color: #ffffff;"></i>
              <p class="text-sm text-white font-[Poppins] font-medium tracking-wide">GOOGLE MAPS</p>
            </a>
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.656069257826!2d107.7156878!3d-6.9316476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c329ad7a4113%3A0x843e4f57cf8a4979!2sAuditorium%20Anwar%20Musaddad%20UIN%20SGD%20Bandung!5e0!3m2!1sid!2sid!4v1687091151580!5m2!1sid!2sid" 
            height="350" 
            style="border:5;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="w-11/12 mt-4 rounded-lg border-slate-400"></iframe>
          </div>
        </div>
      </div>

      {{-- Page 5 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-5.svg') }})"
        class="w-full h-screen flex py-4 flex-col items-center relative justify-between text-[#5c2a1f] bg-cover bg-center bg-no-repeat">
        <div class="w-11/12">
          <p class="text-lg text-center font-[900] font-[Poppins]">WEDDING SCHEDULE</p>
          <div 
          style="background-image: url({{ asset('./izza-chandra/undangan/bg-schedule.svg') }})"
          class="w-full mt-2 px-4 py-4 rounded-xl flex flex-col items-center bg-cover bg-center bg-no-repeat">
            <img 
              src="{{ asset('./izza-chandra/undangan/logo-IC.svg') }}" 
              alt="" 
              class="w-36 my-4">
            <div class="w-11/12 grid grid-cols-4 gap-2 text-white">
              <div
              data-aos="flip-right"
              data-aos-duration="900" 
              class="w-full h-fit py-3 bg-[#99817b] flex flex-col items-center justify-center">
                <h1 id="days" class="text-3xl font-semibold font-[Poppins]"></h1>
                <p class="font-[Poppins] text-xs">Days</p>
              </div>
              <div
              data-aos="flip-right"
              data-aos-duration="900" 
              class="w-full h-fit py-3 bg-[#99817b] flex flex-col items-center justify-center">
                <h1 id="hours" class="text-3xl font-semibold font-[Poppins]"></h1>
                <p class="font-[Poppins] text-xs">Hours</p>
              </div>
              <div
              data-aos="flip-right"
              data-aos-duration="900" 
              class="w-full h-fit py-3 bg-[#99817b] flex flex-col items-center justify-center">
                <h1 id="minutes" class="text-3xl font-semibold font-[Poppins]"></h1>
                <p class="font-[Poppins] text-xs">Minutes</p>
              </div>
              <div
              data-aos="flip-right"
              data-aos-duration="900" 
              class="w-full h-fit py-3 bg-[#99817b] flex flex-col items-center justify-center">
                <h1 id="seconds" class="text-3xl font-semibold font-[Poppins]"></h1>
                <p class="font-[Poppins] text-xs">Seconds</p>
              </div>
            </div>
          </div>
        </div>

        <div class="font-[Poppins] w-full flex flex-col items-center">
          <h1 class="text-center text-3xl font-extrabold">RSVP</h1>
          <p class="text-center text-xs">Please confirm your attendance in the form below</p>
          <form 
            action="" 
            method="POST" 
            class="w-full px-4 mt-3 text-white overflow-x-hidden">
            <label for="name" 
            class="text-xs text-[#534441]">Name</label>
            <input
              name="name" 
              type="text" 
              autocomplete="off"
              class="text-sm w-full py-1.5 px-2 rounded-md bg-[#99817b]">
            <label for="confirmation" 
            class="text-xs text-[#534441]">Atendance Confirmation</label>
            <div
            class="w-full px-2 rounded-md bg-[#99817b]">
              <select 
                name="confirmation" 
                id="confirmation" 
                class="text-sm w-full py-0.5 bg-[#99817b] focus:outline-none cursor-pointer">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <label for="guest" 
            class="text-xs text-[#534441]">Guest</label>
            <div
            class="text-sm w-full px-2 rounded-md bg-[#99817b]">
              <select 
                name="guest" 
                id="guest" 
                class="w-full py-0.5 rounded-md bg-[#99817b] focus:outline-none cursor-pointer">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </form>
        </div>
      </div>

      {{-- Page 6 --}}
      <div 
        style="background-image: url({{ asset('./izza-chandra/undangan/bg-mb-6.svg') }})"
        class="w-full h-screen flex py-4 flex-col items-center relative justify-start text-[#5c2a1f] bg-cover bg-center bg-no-repeat">
        <h1 class="text-cener text-2xl font-[Poppins] font-extrabold">PRAYERS AND GREETING</h1>
        <p class="text-center text-xs font-[Poppins]">Give prayers and greeting to the bride and groom</p>
        <form 
          action="{{ route('ic-post-comment') }}" 
          method="post" 
          class="w-full px-4 mt-3 text-white flex flex-col items-center">
          @csrf
          <label for="name" 
          class="text-xs text-start w-full text-[#534441] font-[Poppins]">Name</label>
          <input 
            name="name" 
            type="text"
            autocomplete="off"
            class="text-sm w-full py-1.5 px-2 rounded-md bg-[#99817b]">
          <label for="name" 
          class="text-xs text-start w-full text-[#534441] mt-2 font-[Poppins]">Prayers and Greetings</label>
          {{-- <textarea 
            name="message" 
            type="text" 
            class="w-full py-1 px-2 rounded-md bg-[#99817b] h-10 max-h-24"></textarea> --}}
          <input 
            name="message" 
            type="text"
            autocomplete="off"
            class="text-sm w-full py-1.5 px-2 rounded-md bg-[#99817b]">
          <button type="submit"
          class="mt-3 flex items-center gap-2 w-fit px-5 py-2 rounded-[4px] bg-[#5c2a1f] hover:bg-[#5c2a1fe8] hover:shadow-lg hover:shadow-[#5c2a1fc1] transition ease-in-out duration-300">
            <i class="fas fa-paper-plane text-white" style="transform: scaleX(-1);"></i>
            <p class="text-sm text-white font-[Poppins] font-medium tracking-wide">SEND</p>
          </button>
        </form>
        @if (count($comments) == 0)

        @else
        <div class="w-full px-4 mt-3 mb-2">
          <div class="w-full h-fit bg-[#99817b] flex flex-col rounded-md px-3 py-2 max-h-44 overflow-y-scroll">

            @foreach ($comments as $comment)
            <div class="chat chat-start">
              <div class="chat-bubble text-[#5c2a1f] bg-white font-[Poppins] text-xs" style="transform: scaleY(-1)">
                <div class="" style="transform: scaleY(-1)">
                  <span class="w-full flex gap-2">
                    <i class="fas fa-user mr-1"></i>
                    <p class="text-xs font-extrabold line-clamp-1 w-full">{{ $comment->nama }}</p>
                  </span>
                  <p class="text-xs mt-1">{{ $comment->ucapan }}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        @endif
        <p class="text-[#5c2a1f] px-6 mt-2.5 leading-5 font-extrabold font-[Poppins-B] text-[11px] text-center">
          Merupakan suatu kehormatan dan kebahagiaan bagi kami
          apabila Bapak/Ibu/Saudara/i dapat berkenan hadir
          dan memberikan do'a restu
        </p>
        <p class="text-[#5c2a1f] mt-2 font-[Rachel] text-3xl">IZZA & CHANDRA</p>
      </div>

    </div>
    {{-- Mobile End --}}

  </div>
  {{-- Container End --}}

  <footer 
    id="footer"
    class="h-24 w-full">
    Footer
  </footer>

  <audio id="song" loop>
    <source src="{{ asset('./izza-chandra/music/Crystal-Snow.mp3') }}"
    type="audio/mp3">
  </audio>

  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    AOS.init({
      duration: "800"
    })

    let targetDate = new Date("August 13, 2023 00:00:00").getTime();

    let countdown = setInterval(function() {
      let now = new Date().getTime();
      let distance = targetDate - now;

      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      let day = document.querySelector('#days');
      let hour = document.querySelector('#hours');
      let minute = document.querySelector('#minutes');
      let second = document.querySelector('#seconds');
      
      day.innerHTML = days;
      hour.innerHTML = hours;
      minute.innerHTML = minutes;
      second.innerHTML = seconds;

      if (distance < 0) {
        day.innerHTML = "0";
        hour.innerHTML = "0";
        minute.innerHTML = "0";
        second.innerHTML = "0";
      }
    }, 1000);

    window.addEventListener('scroll', function() {
      let container = document.getElementById('container');
      let footer = document.getElementById('footer');
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

      if (scrollTop + window.innerHeight >= footer.offsetTop) {
        container.style.bottom = (scrollTop + window.innerHeight - footer.offsetTop) + 'px';
      } else {
        container.style.bottom = '0';
      }
    });

    document.addEventListener('DOMContentLoaded', function() {
      document.body.style.overflow = 'hidden';
      window.scrollTo(0, 0);

      let open = document.getElementById('open');
      let wrapper = document.getElementById('opening-page');

      open.addEventListener('click', function() {
        document.body.style.overflow = '';
        document.querySelector('#song').play();

        wrapper.classList.add('fade-out');
        setTimeout(function() {
            wrapper.style.display = 'none';
        }, 1000);
      });
    });
  </script>
</body>
</html>