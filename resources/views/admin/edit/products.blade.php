<?php

/**
 * @var Illuminate\Support\ViewErrorBad $errors
 * @var /App/Models/Producto[] | Illuminate\Database\Eloquent\Collection  $product
*/
?>


<x-adminTemplate>

    <x-slot:title>{{'Modificacion de  :: ' . $product->name . ' :: '}}</x-slot:title>

    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Alta, Baja y Modificacion de productos</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de productos principales de la tienda</p>
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <!-- form -->
                    <form action="{{ route('actions.edit.products', $product->id) }}" method="POST">
                        @csrf
                        <div class="row align-items-start">
                            <!-- Titulo -->
                            @if($errors->any())
                                <div class="alert alert-danger text-center">Hubo un error en la carga del formulario</div>
                            @endif
                            <div class="mb-3">
                                <h3 class='text-center fw-bold text-capitalize '>Producto</h3>
                                <p class="text-center">Los campos marcados con <span class="obligatorio fs-4"> *</span> son obligatorios</p>
                           </div>
                            <div class=" col-12 col-sm-6">
                                <!-- Nombre -->
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text"class="form-control" id="name" placeholder="a" name="name" value="{{old('name', $product->name)}}" >
                                    <label for="name" class="col-form-label ms-2">Nombre de la producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- Hay un problema que si dejo una de las opciones vacias esto sin embargo escribe en la base de datos. No se me ocurrio otra solucion mas que separar lo 2 campos en la BD. Pero no se como hacerlo desde aca --}}
                                <!-- Descripcion Corta -->
                                <div class="mb-3 form-floating">
                                    <input class="form-control" id="descript-corta" placeholder="a" name="descript[]" value="{{old('descript.1',$product->descript[0])}}">
                                    <label for="descript-corta" class="col-form-label ms-2">Descripción del Producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('descript')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Descripcion Larga-->
                                <div class="mb-3 form-floating">
                                    <textarea class="form-control" id="descript-larga" placeholder="a" name="descript[]" rows="5" style="height:100%;">{{old('descript.1',$product->descript[1])}}</textarea>
                                    <label for="descript-larga" class="col-form-label ms-2">Descripción del Producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('descript')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class=" col-12 col-sm-6">
                                <!-- precio -->
                                <div class="mb-3 col-12 form-floating">
                                    <input type="number" class="form-control" id="price" placeholder="1" name="price" value="{{old('price',$product->price)}}">
                                    <label for="price" class="col-form-label ms-2">Precio del Produto<span class="obligatorio fs-4"> *</span></label>
                                    @error('price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- category --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="category" placeholder="a" name="category" value="{{old('category',$product->category)}}">
                                    <label for="category" class="col-form-label ms-2">Nombre de la producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('category')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- imagenes --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="image" placeholder="a" name="image" value="{{old('image',$product->image)}}">
                                    <label for="image" class="col-form-label ms-2">Cargue una Imagen<span class="obligatorio fs-4"> *</span></label>
                                    {{-- <input class="form-control" type="file" id="imagen" name="imagen"> --}}
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- descripcion de imagen --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="altImage" placeholder="a" name="altImage" value="{{old('altImage',$product->altImage)}}">
                                    <label for="altImage" class="col-form-label ms-2">Descripcion de la imagen<span class="obligatorio fs-4"> *</span></label>
                                    @error('altImage')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
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