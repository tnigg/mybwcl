<div class="px-8 pt-4 mx-auto mt-12 border border-green-700 sm:w-min ">
    <div class="max-w-xl mx-auto">
        <div class="bg-green-700">
            <h1 class="py-4 font-semibold text-center uppercase h1 text-green-50">Create a new Team</h1>
        </div>
        <div class="mt-4">
            {{-- FORM START --}}
            <form action="{{ route('teams.store') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="name" id="name" class="w-full" placeholder="Enter Teamname">
                    <pre class="px-1 text-sm italic text-gray-500">Max 16 characters.</pre>
                </div>

                {{-- SECOND ROW - CLANTAG AND CHOOSE GAME --}}
                <div class="flex w-full">
                    <div>
                        <input type="text" name="team_tag" class="w-full mt-4" placeholder="Enter Clantag ">
                        <pre class="px-1 text-sm italic text-gray-500">Max 6 characters.</pre>
                    </div>
                    <div class="self-center w-full text-gray-700 mt-7">
                        <div class="w-full text-right">
                            <span>Choose Game:</span>
                            <input type="checkbox" value="game_id" checked class="ml-2"><span
                                class="ml-1">Broodwar</span>
                            <pre class="px-1 mt-1 text-sm italic text-gray-500">Only Bw at the moment.</pre>
                        </div>
                    </div>
                </div>

                {{-- THIRD ROW - TEAMLOGO - CREATE BUTTON --}}
                <div class="flex">
                    <div class="mt-4 text-gray-700">
                        <h2>Upload Teamlogo</h2>
                        <input type="file" class="mt-1">
                        <pre class="px-1 text-sm italic text-gray-500">120x80. *jpeg, png, gif</pre>
                    </div>
                    <div class="w-full text-right mt-9">
                        <button type="submit" class="px-4 py-1 bg-green-500 border text-green-50 rounded-2xl">Create
                            Team
                            -></button>
                        <pre class="mt-2 text-sm italic text-gray-500">Add Players on the next page.</pre>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
