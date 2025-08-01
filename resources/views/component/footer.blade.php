<footer class="bg-gradient-to-t from-[#626E82] via-white to-[#626E82] text-gray-800 py-12">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <!-- Company Info -->
            <div class="md:col-span-2">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('asset/img/logo-short.png') }}" alt="Europa Olympiad Logo" class="w-16 h-16 mr-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Europa Olympiad</h2>
                        <p class="text-sm text-gray-700">Empowering young minds through academic excellence</p>
                    </div>
                </div>
                <p class="text-sm mb-4">A premier organization dedicated to fostering talent and academic growth through competitive olympiads.</p>

                <!-- Newsletter Subscription -->
                <div class="mt-4">
                    <h4 class="text-sm font-semibold text-gray-900 mb-2">Subscribe to our newsletter</h4>
                    <form class="flex gap-2">
                        <input type="email" placeholder="Your email" class="px-3 py-2 text-sm rounded border border-gray-300 focus:outline-none focus:ring-1 focus:ring-[#3AB464]">
                        <button type="submit" class="bg-[#3AB464] text-white px-4 py-2 rounded text-sm font-medium hover:bg-[#2E9B54] transition">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        About Us</a></li>
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Olympiad Info</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Contact</a></li>
                    <li><a href="#" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        FAQ</a></li>
                </ul>
            </div>

            <!-- Olympiad Programs -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Our Olympiads</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Europa IGKO</a></li>
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Europa IAO</a></li>
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Europa ISO</a></li>
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Europa IMO</a></li>
                    <li><a href="{{ route('index') }}" class="hover:text-[#3AB464] transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        View All Olympiads</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Contact Us</h3>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3 text-gray-800">
                        <!-- Location Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-black flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <!-- Address Text -->
                        <p class="text-sm leading-snug">
                            K-38, Keshavpuram, Awas Vikas Kalyanpur,<br class="hidden sm:block" />
                            Kanpur (U.P.) – 208017
                        </p>
                    </div>

                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@europaolympiad.org" class="text-sm hover:text-black transition">info@europaolympiad.org</a>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <a href="tel:9170032441" class="text-sm block hover:text-black transition">+91 9170032441</a>
                            <a href="tel:8787286010" class="text-sm block hover:text-black transition">+91 8787286010</a>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-6">
                    <h4 class="text-sm font-semibold text-gray-900 mb-3">Follow Us</h4>
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
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-4 md:mb-0">
                    <a href="#" class="text-sm hover:text-[#3AB464] transition">Privacy Policy</a>
                    <a href="#" class="text-sm hover:text-[#3AB464] transition">Terms of Service</a>
                    <a href="#" class="text-sm hover:text-[#3AB464] transition">Cookie Policy</a>
                    <a href="#" class="text-sm hover:text-[#3AB464] transition">Sitemap</a>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-sm text-black">&copy; 2025 Europa Olympiad. All rights reserved.</p>
                    <p class="text-xs text-gray-800 mt-1">Designed with passion for education</p>
                </div>
            </div>
        </div>
    </div>
</footer>
