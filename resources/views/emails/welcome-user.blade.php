@component('mail::message')
# Bienvenue

{{ $data->nom }} Sois le bienvenue sur la plateforme EasyEdition où tu ne serez pas déçu.
Tu es connecté avec ton adresse {{ $data->email }}

Merci,<br>
{{ config('app.name') }}
@endcomponent
