<div class="flex w-full text-gray-100 shadow-lg bg-gradient-to-r from-white to-green-600">
    <div class="md:flex-shrink-0">
        <img class="border opacity-40" src="https://liquipedia.net/commons/images/9/9c/BWCL_logo.png" alt="">
    </div>
    <div class="flex items-end justify-between w-full">
        <div class="flex items-end w-full px-4 mb-1 space-x-6 text-sm font-bold text-gray-600 uppercase">
            <a href="#">Home</a>
            <a href="#">Leagues</a>

            @guest
                <div>
                    <a href="{{ route('login') }}" class="">Login</a>
                </div>
                <div>
                    <a href="{{ route('register') }}" class="">Register</a>
                </div>
            @endguest
            {{-- AUTH --}}
            @auth
                <div class="flex justify-end w-full space-x-6 font-semibold text-gray-300">
                    <div class="">
                        <a href="{{ route('profile.index', Auth::user()) }}"
                            class="text-sm border-t hover:border-gray-800">Your Profile</a>
                    </div>

                    <form class="mb-0" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="font-semibold uppercase border-b hover:border-gray-800">Logout</button>
                    </form>
                </div>
            @endauth

        </div>

        {{-- <x-header.last-winner-card /> --}}

    </div>

</div>
