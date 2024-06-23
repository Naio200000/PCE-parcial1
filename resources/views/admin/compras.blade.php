<?php
    /**
     * @var /App/Models/User[] | Illuminate\Database\Eloquent\Collection  $user
    */
?>
<x-adminTemplate>
    <x-slot:title>ABM - Productos :: </x-slot:title>
    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Compras</h2>
        <div class="listado pb-3">
            <p class="fs-5 w-75 text-center mx-auto">Comrpas del usuario {{$user->name}}</p>
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <table class="tabla table table-striped">
                        <thead>
                            <tr>
                                <th class="px-1 text-center" scope="col">#</th>
                                <th class="px-1 text-center" scope="col">Nombre</th>
                                <th class="px-1 text-center" scope="col" width="40%">Descripción</th>
                                <th class="px-1 text-center" scope="col" >Categoria</th>
                                <th class="px-1 text-center" scope="col">Precio</th>
                                <th class="px-1 text-center" scope="col" width="15%">Imagenes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->compras as $p)
                                <tr>
                                    <th class="text-center" scope="row">{{$p->id}}</th>
                                    <td class="text-capitalize text-center">{{$p->name}}</td>
                                    <td>{{ implode(' ; ',$p->descript)}}</td>
                                    <td class="text-center">{{$p->category->name}}</td>
                                    <td class="text-center">{{$p->price}}</td>
                                    <td><img class="w-100" src="{{ \Storage::url($p->image)}}" alt="{{$p->altImage}}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </section>
</x-adminTemplate>