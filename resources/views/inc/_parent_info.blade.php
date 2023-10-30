<div class="mt-2 p-1 border rounded border-black">
    <div class="p-5 text-white w-full bg-[{{ $animal->color }}]">
        <div class="text-xl">number: {{ $animal->number }}</div>
        <div>gender: {{ $animal->gender }}</div>
        <div>note: {{ $animal->note }}</div>
    </div>

    <div>
        female sons: {{ count($femaleSons) }}
    </div>

    <div class="mt-4">
        male sons: {{ count($maleSons) }}
    </div>


    <div class="mt-4">
       total sons: {{ count($maleSons) + count($femaleSons) }}
    </div>

</div>