@extends('adminlte::page')

@section('title', 'creación de productos')

@section('content_header')
    <h1>Creación de productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'files' => 'true']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre del producto') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto...']) !!}
                @error('name')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug del producto') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Se genera automaticamnte...', 'readonly']) !!}
                @error('slug')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoría') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la categoría del producto...']) !!}
                @error('category_id')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Precio normal') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del producto...']) !!}
                @error('price')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div id="offer_price" class="form-group" hidden>
                {!! Form::label('offer', 'Precio en oferta') !!}
                {!! Form::text('offer', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio en oferta del producto...']) !!}
                @error('offer')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            {{-- IMAGEN --}}
            <div class="row mb-3 mt-3">

                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="{{ asset('img/noimage.png') }}" alt="Imagen por defecto de los productos">
                    </div>
                </div>


                <div class="col md-form border p-5 border-secondary rounded-lg image d-flex justify-content-center">
                    <div class="form-group file-field d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex align-items-center justify-center mb-3">
                            <i class="fas fa-cloud-upload-alt mr-2 uppercase" aria-hidden="true"></i>
                            {!! Form::label('file', 'Elegir Imagen del producto', ['class' => 'h5', 'accept' => 'image/*']) !!}
                        </div>
                        {!! Form::file('file', ['class' => 'file-field d-flex flex-column justify-content-center align-items-center']) !!}
                        <p class="text-center text-secondary mt-4">
                            La imagen debe tener las dimesiones de <b class="font-weight-bold text-danger">420px de ancho y
                                260px de
                                alto</b>, además de que no deben pesar mas de <b
                                class="font-weight-bold text-danger">5MB</b> para
                            evitar la carga lenta en la web.
                        </p>
                        @error('file')
                            <small>
                                <strong class="text-danger">{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>
                </div>

            </div>
            {{-- /IMAGEN --}}

            <h2 class="text-secondary">Caracteristicas del producto <i class="fas fa-couch"></i></h2>
            <div class="form-group">
                {!! Form::label('width', 'Ancho') !!}
                {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ancho del producto... 15cm x 20cm']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('long', 'Largo') !!}
                {!! Form::text('long', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el largo del producto... 15cm x 20cm']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('high', 'Alto') !!}
                {!! Form::text('high', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el alto del producto... 15cm x 20cm']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('warranty', 'Garantia') !!}
                {!! Form::text('warranty', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tiempo de garantia del producto... 3 años']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Enlace de compra') !!}
                {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el enlace para hacer la compra del producto... https://google.com']) !!}
                @error('link')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
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
                @error('status')
                    <small>
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            {!! Form::submit('Crear producto', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- Toastr.js --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    {{-- Estilos de la vista previa de imagen --}}
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .image {
            border-style: dashed !important;
            border-width: 5px !important;
        }

    </style>
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
                $('#offer_price').attr('hidden', false)
            } else {
                $('#offer_price').attr('hidden', true)
            }
        }
    </script>

    {{-- Vista previa imagen --}}
    <script>
        document.getElementById('file').addEventListener('change', changeImage);

        function changeImage(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>

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
    {{-- /TOASTR --}}
@stop
