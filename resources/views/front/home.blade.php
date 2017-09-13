@extends('layouts.front')

@section('content')
    <form method="POST" class="LoginForm row middle center" action="{{ route('login') }}">

        <div class="col-16 medium-16 small-16">
            {{ csrf_field() }}
            <h1>Iniciar sesión</h1>
            <div>
                <label for="email">Introduce tu e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span  class="Error">¡{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="Error"> {{ first('password') }}</span>
                @endif

                <div class="row between">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                    </label>
                    <button type="submit">Iniciar sesión</button>
                </div>
                <div class="LoginForm-links">
                    <a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>


                </div>
            </div>
            <div>

            </div>

        </div>
    </form>
@endsection
@section('scripts')
@endsection