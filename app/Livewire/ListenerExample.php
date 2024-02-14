<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy]
#[On('refreshExample')]
class ListenerExample extends Component
{
    public string $message;

    public function mount()
    {
        $this->message = 'Hello World!';
    }

    public function placeholder()
    {
        return '<div>Placeholder</div>';
    }

    public function render()
    {
        return view('livewire.listener-example');
    }
}
