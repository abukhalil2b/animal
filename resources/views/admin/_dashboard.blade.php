@include('inc.admin.animal._modal_create')

<div class="p-6 text-gray-900">
    animals
</div>


@foreach($animals as $animal)
<div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <a href="{{ route('admin.animal.show',$animal->id) }}" class="p-2 text-white bg-[{{ $animal->color }}] flex w-full">
        {{ $animal->number }}
    </a>
</div>
@endforeach