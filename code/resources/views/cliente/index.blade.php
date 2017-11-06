@extends('layouts.app')

@section('title', 'Listagem de clientes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes</div>

                <div class="panel-body">
                    <ul>
                        @foreach($clientes as $cliente)
                        <li><a href="//laravel.local/clientes/{{$cliente->id}}">{{$cliente->nome}} {{$cliente->sobrenome}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection