<?php
    /**
     * @var /App/Models/Blogs[] | Illuminate\Database\Eloquent\Collection  $Blogs
    */
?>

<x-storeTemplate>
    <x-slot:title>Noticias::</x-slot:title>
    <section class="hero">

    </section>
    <section class="home container-fluid container-md">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center fw-bold mt-2 mb-5 mx-auto px-2">{{$news->title}}</h2>
        <div>
            <img class="d-block w-100"  src="{{'../img/hero/' . $news->image}}" alt="{{$news->altImage}}">
        </div>
        <p class="mt-3 pe-md-3 fs-5 w-75 mx-auto">{!! $news->blog !!}</p>
        <p class="mt-3 pe-md-3 fs-5 w-75 ms-auto fw-bold">Publicado por {{ $news->user->name }}</p>
    </section>

</x-storeTemplate>
