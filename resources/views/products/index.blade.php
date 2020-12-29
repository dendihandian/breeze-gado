<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product List') }}
        </h2>

        {{-- Product List goes here --}}
        @livewire('search-products')

    </x-slot>
</x-app-layout>
