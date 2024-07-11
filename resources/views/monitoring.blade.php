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
                            <textarea name="dzikir_list" class="form-control" rows="5" placeholder="Tulis dzikir dan doa yang sudah Anda baca hari ini..." required></textarea>
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

{{-- Monitoring Table Start --}}
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Monitoring Dzikir dan Doa</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dzikir atau Doa yang Dibaca</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($messages as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->dzikir_list }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('l, d F Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Monitoring Table End --}}

@endsection
