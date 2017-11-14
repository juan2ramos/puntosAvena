@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')

    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin"> ← inicio</a>
    </div>
    <div class="Table-title row between middle">
        <h1>{{$point->name}}</h1>
        @can('update')
            <div class="row">
                <button id="submit" href="" class="Button Button-blue">Actualizar</button>
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

        <form action="/admin/puntos/reporte" method="post" id="Form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <article class="Invoice-area">
                <h3>Ingrese el inventario de {{isset($date)?$date:'hoy'}}  </h3>
                <div class="row arrow ProductsForm">
                    @foreach($point->stockForDay as $product)
                        <div class="col-4">

                            <span>{{$product->name}}</span>
                            <label for="{{$product->name}}" class=" row middle">
                                <em>cantidad disponible</em>
                                <input id="{{$product->name}}" type="number"
                                       value="{{(old('quantity' . $product->id))?old('quantity' . $product->id):$product->stock->quantity}}"
                                       style="min-width: 138px;"
                                       name="quantity{{$product->id}}"
                                       placeholder="Cantidad disponible"
                                       data-id="{{$product->id}}"
                                       data-name="quantity"
                                       class="addForm"
                                >
                                <em>cantidad vendida</em>
                                <input type="number"
                                       style="min-width: 138px;"
                                       value="{{(old('sold' . $product->id))?old('sold' . $product->id):$product->stock->sold}}"
                                       name="sold{{$product->id}}"
                                       placeholder="Cantidad vendida"
                                       data-id="{{$product->id}}"
                                       data-name="sold"
                                >
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
                        addHidden(el.dataset.id, el.value, el.dataset.name)
                        var elNext = el.nextSibling.nextSibling.nextSibling.nextSibling;
                        addHidden(elNext.dataset.id, elNext.value, elNext.dataset.name)

                    });
                    form.submit();
                }
            });


        });


        function addHidden(key, value, data) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = "ids[" + key + "][" + data + "]";
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