@extends('adminlte::page')

@section('title', 'listado de productos')

@section('content_header')
    <h1>Listado de productos</h1>
@stop

@section('content')
    @livewire('admin.product-index')
@stop

@section('css')

@stop

@section('js')

@stop
