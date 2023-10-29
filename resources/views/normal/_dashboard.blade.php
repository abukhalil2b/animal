<div class="p-6 text-gray-900">
animals
</div>

@foreach($animals as $animal)
<div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <a href="{{ route('normal.animal.show',$animal->id) }}">
        <div class="p-6 text-gray-900 bg-[{{ $animal->color }}]">
            {{ $animal->number }}
        </div>
    </a>
</div>
@endforeach