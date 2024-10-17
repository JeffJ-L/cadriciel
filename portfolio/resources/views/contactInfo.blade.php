@extends('master')
@section('title', 'Résumé de votre soumission')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Jeff Jean-Louis">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Résumé de votre soumission</h1>
        <div class="form-summary">
            @isset($data)
            <p><strong>Nom:</strong> {{ $data?->nom }}</p>
            <p><strong>Prénom:</strong> {{ $data?->prenom }}</p>
            <p><strong>Organisation:</strong> {{ $data?->organisation }}</p>
            <p><strong>Numéro de téléphone:</strong> {{ $data?->tel }}</p>
            <p><strong>Courriel:</strong> {{ $data?->courriel }}</p>
            <p><strong>Raison du message:</strong> {{ $data?->sujet }}</p>
            <p><strong>Message:</strong> {{ $data?->message }}</p>
            @endisset
        </div>
        <div class="actions">
            <button onclick="window.history.back()">Retour</button>
            <button onclick="window.print()">Imprimer</button>
        </div>
    </div>
@endsection