@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin/usuarios"> ← Usuarios</a>
    </div>
    <div class="Table-title row between middle">
        <h1>Nuevo usuario</h1>
        @can('update')
            <div class="row">
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
                                <option value="Administrator" {{(old('role')=='Administrator')?'selected':''}}>
                                    Administrador
                                </option>
                                <option value="Point" {{(old('role')== 'Point')?'selected':''}}>Punto</option>
                                <option value="Viewer" {{(old('role')== 'Viewer')?'selected':''}}>Colaborador</option>
                            </select>
                        </label>
                        <label for="password">
                            <span>Contraseña</span>
                            <input id="password" type="password" value="" name="password">
                        </label>
                        <div class="row arrow marginTop-20" id="product">

                            @foreach($products as $id => $product)

                                <label data-id="{{$id}}" style="padding: 3px 0;  margin: 10px 10px 0 0;" class="col-6"
                                       for="product{{$id}}[id]">
                                    <input style="margin-bottom: 8px"
                                           class="productCheck" id="product{{$id}}['id']" name="product[{{$id}}][id]"
                                           {{ old("product.$id.id")?'checked':''}} value="{{$id}}" type="checkbox">
                                    {{$product}}

                                    @if(old("product.$id.id") )
                                        <label for="price{{$id}}" id="labelPrice{{$id}}">
                                            <input type="text" class="price" placeholder="valor"
                                                   id="price{{$id}}" name="product[{{$id}}][price]"
                                                    value="{{old("product.$id.price") }}">
                                        </label>
                                    @endif
                                </label>

                            @endforeach
                        </div>
                    </div>
                </div>
            </article>


        </form>

    </section>

@endsection
@section('scripts')
    <script src="{{asset('/js/numeral.min.js')}}"></script>
    <script>
        actionsClass(document.querySelectorAll('.price'), function (el) {
            el.addEventListener('change', function () {
                this.value = numeral(this.value).format('$0,0.00');
            });
        })
        const form = document.getElementById('userForm'),
            submit = document.getElementById('submit'),
            address = document.getElementById('address'),
            product = document.getElementById('product'),
            role = document.getElementById('role');
        if (submit) {
            submit.addEventListener('click', function (e) {
                e.preventDefault();
                form.submit();
            });
        }
        role.addEventListener('change', function () {

            if (this.options[this.selectedIndex].value == 'Point') {
                address.classList.remove('hidden')
                product.classList.remove('hidden')
            } else {
                address.classList.add('hidden')
                product.classList.add('hidden')
            }
        })
        actionsClass(document.querySelectorAll('.productCheck'), function (el) {

            el.addEventListener('change', function () {
                var id = this.parentElement.dataset.id;
                if (this.checked) {
                    var label = document.createElement('label'),
                        inputPrice = document.createElement('input');
                    label.setAttribute("for", "price" + id);
                    label.setAttribute("id", "labelPrice" + id);
                    inputPrice.setAttribute("type", "text");
                    inputPrice.className = "price";
                    inputPrice.setAttribute("placeholder", "valor");
                    inputPrice.setAttribute("id", "price" + id);
                    inputPrice.setAttribute("name", "product[" + id + "][price]");
                    inputPrice.addEventListener('change', function () {
                        this.value = numeral(this.value).format('$0,0.00');
                    });
                    label.appendChild(inputPrice);
                    this.parentElement.insertBefore(label, this.nextSibling.nextSibling);
                } else {
                    document.getElementById('price' + id).remove()
                }
            })
        })

        function actionsClass(array, callback, scope) {
            [].map.call(array, function (el) {
                callback.call(scope, el, array[el]);
            });
        };

    </script>
@endsection