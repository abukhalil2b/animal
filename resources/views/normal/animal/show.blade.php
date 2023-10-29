<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $animal->number }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @include('inc.normal.animal._modal_create')

        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="h-4 w-full bg-[{{ $animal->color }}]"></div>

            <div>
                femaleSons: {{ count($femaleSons) }}
            </div>

            <div class="mt-4">
                maleSons: {{ count($maleSons) }}
            </div>


            <div class="mt-4">
                total: {{ count($maleSons) + count($femaleSons) }}
            </div>

            <div class="mt-4">
                sons
            </div>
            @foreach($sons as $son)
            <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-white bg-[{{ $son->color }}] w-full">
                    {{ $son->number }}
                </div>
            </div>
            @endforeach

        </div>
    </div>
</x-app-layout>