<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SearchModel;

class Search extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    
    public function render()
    {
         $data_pasien = SearchModel::where(function ($query) {
            $query->orWhere('nama', 'like', '%' . $this->search . '%')
                ->orWhere('umur', 'like', '%' . $this->search . '%')
                ->orWhere('alamat', 'like', '%' . $this->search . '%')
                ->orWhere('penyakit', 'like', '%' . $this->search . '%');
        })->paginate(3);

        return view('livewire.search', ['semua_pasien' => $data_pasien])->layout('base');
    }
}
