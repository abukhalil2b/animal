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

    </div>

    @endforeach
</div>