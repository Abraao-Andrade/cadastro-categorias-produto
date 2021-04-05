@extends('layouts.app',["current"=>"produtos"])
@section('body')
    <div class="card-border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque do Produto">
                </div>  
                <div class="form-group">
                    <label for="precoProduto">Preco do Produto</label>
                    <input type="text" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço do Produto">
                </div>  
                <div class="form-group">
                    <label for="categoriasProduto">Categorias</label>
                    <select class="form-control" id="categoriaProduto" name="categoriaProduto">
                      @foreach ($cats as $c)
                          <option value="{{$c->id}}">{{$c->nome}}</option>
                      @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn-danger btn-sm">Apagar</button>
            </form>
        </div>
    </div>
@endsection