@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deseja nos reportar algo?') }}</div>

                <div class="card-body">
                @if (\Session::has('success'))
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="alert alert-success text-center">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                    <form method="POST" action="/contatos/inserir" aria-label="{{ __('Formulário de report') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Dê um título') }}</label>
                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ old('titulo') }}" required autofocus>
                                <small id="tituloHelp" class="form-text text-muted">Digite um título que identifique seu report.</small>
                                @if ($errors->has('titulo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Digite seu email') }}</label>
                            <div class="col-md-6">
                                @guest
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @else
                                <input id="email" type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" required autofocus disabled>
                                @endguest
                                <small id="tituloHelp" class="form-text text-muted">Digite um título que identifique seu report.</small>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
                            <div class="col-md-6">
                                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}"></textarea>
                                <small id="descricaoHelp" class="form-text text-muted">Escreva um breve resumo de seu report.</small>
                                @if ($errors->has('descricao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar!') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
