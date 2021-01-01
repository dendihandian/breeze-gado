<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class ProductsTable extends Component
{
    public $previous_search = '';
    public $search = '';
    public $page = 1;
    public $length = 10;


    public function render()
    {
        $word = $this->search;
        $products = Product::all();
        $count = $products->count();
        $pages_count = round($count / $this->length);

        if (!empty($this->search)) {
            $products = $products
                ->filter(function ($product) use ($word) {
                    return Str::contains(strtolower($product->title), strtolower($word));
                });

            $count = $products->count();
            $pages_count = round($count / $this->length);

            if ($pages_count <= 0) {
                $products = $products->take($this->length);
            } else {
                $products = $products
                    ->skip(($this->page - 1) * $this->length)
                    ->take($this->length);
            }


            if ($this->previous_search != $this->search) {
                $this->page = 1;
            }

            $this->previous_search = $this->search;
        } else {
            $products = $products
                ->skip(($this->page - 1) * $this->length)
                ->take($this->length);
        }

        return view('livewire.products-table', compact('products', 'pages_count'));
    }
}
