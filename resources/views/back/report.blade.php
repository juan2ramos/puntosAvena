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
                                @foreach($points as $key => $point)
                                    <option value="{{$key}}">{{$point}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="col-5 offset-1">
                        <label for="date">
                            <span>Elige un rango de fechas</span>
                            <input type="text" name="date" id="date">
                        </label>
                    </div>
                    <div class="col-2 offset-1">
                        <span></span>
                        <button  class="Button Button-blue" style="margin-top: 10px"> Enviar solicitud</button>
                    </div>
                </div>
            </article>

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
            mode: "range",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
