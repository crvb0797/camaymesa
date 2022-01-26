<div class="card">
    <div class="card-header d-flex justify-content-around align-items-center">
        <i class="fas fa-search text-primary mr-2"></i> <input type="search" class="form-control"
            placeholder="Ingrese el nombre del registro a buscar..." wire:model="search">
        {{-- Creacion de nuevo producto --}}
        <a class="btn btn-warning btn-sm text-white ml-3" href="{{ route('admin.trademarks.create') }}"
            style="min-width:160px"><i class="fas fa-plus-circle mr-2"></i> Nueva marca</a>
    </div>

    @if ($trademarks->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de la marca</th>
                        <th>Fecha de creación</th>
                        <th>Imagen de la promoción</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trademarks as $trademark)
                        <tr>
                            <td>{{ $trademark->id }}</td>
                            <td>{{ $trademark->name }}</td>
                            <td class="text-muted">{{ $trademark->created_at->diffForHumans(now()) }}</td>
                            <td class="text-muted"><img class="img-thumbnail" width="100px"
                                    src="@if ($trademark->image) {{ Storage::url($trademark->image->url) }} @else {{ asset('img/marca_no_image.jpg') }} @endif" alt="{{ $trademark->name }}"></td>
                            <td width="120px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.trademarks.edit', $trademark) }}">
                                    <i class="fas fa-edit mr-2"></i> Editar
                                </a>
                            </td>
                            <td width="120px">
                                <form method="POST" action="{{ route('admin.trademarks.destroy', $trademark) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt mr-2"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-end align-items-center">{{ $trademarks->links() }}</div>
    @else
        <div class="card-body px-5 d-flex flex-column justify-content-center align-items-center">
            <img width="240" src="{{ asset('./img/fantasma.gif') }}" alt="dsassddsa">
            <p class="text-danger font-weight-bold text-sm mb-5" style="margin-top: -2rem">Ningún resultado para la
                búsqueda...</p>
        </div>
    @endif
</div>
