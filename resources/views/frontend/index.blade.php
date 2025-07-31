@extends('component.main')
@section('content')
    {{-- BANNER --}}
    <div class="max-w-full mx-auto">
        <section id="carousel" class="relative overflow-hidden">
            <!-- Carousel Wrapper -->
            <div class="relative h-[65vh] w-full">
                <!-- Slides -->
                <div class="absolute inset-0 flex transition-opacity duration-700 ease-in-out active" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_1.jpg') }}"
                        class="object-cover object-center w-full h-full" alt="First Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_2.jpg') }}"
                        class="object-cover object-center w-full h-full" alt="Second Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('asset/img/Webside_Front_Page_3.jpg') }}"
                        class="object-cover object-center w-full h-full" alt="Third Slide">
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
    <div class="bg-gray-100 px-6 py-12 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-6">
            <!-- Left: Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/ContentImages/202229102935515principal_2020_inn.jpg') }}"
                    alt="Principal Image" class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <!-- Right: Text Content -->
            <div class="w-full md:w-1/2 text-gray-800">
                <h2 class="text-xl font-bold mb-4">
                    “A child’s foot should be planted in his country, but his eyes should survey the world.”
                </h2>
                <p class="text-sm mb-4">
                    Our mentors at school ignite the spark of creativity and curiosity in our students.
                    We strive to provide an environment that is sacred and has a flexible framework of discipline.
                </p>
                <p class="text-sm mb-4">
                    We encourage parents’ involvement in their ward’s education, as parent-school collaboration
                    yields the best results in shaping careers.
                </p>
                <p class="text-sm italic font-semibold">
                    “Educating the mind without educating the heart is no education at all.” – Aristotle
                </p>
                <p class="text-sm mt-4">
                    We impart education to match advancements in technology and globalization while instilling moral
                    values and principles. Our goal is to nurture students into responsible global citizens.
                </p>
            </div>
        </div>
    </div>

    {{-- Latest news --}}
    <div class="flex justify-center p-6">
        <h1 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold w-full">
            Latest News & Updates
        </h1>
    </div>
    <div class="bg-gray-100 flex items-center justify-center min-h-auto p-4">
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
    </div>
    {{-- <div class="flex  flex-col md:flex-row gap-8 w-full px-12 py-4 justify-center ">
        <div class="bg-white rounded-lg shadow-lg w-full md:w-100 p-4">
            <div class="bg-teal-700 text-white py-3 px-4 font-semibold flex items-center">
                <i class="ri-bar-chart-box-line mr-2"></i> News and Updates
            </div>
            <div id="news-slider" class="relative h-40 overflow-hidden mt-4">
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">30</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Summer Vacation - 2024-25</p>
                            <p>IX-XII Summer Vacation - 2024-25</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">25</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Class IV - 3rd Language Syllabus</p>
                            <p>Dear Parents, Kindly find the attached PDF for your ward. Regards, Class Teacher.</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">30</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Summer Vacation - 2024-25</p>
                            <p>IX-XII Summer Vacation - 2024-25</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">25</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Class IV - 3rd Language Syllabus</p>
                            <p>Dear Parents, Kindly find the attached PDF for your ward. Regards, Class Teacher.</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
            </div>
            <div class="flex justify-between p-4">
                <button onclick="prevSlide()" class="bg-gray-200 hover:bg-gray-300 p-2 rounded-md">
                    <i class="ri-arrow-up-s-line"></i>
                </button>
                <button onclick="nextSlide()" class="bg-gray-200 hover:bg-gray-300 p-2 rounded-md">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg w-full md:w-100 p-0">
            <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/ContentImages/20251614441580post1.jpg') }}"
                alt="" class="w-auto h-auto object-cover">
        </div>
    </div> --}}

    {{-- slider groups --}}
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
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 1">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner2.jpg') }}" class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 2">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}" class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 3">
                    </div>
                    <div class="w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full h-auto shadow-md object-cover" alt="Image 4">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prev" class="nav-btn absolute left-2 md:left-3 top-1/2 transform -translate-y-1/2 p-2 md:p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❮</button>
            <button id="next" class="nav-btn absolute right-2 md:right-3 top-1/2 transform -translate-y-1/2 p-2 md:p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❯</button>
        </div>
    </div>




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


   {{-- CONTACT FORM --}}
   <div class="relative w-full h-full">
    <!-- Background Image -->
    <img src="{{ asset('asset/img/phone.jpg') }}" alt="Contact Background"
      class="w-full h-full object-cover object-center">

    <!-- Foreground Content Box -->
    <div class="absolute inset-0 z-10 p-4 sm:p-8 md:p-12 lg:p-20 max-w-5xl mx-auto bg-white/50 rounded-xl shadow-xl my-24">
      <!-- Contact Info Boxes -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">
        <!-- Box 1 -->
        <div class="flex items-start gap-4 p-5 bg-white rounded-lg shadow">
          <i class="ri-map-pin-fill text-3xl text-red-600"></i>
          <div>
            <h1 class="text-lg font-bold mb-1">Address</h1>
            <p class="text-sm text-gray-700">K-38, Keshavpuram, Awas Vikas, Kalyanpur, Kanpur (U.P) 208017</p>
          </div>
        </div>
        <!-- Box 2 -->
        <div class="flex items-start gap-4 p-5 bg-white rounded-lg shadow">
          <i class="ri-phone-fill text-3xl text-blue-600"></i>
          <div>
            <h1 class="text-lg font-bold mb-1">Phone</h1>
            <p class="text-sm text-gray-700">+91 98765 43210</p>
          </div>
        </div>
        <!-- Box 3 -->
        <div class="flex items-start gap-4 p-5 bg-white rounded-lg shadow">
          <i class="ri-mail-fill text-3xl text-green-600"></i>
          <div>
            <h1 class="text-lg font-bold mb-1">Email</h1>
            <p class="text-sm text-gray-700">info@realvictorygroups.com</p>
          </div>
        </div>
      </div>

      <!-- Map & Contact Form Section -->
      <div class="flex flex-col lg:flex-row gap-8 items-start">
        <!-- Google Map -->
        <div class="w-full lg:w-1/2">
          <iframe class="rounded-xl w-full h-[300px] sm:h-[350px] md:h-[400px]" style="border:0;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3570.7953924458748!2d80.279698!3d26.494532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3826d4ebf859%3A0xe9e2ed37cc371552!2sReal%20Victory%20Groups!5e0!3m2!1sen!2sin!4v1753942228185!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <!-- Contact Form -->
        <div class="w-full lg:w-1/2 bg-white p-6 rounded-xl shadow">
          <h2 class="text-2xl font-bold mb-4">Connect With Us</h2>
          <form class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Name</label>
              <input type="text" placeholder="Your Name"
                class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" placeholder="Your Email"
                class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700">Message</label>
              <textarea rows="4" placeholder="Write your message here"
                class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit"
              class="bg-[#2D4366] text-white px-6 py-3 rounded-lg hover:bg-black transition w-full">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>



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
   document.addEventListener("DOMContentLoaded", function () {
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


    {{-- news and letters script --}}
    <script>
        let currentIndex = 0;
        const newsItems = document.querySelectorAll('.news-item');

        function showSlide(index) {
            newsItems.forEach((item, i) => {
                item.style.transform = `translateY(${(i - index) * 100}%)`;
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % newsItems.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + newsItems.length) % newsItems.length;
            showSlide(currentIndex);
        }

        showSlide(currentIndex);
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
@endsection
