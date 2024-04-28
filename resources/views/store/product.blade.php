<?php
    /**
     * @var /App/Models/Producto[] | Illuminate\Database\Eloquent\Collection  $producto
    */
?>
<x-template>

    <x-slot:title>{{$producto->name . '::'}}</x-slot>
    <section class="item container-fluid container-md pb-3">
            <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center fw-bold my-2 mx-auto px-2"></h2>
            <p class="fs-5 w-75 mx-auto fw-bold text-center"></p>
            <div class="card">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column">
                        <div id="carouselProductoImagen" class="carousel slide mx-auto" data-bs-ride="true">
                            <div class="carousel-inner p-5" id="carrusel-producto">
                                <div class="carousel-item active">
                                    <img class="card-img-top" src="{{'../../img/productos/' . $producto->image}}" alt="{{$producto->altImage}}">
                                </div>
                            </div>
                        </div>
                        <span class="text-uppercase p-2 text-lg-start text-end">{{$producto->category}}</span>
                    </div>
                    <div class="col-lg-6 d-flex flex-column p-3">
                        <div class="card-body flex-grow-0">
                            <h3 class="card-title fs-2">{{$producto->name}}</h3>
                            <p class="card-text fs-5">{{$producto->descript}}</p>
                        </div>
                        <div class="card-body flex-grow-0 mt-auto" id="botonProducto">
                            <p class="fs-3 mb-3 fw-bold text-center preciocard">{{$producto->price}}</p>
                            <form action="admin/acciones/item-acc.php" class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <label class="px-1" for="cantidad">Cantidad: </label>
                                    <input type="number" class="form-control fw-bold" value="1" name="cantidad" id="cantidad">
                                </div>
                                <div class="col-6">
                                    <input type="hidden" value="1" name="id" id="id">
                                    <button type="submit" class="btn btn-komei w-100 fs-3 text-uppercase">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg> Comprar
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            {{-- <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center fw-bold my-2 mx-auto px-2">No pudimos encontrar el producto que buscabas.</h2>
            <p class="fs-5 w-75 mx-auto fw-bold text-center fs-5">Para volver a la home hás click <a class="fs-3" href="index.php?view=home">aquí.</a></p> --}}
    </section>
</x-template>
