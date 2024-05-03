<?php

namespace App\Livewire;

use App\Models\Book;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class BookList extends Component
{
    protected $listeners = ['bookCreated' => 'render',];
    public $selectedBookId;
    public $selectedColor="blue";


    public function mount(){
        $user = Auth::user();
        $books = Book::where('user_id',$user->id)->latest()->get();
       
        // if ($books->count() > 0) {
        //     // $this->dispatch("bookSelected",$books[0]->id);
        //     $this->dispatch("bookSelected","1");
        // }
        $this->dispatch("noteCreated");
        
    }
    public function render()
    {
        try{
            $user = Auth::user();
            // $query = $this->loadRelationships(Book::where('user_id', $user->id));
            $books = Book::where('user_id',$user->id)->latest()->get();
            // if ($books->count() > 0) {
            //     $this->dispatch("bookSelected",1);
            // }
            // dd($books);
            return view('livewire.book-list',['books' => $books]);
        }catch(Exception $e){

        }
     
    }

    public function selectBook($bookid){
        $this->selectedBookId = $bookid;
        $this->dispatch("bookSelected",$bookid);
        // $this->dispatch("selectBook",$bookid);
    }

}