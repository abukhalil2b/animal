<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $animal->number }}
        </h2>
    </x-slot>


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
        </div>

        <div class="mt-5 flex justify-center gap-10">
            @include('inc.admin.animal._modal_delete')
            <x-secondary-button>
                تعديل
            </x-secondary-button>
        </div>
    </div>


</x-app-layout>