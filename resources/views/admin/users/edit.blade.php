@extends('admin.layouts.master')
@section('title', 'Ubah User')
@section('menuUsers', 'active')
@section('content')

<!-- ===== Main Content Start ===== -->
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
      >
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Ubah Profil {{ $user->name }}
        </h2>

        <nav>
          <ol class="flex items-center gap-2">
            <li>
              <a class="font-medium" href="index.html">Form /</a>
            </li>
            <li class="font-medium text-primary">Ubah User</li>
          </ol>
        </nav>
      </div>
      <!-- Breadcrumb End -->

      <!-- ====== Form Layout Section Start -->
      <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark w-full">
        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
          <h3 class="font-medium text-black dark:text-white">Form Ubah User</h3>
        </div>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="p-6.5">
            <div class="mb-4.5">
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">Nama</label>
              <input type="text" placeholder="Masukkan username" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" value="{{ $user->name }}" id="name" name="name" />
            </div>
            <div class="mb-4.5">
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">Email</label>
              <input type="email" placeholder="Masukkan alamat email" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" value="{{ $user->email }}" id="email" name="email" />
            </div>
            <div class="mb-4.5">
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">Password</label>
              <input type="password" placeholder="Masukkan password" autocomplete="password" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" id="password" name="password" />
            </div>
            <button class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">Simpan</button>
          </div>
        </form>
      </div>
      
      <!-- ====== Form Layout Section End -->
    </div>
  </main>
  <!-- ===== Main Content End ===== -->


@endsection
