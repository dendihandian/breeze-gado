<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product List') }}
        </h2>
    </x-slot>

    @livewire('products-table')
</x-app-layout>
