@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="background: url({{ asset('images/m01.jpg') }}) no-repeat left center; background-size: cover;">
            <blockquote class="blockquote text-center" style="padding: 100px 0 100px 0; font-size: 2em;">
                <p class="mb-0" style="color: white;">Uma forma de auxiliar as pessoas a crescerem em sua escrita.</p>
                <footer class="blockquote-footer" style="color: white;">Bem vindo ao <cite title="Source Title">Monography</cite>!</footer>
            </blockquote>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12" style="padding: 50px 0 50px 0;">
            <h1 class="h1 text-center" style="color: #666;">Um espaço para você contemplar seu projeto.</h1>
            <p class="text-center" style="color: #666;">Aqui você pode visualizar monografias feitas, obter dicas de nossos membros e hospedar seu trabalho!</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-12" style="padding-top: 10px;">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('images/m02.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Monografias</h5>
                    <p class="card-text">Visualize as monografias disponibilizadas nesta seção.</p>
                    <a href="/monografias" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12" style="padding-top: 10px;">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('images/m03.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dicas</h5>
                    <p class="card-text">Fique por dentro das nossas dicas sobre bons artigos e boas monografias.</p>
                    <a href="/dicas" class="btn btn-primary">Espiar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12" style="padding-top: 10px;">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('images/m04.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Contate-nos</h5>
                    <p class="card-text">Possui alguma dúvida, sugestão ou report para informar? Acesse esta seção.</p>
                    <a href="/contatos" class="btn btn-primary">Reportar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection