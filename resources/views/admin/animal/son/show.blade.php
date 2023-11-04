<x-app-layout>

    <div class="p-3">

        <div class="mt-2 flex justify-center gap-10">

            @include('inc.admin.animal._modal_delete')
            @include('inc.admin.animal._modal_update')

        </div>

        <div class="mt-4 p-5 w-full bg-[{{ $animal->color }}] {{ $animal->color != '#fff' ? 'text-white' : '' }}">

            <div class="text-xl">number: {{ $animal->number }}</div>

            <div>gender: {{ $animal->gender }}</div>

            <div>note: {{ $animal->note }}</div>

            <div> date of birth:{{ $animal->dob }}</div>

        </div>

    </div>


</x-app-layout>