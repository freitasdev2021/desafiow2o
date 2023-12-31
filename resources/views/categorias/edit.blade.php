@extends('layouts.appinterno')

@section('content')

<div class="col-sm-12 container p-3">
    <form id="formCategorias" class="form-controls">
        @csrf
        @method('POST')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <input type="hidden" name="idcat" value="{{$categoria->id}}">
        <input type="hidden" name="IDContaPagar">
        <div class="row">
            <div class="col-sm-4 input">
                <label>Nome da Categoria</label>
                <input type="text" name="nomeCategoria" class="form-control" minlength="5" maxlength="50" value="{{$categoria->NMCategoria}}">
                <div class="error-input text-danger">
                Preenchimento incorreto!
                </div>
            </div>
            <div class="col-sm-4 input">
                <br>
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection