@extends('layouts.master')
@section('menuSharing', 'active')
@section('title', 'Sharing Pengalaman')

@section('content')

<!-- Sharing Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Sharing Pengalaman Doa</span>
            </p>
            <h1 class="mb-4">Tambahkan Pengalaman Anda</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div id="success"></div>
                    <form method="POST" action="{{ route('sharing.store') }}">
                        @csrf
                        <div class="control-group" style="margin-bottom: 1rem;">
                            <input type="text" class="form-control" id="title" placeholder="Nama doa : Contoh doa mau berpergian, doa mau makan, dll" name="title"
                                required="required" data-validation-required-message="Title is required" />
                        </div>
                        <div class="control-group" style="margin-bottom: 1rem;">
                            <textarea class="form-control" rows="6" id="content" placeholder="Pengalaman Anda" required="required" name="content"
                                data-validation-required-message="Please enter your message"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                               Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sharing End -->

@endsection
