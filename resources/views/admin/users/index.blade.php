@extends('adminlte::page')

@section('title', 'Dashboard blog')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@livewireStyles
        <link rel="stylesheet"
            href="{{ mix('css/app.css') }}">

<script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts