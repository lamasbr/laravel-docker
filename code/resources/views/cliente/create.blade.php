@extends('layouts.app')

@section('title', 'Adicionar cliente')

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

    <h1>Adicionar novo cliente</h1>
    {{Form::open(['action' => 'ClientesController@store'])}}

    {{Form::label('nome', 'Nome')}}
    {{Form::text('nome', '', ['class' => 'form-control', 'required', 'placeholder' => 'Nome do cliente'])}}<br />

    {{Form::label('sobrenome', 'Sobrenome')}}
    {{Form::text('sobrenome', '', ['class' => 'form-control', 'required', 'placeholder' => 'Sobrenome do cliente'])}}<br />

    {{Form::label('email', 'E-mail')}}
    {{Form::text('email', '', ['class' => 'form-control', 'required', 'placeholder' => 'E-mail do cliente'])}}<br />
    
    {{Form::label('telefone', 'Telefone')}}
    {{Form::text('telefone', '', ['class' => 'form-control', 'required', 'placeholder' => 'Telefone do cliente'])}}<br />

    {{Form::label('endereco', 'Endereço')}}
    {{Form::textarea('endereco', '', ['rows' => 3, 'class' => 'form-control', 'placeholder' => 'Endereço do cliente'])}}<br />

    {{Form::submit('Enviar', ['class' => 'btn btn-default'])}}
    {{Form::reset('Limpar', ['class' => 'btn btn-default'])}}

    {{Form::close()}}
@endsection