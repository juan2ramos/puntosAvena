@extends('layouts.back')

@section('content')

    <div class="Table-title row between middle marginTop-20">
        <h1>Productos para el dia hoy</h1>

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

        <form action="/admin/productos/punto" method="post" id="Form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <article class="Invoice-area">
                <h3>Productos</h3>
                <div class="row arrow between ProductsForm">
                    @foreach($products as $product)
                        <div class="col-5">
                            <label for="{{$product->name}}" class=" row middle">
                                <input style="max-width: 80px; margin: 10px" id="{{$product->name}}" type="number" value="{{old('name')}}"
                                       name="{{$product->name}}"
                                       placeholder="Valor">
                                <span>{{$product->name}}</span>

                            </label>

                        </div>
                    @endforeach
                </div>
            </article>


        </form>

    </section>
@endsection
@section('styles')
    @if(session('success'))
        <link rel="stylesheet" href="{{url('css/sweetalert.css')}}">
    @endif
@endsection
@section('scripts')
    @if(session('success'))
        <script src="{{url('js/sweetalert.min.js')}}"></script>
        <script>
            swal({{session('success')}}, "", "success")
        </script>
    @endif
@endsection