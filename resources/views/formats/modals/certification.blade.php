<div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">{{ __('Nueva Certificación') }}</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('document.store') }}"
                    enctype="multipart/form-data" id="form-nuevo">
                    @csrf
                    {{-- <div class="form-group mt-3">
                        <label for="name">Nombre de empresa</label>
                        <input type="text" name="name" id="name" class="form-control col"
                            placeholder="Tubhelca, C.A." required>
                    </div> --}}
                    <div class="row mt-3">
                        <div class="form-group col-6">
                            <label for="name" class="pl-3">Nombre de empresa</label>
                            <input type="text" name="name" id="name" class="form-control col"
                                placeholder="Tubhelca, C.A." required>
                        </div>
                        <div class="form-group col-6">
                            <label for="date" class="pl-3">Fecha del documento</label>
                            <input type="date" name="date" id="date" class="form-control col" required>
                        </div>

                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Dirección</label>
                        <input type="text" name="addr" id="addr" class="form-control col" maxlength="254"
                            placeholder="Avenida Chiquinquirá, calle 44, Edificio Vega sol, Local N0. 55, en la cuidad de Barquisimeto, Municipio Libertador, Parroquia Veritas, Estado Lara"
                            required>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-6">
                            <label for="rif" class="pl-3">Rif de la empresa</label>
                            <input type="text" name="rif" id="rif" class="form-control col"
                                placeholder="J6568745864" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="nro" class="pl-3">Número de hoja de seguridad</label>
                            <input type="text" name="nro" id="nro" class="form-control col"
                                placeholder="005" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-6">
                            <label for="date" class="pl-3">Fecha de contrato</label>
                            <input type="date" name="date_cont" id="date_cont" class="form-control col" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="nro" class="pl-3">Número de contrato</label>
                            <input type="text" name="nro_cont" id="nro_cont" class="form-control col"
                                placeholder="CJ-2023-VACH-02001" required>
                        </div>
                    </div>
                    <b class="my-3">Descripción del aprovechamiento</b>
                    <div class="row mt-3">
                        <div class="form-group col-6">
                            <label for="date" class="pl-3">Número de registro de <b>Usuario/a</b></label>
                            <input type="text" name="nro_reg" id="nro_reg" class="form-control col" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="nro" class="pl-3">Tipo de aprovechamiento</label>
                            <input type="text" name="tipo_apro" id="tipo_apro" class="form-control col" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="date" class="pl-3">Uso del aprovechamiento</label>
                            <input type="text" name="uso" id="uso" class="form-control col" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="nro" class="pl-3">Cantidad de aprovechamientos</label>
                            <input type="text" name="nro_apro" id="nro_apro" pattern="[0-9]+"
                                class="form-control col" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="date" class="pl-3">Coordenadas <b>UTM</b></label>
                            <input type="text" name="utm" id="utm" class="form-control col" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="nro" class="pl-3">Región hidrográfica</label>
                            <input type="text" name="region" id="region" class="form-control col" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="nro" class="pl-3">Caudal metros cúbicos anuales</label>
                            <input type="text" name="caudal" id="caudal" pattern="[0-9]+"
                                class="form-control col" required>
                        </div>
                    </div>
                    <div class="modal-footer row my-3 pt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="btn-nuevo">
                                Guardar
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 
    name
    addr
    rif
    nro
    date_cont
    nro_cont
    nro_reg
    tipo_apro
    uso
    utm
    region
    nro_apro
    --}}
