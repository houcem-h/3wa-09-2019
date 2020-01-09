@extends('layouts.myapp')
@section('contenu')
    <fieldset>
        <legend>Création d'un nouveau client</legend>
        <form action="{{ route('client.store') }}" method="post">
            @include('client.form')
        </form>
    </fieldset>
@endsection