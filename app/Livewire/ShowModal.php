<?php

namespace App\Livewire;

use Livewire\Component;

class ShowModal extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }
    
    public function render()
    {
        return view('livewire.show-modal');
    }
}
