<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('products.update', ['product' => $product->id ?? '']) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        @include('products._partials.form')
                        <button class="px-3 py-2 text-white bg-gray-400 rounded hover:bg-gray-500 focus:outline-none" type="submit">{{ __('Update') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
