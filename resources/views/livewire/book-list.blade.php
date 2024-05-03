<div>
@forelse ($books as $index => $book)
<div class="card mb-1" style="border-color:{{$selectedBookId == $book->id ? $selectedColor: 'null' }} ;">
    @if ($index === 0)
    <p wire:init=" selectBook({{ $book->id }})" hidden></p>
    {{-- <p>{{$selectedBookId}}</p> --}}
    @endif
    <div class="list-group-item m-2" style="cursor: pointer;" wire:click.prevent="selectBook({{ $book->id }})">
        {{ $book->title }}
    </div>
</div>
@empty
No Book added
@endforelse
</div>