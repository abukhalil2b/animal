<div>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'admin.animal.delete')" class="text-xs">
        حذف
    </x-danger-button>

    <x-modal name="admin.animal.delete" :show="$errors->isNotEmpty()" focusable>

        <form action="{{ route('admin.animal.delete',$animal->id) }}" method="POST" class="p-1">
            @csrf

            <div class="p-5 text-white w-full bg-[{{ $animal->color }}]"> {{ $animal->number }}</div>

            <div class="mt-2 h-32 p-3 flex justify-between items-center">
                <x-danger-button class="text-xs">
                    تأكيد الحذف
                </x-danger-button>
                <x-secondary-button class="text-xs" x-on:click.prevent="show = false">
                    لا
                </x-secondary-button>
            </div>

        </form>

    </x-modal>
</div>