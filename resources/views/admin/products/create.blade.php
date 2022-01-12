@extends('adminlte::page')

@section('title', 'creación de productos')

@section('content_header')
    <h1>Creación de productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre del producto') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug del producto') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Se genera automaticamnte...', 'readonly']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoría') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la categoría del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Precio normal') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del producto...']) !!}
            </div>

            <div id="offer" class="form-group" hidden>
                {!! Form::label('offer_price', 'Precio en oferta') !!}
                {!! Form::text('offer_price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio en oferta del producto...']) !!}
            </div>

            <h2 class="text-secondary">Caracteristicas del producto <i class="fas fa-couch"></i></h2>
            <div class="form-group">
                {!! Form::label('width', 'Ancho') !!}
                {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ancho del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('long', 'Largo') !!}
                {!! Form::text('long', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el largo del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('high', 'Alto') !!}
                {!! Form::text('high', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el alto del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('warranty', 'Garantia') !!}
                {!! Form::text('warranty', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tiempo de garantia del producto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Enlace de compra') !!}
                {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el enlace para hacer la compra del producto...']) !!}
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Estado del producto</p>
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>
            </div>

            <button class="btn btn-primary"><i class="fas fa-pen-square mr-2"></i>Crear prdocuto</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    {{-- StringToSlug --}}
    <script src="{{ asset('./vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    {{-- Ofertas --}}
    <script>
        $(function() {
            $('#category_id').on('change', onOffer);
        });

        function onOffer() {
            var category = $(this).val();
            if (category == 1) {
                $('#offer').attr('hidden', false)
            } else {
                $('#offer').attr('hidden', true)
            }
        }
    </script>
@stop
