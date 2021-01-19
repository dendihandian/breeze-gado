<div class="flex items-center justify-start w-full mb-2">
    <div class="w-32">
        <label for="title">{{ __('Title') }}</label>
    </div>
    <input class="w-64 h-8 p-2 border rounded focus:outline-none" type="text" name="title" id="title" autocomplete="off" value="{{ old('title') ?? $product->title ?? '' }}">
    @error('title')
        <span class="ml-2 text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex items-center justify-start w-full mb-2">
    <div class="w-32">
        <label for="description">{{ __('Description') }}</label>
    </div>
    <textarea class="w-64 p-2 border rounded resize-none focus:outline-none" name="description" id="description">{{ old('description') ?? $product->description ?? '' }}</textarea>
    @error('description')
        <span class="ml-2 text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex items-center justify-start w-full mb-2">
    <div class="w-32">
        <label for="stock">{{ __('Stock') }}</label>
    </div>
    <input class="w-64 h-8 p-2 border rounded focus:outline-none" type="number" name="stock" id="stock" value="{{ old('stock') ?? $product->stock ?? '' }}">
    @error('stock')
        <span class="ml-2 text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex items-center justify-start w-full mb-2">
    <div class="w-32">
        <label for="price">{{ __('Price') }}</label>
    </div>
    <input class="w-64 h-8 p-2 border rounded focus:outline-none" type="number" name="price" id="price" value="{{ old('price') ?? $product->price ?? '' }}">
    @error('price')
        <span class="ml-2 text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>