@component('mail::message')
# Nouveau message de contact

<strong>Nom :</strong> {{ $data['nom'] }} <br>
<strong>Email :</strong> {{ $data['email'] }} <br>
<strong>Message :</strong> <br> {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
