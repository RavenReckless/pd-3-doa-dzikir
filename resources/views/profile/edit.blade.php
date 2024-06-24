@extends('layouts.master')
@section('title', 'Edit Profil')

@section('menuProfile', 'active')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="mb-4">Ubah Profil</h1>
                    @if(auth()->user()->profile_photo_path)
                        <div class="mb-3">
                            <img src="{{ asset(auth()->user()->profile_photo_path) }}" alt="Profile Photo" class="img-thumbnail" width="150">
                        </div>
                    @endif
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ auth()->user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="profile_photo">Profile Photo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo">
                                <label class="custom-file-label" for="profile_photo">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Profil</button>
                    </form>

                    <form method="post" action="{{ route('password.update') }}" class="pt-5" style="max-width: 600px;">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="update_password_current_password" class="form-label">Password Saat Ini</label>
                            <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                            @if($errors->updatePassword->has('current_password'))
                                <div class="text-danger mt-2">
                                    {{ $errors->updatePassword->first('current_password') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="update_password_password" class="form-label">Password Baru</label>
                            <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                            @if($errors->updatePassword->has('password'))
                                <div class="text-danger mt-2">
                                    {{ $errors->updatePassword->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="update_password_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                            @if($errors->updatePassword->has('password_confirmation'))
                                <div class="text-danger mt-2">
                                    {{ $errors->updatePassword->first('password_confirmation') }}
                                </div>
                            @endif
                        </div>

                        <div class="d-flex align-items-center gap-4">
                            <button type="submit" class="btn btn-primary">Simpan Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
@endpush

@push('scripts')
    @if (session('password-updated'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Password berhasil diperbarui.',
            });
        </script>
    @endif
@endpush

@push('styles')
    <style>
        .custom-file-input ~ .custom-file-label::after {
            content: "Browse";
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("profile_photo").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    </script>
@endpush
