<div>
    <div class="form-group">
        {!! Form::label('name', 'Nombre de la marca') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la marca...']) !!}
        @error('name')
            <small>
                <strong class="text-danger">{{ $message }}</strong>
            </small>
        @enderror
    </div>

    {{-- IMAGEN --}}
    <div class="row mb-3 mt-3">

        <div class="col">
            <div class="image-wrapper">
                @isset($trademark->image)
                    <img id="picture" src="{{ Storage::url($trademark->image->url) }}" alt="{{ $trademark->name }}">
                @else
                    <img id="picture" src="{{ asset('img/marca_no_image.jpg') }}" alt="Imagen por defecto de las marcas">
                @endisset
            </div>
        </div>


        <div class="col md-form border p-5 border-secondary rounded-lg image d-flex justify-content-center">
            <div class="form-group file-field d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center justify-center mb-3">
                    <i class="fas fa-cloud-upload-alt mr-2 uppercase" aria-hidden="true"></i>
                    {!! Form::label('file', 'Elegir Imagen de la marca', ['class' => 'h5', 'accept' => 'image/*']) !!}
                </div>
                {!! Form::file('file', ['class' => 'file-field d-flex flex-column justify-content-center align-items-center']) !!}
                <p class="text-center text-secondary mt-4">
                    La imagen debe tener las dimesiones de <b class="font-weight-bold text-danger">228px de ancho y
                        226px de
                        alto</b>, además de que no deben pesar mas de <b class="font-weight-bold text-danger">5MB</b>
                    para
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


</div>
