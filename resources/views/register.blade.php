RegisterController<?php

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
                <div class="col col-md-4 p-4 shadow p-3 mb-5 bg-body-tertiary rounded">
                    <form action="{{route('actions.register')}}" method="POST">
                        @csrf
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="a" value="{{old('name')}}">
                            <label for="name" class="form-label">Nombrede Usuario</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="a" value="{{old('email')}}">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="a">
                            <label for="password" class="form-label">Contraseña</label>
                        </div>

                        <button type="submit" class="btn btn-komei mb-3 fw-bold ms-auto w-100">Registrarse</button>
                        <a href="{{route('login')}}"><p class="btn btn-komei bg-success-subtle fw-bold ms-auto w-100">Login</p></a>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-storeTemplate>