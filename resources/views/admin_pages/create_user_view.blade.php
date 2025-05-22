@extends('layouts.dashboard')
@section('content')
@include('components.dashboard_main.header')
@include('components.admin.dashboard.sidebar')
<div class="page-wrapper">
    @include('components.admin.crud.user_create')
    @include('components.dashboard_main.footer')
</div>
@endsection