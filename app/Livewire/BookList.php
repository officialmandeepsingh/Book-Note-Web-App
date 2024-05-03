<?php

namespace App\Livewire;

use App\Models\Book;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookList extends Component
{
    protected $listeners = ['bookCreated' => 'render',];
    public $selectedIndex;


    public function mount(){
        $user = Auth::user();
        $books = Book::where('user_id',$user->id)->latest()->get();
       
        $this->dispatch("bookSelected",$books[0]->id);
        $this->dispatch("noteCreated");
        
    }
    public function render()
    {
        try{
            $user = Auth::user();
            // $query = $this->loadRelationships(Book::where('user_id', $user->id));
            $books = Book::where('user_id',$user->id)->latest()->get();
            // dd($books);
            return view('livewire.book-list',['books' => $books]);
        }catch(Exception $e){

        }
        
    }

    public function selectBook($bookid){
        $this->dispatch("bookSelected",$bookid);
    }

}