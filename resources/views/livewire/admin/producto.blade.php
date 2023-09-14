<div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Lista de los Productos
            </h5>

            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#productoModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Nuevo Producto
            </a>

            <!-- Producto Modal-->
            <div class="modal fade" id="productoModal" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Producto</label>
                                <input type="text" class="form-control" wire:model.lazy="nombreproducto" id="nombreproducto" placeholder="Producto...">
                               
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Medida</label>
                                <input type="email" class="form-control" id="unidad" wire:model.lazy="unidad"
                                    placeholder="medida...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stock</label>
                                <input type="email" class="form-control" id="stock" wire:model.lazy="stock"
                                    placeholder="stock ...">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" wire:click="store">Guardar</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCTO</th>
                            <th>MEDIDA</th>
                            <th>STOCK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCTO</th>
                            <th>MEDIDA</th>
                            <th>STOCK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->producto }}</td>
                                <td>{{ $producto->unidad_medida }}</td>
                                <td>{{ $producto->stock }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
