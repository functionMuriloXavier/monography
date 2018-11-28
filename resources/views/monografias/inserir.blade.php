@extends('layouts.app')

@section('content')

@guest 
    <script>window.location = "/monografias";</script>
@endguest

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inserir uma monografia') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/monografias/inserir" aria-label="{{ __('Inserir uma monografia') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Monografia') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                                <small id="nomeHelp" class="form-text text-muted">Digite o nome completo da monografia.</small>
                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Monografia') }}</label>
                            <div class="col-md-6">
                                <select required autofocus name="categoria" id="categoria" class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}">
                                    <option value=""></option>
                                    <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                                    <option value="Ciências da Natureza">Ciências da Natureza</option>
                                    <option value="Tecnologia Administrativas">Ciências Administrativas</option>
                                </select>
                                <small id="categoriaHelp" class="form-text text-muted">Selecione o tipo de monografia.</small>
                                @if ($errors->has('categoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
                            <div class="col-md-6">
                                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}"></textarea>
                                <small id="descricaoHelp" class="form-text text-muted">Escreva um breve resumo de sua monografia.</small>
                                @if ($errors->has('descricao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Arquivo') }}</label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required autofocus>
                                <small id="fileHelp" class="form-text text-muted">Carregue sua monografia neste campo.</small>
                                @if ($errors->has('url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
