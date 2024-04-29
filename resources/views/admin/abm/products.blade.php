<x-adminTemplate>

    <x-slot:title>ABM - Productos ::</x-slot:title>

    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Alta, Baja y Modificacion de productos</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de productos principales de la tienda</p>
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <!-- form -->
                    <form action="" method="POST">
                        @csrf
                        <div class="row align-items-start">
                            <!-- Titulo -->
                            <div class="mb-3">
                                <h3 class='text-center fw-bold text-capitalize '>Producto</h3>
                                <p class="text-center">Los campos marcados con <span class="obligatorio fs-4"> *</span> son obligatorios</p>
                           </div>
                            <div class=" col-12 col-sm-6">
                                <!-- Nombre -->
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="a" name="name" >
                                    <label for="name" class="col-form-label ms-2">Nombre de la producto<span class="obligatorio fs-4"> *</span></label>
                                </div>
                                <!-- Descripcion -->
                                <div class="mb-3 form-floating">
                                    <textarea class="form-control" id="descript-text" placeholder="a" name="descript" rows="4" style="height:100%;" ></textarea>
                                    <label for="descript-text" class="col-form-label ms-2">Descripción del Producto<span class="obligatorio fs-4"> *</span></label>
                                </div>
                                <!-- precio -->
                                <div class="mb-3 col-12 form-floating">
                                    <input type="number" class="form-control" id="price" placeholder="1" name="price" >
                                    <label for="price" class="col-form-label ms-2">Precio del Produto<span class="obligatorio fs-4"> *</span></label>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6">
                                {{-- category --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="category" placeholder="a" name="category" >
                                    <label for="category" class="col-form-label ms-2">Nombre de la producto<span class="obligatorio fs-4"> *</span></label>
                                </div>
                                {{-- imagenes --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="image" placeholder="a" name="image" >
                                    <label for="image" class="col-form-label ms-2">Cargue una Imagen<span class="obligatorio fs-4"> *</span></label>
                                    {{-- <input class="form-control" type="file" id="imagen" name="imagen"> --}}
                                </div>
                                {{-- descripcion de imagen --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="altImage" placeholder="a" name="altImage" >
                                    <label for="altImage" class="col-form-label ms-2">Descripcion de la imagen<span class="obligatorio fs-4"> *</span></label>
                                </div>
                            </div>
                            <div class="bg-light col-12 mt-3 p-2 d-flex">
                            <div class="ms-auto">
                                    <a class="mx-3 me-1" href=""><button class="fw-bold btn btn-agregar">Confirmar</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </section>

</x-adminTemplate>