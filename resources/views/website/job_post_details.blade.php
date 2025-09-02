@extends('website.layouts')
@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">
                    {{ $jobPost->title }}</h3>

            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="{{ route('home') }}">Hire Hunt</a>
                </li>
                <li
                    class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="job-grid-two.html">Jobs</a>
                </li>
                <li class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white"
                    aria-current="page">Job Detail</li>
            </ul>
        </div>
    </section><!--end section-->
    <div class="relative">
        <div
            class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start -->
    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div class="shadow-sm dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900 sticky top-20">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold">Job Information</h5>
                        </div>
                        <div class="p-6 border-t border-slate-100 dark:border-t-gray-700">
                            <ul class="list-none">
                                <li class="flex items-center">
                                    <i data-feather="user-check" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Employee Type:</p>
                                        <span
                                            class="text-emerald-600 font-medium text-sm">{{ $jobPost->employment_type }}</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="map-pin" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Location:</p>
                                        <span class="text-emerald-600 font-medium text-sm">{{ $jobPost->location }}</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="monitor" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Job Type:</p>
                                        <span class="text-emerald-600 font-medium text-sm">Back-end Developer</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="briefcase" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Experience:</p>
                                        <span
                                            class="text-emerald-600 font-medium text-sm">{{ $jobPost->experience_level }}</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="book" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Qualifications:</p>
                                        <span
                                            class="text-emerald-600 font-medium text-sm">{{ $jobPost->education_level }}</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="dollar-sign" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Salary:</p>
                                        <span class="text-emerald-600 font-medium text-sm">{{ $jobPost->salary }}</span>
                                    </div>
                                </li>

                                <li class="flex items-center mt-3">
                                    <i data-feather="clock" class="size-5"></i>

                                    <div class="ms-4">
                                        <p class="font-medium">Date posted:</p>
                                        <span class="text-emerald-600 font-medium text-sm">{{ $jobPost->created_at }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="lg:col-span-8 md:col-span-6">
                    <h5 class="text-lg font-semibold">Job Description:</h5>

                    <p class="text-slate-400 mt-4">{{ $jobPost->description }}</p>



                    <div class="mt-5">
                        <a href="{{ route('job.apply', $jobPost->slug) }}"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">
                            Apply Now</a>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Related Vacancies
                </h3>

                <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Search all the open positions on the web.
                    Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
                @foreach ($releatedJobs as $releatedJob)
                    <div class="group shadow-sm dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                                    <img src="assets/images/company/facebook-logo.png" class="size-8" alt="">
                                </div>

                                <div class="ms-3">
                                    <a href="employer-detail.html"
                                        class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Facebook</a>
                                    <span class="block text-sm text-slate-400">2 days ago</span>
                                </div>
                            </div>

                            <span
                                class="bg-emerald-600/10 group-hover:bg-emerald-600 inline-block text-emerald-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">{{ $jobPost->employment_type }}</span>
                        </div>

                        <div class="mt-6">
                            <a href="job-detail-one.html"
                                class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500">{{ $jobPost->title }}</a>
                            <h6 class="text-base font-medium"><i class="uil uil-map-marker"></i> {{ $jobPost->location }}</h6>
                        </div>

                        
                    </div><!--end content-->
                @endforeach

            </div><!--end grid-->
        </div><!--end container-->

        <div class="container-fluid md:mt-24 mt-16">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                            <div class="lg:col-span-8 md:col-span-7">
                                <div class="md:text-start text-center relative z-1">
                                    <h3 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Explore a job
                                        now!</h3>
                                    <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your
                                        own personalized salary estimate. Read reviews on over 30000+ companies worldwide.
                                    </p>
                                </div>
                            </div>

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="text-end relative z-1">
                                    <a href="employer-detail.html"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply
                                        Now</a>
                                    <a href="aboutus.html"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-5 -start-5">
                            <div
                                class="uil uil-envelope lg:text-[150px] text-7xl text-slate-900/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45">
                            </div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div
                                class="uil uil-pen lg:text-[150px] text-7xl text-slate-900/5 dark:text-white/5 rtl:-rotate-90">
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
