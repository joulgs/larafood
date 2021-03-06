@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Cadastrar novo plano</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">

            <form action=" {{ route('plans.store') }} " class="form" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome do Plano">    
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição">    
                </div>
                <div class="form-group">
                    <label>Preço:</label>
                    <input type="text" name="price" class="form-control" placeholder="Preço">    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            

            </form>

        </div>
        <div class="card-footer">

        </div>
    </div>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>console.log('Hi!')</script>
@stop
