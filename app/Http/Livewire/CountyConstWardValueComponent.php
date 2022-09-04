<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\county;
use App\Models\constituency;
use App\Models\ward;

class CountyConstWardValueComponent extends Component
{
    public function render()
    {
        
        return view('livewire.county-const-ward-value-component',[
            $counties=county::all(),
        ]);
    }
}
