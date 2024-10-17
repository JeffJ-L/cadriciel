@extends('master')
@section('title', 'Contact')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Jeff Jean-Louis">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="body-contact">
    <main>
        <div class="main-contact">
            <h1>Travaillons ensemble</h1>
            <p>Laissez un message en remplissant le formulaire ci-dessous avec vos coordonnés (le nom, prénom et courriel sont requis). Merci de spécifier comment vous avez entendu parler de nos services.</p>
            <div class="formulaire">
                <form method="post" action="/contactInfo">
                    @csrf
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" required>
                    <label for="prenom">Prénom: </label>
                    <input type="text" name="prenom" id="prenom" required>
                    <label for="organisation">Organisation: </label>
                    <input type="text" name="organisation" id="organisation">
                    <label for="tel">Numéro de téléphone: </label>
                    <input type="tel" name="tel" id="tel">
                    <label for="courriel">Courriel: </label>
                    <input type="email" name="courriel" id="courriel" required>
                    <label for="sujet">Raison du message: </label>
                    <input type="text" id="sujet">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="33" rows="5"></textarea>
                    <div class="bouton-form">
                        <button type="submit">Soumettre</button>
                        <button type="reset">Réinitialiser</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection