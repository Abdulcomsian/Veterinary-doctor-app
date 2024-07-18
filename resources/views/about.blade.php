<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('public/assets/css/about.css')
    <title>About</title>
</head>


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
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 flex pt-5 mx-auto  justify-between">
            <div class="w-full flex flex-col md:flex-row items-center md:justify-between">

                <div
                    class="flex flex-col font-montserrat justify-center md:text-left text-center w-full mb-4 md:mb-0">
                    <p class="font-bold text-xl  text-center md:text-left mb-4">Welcome to</p>
                    <div class="font-bold text-white text-3xl mb-4 bg-pinkish max-w-max p-2 mx-auto md:mx-0">Dr. Meg Summers</div>
                    <p class="font-medium text-2xl">VETERINARY CONCIERGE TELEHEALTH SERVICES</p>
                </div>
                <div class="w-full  flex items-center justify-center">
                    <div class="w-64">
                        <img src="{{ asset('assets/images/dr-summer-with-dog.png') }}" alt="" class=" w-full h-full">
                    </div>
     
                </div>
            </div>
        </div>

    </section>
    <!--Hero Section Ends-->

      <!--Frequently Asked Questions Section Starts-->
      <section class="bg-white">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 pt-5 mx-auto flex justify-center py-8">
            <div class="flex flex-col  items-center w-full">
                <h3 class="font-montserrat text-base font-bold text-[#6F6F6F] faq-text">
                    About
                </h3>
                <h2 class="text-3xl font-montserrat font-bold text-center">DR Meg SUMMERS</h2>
                <img src="{{ asset('assets/images/pet-icon.svg') }}" alt="pet icon" class="mb-4">
                <p class="w-full max-w-[43rem] font-montserrat font-medium mx-auto text-center">I'm a dedicated small animal veterinarian with a passion for providing personalized and compassionate care to pets and their families. After graduating from Lincoln Memorial University College of Veterinary Medicine in 2020, I embarked on a journey in veterinary medicine that has led me from the bustling streets of New York City to the serene shores of the Hamptons.</p>
            </div>
        </div>
    </section>
    <!--Frequently Asked Questions Section Ends-->





  

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
