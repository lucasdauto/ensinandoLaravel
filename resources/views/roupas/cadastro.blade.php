@extends('main.index')

@section('conteudo')
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-6 col-md-offset-3">
            <form>
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                           placeholder="Nome da roupa">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fornecedor">Fornecedor</label>
                    <select class="form-control" name="fornecedor" id="fornecedor">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade em estoque">
                </div>
                <a href="#" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
