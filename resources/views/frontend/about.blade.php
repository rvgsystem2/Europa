@extends('component.main')

@section('content')
<header class="bg-gradient-to-r from-red-700 to-red-500 text-white py-12 shadow-lg">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-6 gap-8">
        <h1 class="text-3xl md:text-6xl font-extrabold text-center md:text-left tracking-wide">
            About Us
        </h1>
        <img src="{{ asset('asset/img/globe.png') }}" alt="Globe" class="h-32 w-32 md:h-40 md:w-40 ">
    </div>
</header>

<section class="flex items-center justify-center min-h-auto py-10 px-6 bg-gray-50">
    <div class="max-w-3xl text-center">
        <h2 class="text-lg md:text-xl font-bold text-gray-800 leading-snug">
            At <span class="text-yellow-500">Europa Olympiad</span>, we strive to honor each child by nurturing their innate sense of 
            <span class="italic underline">wonder and curiosity</span>.
        </h2>
    </div>
</section>

<section class="bg-gray-100 py-16 px-6">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 text-center md:text-left">
            <h2 class="text-4xl font-extrabold text-red-600">About Us</h2>
            <h3 class="text-2xl font-light text-gray-700 mt-2">Welcome to Europa Olympiad</h3>
            <p class="text-gray-700 mt-6 leading-relaxed">
                Europa Olympiad Foundation is a registered organization established by the 
                <span class="font-semibold">Government of India in 2023</span> by leading educationists and national-level social workers. 
                Our mission is to provide students with <strong class="text-red-500">international-level education and examinations</strong>.
            </p>
            <p class="text-gray-700 mt-6 leading-relaxed">
                All our activities aim to make learning an <strong class="text-red-500">interactive and engaging</strong> process where students can apply 
                their skills, memory, and knowledge effectively.
            </p>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('asset/img/logo-short.jpg') }}" 
                 alt="Europa Olympiad Students" class="rounded-lg shadow-2xl transform hover:scale-105 transition duration-300">
        </div>
    </div>
</section>

<section class="bg-blue-50 py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-red-600 font-semibold uppercase tracking-widest text-lg">Why Choose Us?</h2>
        <h3 class="text-4xl font-bold text-gray-800 mt-4">Why Choose Europa Olympiad?</h3>
        <p class="text-gray-700 mt-6 max-w-2xl mx-auto leading-relaxed">
            To ensure our children are well equipped to thrive in the future, we emphasize an unparalleled education experience,
            encouraging students to explore their potential and the wonders of the world.
        </p>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transform hover:scale-105 transition duration-300">
            <img src="{{ asset('asset/img/globe.png') }}" alt="Icon" class="w-14 mb-4">
            <p class="text-gray-700 text-lg text-center">
                We offer <span class="text-red-500 font-semibold">free exams</span> for students with major physical disabilities.
            </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transform hover:scale-105 transition duration-300">
            <img src="{{ asset('asset/img/globe.png') }}" alt="Icon" class="w-14 mb-4">
            <p class="text-gray-700 text-lg text-center">
                Children of single mothers or under guardianship are <span class="text-red-500 font-semibold">exempted from fees</span>.
            </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transform hover:scale-105 transition duration-300">
            <img src="{{ asset('asset/img/globe.png') }}" alt="Icon" class="w-14 mb-4">
            <p class="text-gray-700 text-lg text-center">
                <span class="text-red-500 font-semibold">Teachers’ children</span> are also provided free exams.
            </p>
        </div>
    </div>
</section>

<section class="bg-gray-400 py-16 px-6 text-white text-center">
    <h2 class="text-xl font-semibold uppercase tracking-widest">What Parents Say</h2>
    <h3 class="text-4xl font-bold mt-2">Kind Words from Our Parents</h3>
    <p class="text-lg mt-4 max-w-2xl mx-auto">
        Hear directly from parents about their experience with us.
    </p>

    <div class="mt-12 relative max-w-4xl mx-auto px-4">
        <div class="overflow-hidden relative">
            <!-- Wrapper to avoid flickering -->
            <div class="flex transition-transform duration-700 ease-in-out" id="testimonial-slider">
                <!-- Cloned slides for seamless looping -->
                <div class="slide bg-white text-gray-800 shadow-lg rounded-lg p-6 min-w-full text-center">
                    <p class="italic">"The teachers are amazing, and the environment is so supportive!"</p>
                    <h4 class="mt-4 text-lg font-semibold">Michael Thomson</h4>
                </div>
                <div class="slide bg-white text-gray-800 shadow-lg rounded-lg p-6 min-w-full text-center">
                    <p class="italic">"My child is thriving academically and socially. Thank you for the wonderful experience!"</p>
                    <h4 class="mt-4 text-lg font-semibold">Daniel Radplateu</h4>
                </div>
                <div class="slide bg-white text-gray-800 shadow-lg rounded-lg p-6 min-w-full text-center">
                    <p class="italic">"This school has helped my child gain confidence and excel in studies."</p>
                    <h4 class="mt-4 text-lg font-semibold">Sussan Joseph</h4>
                </div>
                <!-- Cloned first slide to create infinite loop effect -->
                <div class="slide bg-white text-gray-800 shadow-lg rounded-lg p-6 min-w-full text-center">
                    <p class="italic">"The teachers are amazing, and the environment is so supportive!"</p>
                    <h4 class="mt-4 text-lg font-semibold">Michael Thomson</h4>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button id="prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-red-700 text-white px-4 py-2 rounded-full shadow-md hover:bg-red-800">
            ❮
        </button>
        <button id="next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-red-700 text-white px-4 py-2 rounded-full shadow-md hover:bg-red-800">
            ❯
        </button>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.getElementById("testimonial-slider");
        const slides = document.querySelectorAll(".slide");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");
        let index = 1; // Start from the second slide (first real one)
        let isTransitioning = false;

        function updateSlider() {
            slider.style.transition = "transform 0.7s ease-in-out";
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            index++;
            updateSlider();

            // Reset position when reaching the cloned last slide
            setTimeout(() => {
                if (index === slides.length - 1) {
                    slider.style.transition = "none";
                    index = 1; // Jump back to the first real slide
                    slider.style.transform = `translateX(-${index * 100}%)`;
                }
                isTransitioning = false;
            }, 700);
        }

        function prevSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            index--;
            updateSlider();

            // Reset position when reaching the first cloned slide
            setTimeout(() => {
                if (index === 0) {
                    slider.style.transition = "none";
                    index = slides.length - 2; // Jump to the last real slide
                    slider.style.transform = `translateX(-${index * 100}%)`;
                }
                isTransitioning = false;
            }, 700);
        }

        nextButton.addEventListener("click", nextSlide);
        prevButton.addEventListener("click", prevSlide);

        // Auto-slide every 3 seconds
        setInterval(nextSlide, 3000);
    });
</script>


 
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Meet Our Team</h2>
            <p class="text-gray-600 mt-2">Our dedicated professionals</p>

            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 mt-10">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="data:image/jpeg;base64,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" alt="Team Member" class="w-32 h-32 mx-auto rounded-full">
                    <h3 class="text-xl font-semibold mt-4 text-gray-800">John Doe</h3>
                    <p class="text-gray-600">CEO & Founder</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xl"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 text-xl"><i class="ri-twitter-fill"></i></a>
                        <a href="#" class="text-gray-800 hover:text-black text-xl"><i class="ri-github-fill"></i></a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="data:image/jpeg;base64,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" alt="Team Member" class="w-32 h-32 mx-auto rounded-full">
                    <h3 class="text-xl font-semibold mt-4 text-gray-800">Jane Smith</h3>
                    <p class="text-gray-600">Lead Developer</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xl"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 text-xl"><i class="ri-twitter-fill"></i></a>
                        <a href="#" class="text-gray-800 hover:text-black text-xl"><i class="ri-github-fill"></i></a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="data:image/jpeg;base64,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" alt="Team Member" class="w-32 h-32 mx-auto rounded-full">
                    <h3 class="text-xl font-semibold mt-4 text-gray-800">Emily Johnson</h3>
                    <p class="text-gray-600">Marketing Manager</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xl"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 text-xl"><i class="ri-twitter-fill"></i></a>
                        <a href="#" class="text-gray-800 hover:text-black text-xl"><i class="ri-github-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
    const slider = document.getElementById("testimonial-slider");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    let index = 0;
    function showSlide(direction) {
        const slides = slider.children.length;
        index = (index + direction + slides) % slides;
        slider.style.transform = `translateX(-${index * 100}%)`;
    }
    prev.addEventListener("click", () => showSlide(-1));
    next.addEventListener("click", () => showSlide(1));
</script>
@endsection