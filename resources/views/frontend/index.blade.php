@extends('component.main')
@section('content')
    {{-- BANNER --}}
    <div class="max-w-full mx-auto">
        <section id="carousel" class="relative overflow-hidden">
            <!-- Carousel Wrapper -->
            <div class="relative lg:h-[68vh] h-[18vh] md:h-[50vh] xl:h-[68vh] lg:w-full w-auto">
                <!-- Slides -->
                <div class="absolute inset-0 transition-opacity duration-700 ease-in-out active" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_1.jpg') }}"
                        class="w-full h-full object-cover object-center" alt="First Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_2.jpg') }}"
                        class="w-full h-full object-cover object-center" alt="Second Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_3.jpg') }}"
                        class="w-full h-full object-cover object-center" alt="Third Slide">
                </div>
            </div>
            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 flex space-x-2 -translate-x-1/2">
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 2"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 3"></button>
            </div>
            <!-- Controls -->
            <button type="button"
                class="absolute top-1/2 left-2 flex items-center justify-center w-8 h-8 bg-gray-200/70 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="absolute top-1/2 right-2 flex items-center justify-center w-8 h-8 bg-gray-200/70 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </section>
    </div>

    {{-- ABOUT US --}}
    <div class="bg-white px-6 py-12 md:px-12 lg:px-24">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <!-- Left: Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('asset/img/about.jpg') }}" alt="Principal Image" class="w-full h-auto ">
            </div>

            <!-- Right: Text Content -->
            <div class="w-full md:w-1/2 text-gray-800">
                <h2 class="text-3xl text-red-500 font-bold mb-4 py-4">
                    Message from Europa Olympiad:
                </h2>
                <span>Enhance Your Mind with Europa Olympiad Exams!</span>
                <p class="text-medium mb-4">
                    At Europa Olympiad, we believe in nurturing the bright minds of tomorrow
                    by providing a plaorm for students to challenge themselves and unlock their
                    full potenal. Parcipate in presgious exams such as:
                </p>

                <ul class="list-disc list-inside text-medium mb-4">
                    <li>IGKO (Internaonal General Knowledge Olympiad)</li>
                    <li> IAO (Internaonal Aptude Olympiad)</li>
                    <li> ISO (Internaonal Science Olympiad)</li>
                    <li> IMO (Internaonal Mathemacs Olympiad)</li>
                </ul>

                <p class="text-medium mb-4">
                    These exams not only help you develop crical thinking and problem-solving
                    skills but also ignite a passion for knowledge and learning. Whether you’re looking
                    to test your general knowledge, explore the stars, dive deep into science, or conquer
                    mathemacal challenges, we offer opportunies that will enhance your intellectual
                    growth and boost your academic career.
                </p>
                <p class="text-medium italic font-semibold">
                    Why Choose Europa Olympiad?
                </p>
                <p class="text-medium mt-4">
                    Enhance logical and analycal thinking.
                    Gain recognion for your academic excellence.
                    Connect with like-minded peers from around the world.
                    Earn cerficaons that shine on your academic record.
                    Join us at Europa Olympiad and embark on a journey that will take your
                    mind to new heights! ✨
                </p>
                <span>Stay curious. Stay brilliant.</span>
                <p class="font-bold">Europa Olympiad Team</p>
            </div>
        </div>
    </div>

    {{-- Latest news --}}
    <div class="flex justify-center py-6">
        <h1 class=" bg-pink-300 py-3 text-center text-2xl sm:text-3xl md:text-4xl font-bold w-full">
            Latest News & Updates
        </h1>
    </div>
    {{-- content --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 px-4 py-8  max-w-full">

        <!-- Left Decorative Image -->
        <div class="overflow-hidden hidden md:block ">
            <img src="{{ asset('asset/img/decorate.jpg') }}" alt="Decoration" class="w-auto h-auto object-cover">
        </div>

        <!-- News and Updates Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <div class="bg-[#d5f1bc] text-black py-4 px-6 font-semibold flex items-center">
                <i class="ri-bar-chart-box-line mr-2"></i> News and Updates
            </div>

            <div class="relative h-96 sm:h-[32rem] overflow-hidden group border border-gray-300 rounded-lg shadow-lg">
                <!-- Scrolling Content -->
                <div class="absolute top-0 left-0 w-full animate-[scroll-up_30s_linear_infinite] group-hover:[animation-play-state:paused]">
                    <div class="space-y-4">
                        <!-- Slide 1 -->
                        @forelse ($notes as $note)
                            <div class="p-4 bg-white border-b">
                                <div class="flex items-start space-x-4 p-4">
                                    <div class="bg-black text-white px-3 py-2 rounded-md text-center min-w-[60px]">
                                        <p class="text-lg font-bold leading-tight">{{ $note->created_at->format('d') }}</p>
                                        <p class="text-xs leading-none">{{ $note->created_at->format('F') }}</p>
                                        <p class="text-xs leading-none">{{ $note->created_at->format('Y') }}</p>
                                    </div>
                                    <div class="text-gray-800 text-sm flex-1">
                                        <p class="font-semibold">{{ $note->title }}</p>
                                        <p>{{ $note->content }}</p>
                                    </div>
                                    <i class="ri-attachment-2 text-gray-500"></i>
                                </div>
                            </div>
                        @empty
                            <div class="p-4 bg-white border-b">
                                <p class="text-gray-500">No notes available.</p>
                            </div>
                        @endforelse
                        {{-- <div class="p-4 bg-white border-b">
                            <div class="flex items-start space-x-4 p-4">
                                <div class="bg-black text-white px-3 py-2 rounded-md text-center min-w-[60px]">
                                    <p class="text-lg font-bold leading-tight">30</p>
                                    <p class="text-xs leading-none">Oct</p>
                                    <p class="text-xs leading-none">4</p>
                                </div>
                                <div class="text-gray-800 text-sm flex-1">
                                    <p class="font-semibold">Summer Vacation - 2024-25</p>
                                    <p>IX-XII Summer Vacation - 2024-25</p>
                                </div>
                                <i class="ri-attachment-2 text-gray-500"></i>
                            </div>
                        </div> --}}

                       
                    </div>
                </div>
            </div>

            <!-- Custom animation style -->
            <style>
                @keyframes scroll-up {
                    0% {
                        transform: translateY(0%);
                    }

                    100% {
                        transform: translateY(-50%);
                    }
                }
            </style>


        </div>

        <!-- News Image Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('asset/img/image.jpg') }}" alt="News Image"
                class="w-auto h-auto object-cover object-center">
            <p class="text-xl font-bold text-center pt-12 px-2">"You were born to be a player.
                You were meant to be here.
                This moment is yours."</p>
        </div>

        <!-- Right Decorative Image -->
        <div class=" overflow-hidden hidden md:block relative">
            <img src="{{ asset('asset/img/decorate.jpg') }}" alt="Decoration"
                class="w-auto h-auto object-cover absolute right-0">
        </div>
    </div>

    {{-- Exams Plate (Session 2025 - 26) --}}
    <div class="flex justify-center py-6">
        <h1 class=" bg-pink-300 py-3 text-center text-xl sm:text-3xl md:text-4xl font-bold w-full">Exams Plate (Session
            2025 - 26)</h1>
    </div>

    {{-- EXAM BANNER --}}
    {{-- <div class="flex justify-center items-center relative">
        <!-- Background Image -->
        <img src="{{ asset('asset/img/G.K..png') }}" alt="IGKO Banner" class="w-full h-auto object-cover">

        <!-- Overlay with Text -->
        <div class="absolute inset-0 p-6 flex flex-col items-center justify-center text-center px-4 z-10">
            <p class="text-black text-md lg:text-3xl md:text-2xl  font-bold">
                IGKO (International General Knowledge Olympiad)
            </p>
            <span class="text-black text-xs md:text-md mt-2">Date: 3 November 2025</span>
        </div>
    </div> --}}

{{-- slider --}}
<div class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-lg shadow-md">
    <div id="slider" class="flex transition-transform duration-700 ease-in-out">
        <!-- Slide 1 -->
        <div class="relative w-full flex-shrink-0">
            <img src="{{ asset('asset/img/G.K..png') }}" class="w-full md:h-64 object-cover" alt="Slide 1">
            <div class="absolute inset-0 p-6 flex flex-col items-start justify-start text-start px-4 z-10">
                <p class="text-black text-md lg:text-3xl md:text-2xl font-bold">
                    IGKO (International General Knowledge Olympiad)
                </p>
                <span class="text-black text-xs md:text-md mt-2">Date: 3 November 2025</span>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="relative w-full flex-shrink-0">
            <img src="{{ asset('asset/img/APTITUDE.png') }}" class="w-full md:h-64 object-cover" alt="Slide 2">
            <div class="absolute inset-0 p-6 flex flex-col items-start justify-start text-start px-4 z-10">
                <p class="text-black text-md lg:text-3xl md:text-2xl font-bold">
                    IGKO (International Aptitude Olympiad)
                </p>
                <span class="text-black text-xs md:text-md mt-2">Date: 3 November 2025</span>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="relative w-full flex-shrink-0">
            <img src="{{ asset('asset/img/MATHS.png') }}" class="w-full md:h-64 object-cover" alt="Slide 3">
            <div class="absolute inset-0 p-6 flex flex-col items-start justify-start text-start px-4 z-10">
                <p class="text-black text-md lg:text-3xl md:text-2xl font-bold">
                    IGKO (International Maths Olympiad)
                </p>
                <span class="text-black text-xs md:text-md mt-2">Date: 3 November 2025</span>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="relative w-full flex-shrink-0">
            <img src="{{ asset('asset/img/SCIENCE.png') }}" class="w-full md:h-64 object-cover" alt="Slide 4">
            <div class="absolute inset-0 p-6 flex flex-col items-start justify-start text-start px-4 z-10">
                <p class="text-black text-md lg:text-3xl md:text-2xl font-bold">
                    IGKO (International Science Olympiad)
                </p>
                <span class="text-black text-xs md:text-md mt-2">Date: 3 November 2025</span>
            </div>
        </div>
       </div>
</div>





    {{-- FREE FOR STUDENTS WHO ARE --}}
    <div class="flex justify-center py-6">
        <h1 class=" bg-pink-300 py-3 text-center text-xl sm:text-3xl md:text-4xl font-bold w-full">FREE FOR STUDENTS WHO
            ARE</h1>
    </div>
    {{-- images --}}
    <div class="w-full bg-gray-100 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-4 gap-6 px-4">
            <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:shadow-2xl transition-all duration-300">
                <div class="overflow-hidden group">
                    <img src="{{ asset('asset/img/single-parent.jpg') }}" alt="Single Parent"
                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <p class="text-center text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                        Single Parent
                    </p>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:shadow-2xl transition-all duration-300">
                <div class="overflow-hidden group">
                    <img src="{{ asset('asset/img/guardian.jpg') }}" alt="Single Parent"
                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <p class="text-center text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                        Guardian
                    </p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:shadow-2xl transition-all duration-300">
                <div class="overflow-hidden group">
                    <img src="{{ asset('asset/img/staff-child.jpg') }}" alt="Single Parent"
                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <p class="text-center text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                        Staff Child
                    </p>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:shadow-2xl transition-all duration-300">
                <div class="overflow-hidden group">
                    <img src="{{ asset('asset/img/handicap.jpg') }}" alt="Single Parent"
                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <p class="text-center text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                       Handicap
                    </p>
                </div>
            </div>

        </div>
    </div>


    {{-- ABOUT US --}}
    <!-- Section Title -->
    <div class="flex justify-center lg:py-6">
        <h1 class="bg-pink-300 py-3 text-center text-xl sm:text-3xl md:text-4xl font-bold w-full">
            ABOUT US
        </h1>
    </div>

    <!-- About Content Section -->
    <div class="bg-white w-full px-4 py-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">

            <!-- Text Content -->
            <div class="md:w-1/2">
                <h2 class="md:text-3xl text-lg font-semibold mb-4 text-red-700">
                    Welcome to Europa Olympiad
                </h2>
                <p class="text-gray-700 text-sm md:text-xl leading-relaxed">
                    Europa Olympiad Foundation is a registered organization established by the Government
                    of India in 2023 by leading educationists and national-level social workers. Our mission is to
                    provide students with international-level education and examinations.
                </p>
            </div>

            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('asset/img/team-worl.jpg') }}" alt="Our Team"
                    class="w-auto h-auto rounded-lg shadow-md object-cover">
            </div>
        </div>

        <!-- Paragraph Below Image -->
        <div class="max-w-5xl mx-auto mt-6 text-gray-700 text-sm md:text-xl leading-relaxed px-2">
            <p>
                All our activities aim to make learning an interactive and engaging process where
                students can apply their skills, memory, and knowledge effectively.
            </p>
        </div>
    </div>



    {{-- slider groups
    <div class="flex justify-center p-6 bg-gray-100 ">
        <h1 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold w-full">
            Our Group Institutions
        </h1>
    </div>
    <div class="bg-gray-100 flex items-center justify-center min-h-auto p-4">
        <div class="relative w-full max-w-5xl overflow-hidden">
            <!-- Slider Container -->
            <div class="slider-container rounded-lg shadow-lg overflow-hidden">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}"
                            class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 1">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner2.jpg') }}"
                            class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 2">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}"
                            class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 3">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}"
                            class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 4">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prev"
                class="nav-btn absolute left-2 md:left-3 top-1/2 transform -translate-y-1/2 p-2 md:p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❮</button>
            <button id="next"
                class="nav-btn absolute right-2 md:right-3 top-1/2 transform -translate-y-1/2 p-2 md:p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❯</button>
        </div>
    </div> --}}




    {{-- Acheivements and learning --}}
    {{-- <div class="bg-gray-100 flex items-center justify-center min-h-auto p-4">
        <div class="relative w-full max-w-5xl overflow-hidden">
            <!-- Responsive Titles -->
            <div class="flex flex-col md:flex-row justify-evenly text-center md:text-left">
                <h1 class="text-xl md:text-2xl font-semibold p-2">Achievements</h1>
                <h1 class="text-xl md:text-2xl font-semibold p-2">Experiential Learning Corner</h1>
            </div>

            <!-- Slider Wrapper -->
            <div class="slider-wrapper rounded-lg shadow-lg overflow-hidden mt-4 relative">
                <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 1">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner2.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 2">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 3">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 4">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevSlide"
                class="slider-btn absolute left-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❮</button>
            <button id="nextSlide"
                class="slider-btn absolute right-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❯</button>
        </div>
    </div> --}}


    {{-- CONTACT FORM SECTION --}}

    <section class="relative w-full min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <!-- Background Image with overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('asset/img/phone.jpg') }}" alt="Contact Background"
                class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="flex justify-center lg:py-6">
                <h1 class=" py-3 text-center text-white text-xl md:text-3xl md:text-4xl font-bold w-full">
                    Contact us
                </h1>
            </div>
            <!-- Content Box -->
            <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-2xl overflow-hidden my-8 md:my-12 lg:my-16">
                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-6 sm:p-8">
                    <!-- Address Card -->
                    <div
                        class="flex flex-col sm:flex-row items-start gap-4 p-5 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="bg-red-50 p-3 rounded-full">
                            <i class="ri-map-pin-fill text-2xl text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Our Location</h3>
                            <address class="text-sm text-gray-600 not-italic">
                                K-38, Keshavpuram, Awas Vikas,<br>
                                Kalyanpur, Kanpur (U.P) 208017
                            </address>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div
                        class="flex flex-col sm:flex-row items-start gap-4 p-5 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="bg-blue-50 p-3 rounded-full">
                            <i class="ri-phone-fill text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                            <p class="text-sm text-gray-600">
                                <a href="tel:+919876543210" class="hover:text-blue-600 transition-colors">
                                    +91 98765 43210
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div
                        class="flex flex-col sm:flex-row items-start gap-4 p-5 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="bg-green-50 p-3 rounded-full">
                            <i class="ri-mail-fill text-2xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-sm text-gray-600">
                                <a href="mailto:info@realvictorygroups.com"
                                    class="hover:text-green-600 transition-colors">
                                    info@realvictorygroups.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Map & Form Section -->
                <div class="flex flex-col lg:flex-row gap-8 p-6 sm:p-8">
                    <!-- Google Map -->
                    <div class="w-full lg:w-1/2 h-full">
                        <div class="relative rounded-xl overflow-hidden shadow-md h-full lg:min-h-[600px]">
                            <iframe class="absolute  w-full h-full object-cover border-0"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3570.7953924458748!2d80.279698!3d26.494532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3826d4ebf859%3A0xe9e2ed37cc371552!2sReal%20Victory%20Groups!5e0!3m2!1sen!2sin!4v1753942228185!5m2!1sen!2sin"
                                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                aria-label="Google Maps location of Real Victory Groups">
                            </iframe>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="w-full lg:w-1/2">
                        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-md h-full">
                            <h2 class="text-2xl font-bold mb-6 text-gray-800">Connect With Us</h2>
                            <form class="space-y-4" method="POST" action="#">
                                @csrf

                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                                        Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required>
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email"
                                        placeholder="your.email@example.com"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required>
                                </div>

                                <!-- Message Field -->
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                                        Your Message <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" placeholder="How can we help you?"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        const slider = document.getElementById('testimonial-slider');
        let index = 0;

        function changeTestimonial(i) {
            index = i;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
    </script>

    {{-- Acheivements and learnig --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("imageSlider");
            let slides = document.querySelectorAll(".slide");
            const prevBtn = document.getElementById("prevSlide");
            const nextBtn = document.getElementById("nextSlide");

            let index = 1; // Start at 1 because of cloned elements
            const slideWidth = slides[0].offsetWidth;
            let autoSlideInterval;

            // Clone first and last slides
            const firstClone = slides[0].cloneNode(true);
            const lastClone = slides[slides.length - 1].cloneNode(true);

            // Add clones to the slider
            slider.appendChild(firstClone);
            slider.insertBefore(lastClone, slides[0]);

            // Re-fetch slides after cloning
            slides = document.querySelectorAll(".slide");

            // Set initial position
            slider.style.transform = `translateX(-${index * slideWidth}px)`;

            // Function to move the slider smoothly
            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${index * slideWidth}px)`;
            }

            // Move to the next slide
            function nextSlide() {
                if (index >= slides.length - 1) return;
                index++;
                updateSlider();
            }

            // Move to the previous slide
            function prevSlide() {
                if (index <= 0) return;
                index--;
                updateSlider();
            }

            // Reset transition for seamless loop
            slider.addEventListener("transitionend", () => {
                if (index === slides.length - 1) {
                    slider.style.transition = "none";
                    index = 1;
                    slider.style.transform = `translateX(-${index * slideWidth}px)`;
                }
                if (index === 0) {
                    slider.style.transition = "none";
                    index = slides.length - 2;
                    slider.style.transform = `translateX(-${index * slideWidth}px)`;
                }
            });

            // Auto slide function
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 4000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Event Listeners
            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);

            // Start autoplay on page load
            startAutoSlide();
        });
    </script>

    {{-- sliedr image overlay --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("sliderWrapper");
            const dots = document.querySelectorAll(".dot");

            let index = 0;
            const totalSlides = slider.children.length;
            let autoSlide;

            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(${-index * 100}%)`;

                dots.forEach((dot, i) => {
                    dot.classList.toggle("bg-white", i === index);
                });
            }

            function nextSlide() {
                if (index < totalSlides - 1) {
                    index++;
                } else {
                    // Smoothly transition from last slide to first
                    index = 0;
                    slider.style.transition = "none"; // Remove transition for instant reset
                    slider.style.transform = `translateX(0)`;
                }
                setTimeout(() => {
                    updateSlider();
                }, 10); // Small delay to re-enable transition after reset
            }

            function prevSlide() {
                index = (index - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            dots.forEach((dot, i) => {
                dot.addEventListener("click", () => {
                    index = i;
                    updateSlider();
                });
            });

            // Auto-play function
            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 3000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlide);
            }

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);

            // Start autoplay
            startAutoSlide();
        });
    </script>
    {{-- Our Group Institutions script --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("slider");
            const prev = document.getElementById("prev");
            const next = document.getElementById("next");

            let index = 0;
            let slidesToShow = window.innerWidth < 640 ? 1 : 2; // 1 image on mobile, 2 on desktop
            const totalSlides = slider.children.length;

            function updateSlider() {
                const slideWidth = slider.children[0].clientWidth;
                slider.style.transform = `translateX(${-index * slideWidth}px)`;
            }

            function nextSlide() {
                if (index < totalSlides - slidesToShow) {
                    index++;
                } else {
                    index = 0;
                }
                updateSlider();
            }

            function prevSlide() {
                if (index > 0) {
                    index--;
                } else {
                    index = totalSlides - slidesToShow;
                }
                updateSlider();
            }

            next.addEventListener("click", nextSlide);
            prev.addEventListener("click", prevSlide);

            // Auto-play
            let autoSlide = setInterval(nextSlide, 3000);

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", () => clearInterval(autoSlide));
            slider.addEventListener("mouseleave", () => autoSlide = setInterval(nextSlide, 3000));

            // Adjust dynamically for screen size changes
            window.addEventListener("resize", () => {
                slidesToShow = window.innerWidth < 640 ? 1 : 2;
                index = 0; // Reset index for smooth transition
                updateSlider();
            });

            updateSlider(); // Initial call
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("slider");
            const slides = document.querySelectorAll("#slider > div");
            const prevBtn = document.getElementById("prev");
            const nextBtn = document.getElementById("next");

            let index = 1;
            let slideWidth = slides[0].getBoundingClientRect().width;
            const totalSlides = slides.length;

            // Clone first and last slides for seamless loop
            const firstClone = slides[0].cloneNode(true);
            const lastClone = slides[totalSlides - 1].cloneNode(true);

            slider.appendChild(firstClone);
            slider.insertBefore(lastClone, slides[0]);

            // Adjust slider position after adding clones
            const newSlides = document.querySelectorAll("#slider > div");
            slider.style.transform = `translateX(-${index * slideWidth}px)`;

            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${index * slideWidth}px)`;
            }

            function nextSlide() {
                if (index >= newSlides.length - 1) return;
                index++;
                updateSlider();

                if (index === newSlides.length - 1) {
                    setTimeout(() => {
                        slider.style.transition = "none";
                        index = 1;
                        slider.style.transform = `translateX(-${index * slideWidth}px)`;
                    }, 500);
                }
            }

            function prevSlide() {
                if (index <= 0) return;
                index--;
                updateSlider();

                if (index === 0) {
                    setTimeout(() => {
                        slider.style.transition = "none";
                        index = newSlides.length - 2;
                        slider.style.transform = `translateX(-${index * slideWidth}px)`;
                    }, 500);
                }
            }

            // Auto-slide every 3 seconds
            let autoSlide = setInterval(nextSlide, 3000);

            function stopAutoSlide() {
                clearInterval(autoSlide);
            }

            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 3000);
            }

            // Event Listeners
            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);

            // Touch swipe support for mobile
            let startX = 0;
            let endX = 0;

            slider.addEventListener("touchstart", (e) => {
                startX = e.touches[0].clientX;
            });

            slider.addEventListener("touchend", (e) => {
                endX = e.changedTouches[0].clientX;
                if (startX - endX > 50) nextSlide(); // Swipe left
                if (endX - startX > 50) prevSlide(); // Swipe right
            });

            // Adjust on resize
            window.addEventListener("resize", () => {
                slideWidth = slides[0].getBoundingClientRect().width;
                slider.style.transition = "none";
                slider.style.transform = `translateX(-${index * slideWidth}px)`;
            });
        });
    </script>



    {{-- banner script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector("#carousel");
            const slides = carousel.querySelectorAll("[data-carousel-item]");
            const prevButton = carousel.querySelector("[data-carousel-prev]");
            const nextButton = carousel.querySelector("[data-carousel-next]");
            const indicators = carousel.querySelectorAll("[aria-label^='Go to slide']");
            let currentIndex = 0;
            let interval;

            function updateCarousel(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });
                indicators.forEach((dot, i) => {
                    dot.classList.toggle("bg-gray-400", i === index);
                    dot.classList.toggle("bg-gray-300", i !== index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateCarousel(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateCarousel(currentIndex);
            }

            function goToSlide(index) {
                currentIndex = index;
                updateCarousel(currentIndex);
            }

            function startAutoSlide() {
                interval = setInterval(nextSlide, 5000);
            }

            function stopAutoSlide() {
                clearInterval(interval);
            }

            // Event Listeners
            nextButton.addEventListener("click", () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            prevButton.addEventListener("click", () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            indicators.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    goToSlide(index);
                    stopAutoSlide();
                    startAutoSlide();
                });
            });

            // Initialize
            updateCarousel(currentIndex);
            startAutoSlide();
        });
    </script>

    {{-- exam section slider --}}
    <script>
        const slider = document.getElementById("slider");
        const slides = slider.children;
        const slideWidth = slides[0].offsetWidth;
        let index = 0;
        let isResetting = false;

        function autoplaySlider() {
            if (isResetting) return;

            index++;
            slider.style.transition = 'transform 0.7s ease-in-out';
            slider.style.transform = `translateX(-${index * slideWidth}px)`;

            // Reset without animation if at the end of the clone
            if (index === slides.length - 2) {
                isResetting = true;
                setTimeout(() => {
                    slider.style.transition = 'none';
                    slider.style.transform = `translateX(0px)`;
                    index = 0;
                    isResetting = false;
                }, 700); // match transition duration
            }
        }

        // Autoplay interval
        setInterval(autoplaySlider, 3000);
    </script>
@endsection
