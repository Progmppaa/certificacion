@extends('layouts.app_data', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __(config('app.name'))])

@section('content')
    @include('formats.validation')
@endsection
