@extends('layouts.front')

@section('content')


    <form class="LoginForm row middle center" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="col-16 medium-16 small-16">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h1>Recuperar la contraseña</h1>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail </label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                           required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row between">
                <button type="submit">Enviar contraseña</button>
            </div>

        </div>
    </form>

@endsection
