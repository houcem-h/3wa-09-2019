@extends('layouts.myapp')
@section('contenu')
    @if (session('successNewClient'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewClient') }}
        </div>
    @endif
    @if (session('successUpdateClient'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdateClient') }}
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                {{$client->prenom}} {{$client->nom}}
            </h3>
            <div class="panel-body py-3">
                <ul class="list-group">
                    <li class="list-group-item">{{$client->dateNaissance}}</li>
                    <li class="list-group-item">{{$client->adresse}}</li>
                    <li class="list-group-item">{{$client->tel}}</li>
                </ul>
            </div>
            <div class="panel-footer py-3">
                <a href="{{ route('client.edit', ['client' => $client->id]) }}" class="btn btn-info">
                    Editer
                </a>
            </div>
        </div>
    </div>
@endsection