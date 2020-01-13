@extends('layouts.app')
@section('contenu')
    <div class="jumbotron">
        {{ $titre }}
    </div>
    <ul class="list-group">
       @foreach($listeServ as $serv)
            <li class="list-group-item">{{$serv}}</li>
       @endforeach 
    </ul>
@endsection