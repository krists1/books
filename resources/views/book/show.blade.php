@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-link" href="{{ route('book.index') }}">< Atpakaļ</a>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h1 class="card-title">{{ $book->title ?? ''}}</h1>
                </li>
                <li class="list-group-item">
                    <p class="card-title">Autors: <b>{{ $book->author->fullName ?? ''}}</b></p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">{{ $book->description ?? ''}}</p>
                </li>
            </ul>

    </div>
    <hr/>
    <div class="card">
        <div class="card-header">
            <b>Atsauksmes</b>
        </div>
        <ul class="list-group list-group-flush">
        @foreach( $reviews as $review)
                <li class="list-group-item">
                    <p class="card-title"> {{ $review->text }}</p>
                </li>
        @endforeach
        </ul>
    </div>

@endsection