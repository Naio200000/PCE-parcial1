<?php

?>

<x-storeTemplate>
    <x-slot:title>Iniciar Sesion ::</x-slot:title>
    <section class="login container-fluid container-md">
        <div class="home">
            @if (session()->has('feedback.message'))
                <div class="alert alert-{{session()->get('feedback.type', 'success')}}">{{session()->get('feedback.message')}}</div>
            @endif
            <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center mt-2 mb-5 mx-auto px-2">Inciar Sessión</h2>
            <div class="row my-5 justify-content-center">
                <div class="col col-md-4">
                    <form action="{{route('actions.login')}}" method="POST">
                        @csrf
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="a" value="{{old('email')}}">
                            <label for="email" class="form-label">Ingrese su email</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="a">
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <button type="submit" class="btn btn-komei fw-bold ms-auto">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-storeTemplate>