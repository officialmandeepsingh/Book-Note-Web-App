@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center row">
<div class="col-md-4">
            <div class="card">
{{-- <div class="card-header">{{ __('Book') }} </div> --}}
<div class="card-header d-flex justify-content-between align-items-center">
    <span>{{ __('Book') }}</span>
<a href="{{route('book.store.page')}}" class="btn btn-primary">Add New</a>
</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

@livewire('book_list') </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
{{-- <div class="card-header">{{ __('Notes') }}</div> --}}
<div class="card-header d-flex justify-content-between align-items-center">
    <span>{{ __('Notes') }}</span>
{{-- <a href="{{route('note.store.page')}}" class="btn btn-primary">Add New</a> --}}
</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

@livewire('note_list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection