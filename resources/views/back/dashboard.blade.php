@extends('layouts.back')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink active" href="clientes"> Inicio</a>
    </div>

    <section class="Table">
        <h3>Inventario {{$today}} puntos {{$points->count()}} de {{$pointAll}}</h3>
        <div class="Table-header row around marginTop-20">
            <div class="col-1">ID</div>
            <div class="col-5">Nombre punto</div>
            <div class="col-7">Dirección</div>
            <div class="col-3 center">Accion</div>
        </div>

        @foreach($points as $point)
            <div class="Table-row row around " style="cursor: auto">
                <div class="col-1">{{$point->id}}</div>
                <div class="col-5">{{$point->name}}</div>
                <div class="col-7">{{$point->address}}</div>
                <div class="col-3 center">
                    <a class="Button Button-blue" href="/admin/puntos/reporte/{{$point->id}}">
                        Ver detalle
                    </a>
                </div>
            </div>
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