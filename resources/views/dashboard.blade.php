<x-app-layout>

    <!-- admin -->
    @if(auth()->user()->user_type == 'admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @include('admin._dashboard')

        </div>
    </div>
    @endif

    <!-- normal -->
    @if(auth()->user()->user_type == 'normal')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Normal Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @include('normal._dashboard')

        </div>
    </div>
    @endif

</x-app-layout>