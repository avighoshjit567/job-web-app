<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}">
            <div class="block sm:hidden">
                <img src="{{ asset('web-assets/images/logo-icon-40.png') }}" class="h-10 inline-block dark:hidden"
                    alt="">
                <img src="{{ asset('web-assets/images/logo-icon-40-white.png') }}" class="h-10 hidden dark:inline-block"
                    alt="">
            </div>
            <div class="sm:block hidden">
                <img src="{{ asset('web-assets/images/logo-dark.png') }}" class="h-[24px] inline-block dark:hidden"
                    alt="">
                <img src="{{ asset('web-assets/images/logo-white.png') }}" class="h-[24px] hidden dark:inline-block"
                    alt="">
            </div>
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline-block mb-0">
                <div class="relative top-[3px]">
                    <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                    <input type="text"
                        class="py-2 px-3 text-[14px] border border-gray-100 dark:border-gray-800 dark:text-slate-200 rounded outline-none bg-transparent h-9 !pe-10 rounded-3xl sm:w-44 w-36 bg-white dark:bg-slate-900"
                        name="s" id="searchItem" placeholder="Search...">
                </div>
            </li>
            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span
                        class="size-9 inline-flex items-center text-center justify-center text-base font-semibold tracking-wide border align-middle transition duration-500 ease-in-out rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img
                            src="{{ asset('web-assets/images/team/01.jpg') }}" class="rounded-full"
                            alt=""></span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden"
                    onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <a href="javascript:void(0);"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="user" class="size-4 me-2"></i>Profile</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="settings" class="size-4 me-2"></i>Settings</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="javascript:void(0);"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </li><!--end dropdown-->
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span
                        class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="javascript:void(0);" class="sub-menu-item">Job Categories</a></li>

                        <li><a href="javascript:void(0);" class="sub-menu-item">Job Apply</a></li>

                        <li><a href="javascript:void(0);" class="sub-menu-item">Job Post </a></li>

                        <li><a href="javascript:void(0);" class="sub-menu-item">Career </a></li>
                    </ul>
                </li>

                <li><a href="{{ route('about') }}" class="sub-menu-item">About</a></li>
                <li><a href="{{ route('contact') }}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
