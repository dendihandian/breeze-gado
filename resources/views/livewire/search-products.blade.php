<div>
    <input wire:model="search" type="text" placeholder="Search products..."/>

    <ul>
        @foreach($products as $product)
            <li>{{ $product->title }}</li>
        @endforeach
    </ul>
</div>
