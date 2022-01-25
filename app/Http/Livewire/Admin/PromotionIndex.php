<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Promotion;
use Livewire\WithPagination;

class PromotionIndex extends Component
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
        $promotions = Promotion::where('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.promotion-index', compact('promotions'));
    }
}
