@extends('layout.main')

@section('content')

<div class="container products-container">

    <div class="product-page debug">
        <img src="public/img/1.webp" class="product-image first-image">
        <img src="public/img/1b.webp" class="product-image second-image">
        <span class="discount"> 50% </span>
        <span class="sustainability"> Sostenibilità </span>
        <span class="saved"> &#9829 </span>
    </div>

    <div class="product-info">
        <div class="brand"> Levi's </div>
        <div class="product-name"> RELAXED FIT TEE UNISEX </div>
        <div>
            <span class="actual-price"> 14,99 &#x20AC </span>
            <span class="old-price"> 29,99 &#x20AC </span>
        </div>
    </div>

    <div class="product-page debug">

        <img src="public/img/2.webp" class="product-image first-image">
        <img src="public/img/2b.webp" class="product-image second-image">
        <span class="discount"> 30% </span>
        <span class="saved"> &#9829 </span>

        <div class="product-info">
            <div class="brand"> Guess </div>
            <div class="product-name"> ROSES TEE </div>
            <div>
                <span class="actual-price"> 20,99 &#x20AC </span>
                <span class="old-price"> 29,99 &#x20AC </span>
            </div>
        </div>

    </div>

    <div class="product-page debug">

        <img src="../public/img/3.webp" class="product-image first-image">
        <img src="../public/img/3b.webp" class="product-image second-image">
        <span class="discount"> 50% </span>
        <span class="sustainability"> Sostenibilità </span>
        <span class="saved"> &#9829 </span>

        <div class="product-info">
            <div class="brand"> Come zucchero filato </div>
            <div class="product-name"> VOGLIA DI COLORI PASTELLO </div>
            <div>
                <span class="actual-price"> 129,99 &#x20AC </span>
                <span class="old-price"> 184,99 &#x20AC </span>
            </div>
        </div>

    </div>

</div>

@endsection
