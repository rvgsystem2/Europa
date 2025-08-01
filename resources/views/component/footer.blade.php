<footer class="bg-gradient-to-t from-[#626E82] via-white to-[#626E82] text-gray-800 py-12">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <!-- Company Info & Newsletter -->
        <div class="md:col-span-2">
            <div class="flex items-center mb-6">
                <img src="{{ asset('asset/img/Logo_Europa.jpg') }}" alt="Europa Olympiad Logo" class="h-12 w-auto mr-3">
            </div>
                <div class="flex items-center mb-4">

            <div>
              <h2 class="text-2xl font-bold text-gray-900">Europa Olympiad</h2>
              <p class="text-sm text-gray-700">Empowering young minds through academic excellence</p>
            </div>
          </div>
          <p class="text-sm mb-6">A premier organization dedicated to fostering talent and academic growth through competitive olympiads.</p>

          <div>
            <h4 class="text-sm font-semibold text-gray-900 mb-2">Subscribe to our newsletter</h4>
            <form class="flex flex-col sm:flex-row gap-2">
              <input type="email" name="email" placeholder="Your email"
                class="px-3 py-2 text-sm rounded border border-gray-300 focus:outline-none focus:ring-1 focus:ring-[#3AB464]"
                required aria-label="Email address">
              <button type="submit"
                class="bg-[#3AB464] text-white px-4 py-2 rounded text-sm font-medium hover:bg-[#2E9B54] transition">
                Subscribe
              </button>
            </form>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Home</a></li>
            <li><a href="{{ route('about') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              About Us</a></li>
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Olympiad Info</a></li>
            <li><a href="{{ route('contact') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Contact</a></li>
            <li><a href="#" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              FAQ</a></li>
          </ul>
        </div>

        <!-- Olympiad Programs -->
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Our Olympiads</h3>
          <ul class="space-y-2">
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Europa IGKO</a></li>
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Europa IAO</a></li>
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Europa ISO</a></li>
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              Europa IMO</a></li>
            <li><a href="{{ route('index') }}" class="flex items-center hover:text-[#3AB464] transition">
              <svg class="h-4 w-4 mr-2 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              View All Olympiads</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">Contact Us</h3>
          <div class="space-y-4 text-gray-800">
            <div class="flex items-start space-x-3">
              <svg class="h-5 w-5 text-black mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <p class="text-sm leading-snug">
                K‑38, Keshavpuram, Awas Vikas Kalyanpur,<br class="hidden sm:block" />
                Kanpur (U.P.) – 208017
              </p>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="h-5 w-5 text-black flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 000-2-2H5a2 2 000-2 2v10a2 2 0002 2z"/></svg>
              <a href="mailto:info@europaolympiad.org" class="text-sm hover:text-black transition">info@europaolympiad.org</a>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="h-5 w-5 text-black flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0012-2h3.28a1 1 001.948.684l1.498 4.493a1 1 001-.502 1.21l-2.257 1.13a11.042 11.042 0005.516 5.516l1.13-2.257a1 1 0011.21-.502l4.493 1.498a1 1 001.684.949V19a2 2 001-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              <div>
                <a href="tel:+919170032441" class="text-sm block hover:text-black transition">+91 91700 32441</a>
                <a href="tel:+918787286010" class="text-sm block hover:text-black transition">+91 87872 86010</a>
              </div>
            </div>
          </div>

          <!-- Social Media -->
          <div class="mt-6">
            <h4 class="text-sm font-semibold text-gray-900 mb-3">Follow Us</h4>
            <div class="flex space-x-4">
              <!-- Insert accessible social icons with aria-labels -->
              <a href="#" aria-label="WhatsApp" class="text-white hover:text-gray-400 transition">
                <!-- svg -->
              </a>
              <a href="https://europaolympiad.com/gallery/" aria-label="Facebook" class="text-white hover:text-gray-400 transition">
                <!-- svg -->
              </a>
              <a href="#" aria-label="Instagram" class="text-white hover:text-gray-400 transition">
                <!-- svg -->
              </a>
              <a href="#" aria-label="LinkedIn" class="text-white hover:text-gray-400 transition">
                <!-- svg -->
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Section -->
      <div class="mt-12 pt-8 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-4 md:mb-0 text-sm">
            <a href="#" class="hover:text-[#3AB464] transition">Privacy Policy</a>
            <a href="#" class="hover:text-[#3AB464] transition">Terms of Service</a>
            <a href="#" class="hover:text-[#3AB464] transition">Cookie Policy</a>
            <a href="#" class="hover:text-[#3AB464] transition">Sitemap</a>
          </div>
          <div class="text-center md:text-right text-sm text-black">
            <p>&copy; 2025 Europa Olympiad. All rights reserved.</p>
            <p class="text-xs text-gray-800 mt-1">Designed with passion for education</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

