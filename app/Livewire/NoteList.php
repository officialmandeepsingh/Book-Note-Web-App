<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Note;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteList extends Component
{
    // public $book_id;
    public $notes = [];
    public $stringLength = 300;

    protected $listeners = ['noteCreated' => 'render','bookSelected' => 'bookSelected'];
    public function render()
    {
        return view('livewire.note-list',['notes' => $this->notes, 'stringLength' => $this->stringLength]);
    }

    public function bookSelected($bookId){
        // dd($bookId);
        try{
            $user = Auth::user();
            $this->notes = Note::where('user_id', $user->id)
                           ->where('book_id', $bookId)
                           ->latest()
                           ->get();
            // dd($this->notes);
            // return view('livewire.note-list',['notes' => $this->notes]);
        }catch(Exception $e){

        }
    }
}
