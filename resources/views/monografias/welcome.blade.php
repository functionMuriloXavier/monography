@extends('layouts.app')
@section('content')
<div class="container-fluid">
    @if (\Session::has('success'))
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert-success text-center">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            </div>
        </div>
    @elseif(\Session::has('error')) 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert-danger text-center">
                    <p>{{ \Session::get('error') }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="row justify-content-center text-center">
        <div class="col-lg-10 col-md-12 col-sm-12" style="padding: 50px 0 50px 0;">
            <h1 class="h1 text-center" style="color: #666;">Monografias.</h1>
            <p class="text-center" style="color: #666;">Visualize as monografias já hospedadas em nosso sistema.</p>
            
            @guest
                <p class="btn btn-dark" style="cursor: default;">Quero adicionar uma monografia
                <small class="form-text text-muted" style="color: #FFF;">Apenas para usuários registrados.</small>
                </p>
            @else 
                <a class="btn btn-primary" href="/monografias/inserir">Quero adicionar uma monografia</a>
            @endguest
            
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($monografias as $monografia)
        <div class="col-lg-4 col-md-6 col-sm-12" style="padding-top: 10px;">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">{{ $monografia->nome }}</h5>
                    <p class="card-text">Hospedado por {{ $monografia->user->name }}</p>
                    <a href="{{ asset('/storage/'.$monografia->url) }}" class="btn btn-primary">Visualizar</a>
                    @if(Auth::id() == $monografia->user->id)
                    <a href="/monografias/remover/{{ $monografia->id }}" class="btn btn-danger">Remover</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection