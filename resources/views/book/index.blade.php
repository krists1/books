@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('book.create') }}" class="btn btn-primary">Pievienot grāmatu</a>
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
                        <td>Autors</td>
                        <td class="text-right">Darbības</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author->fullName }}</td>
                        <td class="text-right">
                        <a href="{{ route('book.show',$book->id)}}" class="btn btn-primary">Skatīt</a>
                        <a href="{{ route('book.edit',$book->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('book.destroy', $book->id)}}" method="post" class="d-inline">
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