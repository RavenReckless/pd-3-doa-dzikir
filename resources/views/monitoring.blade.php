@extends('layouts.master')
@section('menuMentoring', 'active')
@section('title', 'Monitoring')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Monitoring</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{url('/')}}">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Monitoring</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Monitoring Form Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Monitoring Dzikir dan Doa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('monitoring.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Apakah Anda sudah membaca dzikir hari ini?</label>
                                <select name="dzikir_today" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="Ya">Ya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Dzikir dan doa apa saja yang sudah Anda baca hari ini? (Isikan di bawah)</label>
                                <textarea name="dzikir_list" class="form-control" rows="3" placeholder="Tulis dzikir dan doa yang sudah Anda baca hari ini..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>

                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Monitoring Form End -->

@endsection
