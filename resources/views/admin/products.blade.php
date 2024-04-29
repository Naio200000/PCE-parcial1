<x-adminTemplate>
    <x-slot:title>ABM - Productos :: </x-slot:title>

    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Categorias</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de Categorias principales de la tienda</p>
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <div class="tabla col-12 p-2 d-flex flex-column">
                        <div class="ms-auto">
                            <a class="px-3 me-1" href="index.php?view=abm-producto"><button class="fw-bold btn btn-agregar">Agregar Producto</button></a>
                        </div>
                    </div>
                    <table class="tabla table table-striped">
                        <thead>
                            <tr>
                                <th class="px-1 text-center" scope="col">#</th>
                                <th class="px-1 text-center" scope="col">Nombre</th>
                                <th class="px-1 text-center" scope="col" width="15%">Descripción</th>
                                <th class="px-1 text-center" scope="col" width="15%">Category</th>
                                <th class="px-1 text-center" scope="col">Precio</th>
                                <th class="px-1 text-center" scope="col" width="15%">Imagenes</th>
                                <th class="px-1 text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="text-capitalize text-center">Producto</td>
                                <td>Descript</td>
                                <td>Category</td>
                                <td>111111</td>
                                <td>imagen</td>
                                <td>
                                    <ul>
                                        <li class="btn-editar btn m-1"><a class="fw-bold" href="index.php?view=abm-producto">Editar</a></li>
                                        <li class="btn-borrar btn m-1"><a class="fw-bold" href="index.php?view=abm-producto">Borrar</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </section>
</x-adminTemplate>