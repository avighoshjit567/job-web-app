@extends('website.layouts')

@section('content')
    <section class="relative lg:mt-24 mt-[74px] pb-16">
        <div class="container">
            <div class="profile-banner relative text-transparent">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                <div class="relative shrink-0">
                    <img src="{{ asset('web-assets/images/cover.avif') }}"
                        class="h-64 w-full object-cover lg:rounded-xl shadow-sm dark:shadow-gray-700" id="profile-banner"
                        alt="">
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>

            <div class="md:flex mx-4 -mt-12">
                <div class="md:w-full">
                    <div class="relative flex items-end">
                        <div class="profile-pic text-center">
                            <input id="pro-img" name="profile-image" type="file" class="hidden"
                                onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-28 max-w-[112px] max-h-[112px] mx-auto">

                                    @if ($user_image)
                                        <img src="{{ asset($user_image) }}"
                                            class="rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                            id="profile-image" alt="">
                                    @else
                                        <img src="{{ asset('web-assets/images/team/01.jpg') }}"
                                            class="rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                            id="profile-image" alt="">
                                    @endif
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-lg font-semibold">{{ $user->name }}</h5>
                            <p class="text-slate-400">Candidate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end -->

        <div class="container mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        @if (session('success'))
                            <div class="mb-4">
                                <div class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="block">{{ session('success') }}</span>
                                </div>
                            </div>
                        @endif
                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                        <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-4">
                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Name : <span class="text-red-600">*</span></label>
                                    <input type="text"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                        placeholder="First Name:" id="firstname" name="firstname"
                                        value="@if ($userProfile) {{ $userProfile->name }} @endif">
                                    @error('firstname')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Your Email : <span
                                            class="text-red-600">*</span></label>
                                    <input type="email"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                        placeholder="Email" name="email"
                                        value="@if ($userProfile) {{ $userProfile->email }} @endif">
                                    @error('email')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium" for="birthday">Date of Birth : <span
                                            class="text-red-600">*</span></label>
                                    <input type="date" id="birthday" name="date_of_birth"
                                        value="@if ($userProfile) {{ $userProfile->date_of_birth }} @endif"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2">
                                    @error('date_of_birth')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Your Address :</label>
                                    <input type="address"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                        placeholder="Address" name="address"
                                        value="@if ($userProfile) {{ $userProfile->address }} @endif">
                                    @error('address')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Mobile No. : <span
                                            class="text-red-600">*</span></label>
                                    <input type="number"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                        placeholder="Mobile No." name="mobile"
                                        value="@if ($userProfile) {{ $userProfile->mobile }} @endif">
                                    @error('mobile')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium" for="multiple_files">Upload Image:</label>
                                    <input
                                        class="relative w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-3 py-1.5 file:me-3 mt-2"
                                        id="multiple_files" type="file" name="image" />
                                </div>
                            </div><!--end grid-->

                            <div class="grid grid-cols-1">
                                <div class="mt-5">
                                    <label class="form-label font-medium">Intro : </label>
                                    <textarea name="bio" id="comments"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-28 outline-none bg-transparent mt-2 textarea"
                                        placeholder="Intro :">
@if ($userProfile)
{{ $userProfile->bio }}
@endif
</textarea>
                                    @error('bio')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!--end row-->

                            <input type="submit" id="submit" name="send"
                                class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 text-white rounded-md mt-5"
                                value="Save Changes">
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
@endsection
