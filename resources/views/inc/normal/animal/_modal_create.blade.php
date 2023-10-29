<div>

    <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'normal.create.animal')" class="text-xs">
        + جديد
    </x-primary-button>


    <x-modal name="normal.create.animal" :show="$errors->isNotEmpty()" focusable>

        <form action="{{ route('normal.animal.store') }}" method="POST" class="p-1">
            @csrf

            <div class="p-3">

                <div class="mt-4">
                    تاريخ الميلاد
                </div>
                <input class="input" name="dob" type="date">

                <div x-data="{ gender:'female' }" class="mt-4 flex gap-2">
                    <div class="option w-12" :class=" gender == 'male' ? 'option-selected' : '' " @click="gender='male' "> {{ __('male') }} </div>
                    <div class="option w-12" :class=" gender == 'female' ? 'option-selected' : '' " @click="gender='female' "> {{ __('female') }}</div>
                    <input type="hidden" name="gender" x-model="gender">
                </div>

                <div class="mt-4">
                    الرقم
                </div>
                <input class="input" name="number" type="number">


                <div class="mt-4">
                    اللون
                </div>
                <div x-data="{ color:'' }">
                    <div class="flex gap-3 flex-wrap">
                        <div>
                            <div @click="color = '#000' " class="colorBox bg-[#000]" :class="color != '#000'? 'opacity-10' : '' "></div>
                            black
                        </div>
                        <div>
                            <div @click="color = '#f00' " class="colorBox bg-[#f00]" :class="color != '#f00'? 'opacity-10' : '' "></div>
                            red
                        </div>
                        <div>
                            <div @click="color = '#00f' " class="colorBox bg-[#00f]" :class="color != '#00f'? 'opacity-10' : '' "></div>
                            blue
                        </div>
                        <div>
                            <div @click="color = '#ff0' " class="colorBox bg-[#ff0]" :class="color != '#ff0'? 'opacity-10' : '' "></div>
                            yellow
                        </div>
                        <div>
                            <div @click="color = '#199' " class="colorBox bg-[#199]" :class="color != '#199'? 'opacity-10' : '' "></div>
                            green
                        </div>
                    </div>
                    <input type="hidden" name="color" x-model="color">
                </div>

                <div class="mt-4">
                    ملحوظة
                </div>
                <input class="input" name="note">

                <input type="hidden" name="parent_id" value="{{ $animal->id }}">

                <button class="btn-secondary mt-4 h-10 w-full">
                    حفظ
                </button>

            </div>

        </form>

    </x-modal>
</div>