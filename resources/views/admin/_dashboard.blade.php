@include('inc.admin.animal._modal_create')

<div class="p-6 text-gray-900">
    animals
</div>


@foreach($animals as $animal)
<div class="mt-3  overflow-hidden shadow-sm sm:rounded-lg">
    <a href="{{ route('admin.animal.show',$animal->id) }}" class="p-2 bg-[{{ $animal->color }}] {{ $animal->color != '#fff' ? 'text-white' : 'text-black' }} flex w-full">
        {{ $animal->number }}
    </a>
</div>
@endforeach