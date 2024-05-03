@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center row">
        <div class="col-md-3">
            <div class="card">
{{-- <div class="card-header">{{ __('Book') }} </div> --}}
<div class="card-header d-flex justify-content-between align-items-center">
    <span>{{ __('Book') }}</span>
    <a href="" class="btn btn-primary">Add New Book</a>
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
    <a href="" class="btn btn-primary">Add New Notes</a>
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