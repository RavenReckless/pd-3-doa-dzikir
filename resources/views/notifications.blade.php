@extends('layouts.master')
@section('title', 'Notifikasi')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Notifikasi</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Doa & Dzikir</a></p>
                <p class="m-0 px-2">
                    <i class="fas fa-chevron-right"></i>
                </p>
                <p class="m-0">Notifikasi</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Notification List -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar Notifikasi</div>

                    <div class="card-body">
                        @if ($notifications->isEmpty())
                            <p>Tidak ada notifikasi.</p>
                        @else
                            <ul class="list-group">
                                @foreach ($notifications as $notification)
                                    <li class="list-group-item">
                                        {!! $notification->data['message'] !!}
                                        <span class="float-right">{{ $notification->created_at->diffForHumans() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notification List End -->

@endsection
