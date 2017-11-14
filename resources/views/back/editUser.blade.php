@extends('layouts.back')
@section('title', 'Agencia de Publicidad en Bogotá')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink " href="/admin/usuarios"> ← Usuarios</a>
    </div>
    <form action="/admin/usuarios/eliminar" method="post" id="formDelete">
        {{csrf_field()}}
        <input type="hidden" name="id" id="idUser" value="{{$user->id}}">
    </form>
    <div class="Table-title row between middle">
        <h1>{{$user->name}}</h1>
        @can('update')
            <div class="row">
                <button id="delete" href="" class="Button Button-red">Eliminar</button>
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

        <form action="/admin/usuarios/editar" method="post" id="userForm" enctype="multipart/form-data">
            {{ csrf_field() }}
            <article class="Invoice-area">
                <h3>Datos básicos</h3>
                <div class="row arrow between">
                    <div class="col-7">
                        <label for="name">
                            <span>Nombre</span>
                            <input id="name" type="text" value="{{(old('name'))?old('name'):$user->name}}" name="name"
                                   placeholder="Introduce el nombre">
                        </label>
                        <label for="email">
                            <span>Email</span>
                            <input id="email" type="text" value="{{old('email')?old('email'):$user->email}}"
                                   name="email"
                                   placeholder="Introduce el email">
                        </label>
                        <label id="address" for="address"
                               class="{{(old('role')=='Administrator')?'hidden':($user->roles->first()->name == 'Administrator')?'hidden':''}}">
                            <span>Dirección del punto</span>
                            <textarea name="address" placeholder="Introduce la dirección completa de la empresa"
                            >{{old('address')?old('address'):(isset($user->point->address)?$user->point->address:'')}}</textarea>
                        </label>
                    </div>
                    <div class="col-7">
                        <label for="role" class="col-7"><span>Rol</span>
                            @php($role = ( old('role') )?old('role'):$user->roles->first()->name)
                            <select name="role" id="role">
                                <option value="">Elige una opción</option>
                                <option value="Administrator" {{($role =='Administrator')?'selected':''}}>
                                    Administrador
                                </option>
                                <option value="Point" {{($role == 'Point')?'selected':''}}>Punto</option>
                                <option value="Viewer" {{($role == 'Viewer')?'selected':''}}>Colaborador</option>
                            </select>
                        </label>
                        <label for="password">
                            <span>Contraseña</span>
                            <input id="password" type="password" value="" name="password">
                        </label>
                        <div class="row arrow marginTop-20"
                             id="product">
                            @foreach($products as $id => $product)
                                <label data-id="{{$product->id}}" style="padding: 3px 0;  margin: 10px 10px 0 0;" class="col-6"
                                       for="product{{$product->id}}[id]">
                                    <input style="margin-bottom: 8px" class="productCheck" id="product{{$product->id}}['id']" name="product[{{$product->id}}][id]"
                                           {{old("product.$product->id.id")?'checked':
                                           ( $user->roles->first()->name == 'Point' &&
                                           $user->point->productsAvailable->pluck('id')->contains($product->id)
                                           ?'checked':''
                                           )
                                           }}
                                           value="{{$product->id}}" type="checkbox">
                                    {{$product->name}}
                                    @if(old("product.$product->id.id") || $user->point->productsAvailable->pluck('id')->contains($product->id) )
                                        <label for="price{{$product->id}}" id="labelPrice{{$product->id}}">
                                            <input type="text" class="price" placeholder="valor"
                                                   id="price{{$product->id}}" name="product[{{$product->id}}][price]"
                                                   value="{{old("product.$product->id.id")?old("product.$product->id.price"): $user->point->productsAvailable->find(($product->id) )->avail->price }}">
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
            el.value = numeral(el.value).format('$0,0.00');
            el.addEventListener('change', function () {
                this.value = numeral(this.value).format('$0,0.00');
            });
        })
        const form = document.getElementById('userForm'),
            submit = document.getElementById('submit'),
            address = document.getElementById('address'),
            deleteUser = document.getElementById('delete'),
            product = document.getElementById('product'),
            role = document.getElementById('role');
        if(submit) {
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
        });

        deleteUser.addEventListener('click', function (e) {
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection