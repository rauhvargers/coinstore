<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class CoinInfo extends Component
{

    public string $title = '';
    public Product $productitem;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $item)
    {
        $this->title = $title;
        $this->productitem = $item;
    }

    public function isItEuroCoin() {
        return ($this->productitem->production_year >= 2014);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coin-info');
    }
}
