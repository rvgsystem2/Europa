@extends('component.main')

@section('content')
    <header class="relative h-80 md:h-[32rem] overflow-hidden shadow-lg">
        <!-- Background Image -->
        <img src="https://cdn.pixabay.com/photo/2016/10/04/17/12/banner-1714905_1280.jpg"
            alt="Globe Banner" class="absolute inset-0 w-full h-auto object-cover " />

        <!-- Overlay -->
        <div class="absolute inset-0 "></div>

        <!-- Content -->
        <div class="relative z-10 flex items-center justify-center h-full px-6">
            <div class="text-center md:text-left max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold text-black tracking-wide leading-tight">
                    About Us
                </h1>
                <p class="mt-4 text-lg md:text-xl text-gray-800 font-light">
                    Discover who we are, what we do, and why we do it with passion and purpose.
                </p>
            </div>
        </div>
    </header>


    <section class="flex items-center justify-center min-h-auto py-10 px-6 bg-gray-50">
        <div class="max-w-3xl text-center">
            <h2 class="text-lg md:text-xl font-bold text-gray-800 leading-snug">
                At <span class="text-yellow-500">Europa Olympiad</span>, we strive to honor each child by nurturing their
                innate sense of
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
                    All activities of the Foundation invariably aim at making learning an interesting and interactive
                    process in which the learner is actually able to put his / her skills, memory, talent and knowledge to
                    test.
                </p>
                <p class="text-gray-700 mt-6 leading-relaxed">
                    For this, the Foundation conducts workshops, seminars and science/IT, humanities competitions for
                    students of different classes and age groups.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('https://cdn.pixabay.com/photo/2016/04/27/06/51/businessman-1356063_1280.jpg') }}"
                    alt="Europa Olympiad Students"
                    class="rounded-lg shadow-2xl transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>

    <section class="bg-blue-50 py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl text-red-600 font-semibold uppercase tracking-widest">
                    Why Choose Us?
                </h2>
            </div>

            <!-- Subheading and List -->
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800">
                    The foundation conducts the following Olympiads:
                </h3>
                <ul class="list-decimal list-inside text-gray-700 mt-6 text-left md:text-lg leading-relaxed">
                    <li>International Aptitude Olympiad (IAO)</li>
                    <li>International Science Olympiad (ISO)</li>
                    <li>International Mathematics Olympiad (IMO)</li>
                    <li>International General Knowledge Olympiad (IGKO)</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Heading -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-gray-800 uppercase">Contact Us</h2>
                <p class="text-gray-600 mt-2">EUROPA OLYMPIAD LEAGUES PRIVATE LIMITED</p>
            </div>

            <!-- Grid Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Address -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Office Address</h3>
                    <p class="text-gray-600">K-38, Keshavpuram, Avas Vikas, Kalyanpur</p>
                    <p class="text-gray-600">Kanpur - 208017 [U.P.] India</p>
                    <p class="mt-4 text-gray-600"><span class="font-medium">Working Days:</span> Monday – Saturday</p>
                    <p class="text-gray-600">9:00 AM - 6:00 PM</p>
                    <p class="text-gray-500 italic mt-1">All Sundays Off</p>
                </div>

                <!-- Contact Info -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Contact Information</h3>
                    <p class="text-gray-600"><span class="font-medium">Email:</span> <a
                            href="mailto:info@europaolympiad.com"
                            class="text-blue-600 hover:underline">info@europaolympiad.org</a></p>
                    <p class="text-gray-600 mt-2"><span class="font-medium">Mobile:</span> <a href="tel:+919170032441"
                            class="text-blue-600 hover:underline">+919170032441</a></p>
                </div>

                <!-- Social & Quick Links -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Follow Us</h3>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 48 48">
                                <path fill="#fff"
                                    d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                </path>
                                <path fill="#fff"
                                    d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                </path>
                                <path fill="#cfd8dc"
                                    d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                </path>
                                <path fill="#40c351"
                                    d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                </path>
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://europaolympiad.com/gallery/" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 48 48">
                                <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615"
                                    y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#2aa4f4"></stop>
                                    <stop offset="1" stop-color="#007ad9"></stop>
                                </linearGradient>
                                <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                    d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                <path fill="#fff"
                                    d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                                    r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                    cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <path fill="#fff"
                                    d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                </path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff"
                                    d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-700 mt-4 mb-2">Quick Links</h4>
                    <ul class="space-y-1 text-gray-600">
                        <li><a href="#" class="hover:text-blue-700 hover:underline">Exam Schedule</a></li>
                        <li><a href="#" class="hover:text-blue-700 hover:underline">Results (2023-24)</a></li>
                        <li><a href="#" class="hover:text-blue-700 hover:underline">Syllabus</a></li>
                        <li><a href="#" class="hover:text-blue-700 hover:underline">Award & Prizes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Font Awesome CDN for Icons -->
    <script src="https://kit.fontawesome.com/a2e0e6ad59.js" crossorigin="anonymous"></script>
@endsection
