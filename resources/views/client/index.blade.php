@extends('layouts.app')
@section('contenu')
    @if (session('successDelete'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDelete') }}
    </div>
    @endif
    <a href="{{ route('client.create') }}" class="btn btn-info">Nouveau Client</a>
    <h2 class="py-2">Liste des clients</h2>
    @if (count($clients) > 0)
        <ul class="list-group">
            @foreach ($clients as $client)
                <li class="list-group-item">
                    <a href="{{ route('client.show', ['client' => $client->id]) }}">
                        {{$client->prenom}} {{$client->nom}}
                    </a>
                    <p class="small">{{$client->tel}}</p>
                </li>
            @endforeach
            <div class="py-3">
                {{ $clients->links() }}
            </div>
        </ul>
    @else
        <h2 class="text-center py-4">Il n'y a pas de clients</h2>
    @endif
@endsection