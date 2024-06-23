<?php
    /**
     * @var /App/Models/User[] | Illuminate\Database\Eloquent\Collection  $users
    */
?>

<x-adminTemplate>
    <x-slot:title>ABM - Productos :: </x-slot:title>
    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Noticias</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de Noticias de la tienda</p>
        @if (session()->has('feedback.message'))
            <div class="alert alert-{{session()->get('feedback.type', 'success')}}">{{session()->get('feedback.message')}}</div>
        @endif
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <div class="tabla col-12 p-2 d-flex flex-column">
                        <div class="ms-auto">
                            <a class="px-3 me-1" href="{{route('add.blog')}}"><button class="fw-bold btn btn-agregar">Agregar Blog</button></a>
                        </div>
                    </div>
                    @if ($users->isNotEmpty())
                    <table class="tabla table table-striped">
                        <thead>
                            <tr>
                                <th class="px-1 text-center" scope="col">#</th>
                                <th class="px-1 text-center" scope="col">Titulo</th>
                                <th class="px-1 text-center" scope="col">Autor</th>
                                <th class="px-1 text-center" scope="col" width="50%">Blog</th>
                                <th class="px-1 text-center" scope="col" width="15%">Portada</th>
                                <th class="px-1 text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    @else
                    <p class="fs-5 w-75 text-center mx-auto">No se encuentran Blogs cargados. Ingrese uno nuevo</p>
                    @endif
                </div>
            </article>
        </div>
    </section>
</x-adminTemplate>