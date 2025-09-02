@extends('website.layouts')
@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Apply Job
                    Post
                </h3>

            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="{{ route('home') }}">Hire Hunt</a>
                </li>
                <li class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white"
                    aria-current="page">Apply Job Post</li>
            </ul>
        </div>
    </section><!--end section-->
    <div class="relative">
        <div
            class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-slate-50 dark:text-slate-800">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative bg-slate-50 dark:bg-slate-800 lg:py-24 py-16">
        <div class="container">
            <div class="lg:flex justify-center">
                <div class="lg:w-2/3">
                    <div class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                        <form class="text-start" action="{{ route('job.apply.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
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
                            <div class="grid grid-cols-1">
                                <h5 class="text-lg font-semibold">Applicant Details:</h5>
                            </div>
                            <input type="hidden" name="job_id" value="{{ $jobPost->id }}">
                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterName">Name</label>
                                    <input id="RegisterName" type="text" name="name"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="John Doe">
                                    @error('name')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterEmail">Email</label>
                                    <input id="RegisterEmail" type="email" name="email"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="john@example.com">
                                    @error('email')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterMobile">Mobile</label>
                                    <input id="RegisterMobile" type="text" name="mobile"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="+1234567890">
                                    @error('mobile')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-12 text-start">
                                    <label for="comments" class="font-semibold">About</label>
                                    <textarea name="about" id="comments"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-28 outline-none bg-transparent mt-1 textarea"
                                        placeholder="Write About You :"></textarea>
                                    @error('about')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterName">Salary</label>
                                    <input id="RegisterName" type="number" step="any" name="salary"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Expected Salary">
                                    @error('salary')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 mt-8">
                                <h5 class="text-lg font-semibold">Skill & Experience:</h5>
                            </div>

                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="Skillname">Skills:</label>
                                    <input id="Skillname" type="text" name="skills"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Web Developer">
                                    @error('skills')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="md:col-span-6 col-span-12 text-start">
                                    <label class="font-semibold" for="Qualificationname">Qualifications:</label>
                                    <input id="Qualificationname" type="text" name="qualifications"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Qualifications">
                                    @error('qualifications')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="md:col-span-6 col-span-12 text-start">
                                    <label class="font-semibold" for="Experiencename">Experience:</label>
                                    <input id="Experiencename" type="text" name="experience"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Experience">
                                    @error('experience')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="grid grid-cols-1 mt-8">
                                <h5 class="text-lg font-semibold">Address:</h5>
                            </div>

                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="Address">Address:</label>
                                    <input id="Address" type="text" name="address"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Address">
                                    @error('address')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="CV">CV/Resume:</label>
                                    <input id="CV" type="file" name="cv"
                                        class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-1"
                                        placeholder="Upload your CV/Resume">
                                    @error('cv')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-4 mt-4">
                                <div>
                                    <button type="submit" id="submit" name="send"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white">Post
                                        Now</button>
                                </div>
                            </div>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end flex-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
