@extends('layouts.app')
@section('contenu')
    <fieldset>
        <legend>Création d'un nouveau client</legend>
        <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            @include('client.form')
        </form>
    </fieldset>
@endsection