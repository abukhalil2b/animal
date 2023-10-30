<x-app-layout>


    <div class="p-3">
<div>
               users
            </div>
        <div class="p-1 mt-4 border rounded border-black">
            

            @foreach($users as $user)

            <div class="mt-1 p-2 w-full border">
                {{ $user->email }}
            </div>

            @endforeach
        </div>


    </div>


</x-app-layout>