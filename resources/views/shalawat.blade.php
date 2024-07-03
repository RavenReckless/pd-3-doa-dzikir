@extends('layouts.master')
@section('menuShalawat', 'active')
@section('title', 'Shalawat')
@section('content')

 <!-- Header Start -->
 <div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Shalawat</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="{{url('/')}}">Doa & Dzikir</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Shalawat</p>
        </div>
    </div>
</div>
<!-- Header End -->

@endsection