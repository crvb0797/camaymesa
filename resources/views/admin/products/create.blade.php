@extends('adminlte::page')

@section('title', 'creación de productos')

@section('content_header')
    <h1>Creación de productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'files' => 'true']) !!}

            @include('admin.products.partials.form')

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
