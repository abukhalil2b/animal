<div class="p-1 mt-2 border rounded border-black">
    <div>
        قائمة الأبناء
    </div>

    @foreach($sons as $son)

    <div class="mt-1 p-2 text-white bg-[{{ $son->color }}] w-full">
        <div>
            number:{{ $son->number }}
        </div>

        <div>
            gender:{{ $son->gender }}
        </div>

        <div>
            date of birth:{{ $son->dob }}
        </div>

        <div>
            note:{{ $son->note }}
        </div>

        @if(auth()->user()->user_type == 'admin')
        <div class="mt-2 border rounded p-1 w-16 text-center">
            <a href="{{ route('admin.animal.show',$son->id) }}">show</a>
        </div>
        @endif

    </div>

    @endforeach
</div>