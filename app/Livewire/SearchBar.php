<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchBar extends Component
{
    public $type = "";

    public function clickAway()
    {
        $this->type="";
    }
    public function render()
    {
        $results = [];

        if (strlen($this->type) >= 1) {
            $results = Product::where('item_name', 'like', '%' . $this->type . '%')->limit(7)->get();
        }

        return view('livewire.search-bar', ['products' => $results]);
    }
}
