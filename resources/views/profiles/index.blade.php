@extends('layouts.profile')

@section('content')
    @auth
        @if ($currentUser->id != Auth::id())
            Show public profile for logged in user
        @else
            <div class="flex">
                <div class="w-1/4">
                    <x-profiles.left-frame />
                </div>
                <div class="flex-1">
                    <div>
                        <x-profiles.next-match-header />
                    </div>

                    <div class="flex justify-between px-4 py-4">
                        <div>
                            <x-profiles.team-roster-list />
                        </div>
                        <div>Last Results</div>
                    </div>
                </div>

            </div>
        @endif
    @endauth
    @guest
        Show public profile for guests
    @endguest

@endsection
