@extends('layouts.app')

@section('title', 'Adicionar produto')

@section('content')

    @if(count($errors) > 0)
        <br />
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Adicionar novo produto</h1>
    {{Form::open(['action' => 'ProdutosController@store'])}}

    {{Form::label('referencia', 'Referência')}}
    {{Form::text('referencia', '', ['class' => 'form-control', 'required', 'placeholder' => 'Referência'])}}<br />

    {{Form::label('titulo', 'Título')}}
    {{Form::text('titulo', '', ['class' => 'form-control', 'required', 'placeholder' => 'Título'])}}<br />

    {{Form::label('descricao', 'Descrição')}}
    {{Form::textarea('descricao', '', ['rows' => 3, 'class' => 'form-control', 'required', 'placeholder' => 'Descrição'])}}<br />

    {{Form::label('preco', 'Preço')}}
    {{Form::text('preco', '', ['class' => 'form-control', 'required', 'placeholder' => 'Preço'])}}<br />

    {{Form::submit('Enviar', ['class' => 'btn btn-default'])}}
    {{Form::reset('Limpar', ['class' => 'btn btn-default'])}}

    {{Form::close()}}
@endsection