
@extends('layouts.app')


@section('content')

<div class="flex-center position-ref">
    
    <div class="content">
        <div class="title m-b-md">
            GESTIÓN DE PORTATILES
        </div>

        <div class="links">
            <a href="https://oferta.senasofiaplus.edu.co"><img src="imgs/logosena.png" width="100px"></a>
            
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <div class="card-body">
                     <form method="POST" action="{{ route('login') }}">
                    
                        @csrf

                        <div class="form-group row">
                            <label for="number" class="col-sm-6 col-form-label text-md-right">{{ __('Identificación') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
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

                            </div>
                        </div>
                    
                    </div>
            
                </div>
            </form>
        </div>
    </div>
</div>



@endsection