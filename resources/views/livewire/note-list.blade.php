<div>
<div class="card m-2" style="width: 100px">
    <a href="{{route('note.store.page',['bookId'=> $bookId])}}" class="btn btn-primary card-text">Add New</a>
</div>
{{-- <br> --}}
    @forelse ($notes as $note)
    {{-- {{$note->title}} --}}
<div class="card m-2">
        <div class="card-body">
            <h5 class="card-title">{{$note->title}}</h5>
<p class="card-text">
                {{ strlen($note->note) > $stringLength ? substr($note->note, 0, $stringLength) . '...' :
                $note->note
                }}
            </p>
            {{-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> --}}
        </div>
    </div>
    @empty
<div class="card m-2">
    <div class="card-body center">
        <p>No notes added</p>
    </div>
</div>
    @endforelse
</div>