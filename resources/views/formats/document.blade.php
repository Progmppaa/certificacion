<div class="card w-50 mx-auto">
    <div class="card-body" id="{{ $d->id }}">
        <div class="card-body px-5" style="color: black;">
            <div class="row pb-5 pt-1">
                <div class="col mb-5 mr-5">
                    <p class="float-right">
                        Caracas, {{ $d->fecha_documento }}
                    </p>
                </div>
            </div>
            <div class="row mt-5 px-5">
                <em class="col-12 text-center" style="font-weight: bold;">
                    CERTIFICACIÓN DE OTORGAMIENTO DE CONCESIÓN DE
                    <br>APROVECHAMIENTO DE AGUA EN LAS FUENTES
                </em>
                <div class="col-12">
                    <p style="text-align: justify;" class="mt-5">
                        Por medio del presente documento, el ministerio del Poder Popular de Atención de las Aguas, por
                        órgano de la dirección general de Administración de Cuencas Hidrográficas, certifica el
                        otorgamiento de la “Concesión de aprovechamiento de agua” <span style="font-weight: bold;">a la
                            empresa
                            {{ $d->empresa }},
                            número de Registro Único de Información Fiscal (RIF) {{ $d->rif }},</span> con
                        domicilio en la {{ $d->direccion }}.
                    </p>
                    <p style="text-align: justify;">
                        La concesión de aprovechamiento de agua ha sido otorgada con base en los términos y condiciones
                        establecidos en el contrato número {{ $d->nro_contrato }} de fecha {{ $d->fecha_contrato }}, En
                        cumplimiento de las leyes y regulaciones aplicables.
                    </p>
                    <p class="text-left mb-1" style="font-weight: bold;">Descripción del aprovechamiento:</p>
                    <ul style="text-align: left">
                        <li>
                            Numero de registro de Usuario y Usuaria de agua en las fuentes No.
                            {{ $d->n_registro_user }},
                        </li>
                        <li>Tipo: {{ $d->tipo_aprov }}</li>
                        <li>Uso: {{ $d->uso }}</li>
                        <li>Cantidad de aprovechamientos: {{ $d->nro_aprov }}</li>
                        <li>Coordenadas UTM: {{ $d->utm }}</li>
                        <li>Región hidrográfica: {{ $d->region_hidrogafica }}</li>
                        <li>Caudal metros cúbicos anuales: {{ $d->caudal }}</li>
                    </ul>
                    <p style="text-align: justify;">
                        La presente certificación tiene validez de un año contado a partir de la fecha de emisión y
                        queda sujeta a cualquier modificación o revocación que pudiera ser realizada por las autoridades
                        competentes.
                    </p>
                </div>
            </div>
            <div class="row my-5" style="line-height: 1.2;">
                <div class="col-12 text-center my-5 pt-5">
                    <p style="font-weight: bold">RODOLFO CLEMENTE MARCO TORRES</p>
                    <p style="font-weight: bold">MINISTRO DEL PODER POPULAR DE ATENCIÓN DE LAS AGUAS</p>
                    
                    <p class="small">
                        Decreto N° 4.580 de fecha 13 de septiembre de 2021 Gaceta Oficial de la República Bolivariana de
                        Venezuela N° 42.211<br>de fecha 13 de septiembre de 2021
                    </p>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-6"></div>
                <div class="col-4">
                    <p class="small pl-5" style="line-height: 1.2; text-align: justify;">
                        Documento emitido y certificado por el ministerio del Poder Popular de Atención de
                        las Aguas. <br>
                        Para validar la autenticidad de este documento puede escanear el código QR.
                    </p>
                </div>
                <div class="col-2 p-0">
                    {!! QrCode::size(75)->generate(route('document.show', ['uuid' => $d->uuid])) !!}
                    {{-- {!! QrCode::size(75)->generate('https://minaguas.gob.ve:8086/document/'. $d->uuid) !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
