@extends('adminlte::page')

@section('title', "Plano {$plan->name}")

@section('content_header')
    <h1>Plano {{ $plan->name }}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('plans.index') }}">Voltar <<</a>
        </div>
        <div class="card-body">

            <ul>
                <li>
                    <strong>Nome:</strong> {{ $plan->name }}
                </li>
                <li>
                    <strong>Url:</strong> {{ $plan->url }}
                </li>
                <li>
                    <strong>Preço:</strong> R$ {{  number_format($plan->price, 2, ',', '.') }}
                </li>
                <li>
                    <strong>Descrição:</strong> {{ $plan->description }}
                </li>
            </ul>

        </div>
        <div class="card-footer">
            <form action="{{ route('plans.destroy', $plan->url) }}" method="DELETE">
                @method('DELETE')
                @csrf


                <button type="submit" class="btn btn-danger">Deletar o plano {{ $plan->name }}</button>

            </form>
        </div>
    </div>

@stop

@section('css')
@stop

@section('js')

@stop
