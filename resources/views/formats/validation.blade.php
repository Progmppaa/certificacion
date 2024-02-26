<div class="row mb">
    <div class="col-12">
        <img src="{{ asset('material') }}/img/logo_minaguas.png" alt="MINAGUAS" width="180px">
    </div>
</div>

<div class="container bg-danger" style="height: auto;">
    <div class="row justify-content-center p-0">
        <div class="col-lg-7 col-md-8 pt-0">
            @if ($data != null)
                <div class="card mx-0 px-4 pt-0 mt-0">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Módulo de validación de certificado de otorgamiento de
                            concesión de aprovechamiento de agua en las fuentes</h5>
                        <table class="w-100 table table-striped">
                            <tr>
                                <th>EMPRESA</th>
                                <td>{{ $data->empresa }}</td>
                            </tr>
                            <tr>
                                <th>RIF</th>
                                <td>{{ $data->rif }}</td>
                            </tr>
                            <tr>
                                <th>FECHA</th>
                                <td>{{ $data->fecha_documento }}</td>
                            </tr>
                            <tr>
                                <th>Nro. DE SEGURIDAD</th>
                                <td>{{ $data->nro_hoja }}</td>
                            </tr>
                        </table>
                    </div>
                    <p class="mx-auto mb-0">
                        <b>Este documento fue emitido y esta certificado por MINAGUAS.</b>
                    </p>
                </div>
            @else
                <h1 class="text-white text-center">Documento no se encuentra registrado.</h1>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <img src="{{ asset('material') }}/img/logo_cada_gota_cuenta.png" alt="Cada gota cuenta!" width="180px">
    </div>
</div>
