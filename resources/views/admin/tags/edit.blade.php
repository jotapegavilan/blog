@extends('adminlte::page')

@section('title', 'Editar categoría')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($tag, ['route' => ['admin.tags.update',$tag],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoría']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>          
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoría']) !!}
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>     
            <div class="form-group">
                {!! Form::label('color', 'Nombre') !!}
                {!! Form::text('color', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoría']) !!}
                @error('color')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>       
            {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
