@extends('layouts.dashboard')
@section('content')
@include('components.dashboard_main.header')
@include('components.service_provider.dashboard.sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
    @include('components.service_provider.crud.update')
    @include('components.dashboard_main.footer')
    </div>
</div>
@endsection