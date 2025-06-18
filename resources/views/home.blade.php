@extends('website.layouts')
@section('content')
    <!-- Start -->
    <section
        class="relative py-36 table w-full bg-gradient-to-b from-emerald-600/20 dark:from-emerald-600/40 via-emerald-600/10 dark:via-emerald-600/20 to-transparent">
        <div class="container">
            <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="md:order-1 order-2">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl shadow-sm dark:shadow-gray-800 md:p-8 p-6 lg:me-10 relative">
                        <h4 class="mb-3 text-3xl font-semibold">Find Your Expected Job</h4>
                        <p class="text-slate-400">Find Jobs, Employment & Career Opportunities. Some of the companies we've
                            helped recruit excellent applicants over the years.</p>

                        <form class="mt-6">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="form-label font-medium">Search :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-briefcase-alt icons"></i>
                                        <input name="name" type="text" id="job-keyword"
                                            class="form-input filter-input-box !bg-gray-50 dark:!bg-slate-800"
                                            placeholder="Search your Keywords">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label font-medium">Location :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-map-marker icons"></i>
                                        <select class="form-select" data-trigger name="choices-location"
                                            id="choices-location" aria-label="Default select example">
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="GM">Gambia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label font-medium">Job Type :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-briefcase-alt icons"></i>
                                        <select class="form-select" data-trigger name="choices-type" id="choices-type"
                                            aria-label="Default select example">
                                            <option selected="" value="1">Full Time</option>
                                            <option value="2">Part Time</option>
                                            <option value="3">Freelancer</option>
                                            <option value="4">Remote Work</option>
                                            <option value="5">Office Work</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <input type="submit" id="search" name="search"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white searchbtn submit-btn rounded-md"
                                        value="Search">
                                </div>
                            </div><!--end grid-->
                        </form>
                        <!-- end form -->
                    </div>
                </div>

                <div class="md:order-2 order-1">
                    <img src="{{ asset('web-assets/images/svg/woman_working_2.svg') }}" alt="">
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container mt-16">
            <div class="grid md:grid-cols-10 sm:grid-cols-5 grid-cols-4 justify-center gap-[30px]">
                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/circle-logo.png') }}') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/android.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/google-logo.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/facebook-logo.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/lenovo-logo.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/linkedin.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/skype.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/spotify.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/telegram.png') }}" class="h-7" alt="">
                </div>

                <div
                    class="size-12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 flex justify-center items-center rounded-md mx-auto py-4">
                    <img src="{{ asset('web-assets/images/company/whatsapp.png') }}" class="h-7" alt="">
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:pb-24 pb-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">How it's Work?</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
                <div
                    class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                    <div
                        class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                        <i class="uil uil-airplay"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Create Account</a>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-5">
                            <a href="#"
                                class="inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--end content-->

                <div
                    class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                    <div
                        class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                        <i class="uil uil-shutter"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Complete Your
                            Profile</a>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-5">
                            <a href="#"
                                class="inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--end content-->

                <div
                    class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                    <div
                        class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                        <i class="uil uil-camera-plus"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Apply Job or
                            Hire</a>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-5">
                            <a href="#"
                                class="inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <div class="grid grid-cols-12 gap-6 items-center">
                            <div class="col-span-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <img src="{{ asset('web-assets/images/about/ab03.jpg') }}"
                                        class="shadow-sm rounded-md" alt="">
                                    <img src="{{ asset('web-assets/images/about/ab02.jpg') }}"
                                        class="shadow-sm rounded-md" alt="">
                                </div>
                            </div>

                            <div class="col-span-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <img src="{{ asset('web-assets/images/about/ab01.jpg') }}"
                                        class="shadow-sm rounded-md" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 dark:text-white">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ms-8">
                        <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold">Get the job of you
                            dreams <br> quick & easy.</h3>

                        <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own
                            personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i>
                                Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i> Our
                                Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i>
                                Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-6">
                            <a href="{{ route('contact') }}"
                                class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white mt-2 rounded-md"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
                <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                    <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Browse by
                        Categories</h3>
                    <p class="text-slate-400 max-w-xl">Search your career opportunity with our categories</p>
                </div>

                <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                    <a href="#"
                        class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">All
                        Categories <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div><!--end grid-->

            <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Human Resource</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">It & Networking</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Sales & Marketing</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Accounting</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Delivery Boy</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Data Science</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Project Manager</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Engineering</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Help Center</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                    <h5 class="text-lg font-semibold group-hover:text-white">Full Stack Developer</h5>
                    <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">90 Jobs Available</span>

                    <div class="mt-2">
                        <a href="javascript:void(0);"
                            class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explore Jobs <i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
                <div class="md:col-span-12 text-center">
                    <a href="#"
                        class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">All
                        Categories <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Popular Jobs</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/facebook-logo.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="job-detail-one.html"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">Web
                            Designer</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Full
                                Time</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Australia</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="javascript:void(0);"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>

                    <span
                        class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1"><i
                            class="uil uil-star"></i></span>
                </div><!--end content-->

                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/google-logo.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="job-detail-one.html"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">Marketing
                            Director</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Part
                                Time</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> USA</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="job-apply.html"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>
                </div><!--end content-->

                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/android.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="job-detail-one.html"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">App
                            Developer</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Remote</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> China</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="job-apply.html"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>
                </div><!--end content-->

                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/lenovo-logo.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="javascript:void(0);"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">Product
                            Designer</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">WFH</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Dubai</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="javascript:void(0);"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>
                </div><!--end content-->

                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/spotify.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="javascript:void(0);"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">C++
                            Developer</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Full
                                Time</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> India</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="javascript:void(0);"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>

                    <span
                        class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1"><i
                            class="uil uil-star"></i></span>
                </div><!--end content-->

                <div
                    class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('web-assets/images/company/linkedin.png') }}" class="size-8"
                                alt="">
                        </div>
                        <a href="javascript:void(0);"
                            class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">Php
                            Developer</a>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block"><span
                                class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Remote</span></span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb
                            2023</span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Pakistan</span>
                        <span class="block font-semibold md:mt-1 mt-0">$4,000 - $4,500</span>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3"><i
                                data-feather="bookmark" class="size-4"></i></a>
                        <a href="javascript:void(0);"
                            class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply
                            Now</a>
                    </div>

                    <span
                        class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1"><i
                            class="uil uil-star"></i></span>
                </div><!--end content-->
            </div><!--end grid-->

            <div class="grid md:grid-cols-1 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <a href="javascript:void(0);"
                        class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See
                        More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section
        class="py-20 w-full table relative bg-[url('../../assets/images/hero/bg2.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-slate-900/70"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-4 md:text-[26px] text-2xl text-white font-medium">Get the job that's right for you</h3>

                <p class="text-white/80 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 mx-auto mt-10">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                </a>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Find Best Companies
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/spotify.png') }}" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Spotify</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Australia</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/facebook-logo.png') }}" class="size-8"
                            alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Facebook</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> USA</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/google-logo.png') }}" class="size-8"
                            alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Google</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> China</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/android.png') }}" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Android</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Dubai</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/lenovo-logo.png') }}" class="size-8"
                            alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Lenovo</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Pakistan</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/shree-logo.png') }}" class="size-8"
                            alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Shreethemes</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> India</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/skype.png') }}" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Skype</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Rush</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="{{ asset('web-assets/images/company/snapchat.png') }}" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Snapchat</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Turkey</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                <div class="md:col-span-12 text-center">
                    <a href="#"
                        class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See
                        More Companies <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16" style="display: none;">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Latest Blog or News
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('web-assets/images/blog/01.jpg') }}"
                            class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                    </div>

                    <div class="relative p-6">
                        <div class="absolute start-6 -top-4">
                            <span
                                class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Arts</span>
                        </div>

                        <div class="">
                            <div class="flex mb-4">
                                <span class="text-slate-400 text-sm"><i
                                        class="uil uil-calendar-alt text-slate-900 dark:text-white me-2"></i>20th February,
                                    2023</span>
                                <span class="text-slate-400 text-sm ms-3"><i
                                        class="uil uil-clock text-slate-900 dark:text-white me-2"></i>5 min read</span>
                            </div>

                            <a href="blog-detail.html"
                                class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">11 Tips
                                to Help You Get New Clients Through Cold Calling</a>

                            <div class="flex justify-between items-center mt-3">
                                <a href="blog-detail.html"
                                    class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                                <span class="text-slate-400 text-sm">by <a href="#"
                                        class="text-slate-900 dark:text-white hover:text-emerald-600 dark:hover:text-emerald-600 font-medium">Google</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end content-->

                <div
                    class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('web-assets/images/blog/02.jpg') }}"
                            class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                    </div>

                    <div class="relative p-6">
                        <div class="absolute start-6 -top-4">
                            <span
                                class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Illustration</span>
                        </div>

                        <div class="">
                            <div class="flex mb-4">
                                <span class="text-slate-400 text-sm"><i
                                        class="uil uil-calendar-alt text-slate-900 dark:text-white me-2"></i>20th February,
                                    2023</span>
                                <span class="text-slate-400 text-sm ms-3"><i
                                        class="uil uil-clock text-slate-900 dark:text-white me-2"></i>5 min read</span>
                            </div>

                            <a href="blog-detail.html"
                                class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">DigitalOcean
                                launches first Canadian data centre in Toronto</a>

                            <div class="flex justify-between items-center mt-3">
                                <a href="blog-detail.html"
                                    class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                                <span class="text-slate-400 text-sm">by <a href="#"
                                        class="text-slate-900 dark:text-white hover:text-emerald-600 dark:hover:text-emerald-600 font-medium">Facebook</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end content-->

                <div
                    class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('web-assets/images/blog/03.jpg') }}"
                            class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                    </div>

                    <div class="relative p-6">
                        <div class="absolute start-6 -top-4">
                            <span
                                class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                        </div>

                        <div class="">
                            <div class="flex mb-4">
                                <span class="text-slate-400 text-sm"><i
                                        class="uil uil-calendar-alt text-slate-900 dark:text-white me-2"></i>20th February,
                                    2023</span>
                                <span class="text-slate-400 text-sm ms-3"><i
                                        class="uil uil-clock text-slate-900 dark:text-white me-2"></i>5 min read</span>
                            </div>

                            <a href="blog-detail.html"
                                class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">Using
                                Banner Stands To Increase Trade Show Traffic</a>

                            <div class="flex justify-between items-center mt-3">
                                <a href="blog-detail.html"
                                    class="inline-block font-semibold tracking-wide border align-middle transition text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                                <span class="text-slate-400 text-sm">by <a href="#"
                                        class="text-slate-900 dark:text-white hover:text-emerald-600 dark:hover:text-emerald-600 font-medium">Linkedin</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
