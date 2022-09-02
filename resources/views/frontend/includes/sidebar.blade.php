<div
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
        <a href="/vip-posts"
            class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
            <i class="fas fa-crown" aria-hidden="true"></i> <span>VIP Section</span>
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
