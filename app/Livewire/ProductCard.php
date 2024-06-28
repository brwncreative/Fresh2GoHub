<?php

namespace App\Livewire;

use App\Http\Controllers\ProductController;
use Livewire\Component;

class ProductCard extends Component
{   
    public $span; 
    public $limiter = 0;
    public $category = null;
    private $products;

    private function separateTags(string $tags)
    {
        $result = explode(",", $tags);
        return $result;
    }

    private function lookUp(string $category = null)
    {
        if (isset($category)) {
            $this->products = ProductController::getByCategory($this->category, $this->limiter);
            foreach ($this->products as $product) {
                $product->tags = $this->separateTags($product->tags);
            }
        } else {
            $this->products = ProductController::getAll();
            foreach ($this->products as $product) {
                $product->tags = $this->separateTags($product->tags);
            }
        }
    }
    public function render()
    {
        $this->lookUp($this->category);
        return view('livewire.product-card', ['products' => $this->products]);
    }
}
