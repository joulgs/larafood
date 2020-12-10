@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Novo Plano</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            
            <table class="table table-condensed">
                <thead>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="100px" >Ações</th>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                {{ $plan->price }}
                            </td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fa fa-eye"></i> VER</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            {!! $plans->links('pagination::bootstrap-4') !!}    
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>console.log('Hi!')</script>
@stop
