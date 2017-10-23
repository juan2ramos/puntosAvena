@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin/usuarios"> ← Usuarios</a>
    </div>
    <div class="Table-title row between middle">
        <h1>Nuevo usuario</h1>

        <div class="row">
            <button id="submit" href="" class="Button Button-blue">Guardar</button>
        </div>
    </div>
    <section class="Invoice">

        @if($errors->any())
            <div class="Errors">
                @foreach($errors->all() as $error)
                    <div>
                        {{$error}}
                    </div>
                @endforeach
            </div>
        @endif

        <form action="/admin/usuarios/nuevo" method="post" id="userForm" enctype="multipart/form-data">
            {{ csrf_field() }}
            <article class="Invoice-area">
                <h3>Datos básicos</h3>
                <div class="row arrow between">
                    <div class="col-7">
                        <label for="name">
                            <span>Nombre</span>
                            <input id="name" type="text" value="{{old('name')}}" name="name"
                                   placeholder="Introduce el nombre">
                        </label>
                        <label for="email">
                            <span>Email</span>
                            <input id="email" type="text" value="{{old('email')}}" name="email"
                                   placeholder="Introduce el email">
                        </label>
                        <label id="address" for="address" class="{{(old('role')=='Administrator')?'hidden':''}}">
                            <span>Dirección del punto</span>
                            <textarea name="address" placeholder="Introduce la dirección completa de la empresa"
                            >{{old('address')}}</textarea>
                        </label>
                    </div>
                    <div class="col-7">
                        <label for="role" class="col-7"><span>Rol</span>
                            <select name="role" id="role">
                                <option value="">Elige una opción</option>
                                <option value="Administrator" {{(old('role')=='Administrator')?'selected':''}}>Administrador</option>
                                <option value="Point" {{(old('role')== 'Point')?'selected':''}}>Punto</option>
                            </select>
                        </label>
                        <label for="password">
                            <span>Contraseña</span>
                            <input id="password" type="password" value="" name="password">
                        </label>
                    </div>
                </div>
            </article>


        </form>

    </section>

@endsection
@section('scripts')
    <script>
        const form = document.getElementById('userForm'),
            submit = document.getElementById('submit'),
            address = document.getElementById('address'),
            role = document.getElementById('role');

        submit.addEventListener('click', function (e) {
            e.preventDefault();
            form.submit();
        });
        role.addEventListener('change',function(){

           if( this.options[ this.selectedIndex].value == 'Point'){
               address.classList.remove('hidden')
           }else{
               address.classList.add('hidden')
           }
        })



    </script>
@endsection