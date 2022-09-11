<div x-data="{ open: false }"
    class="sidebar md:col-span-1 bg-white shadow-2xl text-black w-64 space-y-6 py-3 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

    <!-- logo -->
    <div class=" flex items-center justify-between space-x-2 px-2 text-green-700">

        <span class="text-lg font-medium">User Dashboard</span>
        <button onclick="window.history.back();" class="btn btn-warning ms-1 btn-sm" data-toggle="tooltip" title="back"><i
                class="fas fa-reply"></i> Back</button>
    </div>

    <!-- nav -->
    <nav>
        {{-- <a href="/"
        class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
        <i class="fas fa-home" aria-hidden="true"></i> <span>Home</span>
     </a> --}}
        <a href="/dashboard"
            class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-home" aria-hidden="true"></i> <span>Dashboard</span>
        </a>
        <a href="{{setting('telegram_url')}}" 
            class="flex space-x-1  py-2 px-1 font-semibold rounded transition duration-200 hover:bg-blue-700 hover:text-white">
            <?php
            echo '<?xml version="1.0" encoding="utf-8"?>';
            ?>
            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg
                width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <path id="telegram-1"
                    d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" />
            </svg> <span>Join us on Telegram</span>
        </a>
        <a href="/live"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-tv" aria-hidden="true"></i> <span>Livebet 247</span>
        </a>
        {{-- <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}"
        class="font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
        <i class="fas fa-user" aria-hidden="true"></i> <span>Profile</span>
      </a> --}}
        <a href="{{ route('frontend.users.payment') }}"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-credit-card-alt" aria-hidden="true"></i> <span>Make Payment</span>
        </a>
        <a href="/predictions"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fa fa-futbol-o" aria-hidden="true"></i> <span>Football Tips</span>
        </a>
        <a href="/basketball"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-basketball-ball" aria-hidden="true"></i> <span>Basketball Tips</span>
        </a>
        <a href="/tennis"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-table-tennis-paddle-ball" aria-hidden="true"></i> <span>Tennis Tips</span>
        </a>
        <a href="/ice-hockey"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-hockey-puck" aria-hidden="true"></i> <span>Ice Hockey Tips</span>
        </a>
        <a href="/boxing"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-dumbbell" aria-hidden="true"></i> <span>Boxing Tips</span>
        </a>
        <a href="/predictions"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-trophy" aria-hidden="true"></i> <span>Rollover Tips</span>
        </a>

        <div class="h-6 border-y w-full bg-transparent">

        </div>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-red-700 hover:text-white">
            <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
        </a>

    </nav>
</div>
