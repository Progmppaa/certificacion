@if ($message = Session::get('success'))
    <script>
        window.onload = function() {
            alertS('success', 'Completado!!', "{{ $message }}");
        };
    </script>
@endif
@if ($message = Session::get('error'))
    <script>
        window.onload = function() {
            alertS('error', 'Error', "{{ $message }}");
        };
    </script>
@endif
