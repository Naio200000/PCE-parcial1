<?php
    /**
     * @var /App/Models/Blogs[] | Illuminate\Database\Eloquent\Collection  $newss
    */
?>

<x-adminTemplate>
    <x-slot:title>Noticias::</x-slot:title>
    <section class="hero">

    </section>
    <section class="home container-fluid container-md">
        <form action="{{route('action.del.blog', ['id' => $news->id])}}" method="POST" class="row">
            <div class="">
                @csrf
                <button type="submit" class="btn btn-borrar  fw-bold w-100 fs-3 text-uppercase">Borrar</button>
            </div>
        </form>
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center fw-bold mt-2 mb-5 mx-auto px-2">{{$news->title}}</h2>
        <div>
            <img class="d-block w-100"  src="{{\Storage::url($news->image)}}" alt="{{$news->altImage}}">
        </div>
        <p class="mt-3 pe-md-3 fs-5 w-75 mx-auto">{!! $news->blog !!}</p>
    </section>

</x-adminTemplate>
