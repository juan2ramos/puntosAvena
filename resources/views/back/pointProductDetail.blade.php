@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')

    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin"> ← inicio</a>
    </div>
    <div class="Table-title row between middle">
        <h1>{{$point->name}}</h1>

        <div class="row">
            <button id="submit" href="" class="Button Button-blue">Actualizar</button>
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

            <form action="/admin/puntos/reporte" method="post" id="Form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <article class="Invoice-area">
                    <h3>Ingrese el inventario de hoy  </h3>
                    <div class="row arrow ProductsForm">
                        @foreach($point->stockDay as $product)
                            <div class="col-4">
                                @php($old = old(str_replace(' ','_',$product->name )))
                                <label for="{{$product->name}}" class=" row middle">
                                    <input id="{{$product->name}}" type="number"
                                           value="{{($old)?$old:$product->stock->quantity}}"
                                           name="{{$product->name}}"
                                           placeholder="Valor"
                                           data-id="{{$product->id}}"
                                           class="addForm"
                                    >
                                    <span>{{$product->name}}</span>
                                </label>

                            </div>
                        @endforeach
                    </div>
                </article>
            </form>
    </section>

@endsection
@section('scripts')
    <script>

        const form = document.getElementById('Form'),
            submit = document.getElementById('submit'),
            dataform = document.querySelectorAll('.addForm');

        submit.addEventListener('click', function (e) {
            e.preventDefault();

            swal({
                title: "¿Estás seguro de enviar el inventarío?",
                text: "Recuerda que una vez enviado no podrás modificarlo",
                icon: "warning",
                buttons: ["¡No, cancelar!", "¡Si, envíalo!"],
                dangerMode: true,
            }).then(function (isConfirm) {
                if (isConfirm) {
                    actionsClass(dataform, function (el) {
                        addHidden(el.dataset.id, el.value)
                    });
                    form.submit();
                }
            });


        });


        function addHidden(key, value) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = "ids[" + key + "]";
            input.value = value;
            form.appendChild(input);
        }

        function actionsClass(array, callback, scope) {
            [].map.call(array, function (el) {
                callback.call(scope, el, array[el]);
            });
        };
    </script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection