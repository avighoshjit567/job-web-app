@extends('website.layouts')
@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Job
                    Vacancies</h3>
            </div><!--end grid-->
        </div><!--end container-->
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
    <section class="relative -mt-[42px] md:pb-24 pb-16">

        <div class="container mt-10">


            @if ($jobPosts->isEmpty())
                <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4 bg-emerald-600/5 rounded">
                    <div class="title-heading text-center my-auto">
                        <img src="{{ asset('web-assets/images/error.png') }}" class="mx-auto" alt="">
                        <h1 class="mt-3 mb-6 md:text-4xl text-3xl font-bold">Not Found?</h1>
                        <p class="text-slate-400">Whoops, this is embarassing. <br> Looks like the page you
                            were looking for wasn't found.</p>
                    
                        <div class="mt-4">
                            <a href="{{ route('home') }}"
                                class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">Back
                                to Home</a>
                        </div>
                </div>
        </div>
    @else
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            @foreach ($jobPosts as $jobPost)
                <div
                    class="group p-6 rounded-lg border border-emerald-600/20 dark:border-emerald-600/40 bg-white dark:bg-slate-900 hover:bg-emerald-600/[0.02] hover:dark:bg-emerald-600/5 hover:shadow-md hover:shadow-emerald-600/5 transition-all duration-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <div
                                class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-full mb-2">
                                @if ($jobPost->image)
                                    <img src="{{ asset($jobPost->image) }}" class="size-8" alt="">
                                @else
                                    <img src="https://placehold.co/32x32" class="size-8" alt="">
                                @endif
                            </div>
                            <a href="{{ route('job.category', $jobPost->category->slug) }}"
                                class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500">{{ $jobPost->category->title }}</a>
                        </div>

                        <div class="flex items-center">

                            <a href="#"
                                class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white ms-1"><i
                                    data-feather="bookmark" class="size-4"></i></a>
                            <a href="{{ route('job.apply', $jobPost->slug) }}"
                                class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 group-hover:bg-emerald-600 border-emerald-600/10 text-emerald-600 group-hover:text-white ms-1"><i
                                    class="uil uil-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('job.post.details', $jobPost->slug) }}"
                            class="text-xl hover:text-emerald-600 font-semibold transition-all duration-500">{{ $jobPost->title }}</a>
                        <p class="text-slate-400 mt-2">Looking for an experienced Web Designer for an our company.
                        </p>

                        <div class="mt-3">
                            <a href="#">
                                <span
                                    class="bg-orange-500/5 hover:bg-orange-500/20 dark:bg-orange-500/10 hover:dark:bg-orange-500/30 inline-block text-orange-500 px-4 text-[14px] font-medium rounded-full mt-2 me-1 transition-all duration-500">{{ $jobPost->employment_type }}</span>
                            </a>
                            <a href="#">
                                <span
                                    class="bg-purple-600/5 hover:bg-purple-600/20 dark:bg-purple-600/10 hover:dark:bg-purple-600/30 inline-block text-purple-600 px-4 text-[14px] font-medium rounded-full mt-2 me-1 transition-all duration-500">{{ $jobPost->salary }}</span>
                            </a>
                            <a href="#">
                                <span
                                    class="bg-emerald-600/5 hover:bg-emerald-600/20 dark:bg-emerald-600/10 hover:dark:bg-emerald-600/30 inline-block text-emerald-600 px-4 text-[14px] font-medium rounded-full mt-2 transition-all duration-500"><i
                                        class="uil uil-map-marker"></i> {{ $jobPost->location }}</span>
                            </a>
                        </div>
                    </div>
                </div><!--end content-->
            @endforeach
        </div><!--end grid-->
        @endif





        </div><!--end container-->

    </section><!--end section-->
    <!-- End -->
@endsection
