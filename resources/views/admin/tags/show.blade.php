@extends('adminlte::page')

@section('title', 'Ver categoría')

@section('content_header')
    <h1>Ver etiqueta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($tag, ['route' => ['admin.tags.update',$tag],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=>'form-control','readonly']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>          
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control','readonly']) !!}
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>     
            <div class="form-group">
                {!! Form::label('color', 'Nombre') !!}
                {!! Form::text('color', null, ['class'=>'form-control','readonly']) !!}
                @error('color')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>                  
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop