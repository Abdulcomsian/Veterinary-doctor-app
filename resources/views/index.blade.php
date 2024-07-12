<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body>
    <!--Header Section Starts-->
    <header>
        <nav class="bg-black">
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
            class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 text-black flex justify-between items-center font-workSans text-sm py-2">
            <div class="w-32">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="w-full h-full">
            </div>
            <nav class="flex justify-between w-full max-w-md font-semibold text-base">
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
            <div class="flex justify-between items-center w-full max-w-32 font-semibold text-base">
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
        <div class="max-w-7xl px-2 sm:px-6 lg:px-8 flex pt-5 mx-auto  justify-center">

            <div class="flex flex-col justify-center md:text-left w-full md:max-w-xl pl-10">
                <h1 class="font-semibold text-2xl mb-4">Welcome to Dr. Summers Pet Care</h1>
                <p class="font-bold text-5xl mb-4">A Veterinary Concierge
                    Telehealth Service</p>
                <p class="font-medium text-lg">Where compassion meets convenience!</p>
            </div>
            <div class="relative w-96  flex items-center justify-end mb-0">
                <img src="{{ asset('assets/images/vector.svg') }}" alt="" class="absolute left-11 ">
                <img src="{{ asset('assets/images/dr-summer.png') }}" alt=""
                    class="relative w-full h-full object-contain z-10">
            </div>
        </div>

    </section>
    <!--Hero Section Ends-->

    <!--Services Section Starts-->
    <section class="max-w-7xl px-2 sm:px-6 lg:px-8  pt-5 mx-auto  flex justify-center py-6">
        <div class="flex flex-col items-center w-full">

            <p class="font-montserrat text-base font-bold text-[#6F6F6F] lined-text">What Dr. Summers Offers Services
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
                        <p class="font-montserrat font-medium text-[22px] leading-10 text-center">Emergency TeleTriage and 
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

    <dic class="max-w-7xl px-2 sm:px-6 lg:px-8  pt-5 mx-auto  flex justify-center py-8">
        <div class="flex flex-col items-center w-full">
    
            <p class="font-montserrat text-base font-bold text-[#6F6F6F] faq-text">
                FAQ
            </p>
            <h2 class="text-3xl font-montserrat font-bold">Frequently Ask Questions</h2>
            <img src="{{ asset('assets/images/pet-icon.svg') }}" alt="pet icon" class="mb-6">
     
        </div>
    </dic>
</section>
<!--Frequently Asked Questions Section Ends-->


</body>

</html>
