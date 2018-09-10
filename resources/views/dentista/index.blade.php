@extends('adminlte::page')


@section('title', 'dashboard')

@section('content_header')
    <h4>Dentista</h4>




    <div class="painel-body">
        {!!Form::open(['url'=>'dentistas/create'])!!}

        {!! Form::submit('Novo',['class'=>'btn btn-primary']) !!}

        {!!Form::close()!!}
    </div>

@stop

@section('content')


@stop