<?php

namespace App\Http\Livewire\Admin;

use App\Models\Trademark;
use Livewire\Component;
use Livewire\WithPagination;

class TrademarkIndex extends Component
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
        $trademarks = Trademark::where('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.trademark-index', compact('trademarks'));
    }
}
