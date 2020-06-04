@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-link" href="{{ route('review.index') }}">< Atpakaļ</a>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h1 class="card-title">{{ $review->name ?? ''}}</h1>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Par grāmatu: {{ $review->book->title ?? ''}}</p>
                </li>
                <li class="list-group-item">
                    <p class="card-title">Teksts: <b>{{ $review->text ?? ''}}</b></p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Publicēts: {{ $review->published ?? ''}}</p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Vērtējums: {{ $review->rating ?? ''}}</p>
                </li>
            </ul>
    </div>
@endsection