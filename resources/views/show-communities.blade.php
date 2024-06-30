@extends('layouts.master')
@section('title', 'Komunitas')
@section('menuKomunitas', 'active')
@section('content')

    @if ($community)
        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">Komunitas {{ $community->name }}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="{{ url('/') }}">Doa & Dzikir</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">Komunitas</p>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Messages Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kolom Diskusi {{ $community->name }}</h4>
                        </div>
                        <div class="card-body">
                            @if ($messages->isEmpty())
                                <p class="text-center">Belum ada pesan.</p>
                            @else
                                @foreach ($messages as $message)
                                    <div class="media mb-3">
                                        @if ($message->user->profile_photo_path)
                                            <img class="rounded-circle"
                                                src="{{ asset($message->user->profile_photo_path) }}"
                                                style="width: 30px; height: 30px; margin-right: 1rem;" alt="Image" />
                                        @endif
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ $message->user->name }}</h5>
                                            <p>{{ $message->message }}</p>
                                            <small class="text-muted">{{ $message->created_at->format('d M Y') }}</small>
                                        </div>
                                        @if ($message->user_id == auth()->id())
                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('messages.destroy', $message->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Messages End -->

        <!-- Message Form Start -->
        <div class="container" style="margin-top: 2rem;">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="community_id" value="{{ $community->id }}">
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" placeholder="Ketik pesan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Message Form End -->
    @endif

@endsection
