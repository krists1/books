@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Izdevniecības rediģēšana
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

                @isset($publisher)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="name">Nosaukums:</label>
                    <input type="text" class="form-control" name="name" value="{{ $publisher->name ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="surname">Adrese:</label>
                    <input type="text" class="form-control" name="address"  value="{{ $publisher->address ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="surname">Telefons:</label>
                    <input type="text" class="form-control" name="phone"  value="{{ $publisher->phone ?? ''}}" />
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="works_on_sundays" value="1" {{ isset($publisher) && $publisher->works_on_sundays ? 'checked' : '' }}/>
                        <label class="form-check-label" for="defaultCheck1">Strādā svētdienās</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <a class="btn btn-link" href="{{ route('publisher.index') }}">Atpakaļ</a>

            </form>
        </div>
    </div>
@endsection