@extends('layouts.back')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink active" href="clientes">Productos</a>
    </div>
    <div class="Table-title row">
        @can('update')
        <a class="Button Button-blue" href="/admin/productos/nuevo">Nuevo producto</a>
        @endcan
        <input placeholder="Buscar usuario" type="search" class="Search">
    </div>
    <section class="Table">

        <div class="Table-header row around ">
            <div class="col-1">ID</div>
            <div class="col-3">Nombre</div>
            <div class="col-4">Contabilizado</div>
            <div class="col-8">descipción</div>
        </div>

        @foreach($products as $product)
            <a href="/admin/productos/{{$product->id}}/editar" class="Table-row row around ">
                <div class="col-1">{{$product->id}}</div>
                <div class="col-3">{{$product->name}}</div>
                <div class="col-4">{{$product->count}}</div>
                <div class="col-8">{{$product->description}}</div>
            </a>
        @endforeach
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