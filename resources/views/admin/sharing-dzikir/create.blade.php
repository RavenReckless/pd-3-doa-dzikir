@extends('admin.layouts.master')
@section('title', 'Tambah Sharing Pengalaman')
@section('menuSharing', 'active')
@section('content')

    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Tambah Sharing Pengalaman
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Form /</a>
                        </li>
                        <li class="font-medium text-primary">Tambah Sharing Pengalaman</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Form Layout Section Start -->
            <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark w-full">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">Form Tambah Sharing Pengalaman</h3>
                </div>
                <form action="{{ route('admin.sharing-dzikir.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6.5">
                        <!-- User Select Field -->
                        <div class="mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">User</label>
                            <select
                                class="form-control w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                id="user_id" name="user_id" required>
                                @foreach ($users as $user)
                                    @if ($user->role != 'admin' && $user->email != 'admin@mail.com')
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- Title Field -->
                        <div class="mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">Judul</label>
                            <input type="text"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                id="image" name="image" placeholder="Masukkan judul" />
                        </div>

                        <!-- Content Field -->
                        <div class="mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">Pengalaman</label>
                            <textarea placeholder="Masukkan pengalaman dzikir"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                id="content" name="content" rows="4" required></textarea>
                        </div>


                        <!-- Submit Button -->
                        <button type="submit"
                            class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>

            <!-- ====== Form Layout Section End -->
        </div>
    </main>
    <!-- ===== Main Content End ===== -->


@endsection
