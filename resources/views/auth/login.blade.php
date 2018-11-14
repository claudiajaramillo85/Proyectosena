@extends('layouts.app')


@section('content')

<div class="container">               
    <div class="row justify-content-center">
        <div class="col-md-7">
            
                <div class="card-header-proyectosena text-lg-center">{{ __('INGRESO AL SISTEMA') }}</div>

                <div class="card-body">
                    
                        @csrf

                        <div class="form-group row">
                            <label for="number" class="col-sm-4 col-form-label text-md-right">{{ __('Documento de Identidad') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-proyectosena">
                                    {{ __('Ingresar') }}
                                </button>

                                <a class="btn btn-link-proyectosena" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu Contraseña?') }}
                                </a>
                            </div>
                        </div>
                    
                </div>
            
        </div>
    </div>
</div>
@endsection
