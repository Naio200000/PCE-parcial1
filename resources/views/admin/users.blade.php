<?php
    /**
     * @var /App/Models/User[] | Illuminate\Database\Eloquent\Collection  $users
    */
?>

<x-adminTemplate>
    <x-slot:title>ABM - Productos :: </x-slot:title>
    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Usuarios</h2>
        <p class="fs-5 w-75 text-center mx-auto">Lista de usuarios</p>
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    @if ($users->isNotEmpty())
                    <table class="tabla table table-striped">
                        <thead>
                            <tr>
                                <th class="px-1 text-center" scope="col">#</th>
                                <th class="px-1 text-center" scope="col" width="30%">Nombre de usuario</th>
                                <th class="px-1 text-center" scope="col" width="35%">Email</th>
                                <th class="px-1 text-center" scope="col">Rol</th>
                                <th class="px-1 text-center" scope="col">Compras</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <th class="text-center" scope="row">{{$u->id}}</th>
                                    <td class="text-capitalize text-center">{{$u->name}}</td>
                                    <td class="text-capitalize text-center">{{$u->email}}</td>
                                    <td class="text-capitalize text-center">{{($u->admin) ? 'admin': 'cliente'}}</td>
                                    <td class="text-capitalize text-center">
                                        @if ($u->compras)
                                            <a href="{{route('admin.compras', ['id' => $u->id])}}"><p class="btn btn-komei">Ver compras</p></a>
                                        @else
                                            <p>No ha realizado compras</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
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