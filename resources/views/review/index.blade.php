@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('review.create') }}" class="btn btn-primary">Pievienot atsauksmi</a>
        </div>
        <div class="card-body">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif

            <table class="table table-striped">

                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nosaukums</td>
                        <td>Publicēts</td>
                        <td>Vērtējums</td>
                        <td class="text-right">Darbības</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{$review->id}}</td>
                        <td>{{$review->name}}</td>
                        <td>{{$review->published }}</td>
                        <td>{{$review->rating }}</td>
                        <td class="text-right">
                        <a href="{{ route('review.show',$review->id)}}" class="btn btn-primary">Skatīt</a>
                        <a href="{{ route('review.edit',$review->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('review.destroy', $review->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="confirm('Vai tiešām dzēst?')">Dzēst</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection