<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Hire Hunt - Job Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Job Listing Landing Template" name="description">
    <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.6.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('web-assets/images/favicon.ico') }}">

    <!-- Css -->
    <!-- Main Css -->
    <link href="{{ asset('web-assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('web-assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('web-assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->
    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-no-repeat bg-center bg-cover"
        style="background-image: url('{{ asset('web-assets/images/hero/bg4.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900"></div>
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                <div
                    class="relative overflow-hidden bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <div class="p-6">
                        <a href="#">
                            <img src="{{ asset('web-assets/images/logo-dark.png') }}"
                                class="mx-auto h-[24px] block dark:hidden" alt="">
                            <img src="{{ asset('web-assets/images/logo-dark.png') }}"
                                class="mx-auto h-[24px] dark:block hidden" alt="">
                        </a>
                        <h5 class="my-6 text-xl font-semibold">Login</h5>
                        @if (session('login_error'))
                            <div class="mb-4">
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                                    {{ session('login_error') }}
                                </div>
                            </div>
                        @endif
                        <form class="text-start" action="{{ route('user.login.process') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1">
                                <div class="mb-4 text-start">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" type="email" name="email" class="form-input mt-3 rounded-md"
                                        placeholder="name@example.com">
                                </div>

                                <div class="mb-4 text-start">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input id="LoginPassword" name="password" type="password" class="form-input mt-3 rounded-md"
                                        placeholder="Password:">
                                </div>

                                <div class="flex justify-between mb-4">
                                    <div class="inline-flex items-center mb-0">
                                        <input
                                            class="form-checkbox rounded size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-green-600 checked:appearance-auto dark:accent-green-600 focus:border-green-300 focus:ring-0 focus:ring-offset-0 focus:ring-green-200 focus:ring-opacity-50 me-2"
                                            type="checkbox" value="" id="RememberMe">
                                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember
                                            me</label>
                                    </div>
                                    <p class="text-slate-400 mb-0"><a href="#" class="text-slate-400">Forgot
                                            password ?</a></p>
                                </div>

                                <div class="mb-4">
                                    <input type="submit"
                                        class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full"
                                        value="Login / Sign in">
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Don't have an account ?</span> <a
                                        href="{{ route('user.register') }}"
                                        class="text-slate-900 dark:text-white font-bold">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 text-center">
                        <p class="mb-0 text-gray-300 font-medium">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Hire Hunt. Design with <i class="mdi mdi-heart text-red-600"></i>
                            by <a href="#" target="_blank" class="text-reset">Nusrat</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end section -->

    <div class="fixed bottom-3 end-3">
        <a href="{{ route('home') }}"
            class="back-button size-9 inline-flex items-center text-center justify-center text-base font-semibold tracking-wide border align-middle transition duration-500 ease-in-out bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md"><i
                data-feather="arrow-left" class="size-4"></i></a>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('web-assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('web-assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('web-assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
