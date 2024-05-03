<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Note;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class NoteList extends Component
{
    public $bookId = 0;
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
            $this->bookId = $bookId;
            $user = Auth::user();
            $this->notes = Note::where('user_id', $user->id)
                           ->where('book_id', $bookId)
                           ->latest()
                           ->get();
        }catch(Exception $e){

        }
    }
}
