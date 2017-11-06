@extends('layouts.back')

@section('content')
    <div class="Table-title row between middle marginTop-20">
        <h1>Reporte</h1>
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
        <form action="/admin/reportes" method="post">
            {{csrf_field()}}
            <article>
                <div class="row arrow  middle">

                    <div class="col-5">
                        <label id="income_category_id" class="col-7  Label-select">
                            <span>Eliga un punto</span>

                            <select name="point" id="">
                                <option value="">Elige una opción</option>
                                @foreach($pointsName as $key => $point)
                                    <option value="{{$key}}">{{$point}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="col-5 offset-1">
                        <label for="date">
                            <span>Elige la fecha</span>
                            <input type="text" name="date" id="date">
                        </label>
                    </div>
                    <div class="col-2 offset-1">
                        <span></span>
                        <button class="Button Button-blue" style="margin-top: 10px"> Enviar solicitud</button>
                    </div>
                </div>
            </article>
            @if(isset($points))
                <article>

                    <h3>Puntos</h3>
                    <div class="Table-header row around marginTop-20">
                        <div class="col-1">ID</div>
                        <div class="col-5">Nombre punto</div>
                        <div class=" {{(isset($date)?'col-5':'col-7')}}">Dirección</div>
                        @if(isset($date))
                            <div class="col-2 center">Fecha</div>
                        @endif
                        <div class="col-3 center">Accion</div>
                    </div>

                    @foreach($points as $point)
                        <div class="Table-row row around " style="cursor: auto">
                            <div class="col-1">{{$point->id}}</div>
                            <div class="col-5">{{$point->name}}</div>
                            <div class="{{(isset($date)?'col-5':'col-7')}}">{{$point->address}}</div>
                            @if(isset($date))
                                <div class="col-2 center">{{$date}}</div>
                            @endif
                            <div class="col-3 center">
                            <a class="Button Button-blue" href="/admin/puntos/reporte/{{$point->id}}/{{$date}}">
                                    Ver detalle
                                </a>
                            </div>
                        </div>
                    @endforeach
                </article>
            @endif
        </form>
    </section>

@endsection
@section('styles')
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
@endsection

@section('scripts')
    <script src="https://unpkg.com/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr@4.0.6/dist/l10n/es.js"></script>
    <script>
        flatpickr("#date", {
            "locale": "es",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
