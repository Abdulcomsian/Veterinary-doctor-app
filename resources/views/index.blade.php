<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav>

        <div class="bg-black">
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
                    <img src="{{ asset('assets/images/facebook-white-icon.svg') }}" alt="facebook icon">
                    <img src="{{ asset('assets/images/twitter-white-icon.svg') }}" alt="twitter icon">
                    <img src="{{ asset('assets/images/instagram-white-icon.svg') }}" alt="instagram icon">
                </div>
            </div>
        </div>

        <div
            class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 text-[#222222] flex justify-between items-center font-workSans text-sm py-2 font-montserrat">
            <div class="w-32">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="w-full h-full">
            </div>
            <div class="flex justify-between w-full max-w-md font-semibold text-base">
                <div class="flex">
                    <span class="mr-1">About</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </div>
                <div class="flex">
                    <span class="mr-1">Services</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </div>
                <div class="flex">
                    <span class="mr-1"> Contact</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </div>
                <div class="flex">
                    <span class="mr-1">Blog/News</span>
                    <img src="{{ asset('assets/images/dash-icon.svg') }}" alt="dash icon">
                </div>

            </div>
            <div class="flex justify-between items-center w-full max-w-32 font-semibold text-base">
                <span>Join</span>
                <span>Login</span>
                <div>
                    <img src="{{ asset('assets/images/cart-icon.svg') }}" alt="cart icon">
                </div>
            </div>
        </div>

    </nav>
    <!--Hero Section-->
    <section class=" bg-lightBlue">
        <div class="max-w-7xl px-2 sm:px-6 lg:px-8 flex pt-5 mx-auto  justify-center">

            <div class="flex flex-col justify-center md:text-left w-full md:max-w-xl pl-10">
                <h1 class="font-semibold text-2xl mb-4">Welcome to Dr. Summers Pet Care</h1>
                <p class="font-bold text-5xl mb-4">A Veterinary Concierge
                    Telehealth Service</p>
                <p class="font-medium text-lg">Where compassion meets convenience!</p>
            </div>
            <div class="relative w-96  flex items-center justify-end mb-0">
                <img src="{{ asset('assets/images/vector.svg') }}" alt="" class="absolute left-11 ">
                <img src="{{ asset('assets/images/dr-summer.png') }}" alt="" class="relative w-full h-full object-contain z-10">
            </div>
        </div>
        
    </section>
</body>

</html>
