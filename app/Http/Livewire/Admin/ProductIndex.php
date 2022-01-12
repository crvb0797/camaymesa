<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\Admin\ProductController;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    protected $queryString = [
        'search' => ['except' => ""]
    ];

    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $products = Product::where('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.product-index', compact('products'));
    }
}
