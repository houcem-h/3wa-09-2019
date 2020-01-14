@extends('layouts.app')

@section('contenu')
    <div>
        <h2>Contact Us</h2>
        @if (session('successContactMail'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('successContactMail') }}
            </div>
        @endif
        <form action="{{ route('contactMessage') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom & prénom">
                @error('nom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="personne@example.com">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="message"></label>
                <textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Votre message ici"></textarea>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection