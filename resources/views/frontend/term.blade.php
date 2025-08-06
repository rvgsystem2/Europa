@extends('component.main')
@section('content')
<!-- Terms of Service Page -->
<section class="bg-gray-50 min-h-screen py-12 px-4 sm:px-6 lg:px-16">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-red-700 mb-6">Terms of Service</h1>

        <p class="text-gray-700 mb-4">
            Welcome to the Europa International Olympiad. By accessing or participating in our Olympiad programs,
            you agree to comply with and be bound by the following Terms of Service. Please read them carefully.
        </p>

        <!-- 1. Eligibility -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1. Eligibility</h2>
        <p class="text-gray-700 mb-4">
            Participation in the Olympiad is open to students from Class 1 to 10 who are enrolled in schools registered
            with Europa International Olympiad. The exam is conducted through the school campus only.
        </p>

        <!-- 2. Registration -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">2. Registration</h2>
        <p class="text-gray-700 mb-4">
            All participants must be registered by their respective schools. Individual entries are not accepted.
            Schools must ensure the accuracy of the student information provided.
        </p>

        <!-- 3. Exam Conduct -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">3. Exam Conduct</h2>
        <p class="text-gray-700 mb-4">
            Exams will be conducted in participating schools during school hours. Any form of malpractice,
            cheating, or misbehavior may result in disqualification without prior notice.
        </p>

        <!-- 4. Awards & Scholarships -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">4. Awards & Scholarships</h2>
        <p class="text-gray-700 mb-4">
            Awards including laptops, tablets, cycles, certificates, medals, trophies, and scholarships will be
            distributed based on performance and the number of participants per school. Europa reserves the right
            to change or withdraw awards without prior notice.
        </p>

        <!-- 5. Data Privacy -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">5. Data Privacy</h2>
        <p class="text-gray-700 mb-4">
            All student and school data collected during registration is used solely for exam coordination and
            communication. Refer to our <a href="/privacy-policy" class="text-red-600 underline hover:text-red-800">Privacy Policy</a> for more details.
        </p>

        <!-- 6. Intellectual Property -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">6. Intellectual Property</h2>
        <p class="text-gray-700 mb-4">
            All Olympiad materials, including question papers, logos, and branding, are the property of
            Europa International Olympiad and cannot be copied, reproduced, or distributed without written permission.
        </p>

        <!-- 7. Limitation of Liability -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">7. Limitation of Liability</h2>
        <p class="text-gray-700 mb-4">
            Europa International Olympiad is not responsible for any technical failure, delays, or damages
            arising from participation. All efforts are made to ensure a smooth experience.
        </p>

        <!-- 8. Modifications -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">8. Modifications</h2>
        <p class="text-gray-700 mb-4">
            We reserve the right to modify these Terms of Service at any time. Updated terms will be posted
            on this page with a revised effective date.
        </p>

        <!-- 9. Contact Us -->
        <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-2">9. Contact Us</h2>
        <p class="text-gray-700">
            For questions about these Terms of Service, please contact us at:
        </p>
        <p class="text-gray-700 mt-2">
            Europa International Olympiad<br>
            Email: <a href="mailto:support@europaolympiad.org" class="text-red-600 underline hover:text-red-800">support@europaolympiad.org</a><br>
            Phone: +919170032441
        </p>
    </div>
</section>

@endsection
