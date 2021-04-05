@extends('layouts.app',["current"=>"home"])
@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você Cadastra todos os seu produtos.
                            Só não esqueça de cadastrar previamente as categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus Produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Aqui você Cadastra todas as suas categorias.
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre suas Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection