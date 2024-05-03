<div>
    @forelse ($notes as $note)
    {{-- {{$note->title}} --}}
    <div class="card m-2" style="">
        <div class="card-body">
            <h5 class="card-title">{{$note->title}}</h5>
            <p class="card-text">
                {{-- {{$note->note}} --}}
                {{ strlen($note->note) > $stringLength ? substr($note->note, 0, $stringLength) . '...' :
                $note->note
                }}
            </p>
            {{-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> --}}
        </div>
    </div>
    @empty
    No notes added
    @endforelse
</div>