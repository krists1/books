@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="d-inline">{{ $publisher->name ?? ''}}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">Adrese</div>
                <div class="col-sm-10 border-left">{{ $publisher->address ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Telefons</div>
                <div class="col-sm-10 border-left">{{ $publisher->phone ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Strādā svētdienās</div>
                <div class="col-sm-10 border-left">{{ $publisher->works_on_sundays ? 'Strādā' : 'Nestrādā' }}</div>
            </div>
        </div>

    </div>
@endsection