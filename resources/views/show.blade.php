@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Produto</h1>
    <div class="mb-3">
        <label class="form-label">Nome:</label>
        <p>{{ $produto->nome }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Categoria:</label>
        <p>{{ $produto->categoria->nome }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Preço:</label>
        <p>{{ $produto->preco }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrição:</label>
        <p>{{ $produto->descricao }}</p>
    </div>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
