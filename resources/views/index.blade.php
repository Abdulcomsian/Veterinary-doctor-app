<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>HomePage</title>
</head>
<style>
    .bg-with-opacity::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('assets/images/map.png') }}');
        background-size: cover;
        background-position: center;
        opacity: 0.2;
        /* Adjust the opacity here */
        z-index: -1;
    }
</style>

<body>
    <!--Header Section Starts-->
    <header>
        <nav class="bg-black hidden md:block">
            <div
                class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 text-white flex justify-between font-workSans text-sm py-2">
                <div class="flex items-center justify-between w-full max-w-lg">
                    <div class="flex">
                        <img src="{{ asset('assets/images/location-icon.svg') }}" alt="location icon" class="mr-2">
                        <span>Pet Street 123 - New York</span>
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/email-icon.svg') }}" alt="email icon" class="mr-2">
                        <span>email@yoursite.com</span>
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/phone-white-icon.svg') }}" alt="phone icon" class="mr-2">
                        <span>(123) 456-789</span>
                    </div>
                </div>
                <div class="flex items-center justify-between w-full max-w-20">
                    <a href="https://facebook.com">
                        <img src="{{ asset('assets/images/facebook-white-icon.svg') }}" alt="facebook icon">
                    </a>
                    <a href="https://twitter.com">
                        <img src="{{ asset('assets/images/twitter-white-icon.svg') }}" alt="twitter icon">
                    </a>
                    <a href="https://instagram.com">
                        <img src="{{ asset('assets/images/instagram-white-icon.svg') }}" alt="instagram icon">
                    </a>
                </div>
            </div>
        </nav>
        <section
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-black flex justify-between items-center font-workSans text-sm py-2">
            <div class="w-32">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="w-full h-full">
            </div>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false" id="hamburger-button">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <nav id="navbar-default"
                class="hidden md:flex justify-between w-full max-w-sm md:max-w-md font-semibold text-base">
                <a href="#about" class="flex">
                    <span class="mr-1">About</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </a>
                <a href="#services" class="flex">
                    <span class="mr-1">Services</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </a>
                <a href="#contact" class="flex">
                    <span class="mr-1">Contact</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </a>
                <a href="#blog" class="flex">
                    <span class="mr-1">Blog/News</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </a>
            </nav>
            <div id="navbar-default"
                class="hidden md:flex justify-between items-center w-full max-w-32 font-semibold text-base">
                <a href="#join">Join</a>
                <a href="#login">Login</a>
                <div>
                    <img src="{{ asset('assets/images/cart-icon.svg') }}" alt="cart icon">
                </div>
            </div>
        </section>
    </header>
    <!--Header Section ends-->

    <!--Hero Section-->
    <section class="bg-lightBlue">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 flex pt-5 mx-auto  justify-center">
            <div class="flex flex-col md:flex-row items-center md:justify-between">

                <div
                    class="flex flex-col justify-center md:text-left text-center w-full md:max-w-xl md:pl-10 mb-4 md:mb-0">
                    <h1 class="font-semibold text-2xl mb-4  text-center md:text-left">Welcome to Dr. Summers Pet Care</h1>
                    <p class="font-bold text-3xl md:text-5xl mb-4">A Veterinary Concierge
                        Telehealth Service</p>
                    <p class="font-medium text-lg">Where compassion meets convenience!</p>
                </div>
                <div class="relative  w-72 md:w-96  flex items-center justify-center md:justify-end mb-0">
                    <img src="{{ asset('assets/images/vector.svg') }}" alt="" class="absolute md:left-11 ">
                    <img src="{{ asset('assets/images/dr-summer.png') }}" alt=""
                        class="relative w-full h-full object-contain z-10">
                </div>
            </div>
        </div>

    </section>
    <!--Hero Section Ends-->

    <!--Services Section Starts-->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-8   mx-auto  flex justify-center py-8">
        <div class="flex flex-col items-center w-full">

            <p class="font-montserrat text-base font-bold text-[#6F6F6F] lined-text md:px-4">What Dr. Summers Offers
                Services
            </p>
            <h2 class="text-3xl font-montserrat font-bold">Services</h2>
            <img src="{{ asset('assets/images/pet-icon.svg') }}" alt="pet icon" class="mb-6">

            <div
                class="grid grid-cols-1 place-content-center place-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 w-full gap-6 py-6">
                <!--First Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/remote.svg') }}" alt="remote icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Remote Consultations
                        </p>
                    </div>
                </div>
                <!--First Card End-->
                <!--Second Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/medication.svg') }}" alt="medication icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Medication Management
                        </p>
                    </div>
                </div>
                <!--Second Card Ends-->
                <!--Third Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/nutritional.svg') }}" alt="nutritional icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Nutritional
                            Counseling</p>
                    </div>
                </div>
                <!--Third Card Ends-->
                <!--Fourth Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/behavioral.svg') }}" alt="behavioral icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Behavioral
                            Consultations</p>
                    </div>
                </div>
                <!--Fourth Card Ends-->
                <!--fifth Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/pet-care.svg') }}" alt="pet-care icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Senior Pet Care
                            Planning</p>
                    </div>
                </div>
                <!--fifth Card Ends-->
                <!--Sixth Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/chronic.svg') }}" alt="chronic icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Chronic Disease
                            Management</p>
                    </div>
                </div>
                <!--Sixth Card Ends-->
                <!--Seven Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/prevention.svg') }}" alt="prevention icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Preventive Care
                            Guidance</p>
                    </div>
                </div>
                <!--Seven Card Ends-->
                <!--Eight Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/post-surgical.svg') }}" alt="post-surgical icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Post-Surgical
                            Follow-up</p>
                    </div>
                </div>
                <!--Eight Card Ends-->

                <!--Nine Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/life-care.svg') }}" alt="life-care icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">End-of-Life Care
                            Consultations</p>
                    </div>
                </div>
                <!--Nine Card Ends-->
                <!--Tenth Card Starts-->
                <div class="w-full max-w-sm rounded-lg shadow-sm shadow-gray-600">
                    <div class="flex flex-col justify-center py-6 px-4">
                        <div class="mx-auto w-32 relative mb-4">
                            <img src="{{ asset('assets/images/purple-circle.svg') }}" alt="purple circle"
                                class="w-full h-full">
                            <img src="{{ asset('assets/images/emergency.svg') }}" alt="emergency icon"
                                class="w-1/2 h-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Emergency TeleTriage
                            and
                            Advice</p>
                    </div>
                </div>
                <!--Tenth Card Ends-->
            </div>
        </div>
    </section>
    <!--Services Section Ends-->

    <!--Frequently Asked Questions Section Starts-->
    <section class="bg-faq">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 pt-5 mx-auto flex justify-center py-8">
            <div class="flex flex-col  items-center w-full">
                <h3 class="font-montserrat text-base font-bold text-[#6F6F6F] faq-text">
                    FAQ
                </h3>
                <h2 class="text-3xl font-montserrat font-bold text-center">Frequently Ask Questions</h2>
                <img src="{{ asset('assets/images/pet-icon.svg') }}" alt="pet icon" class="mb-6">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class='accordion-group w-full lg:w-2/4' data-accordion="default-accordion">
                        <div class='accordion border border-solid border-gray-300 p-4 rounded bg-white transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4'
                            id='basic-heading-one-with-icon'>
                            <button
                                class='accordion-toggle group inline-flex items-center justify-between text-left w-full transition duration-500'
                                aria-controls='basic-collapse-one-with-icon'>
                                <h5 class="font-semibold font-montserrat text-lg text-black"> What is telehealth
                                    veterinary concierge care? </h5>
                                <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center'
                                    viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M13 8.9375V17.0625" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600'
                                    width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <div id='basic-collapse-one-with-icon'
                                class='accordion-content w-full overflow-hidden pr-4 max-h-0 transition-max-height duration-500 ease-in-out'
                                aria-labelledby='basic-heading-one'>
                                <p class='text-base text-black font-medium'>Telehealth veterinary concierge care
                                    involves providing veterinary services remotely, allowing pet owners to consult with
                                    a veterinarian via video calls, phone calls, or messaging apps from the comfort of
                                    their home.</p>
                            </div>
                        </div>
                        <div class='accordion border border-solid border-gray-300 p-4 rounded bg-white transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4'
                            id='basic-heading-one-with-icon'>
                            <button
                                class='accordion-toggle group inline-flex items-center justify-between text-left w-full transition duration-500'
                                aria-controls='basic-collapse-one-with-icon'>
                                <h5 class="font-semibold font-montserrat text-lg text-black">What types of services can
                                    be provided through
                                    telehealth?</h5>
                                <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center'
                                    viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M13 8.9375V17.0625" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600'
                                    width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <div id='basic-collapse-one-with-icon'
                                class='accordion-content w-full overflow-hidden pr-4 max-h-0 transition-max-height duration-500 ease-in-out'
                                aria-labelledby='basic-heading-one'>
                                <p class='text-base text-black font-medium'>Telehealth veterinary concierge care
                                    involves providing veterinary services remotely, allowing pet owners to consult with
                                    a veterinarian via video calls, phone calls, or messaging apps from the comfort of
                                    their home.</p>
                            </div>
                        </div>
                        <div class='accordion border border-solid border-gray-300 p-4 rounded bg-white transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4'
                            id='basic-heading-one-with-icon'>
                            <button
                                class='accordion-toggle group inline-flex items-center justify-between text-left w-full transition duration-500'
                                aria-controls='basic-collapse-one-with-icon'>
                                <h5 class="font-semibold font-montserrat text-lg text-black">How does the telehealth
                                    process work? </h5>
                                <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center'
                                    viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M13 8.9375V17.0625" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600'
                                    width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <div id='basic-collapse-one-with-icon'
                                class='accordion-content w-full overflow-hidden pr-4 max-h-0 transition-max-height duration-500 ease-in-out'
                                aria-labelledby='basic-heading-one'>
                                <p class='text-base text-black font-medium'>Telehealth veterinary concierge care
                                    involves providing veterinary services remotely, allowing pet owners to consult with
                                    a veterinarian via video calls, phone calls, or messaging apps from the comfort of
                                    their home.</p>
                            </div>
                        </div>
                        <div class='accordion border border-solid border-gray-300 p-4 rounded bg-white transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4'
                            id='basic-heading-one-with-icon'>
                            <button
                                class='accordion-toggle group inline-flex items-center justify-between text-left w-full transition duration-500'
                                aria-controls='basic-collapse-one-with-icon'>
                                <h5 class="font-semibold font-montserrat text-lg text-black"> Is telehealth suitable
                                    for all pet health
                                    concerns? </h5>
                                <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center'
                                    viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M13 8.9375V17.0625" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600'
                                    width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <div id='basic-collapse-one-with-icon'
                                class='accordion-content w-full overflow-hidden pr-4 max-h-0 transition-max-height duration-500 ease-in-out'
                                aria-labelledby='basic-heading-one'>
                                <p class='text-base text-black font-medium'>Telehealth veterinary concierge care
                                    involves providing veterinary services remotely, allowing pet owners to consult with
                                    a veterinarian via video calls, phone calls, or messaging apps from the comfort of
                                    their home.</p>
                            </div>
                        </div>
                        <div class='accordion border border-solid border-gray-300 p-4 rounded bg-white transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4'
                            id='basic-heading-one-with-icon'>
                            <button
                                class='accordion-toggle group inline-flex items-center justify-between text-left w-full transition duration-500'
                                aria-controls='basic-collapse-one-with-icon'>
                                <h5 class="font-semibold font-montserrat text-lg text-black">How do I schedule a
                                    telehealth consult with
                                    Dr. Summers? </h5>
                                <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center'
                                    viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M13 8.9375V17.0625" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600'
                                    width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.75 13C22.75 7.61719 18.3828 3.25 13 3.25C7.61719 3.25 3.25 7.61719 3.25 13C3.25 18.3828 7.61719 22.75 13 22.75C18.3828 22.75 22.75 18.3828 22.75 13Z"
                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M17.0625 13H8.9375" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                            <div id='basic-collapse-one-with-icon'
                                class='accordion-content w-full overflow-hidden pr-4 max-h-0 transition-max-height duration-500 ease-in-out'
                                aria-labelledby='basic-heading-one'>
                                <p class='text-base text-black font-medium'>Telehealth veterinary concierge care
                                    involves providing veterinary services remotely, allowing pet owners to consult with
                                    a veterinarian via video calls, phone calls, or messaging apps from the comfort of
                                    their home.</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative hidden lg:block w-full lg:w-2/4">
                        <img src="{{ asset('assets/images/dog.png') }}" alt=""
                            class="w-44 lg:absolute lg:left-16 lg:top-0 mx-auto lg:mx-0">
                        <img src="{{ asset('assets/images/women-with-dog.png') }}" alt=""
                            class="w-56 lg:absolute lg:top-28 lg:left-64 mx-auto lg:mx-0 mt-4 lg:mt-0">
                        <img src="{{ asset('assets/images/cats.png') }}" alt=""
                            class="w-44 lg:absolute lg:top-80 lg:left-24 mx-auto lg:mx-0 mt-4 lg:mt-0">
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Frequently Asked Questions Section Ends-->


    <!--Testimonials Section Starts-->
    <section id="testimonials" class="relative bg-with-opacity">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 pt-5 mx-auto flex justify-center py-8 relative z-10">
            <div class="flex flex-col  items-center w-full">

                <h3 class="font-montserrat text-base font-bold text-[#6F6F6F] lined-text md:px-4">
                    What Pet Parents Say
                </h3>
                <h2 class="text-3xl font-montserrat text-center font-bold uppercase pb-8">testimonials</h2>
                <div class="flex flex-col md:flex-row md:-mx-3">
                    <div class="flex-1 md:pr-4">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Sit
                                amet consectetur adipiscing elit duis.</p>
                            <div class="flex items-center mt-8">
                                <img class="w-12 h-12 mr-4 rounded-full"
                                    src="https://randomuser.me/api/portraits/men/15.jpg" alt="Jane Doe">
                                <div>
                                    <p>Jane Doe</p>
                                    <p class="text-sm text-gray-600">Director of Research and Data</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 md:pr-4">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Sit
                                amet consectetur adipiscing elit duis.</p>
                            <div class="flex items-center mt-8">
                                <img class="w-12 h-12 mr-4 rounded-full"
                                    src="https://randomuser.me/api/portraits/men/15.jpg" alt="John Doe">
                                <div>
                                    <p>John Doe</p>
                                    <p class="text-sm text-gray-600">Director of Research and Data</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Sit
                                amet consectetur adipiscing elit duis.</p>
                            <div class="flex items-center mt-8">
                                <img class="w-12 h-12 mr-4 rounded-full"
                                    src="https://randomuser.me/api/portraits/men/15.jpg" alt="Jane Smith">
                                <div>
                                    <p>Jane Smith</p>
                                    <p class="text-sm text-gray-600">Director of Research and Data</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Section ends-->

    <!--Latest News section Starts-->
    <section class="bg-white">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 pt-5 mx-auto flex justify-center py-10">
            <div class="flex flex-col  items-center w-full">
                <h3 class="font-montserrat text-base font-bold text-[#6F6F6F] faq-text">
                    Blogs
                </h3>
                <h2 class="text-3xl font-montserrat font-bold text-black pb-8">Latest news</h2>


                <div
                    class="flex justify-center  gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
                    <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                        <div class="flex items-center">
                            <img src="https://plus.unsplash.com/premium_photo-1661943672478-6161b9ea75cc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="blogs tailwind section" class="rounded-t-2xl w-full">
                        </div>
                        <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                            <span class="text-indigo-600 font-medium mb-3 block">Jan 01, 2023</span>
                            <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">Clever ways to invest in
                                product to organize your portfolio</h4>
                            <p class="text-gray-500 leading-6 mb-10">Discover smart investment strategies to streamline
                                and organize your portfolio..</p>
                            <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read
                                more..</a>
                        </div>
                    </div>
                    <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1712746438645-eabe483784be?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="blogs tailwind section" class="rounded-t-2xl w-full">
                        </div>
                        <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                            <span class="text-indigo-600 font-medium mb-3 block">Feb 01, 2023</span>
                            <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">How to grow your profit
                                through systematic investment with us</h4>
                            <p class="text-gray-500 leading-6 mb-10">Unlock the power of systematic investment with us
                                and watch your profits soar. Our..</p>
                            <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read
                                more..</a>
                        </div>
                    </div>
                    <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1712746438720-7e16f30636cb?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="blogs tailwind section" class="rounded-t-2xl w-full">
                        </div>
                        <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                            <span class="text-indigo-600 font-medium mb-3 block">Mar 01, 20233</span>
                            <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">How to analyze every holdings
                                of your portfolio</h4>
                            <p class="text-gray-500 leading-6 mb-10">Our comprehensive guide will equip you with the
                                tools and insights needed to..</p>
                            <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read
                                more..</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--Latest News section Ends-->
    <!--Footer Section Starts-->
    <footer class="bg-footer">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-center md:justify-between py-6 md:py-10">

                <div class="w-full flex flex-col items-center md:items-start mb-4 md:mb-0">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="mb-4">
                    <ul class="w-full max-w-72 flex justify-between mb-6 font-montserrat text-lg font-medium">
                        <li><a href="">About</a></li>
                        <li><a href="">Learn</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Social</a></li>
                    </ul>
                    <ul class="w-full max-w-28 flex justify-between">
                        <li><img src="{{ asset('assets/images/facebook-icon.svg') }}" alt="facebook icon"></li>
                        <li><img src="{{ asset('assets/images/twitter-icon.svg') }}" alt="twitter icon"></li>
                        <li><img src="{{ asset('assets/images/insta-icon.svg') }}" alt="instagram icon"></li>
                    </ul>
                </div>
                <div class="w-full">
                    <p class="mb-4 font-montserrat text-lg font-medium text-center md:text-left">Learn more about your
                        pet’s health from Dr Summers</p>
                    <div class="relative mb-4">
                        <input type="text" id="input-group-1"
                            class="bg-transparent font-montserrat email-border text-black placeholder:text-black placeholder:text-lg placeholder:font-medium text-sm rounded block w-full pe-10 px-2 py-4"
                            placeholder="Email">
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.6951 8.70711C19.0856 8.31658 19.0856 7.68342 18.6951 7.29289L12.3311 0.928933C11.9406 0.538409 11.3074 0.538409 10.9169 0.928933C10.5264 1.31946 10.5264 1.95262 10.9169 2.34315L16.5738 8L10.9169 13.6569C10.5264 14.0474 10.5264 14.6805 10.9169 15.0711C11.3074 15.4616 11.9406 15.4616 12.3311 15.0711L18.6951 8.70711ZM-8.74228e-08 9L17.988 9L17.988 7L8.74228e-08 7L-8.74228e-08 9Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>

                    <p class="font-montserrat text-sm font-medium text-center md:text-left">By subscribing you agree
                        that you would like hear about PET by Dr. Summers, services, sales and marketing (including
                        online personalized information and advertising via our website and social media platform).</p>
                </div>
            </div>
            <div
                class="flex flex-col md:flex-row items-center  md:justify-between pt-4 pb-4 md:pb-8 border-top text-gray-600 font-workSans text-base">
                <p>© 2024 Dr Summers. All Rights Reserved</p>
                <p>Privacy Policy and Terms</p>
            </div>
        </div>
    </footer>
    <!--Footer Section Ends-->




    <script>
        // document.getElementById('hamburger-button').addEventListener('click', function() {
        //     var navbar = document.getElementById('navbar-default');
        //     navbar.classList.toggle('hidden');
        // });




        document.querySelectorAll('.accordion-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                const accordion = button.closest('.accordion');

                // Toggle the active class
                accordion.classList.toggle('accordion-active');

                // Check if the accordion content is already open
                if (accordionContent.style.maxHeight && accordionContent.style.maxHeight !== "0px") {
                    // If open, close it
                    accordionContent.style.maxHeight = "0px";
                } else {
                    // If closed, open it
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                }

                // Toggle the visibility of the icons
                button.querySelectorAll('svg').forEach(icon => {
                    icon.classList.toggle('hidden');
                    icon.classList.toggle('block');
                });
            });
        });
    </script>


</body>

</html>
