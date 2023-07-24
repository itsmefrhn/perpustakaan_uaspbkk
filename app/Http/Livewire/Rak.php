<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rak as ModelsRak;
use Livewire\WithPagination;
class Rak extends Component
{

    use WithPagination;
    protected $paginationTheme ='bootstrap';
    public function render()
    {
        return view('livewire.rak', [
            'raks' => ModelsRak::latest()->paginate(3)
        ]);
    }
}
