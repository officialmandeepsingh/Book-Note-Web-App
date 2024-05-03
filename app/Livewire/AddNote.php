<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class AddNote extends Component
{
    public $bookId;
    public $bookData;

    public function render()
    {
        
        return view('livewire.add-note');
    }

    
}
