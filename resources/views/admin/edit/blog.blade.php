<?php

/**
 * @var Illuminate\Support\ViewErrorBad $errors
 * @var /App/Models/Blog[] | Illuminate\Database\Eloquent\Collection  $blog
*/
?>


<x-adminTemplate>

    <x-slot:title>{{'Modificacion de  :: ' . $blog->name . ' :: '}}</x-slot:title>

    <section class="abm container-fluid container-md pb-3" id="abm">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Alta, Baja y Modificacion de Noticias</h2>
        <p class="fs-5 w-75 text-center mx-auto">Administrador de Noticias principales de la tienda</p>
        <div class="listado pb-3">
            <article>
                <div class="row g-4 my-2 container mx-auto">
                    <!-- form -->
                    <form action="{{ route('actions.edit.blog', $blog->id) }}" method="POST">
                        @csrf
                        <div class="row align-items-start">
                            <!-- Titulo -->
                            @if($errors->any())
                                <div class="alert alert-danger text-center">Hubo un error en la carga del formulario</div>
                            @endif
                            <div class="mb-3">
                                <h3 class='text-center fw-bold text-capitalize '>Noticias</h3>
                                <p class="text-center">Los campos marcados con <span class="obligatorio fs-4"> *</span> son obligatorios</p>
                           </div>
                            <div class=" col-12 col-sm-6">
                                <!-- Nombre -->
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text"class="form-control" id="title" placeholder="a" name="title" value="{{old('title', $blog->title)}}" >
                                    <label for="title" class="col-form-label ms-2">Nombre de la producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Blog -->
                                <div class="mb-3 form-floating">
                                    <textarea class="form-control" id="blog-text" placeholder="a" name="blog" rows="4" style="height:100%;">{{old('blog',$blog->blog)}}</textarea>
                                    <label for="blog-text" class="col-form-label ms-2">Descripción del Producto<span class="obligatorio fs-4"> *</span></label>
                                    @error('blog')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class=" col-12 col-sm-6">
                                {{-- imagenes --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="image" placeholder="a" name="image" value="{{old('image',$blog->image)}}">
                                    <label for="image" class="col-form-label ms-2">Cargue una Imagen<span class="obligatorio fs-4"> *</span></label>
                                    {{-- <input class="form-control" type="file" id="imagen" name="imagen"> --}}
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- descripcion de imagen --}}
                                <div class="mb-3 col-12 form-floating">
                                    <input type="text" class="form-control" id="altImage" placeholder="a" name="altImage" value="{{old('altImage',$blog->altImage)}}">
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