@extends('layouts.dashboard')
@section('content')
@include('components.dashboard_main.header')
@include('components.admin.dashboard.sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        @include('components.admin.dashboard.dashboard')
        @include('components.dashboard_main.footer')
    </div>
</div>
@endsection