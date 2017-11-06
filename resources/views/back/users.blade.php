@extends('layouts.back')

@section('content')
    <div class="col-16 row TitleBar">
        <a class="TitleBar-navLink active" href="clientes">Usuarios</a>
    </div>
    <div class="Table-title row">
        @if(isset($products))
            <a class="Button Button-blue" href="/admin/usuarios/nuevo">Nuevo usuario</a>
        @endif
        <input placeholder="Buscar usuario" type="search" class="Search">
    </div>
    <section class="Table">

        <div class="Table-header row around ">
            <div class="col-3">Nombre</div>
            <div class="col-3">Rol</div>
            <div class="col-3">Email</div>
        </div>

        @foreach($users as $user)
            <a href="/admin/usuarios/{{$user->id}}/editar" class="Table-row row around ">
                <div class="col-3">{{$user->name}}</div>
                <div class="col-3">{{$user->roles->first()->name}}</div>
                <div class="col-3">{{$user->email}}</div>
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