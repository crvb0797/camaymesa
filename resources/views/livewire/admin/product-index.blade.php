<div class="card">
    <div class="card-header d-flex justify-content-around align-items-center">
        <i class="fas fa-search text-primary mr-2"></i> <input type="search" class="form-control"
            placeholder="Ingrese el nombre del registro a buscar..." wire:model="search">
        {{-- Creacion de nuevo producto --}}
        <a class="btn btn-warning btn-sm text-white ml-3" href="{{ route('admin.products.create') }}"
            style="min-width:160px"><i class="fas fa-plus-circle mr-2"></i> Nuevo producto</a>
    </div>

    @if ($products->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del producto</th>
                        <th>Estado del producto</th>
                        <th>Categoría del producto</th>
                        <th>Imagen del producto</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <span>
                                    @if ($product->status == 2)
                                        <span class="text-success"><i class="fas fa-check-circle mr-2"></i>
                                            Publicado</span>
                                    @else
                                        <span class="text-danger"><i class="fas fa-times-circle mr-2"></i>
                                            Borrador</span>
                                    @endif
                                </span>
                            </td>
                            <td class="text-muted">{{ $product->category->name }}</td>
                            <td class="text-muted"><img class="img-thumbnail" width="100px"
                                    src="{{ Storage::url($product->image->url) }}" alt=""></td>
                            <td width="120px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.products.edit', $product) }}">
                                    <i class="fas fa-edit mr-2"></i> Editar
                                </a>
                            </td>
                            <td width="120px">
                                <form method="post" action="{{ route('admin.products.destroy', $product) }}">
                                    @csrf
                                    @method('DELTE')
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
        <div class="card-footer d-flex justify-content-end align-items-center">{{ $products->links() }}</div>
    @else
        <div class="card-body px-5 d-flex flex-column justify-content-center align-items-center">
            <img width="240" src="{{ asset('./img/fantasma.gif') }}" alt="dsassddsa">
            <p class="text-danger font-weight-bold text-sm mb-5" style="margin-top: -2rem">Ningún resultado para la
                búsqueda...</p>
        </div>
    @endif
</div>
