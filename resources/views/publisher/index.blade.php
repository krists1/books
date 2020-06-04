@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('publisher.create') }}" class="btn btn-primary">Pievienot izdevniecību</a>
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
                    <td>Adrese</td>
                    <td>Telefons</td>
                    <td class="text-right">Darbības</td>
                </tr>
                </thead>

                <tbody>
                @foreach($publishers as $record)
                    <tr>
                        <td>{{$record->id}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->address}}</td>
                        <td>{{$record->phone}}</td>
                        <td class="text-right">
                            <a href="{{ route('publisher.show',$record->id)}}" class="btn btn-primary">Skatīt</a>
                            <a href="{{ route('publisher.edit',$record->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('publisher.destroy', $record->id)}}" method="post" class="d-inline">
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