@extends('admin.layouts.master')
@section('title', 'Admin Profile')
@section('content')

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Form Layout
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Form Layout</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Form Layout Section Start -->
            <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
              <div class="flex flex-col gap-9">
                <!-- Contact Form -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Contact Form
                    </h3>
                  </div>
                  <form action="#">
                    <div class="p-6.5">

                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Email <span class="text-meta-1">*</span>
                        </label>
                        <input
                          type="email"
                          placeholder="Enter your email address"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Subject
                        </label>
                        <input
                          type="text"
                          placeholder="Select subject"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Subject
                        </label>
                        <div
                          x-data="{ isOptionSelected: false }"
                          class="relative z-20 bg-transparent dark:bg-form-input"
                        >
                          <select
                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            :class="isOptionSelected && 'text-black dark:text-white'"
                            @change="isOptionSelected = true"
                          >
                            <option value="" class="text-body">
                              Type your subject
                            </option>
                            <option value="" class="text-body">USA</option>
                            <option value="" class="text-body">UK</option>
                            <option value="" class="text-body">Canada</option>
                          </select>
                          <span
                            class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                          >
                            <svg
                              class="fill-current"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g opacity="0.8">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                  fill=""
                                ></path>
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>

                      <div class="mb-6">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Message
                        </label>
                        <textarea
                          rows="6"
                          placeholder="Type your message"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        ></textarea>
                      </div>

                      <button
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Send Message
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="flex flex-col gap-9">
                <!-- Sign In Form -->
                {{-- <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Sign In Form
                    </h3>
                  </div>
                  <form action="#">
                    <div class="p-6.5">
                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Email
                        </label>
                        <input
                          type="email"
                          placeholder="Enter your email address"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div>
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Password
                        </label>
                        <input
                          type="password"
                          placeholder="Enter password"
                          autocomplete="new-password"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div
                        class="mb-5.5 mt-5 flex items-center justify-between"
                      >
                        <label for="formCheckbox" class="flex cursor-pointer">
                          <div class="relative pt-0.5">
                            <input
                              type="checkbox"
                              id="formCheckbox"
                              class="taskCheckbox sr-only"
                            />
                            <div
                              class="box mr-3 flex h-5 w-5 items-center justify-center rounded border border-stroke dark:border-form-strokedark dark:bg-form-input"
                            >
                              <span class="text-white opacity-0">
                                <svg
                                  class="fill-current"
                                  width="10"
                                  height="7"
                                  viewBox="0 0 10 7"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M9.70685 0.292804C9.89455 0.480344 10 0.734667 10 0.999847C10 1.26503 9.89455 1.51935 9.70685 1.70689L4.70059 6.7072C4.51283 6.89468 4.2582 7 3.9927 7C3.72721 7 3.47258 6.89468 3.28482 6.7072L0.281063 3.70701C0.0986771 3.5184 -0.00224342 3.26578 3.785e-05 3.00357C0.00231912 2.74136 0.10762 2.49053 0.29326 2.30511C0.4789 2.11969 0.730026 2.01451 0.992551 2.01224C1.25508 2.00996 1.50799 2.11076 1.69683 2.29293L3.9927 4.58607L8.29108 0.292804C8.47884 0.105322 8.73347 0 8.99896 0C9.26446 0 9.51908 0.105322 9.70685 0.292804Z"
                                    fill=""
                                  />
                                </svg>
                              </span>
                            </div>
                          </div>
                          <p>Remember me</p>
                        </label>

                        <a href="#" class="text-sm text-primary hover:underline"
                          >Forget password?</a
                        >
                      </div>

                      <button
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Sign In
                      </button>
                    </div>
                  </form>
                </div> --}}

                <!-- Sign Up Form -->
                {{-- <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Sign Up Form
                    </h3>
                  </div>
                  <form action="#">
                    <div class="p-6.5">
                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Name
                        </label>
                        <input
                          type="text"
                          placeholder="Enter your full name"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Email
                        </label>
                        <input
                          type="email"
                          placeholder="Enter your email address"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Password
                        </label>
                        <input
                          type="password"
                          placeholder="Enter password"
                          autocomplete="password"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <div class="mb-5.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Re-type Password
                        </label>
                        <input
                          type="password"
                          placeholder="Re-enter password"
                          autocomplete="re-enter-password"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>

                      <button
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Sign Up
                      </button>
                    </div>
                  </form>
                </div> --}}
                <!-- File upload -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      File upload
                    </h3>
                  </div>
                  <div class="flex flex-col gap-5.5 p-6.5">
                    <div>
                      <label
                        class="mb-3 block text-sm font-medium text-black dark:text-white"
                      >
                        Attach file
                      </label>
                      <input
                        type="file"
                        class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                      />
                    </div>

                    <div>
                      <label
                        class="mb-3 block text-sm font-medium text-black dark:text-white"
                      >
                        Attach file
                      </label>
                      <input
                        type="file"
                        class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ====== Form Layout Section End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->

@endsection
