@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')
    <form action="/admin/productos/eliminar" method="post" id="formDelete">
        {{csrf_field()}}
        <input type="hidden" name="idProduct" id="idProduct" value="{{$product->id}}">
    </form>
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin/productos"> ← Productos</a>
    </div>
    <div class="Table-title row between middle">
        <h1>{{$product->name}}</h1>
        @can('update')
            <div class="row">
                <button id="deleteProduct" href="" class="Button Button-red">Eliminar</button>
                <button id="submit" href="" class="Button Button-blue">Guardar</button>
            </div>
        @endcan
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

        <form action="/admin/productos/editar" method="post" id="productForm" enctype="multipart/form-data">
            {{ csrf_field() }}
            <article class="Invoice-area">
                <h3>Datos básicos</h3>
                <div class="row arrow between">
                    <div class="col-7">
                        <label for="name">
                            <span>Nombre</span>
                            <input id="name" type="text" value="{{old('name')?old('name'):$product->name}}" name="name"
                                   placeholder="Introduce el nombre">
                        </label>
                        <div class="Invoice-tax">
                            <input id="count" class="Invoice-tax" type="checkbox"
                                   {{old('count')?'checked':(($product->count == 'Si')?'checked':'')}}  value="1"
                                   name="count">
                            <label for="count" class="Invoice-taxLabel">
                                <span>Contabilizar al total</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-7">
                        <label for="description">
                            <span>Descripción</span>
                            <textarea name="description" placeholder="Introduce una descripción"
                            >{{old('description')?old('description'):$product->description}}</textarea>
                        </label>
                    </div>
                </div>

            </article>


        </form>

    </section>

@endsection
@section('scripts')
    <script>
        const form = document.getElementById('productForm'),
            deleteProduct = document.getElementById('deleteProduct'),
            submit = document.getElementById('submit');

        submit.addEventListener('click', function (e) {
            e.preventDefault();
            form.submit();
        });

        deleteProduct.addEventListener('click', function (e) {
            swal({
                title: "¿Estás seguror de eliminar este usuario?",
                text: "Una vez eliminado, no podrá recuperarlo",
                icon: "warning",
                buttons: ["No, cancelar!", "Si, eliminalo!"],
                dangerMode: true,
            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.querySelector('#formDelete').submit();
                }
            });
        })

    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection