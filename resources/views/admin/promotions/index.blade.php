@extends('adminlte::page')

@section('title', 'listado de promociones')

@section('content_header')
    <h1>Listado de promociones (Banner)</h1>
@stop

@section('content')
    @livewire('admin.promotion-index')
@stop

@section('css')
    {{-- Toastr.js --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
    {{-- TOASTR --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.success("{{ session('info') }}");
        
        @endif
    </script>
@stop
