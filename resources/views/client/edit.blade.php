@extends('layouts.myapp')

@section('contenu')
    <fieldset>
        <legend>
            Editer le client <strong>{{$client->prenom}} {{$client->nom}}</strong>
        </legend>
        <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
            @method('PATCH')
            @include('client.form')
        </form>
    </fieldset>
@endsection