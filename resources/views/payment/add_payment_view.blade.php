@extends('layouts.dashboard')
@section('content')
@include('components.dashboard_main.header')
@include('components.user.dashboard.sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        @include('components.payment.add_payment')
        @include('components.dashboard_main.footer')
    </div>
</div>
@endsection