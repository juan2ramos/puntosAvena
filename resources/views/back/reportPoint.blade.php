@extends('layouts.back')

@section('content')

    <div class="Table-title row between middle marginTop-20">
        <h1>Inventario de productos</h1>
        @if(isset($products))
            <div class="row">
                <button id="submit" href="" class="Button Button-blue">Guardar</button>
            </div>
        @endif
    </div>
    <section class="Invoice">
        <article>

            <h3>Inventarios del día de {{$day[0]}}  {{$day[1]}} </h3>
            <div class="row arrow ProductsBack">
                @foreach($pointProducts as $pointProduct)
                    <div class="col-4">
                        <em>{{$pointProduct->stock->quantity}}</em>
                        {{$pointProduct->name}}
                    </div>
                @endforeach
            </div>
        </article>
        @if(isset($products))
            @if($errors->any())
                <div class="Errors">
                    @foreach($errors->all() as $error)
                        <div>
                            {{$error}}
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="/admin/productos/punto" method="post" id="Form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <article class="Invoice-area">
                    <h3>Ingrese el inventario de hoy {{$today}} </h3>
                    <div class="row arrow ProductsForm">
                        @foreach($products as $product)
                            <div class="col-4">
                                <label for="{{$product->name}}" class=" row middle">
                                    <input id="{{$product->name}}" type="number"
                                           value="{{old(str_replace(' ','_',$product->name ))}}"
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
        @endif
    </section>
@endsection
@section('styles')
    @if(session('success'))
        <link rel="stylesheet" href="{{url('css/sweetalert.css')}}">
    @endif
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


@endsection