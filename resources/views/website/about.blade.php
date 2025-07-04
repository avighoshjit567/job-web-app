@extends('website.layouts')
@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">About Us
                </h3>

            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">Jobstack</a></li>
                <li class="inline breadcrumb-item before:content-[''] after:text-sm after:text-white/50 after:dark:text-white after:ps-[5px] last:after:hidden text-[15px] font-semibold duration-500 ease-in-out text-white"
                    aria-current="page">About Us</li>
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
    <section class="relative md:py-24 py-16">
        <div class="container md:pb-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <div class="relative">
                            <img src="{{ asset('web-assets/images/about/ab01.jpg') }}"
                                class="lg:w-[400px] w-[280px] rounded-md shadow-sm dark:shadow-gray-700" alt="">
                            <div class="absolute top-0 translate-y-2/4 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="absolute md:-end-5 end-0 -bottom-16">
                            <img src="{{ asset('web-assets/images/about/ab02.jpg') }}"
                                class="lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900 rounded-md shadow-sm dark:shadow-gray-700"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6 mt-14 md:mt-0">
                    <div class="lg:ms-5">
                        <h3 class="mb-6 md:text-[26px] text-2xl md:leading-normal leading-normal font-semibold">Millions of
                            jobs. <br> Find the one that's right for you.</h3>

                        <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own
                            personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i> Digital
                                Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i> Our
                                Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i> Create
                                your own skin to match your brand</li>
                        </ul>

                        <div class="mt-6">
                            <a href="contact.html"
                                class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white mt-2 rounded-md"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Jobstack Features
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group p-6 shadow-sm dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-phone text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">24/7
                            Support</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-atom text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Tech & Startup
                            Jobs</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Quick &
                            Easy</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-hourglass text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Save Time</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-800 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-800 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Apply with
                            confidence</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-800 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-800 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Reduce Hiring
                            Bias</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-800 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-800 rounded-lg transition-all duration-500">
                        <i class="uil uil-briefcase text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Proactive
                            Employers</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow-sm dark:shadow-gray-800 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow-sm dark:shadow-gray-800 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">No Missed
                            Opportunities</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1">
                <div class="relative overflow-hidden bg-emerald-600 rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="grid md:grid-cols-2 items-center gap-[30px]">
                        <div class="relative">
                            <img src="{{ asset('web-assets/images/about/ab05.jpg') }}" alt="">
                            <div
                                class="absolute md:bottom-1/2 md:translate-y-1/2 md:-end-10 ltr:md:translate-x-0 rtl:md:translate-x-0 -bottom-10 end-1/2 ltr:translate-x-1/2 rtl:-translate-x-1/2 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="text-white p-4">
                                <h4 class="leading-normal text-4xl mb-3 font-semibold">Get the job of your <br> dreams
                                    quickly.</h4>

                                <p class="text-white/70 text-lg max-w-xl">Search all the open positions on the web. Get
                                    your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.
                                </p>

                                <ul class="list-none text-white/50 mt-4">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i>
                                        Digital Marketing Solutions for Tomorrow</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i> Our
                                        Talented & Experienced Marketing Agency</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i>
                                        Create your own skin to match your brand</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="relative grid md:grid-cols-3 grid-cols-1 items-center gap-[30px] z-1">
                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="1548">1010</span>K+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Job Fulfillment</h5>
                </div><!--end counter box-->

                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="25">2</span>+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Branches</h5>
                </div><!--end counter box-->

                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="9">0</span>+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Years Experience</h5>
                </div><!--end counter box-->
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Questions & Answers
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="flex">
                    <i data-feather="help-circle" class="h-8 text-emerald-600 me-3"></i>
                    <div class="flex-1">
                        <h5 class="mb-2 text-lg font-semibold">How our <span class="text-emerald-600">Jobstack</span> work
                            ?</h5>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is
                            of great importance: human perception is tuned to recognize certain patterns and repetitions in
                            texts.</p>
                    </div>
                </div>

                <div class="flex">
                    <i data-feather="help-circle" class="h-8 text-emerald-600 me-3"></i>
                    <div class="flex-1">
                        <h5 class="mb-2 text-lg font-semibold"> What is the main process open account ?</h5>
                        <p class="text-slate-400">If the distribution of letters and 'words' is random, the reader will not
                            be distracted from making a neutral judgement on the visual impact</p>
                    </div>
                </div>

                <div class="flex">
                    <i data-feather="help-circle" class="h-8 text-emerald-600 me-3"></i>
                    <div class="flex-1">
                        <h5 class="mb-2 text-lg font-semibold"> How to make unlimited data entry ?</h5>
                        <p class="text-slate-400">Furthermore, it is advantageous when the dummy text is relatively
                            realistic so that the layout impression of the final publication is not compromised.</p>
                    </div>
                </div>

                <div class="flex">
                    <i data-feather="help-circle" class="h-8 text-emerald-600 me-3"></i>
                    <div class="flex-1">
                        <h5 class="mb-2 text-lg font-semibold"> Is <span class="text-emerald-600">Jobstack</span> safer to
                            use with my account ?</h5>
                        <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to
                            have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which
                            more or less corresponds to 'proper' Latin.</p>
                    </div>
                </div>
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
                            </div><!--end col-->

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="text-end relative z-1">
                                    <a href="employer-detail.html"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply
                                        Now</a>
                                    <a href="aboutus.html"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn
                                        More</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->

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
