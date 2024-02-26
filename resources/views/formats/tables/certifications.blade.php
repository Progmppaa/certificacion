<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="pull-left">
                    <h4>Gestión de certificaciones</h4>
                    <p class="card-category">Listado de certificaciones generadas.</p>
                </div>
                <div class="pull-right">
                    <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" data-toggle="modal"
                        data-target="#creacion">
                        {{ __('Crear Nuevo') }}
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="col-sm-12 userTest_wrapper dataTables_wrapper dt-bootstrap4 pt-2 table-responsive">
                    <table class="userTest table table-striped" role="grid">
                        <thead class="text-center text-primary">
                            <th class="text-left">Empresa</th>
                            <th class="text-left">RIF</th>
                            <th class="text-left">Fecha</th>
                            <th class="text-left">Hoja de seguridad</th>
                            <th class="text-center">Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->empresa }}</td>
                                    <td>{{ $d->rif }}</td>
                                    <td>{{ $d->fecha_documento }}</td>
                                    <td>{{ $d->nro_hoja }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary" onclick="print({{ $d->id }})">
                                            <i class="material-icons mr-1">print</i> {{ __('Imprimir') }}
                                        </button>
                                        @role('Root')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['document.destroy', $d->id], 'style' => 'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="material-icons mr-1">delete</i> {{ __('Eliminar') }}
                                        </button>
                                        {!! Form::close() !!}
                                        @endrole
                                    </td>
                                </tr>
                                <div style='display:none;'>
                                    @include('formats.document')
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
