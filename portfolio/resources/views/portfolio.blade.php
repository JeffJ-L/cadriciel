@extends('master')
@section('title', 'Portfolio')
@section('content')

<div class="slider">
        <div class="slides">
            <img src="assets/img/Dessin.jpg" alt="Dessin/ copie de Leonard da Vinci">
            <img src="assets/img/weDesign.jpg" alt="image d'un ordi portable avec du code afficher dans l'écran">
            <img src="assets/img/peinture.jpg" alt="tube de peinture">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <section class="intro">
        <strong>
            <p>Ceci est mon portfolio diviser en trois parties, mes peintures, mes dessins et mes projets en lien avec la <span class="mots-rouge">programmation</span>.</p>
        </strong>
    </section>
@endsection