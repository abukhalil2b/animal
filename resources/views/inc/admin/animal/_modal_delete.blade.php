<div>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'admin.animal.delete')" class="text-xs">
        حذف
    </x-danger-button>

    <x-modal name="admin.animal.delete" :show="$errors->isNotEmpty()" focusable>

        <form action="{{ route('admin.animal.delete',$animal->id) }}" method="POST" class="p-1">
            @csrf

            <div class="h-32 p-3 flex flex-col justify-between items-center">
            {{ $animal->number }}
                <div class="h-4 w-full bg-[{{ $animal->color }}]">
                   
                </div>
                <x-danger-button class="text-xs">
                    تأكيد الحذف
                </x-danger-button>

            </div>

        </form>

    </x-modal>
</div>