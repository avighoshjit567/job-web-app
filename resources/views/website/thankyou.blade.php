@extends('website.layouts')
@section('content')
    <!-- Start -->
    <section class="relative h-screen flex items-center justify-center text-center bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="title-heading text-center my-auto">
                    <div
                        class="size-24 bg-emerald-600/5 text-emerald-600 rounded-full text-5xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-thumbs-up"></i>
                    </div>
                    <h1 class="mt-6 mb-8 md:text-5xl text-3xl font-bold">Thank You</h1>
                    <p class="text-slate-400 max-w-xl mx-auto">Your application has been submitted successfully. <br>
                        We are a huge marketplace dedicated to connecting great artists of all <strong>HireHunt</strong> with their fans and unique token collectors!</p>

                    <div class="mt-6">
                        <a href="{{ route('home') }}"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full">Back
                            to Home</a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <div class="fixed bottom-3 end-3">
        <a href="{{ route('home') }}"
            class="back-button size-9 inline-flex items-center text-center justify-center text-base font-semibold tracking-wide border align-middle transition duration-500 ease-in-out bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-full"><i
                data-feather="arrow-left" class="size-4"></i></a>
    </div>
@endsection
