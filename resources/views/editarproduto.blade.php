@extends('layouts.app',["current"=>"produtos"])
@section('body')
    <div class="card-border">
        <div class="card-body">
            <h5 class="card-title">Editar Produto</h5>
            <form action="/produtos/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" value="{{$prod->nome}}">
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="text" class="form-control" id="estoqueProduto" name="estoqueProduto" value="{{$prod->estoque}}">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="text" class="form-control" id="precoProduto" name="precoProduto" value="{{$prod->preco}}">
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