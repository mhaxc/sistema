@extends('adminlte::page')


@section('title', 'dashboard')

@section('content_header')
    <h4>Novo dentista</h4>
<br/>


    <div class="painel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
        @endif
<br/>
    {!!Form::open(['url'=>'dentistas/store'])!!}


        {!! Form::label('nome','Nome') !!}
            {!!Form::input('text','nome','',['class'=>'form-control','autofocus','placeholder' =>'nome']) !!}

        {!! Form::label('telefone','Telefone') !!}
             {!!Form::input('number','telefone','',['class'=>'form-control','','placeholder' =>'telefone']) !!}

        {!! Form::label('email','Email') !!}
             {!!Form::input('text','email','',['class'=>'form-control','','placeholder' =>'email']) !!}

        {!! Form::label('senha','Senha') !!}
            {!!Form::input('number','senha','',['class'=>'form-control','','placeholder' =>'senha']) !!}<br>

            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}


    {!!Form::close()!!}
    </div>
@stop

@section('content')


@stop