<?php
    /**
     * @var /App/Models/Blogs[] | Illuminate\Database\Eloquent\Collection  $newsList
    */
?>

<x-storeTemplate>
    <x-slot:title>Noticias::</x-slot:title>
    <section class="tienda">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Noticias</h2>
    </section>
    <section class="home container-fluid container-md">
        @foreach ($newsList as $news)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{'storage/img/hero/' . $news->image}}" class="img-fluid rounded-start" alt="{{$news->altImage}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{$news->title}}</h5>
                            <p class="card-text">{{$news->blog}}</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-body-secondary">Publicado por {{ $news->user->name }}</small></p>
                                <p class="card-text"><a class="text-body-secondary" href="{{route('news', ['id' => $news->id])}}">VER MAS</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-storeTemplate>
