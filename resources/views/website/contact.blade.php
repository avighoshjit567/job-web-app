@extends('website.layouts')
@section('content')
    <!-- Google Map -->
    <div class="container-fluid relative mt-20">
        <div class="grid grid-cols-1">
            <div class="w-full leading-[0] border-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                    style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    <!-- Google Map -->

    <!-- Start Section-->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="{{ asset('web-assets/images/svg/contact.svg') }}" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:ms-5">
                        <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-700 p-6">
                            <h3 class="mb-6 text-2xl leading-normal font-semibold">Get in touch !</h3>

                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <input name="name" id="name" type="text"
                                            class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                            placeholder="Name :">
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <input name="email" id="email" type="email"
                                            class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                            placeholder="Email :">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-semibold">Your Question:</label>
                                        <input name="subject" id="subject"
                                            class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent mt-2"
                                            placeholder="Subject :">
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <textarea name="comments" id="comments"
                                            class="w-full py-2 px-3 text-[14px] border border-gray-200 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-28 outline-none bg-transparent mt-2 textarea"
                                            placeholder="Message :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send"
                                    class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 text-white rounded-md">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6">
                    <div class="relative text-transparent">
                        <div
                            class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                            <i class="uil uil-phone"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-lg font-semibold">Phone</h5>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-5">
                            <a href="tel:+152534-468-854"
                                class="inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">+152
                                534-468-854</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative text-transparent">
                        <div
                            class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                            <i class="uil uil-envelope"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-lg font-semibold">Email</h5>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-5">
                            <a href="mailto:contact@example.com"
                                class="inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">contact@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative text-transparent">
                        <div
                            class="size-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                            <i class="uil uil-map-marker"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-lg font-semibold">Location</h5>
                        <p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>

                        <div class="mt-5">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                data-type="iframe"
                                class="video-play-icon read-more lightbox inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center relative p-0 border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-emerald-600 hover:text-emerald-600 after:bg-emerald-600">View
                                on Google map</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Section-->
@endsection
