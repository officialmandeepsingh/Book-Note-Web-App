<div>
@forelse ($books as $book)

<div class="card mb-1" style=" text-decoration: none;">
    <div class="list-group-item m-2" wire:click.prevent="selectBook({{ $book->id }})">
        {{ $book->title }}
    </div>
</div>

@empty
No Book added
@endforelse
</div>
