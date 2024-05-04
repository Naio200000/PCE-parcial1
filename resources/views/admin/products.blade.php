<?php
    /**
     * @var /App/Models/Producto[] | Illuminate\Database\Eloquent\Collection  $producto
    */
?>
<x-adminTemplate>
    <x-slot:title>ABM - Productos :: </x-slot:title>
    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Productos</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de Productos de la tienda</p>
        @if (session()->has('feedback.message'))
            <div class="alert alert-success">{{session()->get('feedback.message')}}</div>
        @endif
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <div class="tabla col-12 p-2 d-flex flex-column">
                        <div class="ms-auto">
                            <a class="px-3 me-1" href="{{route('abm.products')}}"><button class="fw-bold btn btn-agregar">Agregar Producto</button></a>
                        </div>
                    </div>
                    <table class="tabla table table-striped">
                        <thead>
                            <tr>
                                <th class="px-1 text-center" scope="col">#</th>
                                <th class="px-1 text-center" scope="col">Nombre</th>
                                <th class="px-1 text-center" scope="col" width="40%">Descripción</th>
                                <th class="px-1 text-center" scope="col" >Category</th>
                                <th class="px-1 text-center" scope="col">Precio</th>
                                <th class="px-1 text-center" scope="col" width="15%">Imagenes</th>
                                <th class="px-1 text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $p)
                                <tr>
                                    <th class="text-center" scope="row">{{$p->id}}</th>
                                    <td class="text-capitalize text-center">{{$p->name}}</td>
                                    <td>{{$p->descript}}</td>
                                    <td class="text-center">{{$p->category}}</td>
                                    <td class="text-center">{{$p->price}}</td>
                                    <td><img class="w-100" src="{{'../img/productos/' . $p->image}}" alt="{{$p->altImage}}"></td>
                                    <td>
                                        <ul>
                                            <li class="btn-editar btn m-1"><a class="fw-bold" href="#">Editar</a></li>
                                            <li class="btn-borrar btn m-1"><a class="fw-bold" href="#">Borrar</a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </section>
</x-adminTemplate>