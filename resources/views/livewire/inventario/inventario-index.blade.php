<div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Lista de los Productos
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCTO</th>
                            <th>UNIDAD MEDIDA</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCTO</th>
                            <th>UNIDAD MEDIDA</th>
                            <th>OPCIONES</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->producto }}</td>
                                <td>{{ $producto->unidad_medida }}</td>
                                <td>
                                    <button class="btn btn-success">Detalle</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
