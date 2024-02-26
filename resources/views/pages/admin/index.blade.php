@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Inicio')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @include('formats.alerts')

            @include('formats.modals.certification')

            @include('formats.tables.certifications')
        </div>
    </div>
@endsection

@push('js')
    {{-- notifications --}}
    <script>
        function alertS(type, tt, msj) {
            Swal.fire({
                position: 'top-end',
                icon: type,
                title: tt,
                text: msj,
                showConfirmButton: false,
                timer: 3000
            })
        }

        function print(div) {
            var elemento = document.getElementById(div);
            var ventana = window.open('', 'popimpr');
            ventana.document.write('<html><head>');
            ventana.document.write('<link rel="stylesheet" href="/material/css/material-dashboard.css?v=2.1.1">');
            ventana.document.write('</head><body style="padding-top: 7rem; color: black;"');
            ventana.document.write(elemento.innerHTML);
            ventana.document.write('</body></html>');
            ventana.document.close();
            ventana.focus();
            ventana.onload = function() {
                setTimeout(function() {
                    ventana.print();
                    ventana.close();
                }, 100);
            };
            return true;
        }
    </script>
@endpush
