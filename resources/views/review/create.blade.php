@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Pievienot atsauksmi!
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4 class="alert-heading">Nepieciešams pielabot datus, lai saglabātu!</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ $action }}">
                @csrf

                @isset($review)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="title">Nosaukums:</label>
                    <input type="text" class="form-control" name="name" value="{{ $review->name ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="book_id">Grāmata:</label>

                    <select name="book_id" class="form-control">
                        <option disabled hidden selected>-- Lūdzu izvēlieties grāmatu --</option>

                        @foreach (\App\Book::all() as $book)
                            <option value="{{ $book->id }}" {{ isset($review) && $review->book->id == $book->id ? 'selected' : ''}}>{{ $book->title }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Teksts:</label>
                    <textarea class="form-control" name="text" rows="10">{{ $review->text ?? ''}}</textarea>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="published" value="1" {{ isset($review) && $review->published ? 'checked' : '' }}/>
                        <label class="form-check-label" for="defaultCheck1">Publicēts</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Vērtējums:</label>
                    <input type="text" class="form-control" name="rating" value="{{ $review->rating ?? ''}}" />
                </div>

                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <a class="btn btn-link" href="{{ route('review.index') }}">Atpakaļ</a>

            </form>
        </div>
    </div>
@endsection