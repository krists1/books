@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('genre.create') }}" class="btn btn-primary">Pievienot Žanru</a>
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
                    <td>Bērnu</td>
                    <td class="text-right">Darbības</td>
                </tr>
                </thead>

                <tbody>
                @foreach($genres as $record)
                    <tr>
                        <td>{{$record->id}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->is_for_children ? 'Bērnu' : 'Nav bērnu!'}}</td>
                        <td class="text-right">
                            <a href="{{ route('genre.show',$record->id)}}" class="btn btn-primary">Skatīt</a>
                            <a href="{{ route('genre.edit',$record->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('genre.destroy', $record->id)}}" method="post" class="d-inline">
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