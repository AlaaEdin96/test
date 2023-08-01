<?php

namespace App\Livewire;


use LivewireUI\Modal\ModalComponent;

class CreatePost extends ModalComponent
{
    public function render()
    {
        return view('livewire.create-post');
    }
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
}
