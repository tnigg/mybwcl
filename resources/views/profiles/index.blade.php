@auth
    @if ($currentUser->id != Auth::id())
        Show public profile for logged in user
    @else
        LETSE GOO
    @endif
@endauth
@guest
    Show public profile for guests
@endguest
