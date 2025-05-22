@extends('layouts.dashboard')
@section('content')
@include('components.dashboard_main.header')
@include('components.user.dashboard.sidebar')
<div class="page-wrapper">
@include('components.dashboard_main.footer')
</div>
@endsection