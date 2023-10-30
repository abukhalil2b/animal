<x-app-layout>

    <div class="py-3">

        <div class="mt-3 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-2 flex justify-center gap-10">

                @include('inc.admin.animal._modal_delete')
                @include('inc.admin.animal._modal_update')

            </div>

            @include('inc._parent_info')
            @include('inc.normal.animal._modal_create')
            @include('inc._sons_info')



        </div>


    </div>


</x-app-layout>