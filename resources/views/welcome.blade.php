<?php
    /**
     * @var /App/Models/Blogs[] | Illuminate\Database\Eloquent\Collection  $Blogs
    */
?>

<x-storeTemplate>
    <x-slot:title>Home::</x-slot:title>
    <section class="hero">
        <div id="CarrpuselHero" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $c = 0;?>
                @foreach ($news as $n)
                    <div class="carousel-item <?= ($c == 0) ? 'active' : '' ?>" data-bs-interval="10000">
                        <div class="heroBanner d-flex flex-column justify-content-around pt-5" style="background-image: url({{'./img/hero/' . $n->image}});">
                            <h2 class="text-center pt-2 h2 bg-dark bg-opacity-50">{{$n->title}}</h2>
                            <p class="h4 p-2 m-2 w-50 bg-dark bg-opacity-50">{{$n->blog}}<a class="text-light" href="{{route('news', ['id' => $n->id])}}">VER MAS</a> </p>
                        </div>
                    </div>
                    <?php $c++; ?>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#CarrpuselHero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#CarrpuselHero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proxima</span>
            </button>
        </div>
    </section>
    <section class="home container-fluid container-md">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center mt-2 mb-5 mx-auto px-2">Escuela de Iaido - Esgrima Samurai</h2>
        <p class="pe-md-3 fs-5 w-75 mx-auto"><strong>Komei Juku Argentina</strong> es una escuela esgrima japonesa especializada en el estilo <em>Muso Jikiden Eishin Ryu</em>.</p>
        <p class="pe-md-3 fs-5 w-75 mx-auto">Ofresemos <strong>clases</strong> en varios dojos, <strong>ropa</strong> de practica y <strong>equipos</strong> en general.</p>
        <p class="pe-md-3 fs-5 w-75 mx-auto"><a href="{{route('contactos')}}" class=""><em><b>Contactanos</b></em></a> por cualquier duda que tengas, estamos a tu disposición.</p>
    </section>

</x-storeTemplate>
