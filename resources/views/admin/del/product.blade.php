resources/views/store/product.blade.php<?php
    /**
     * @var /App/Models/Producto[] | Illuminate\Database\Eloquent\Collection  $product
    */
?>
<x-adminTemplate>

    <x-slot:title>{{'Confirmacion de Eliminacion :: ' . $product->name . ' :: '}}</x-slot>


    <section class="item container-fluid container-md pb-3">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center fw-bold my-2 mx-auto px-2">Confirmación de eliminación de Producto</h2>
        <div class="card">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column">
                    <div id="carouselProductoImagen" class="carousel slide mx-auto" data-bs-ride="true">
                        <div class="carousel-inner p-5" id="carrusel-producto">
                            <div class="carousel-item active">
                                <img class="card-img-top" src="{{'../../../img/productos/' . $product->image}}" alt="{{$product->altImage}}">
                            </div>
                        </div>
                    </div>
                    <span class="text-uppercase p-2 text-lg-start text-end">{{$product->category}}</span>
                </div>
                <div class="col-lg-6 d-flex flex-column p-3">
                    <div class="card-body flex-grow-0">
                        <h3 class="card-title fs-2">{{$product->name}}</h3>
                        <p class="card-text fs-5">{{$product->descript[0]}}</p>
                        <p class="card-text fs-5">{{$product->descript[1]}}</p>
                    </div>
                    <div class="card-body flex-grow-0 mt-auto" id="botonProducto">
                        <p class="fs-3 mb-3 fw-bold text-center">Precio: <span class="preciocard">{{$product->price}}</span></p>
                        <form action="{{route('action.del.products', ['id' => $product->id])}}" method="POST" class="row">
                            <div class="">
                                @csrf
                                <button type="submit" class="btn btn-borrar  fw-bold w-100 fs-3 text-uppercase">Borrar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
</x-adminTemplate>