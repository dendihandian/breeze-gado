<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchProducts extends Component
{
    public $search = '';

    public function render()
    {
        $products = !empty($this->search) ? Product::where('title', 'like', '%' . $this->search . '%')->get() : Product::latest()->get();

        // dd($products);

        return view('livewire.search-products', [
            'products' => $products,
        ]);
    }
}
