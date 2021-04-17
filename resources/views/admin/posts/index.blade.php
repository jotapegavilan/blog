@extends('adminlte::page')

@section('title', 'Todos mis post')

@section('content_header')
<a class="btn btn-primary  float-right" href="{{route('admin.posts.create')}}">Crear post</a>
    <h1>Lista de Posts</h1>
@stop

@section('content')
    @livewire('admin.post-index')
@stop
@livewireStyles
        <link rel="stylesheet"
            href="{{ mix('css/app.css') }}">

<script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts

