@extends('component.main')
@section('content')
<header class="bg-red-700 text-white py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-4 gap-8">
        <h1 class="text-2xl md:text-5xl font-bold text-center md:text-left">
            Europa International
General Knowledge<br>
 Olympiad for Class 1
        </h1>
        <img src="{{ asset('asset/img/globe.png') }}" alt="Globe" class="h-auto w-auto ">
    </div>
</header>
<section class="bg-white py-10">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Title -->

        <p class="text-lg text-gray-800 leading-relaxed text-center">
            The Europa International General Knowledge Olympiad is designed for students in Classes 1 to 10.
            This Olympiad helps students assess their general knowledge and apply their learning effectively.
        </p>

        <!-- Eligibility Section -->
        <div class="mt-8">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Eligibility for Class 1 International GK Olympiad</h3>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <ul class="list-decimal list-inside text-lg text-gray-800 space-y-2">
                    <li>Students from CBSE, ICSE, State Board, and other educational boards are eligible.</li>
                    <li>Participants from different countries can register for the examination.</li>
                    <li>Candidates can enroll through their schools.</li>
                    <li>The General Knowledge Olympiad for Class 1 is conducted in 2 levels.</li>
                </ul>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="mt-8">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Benefits of General Knowledge Olympiad for Class 1</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800">
                        📚 <strong>Exposure Beyond Classroom Learning:</strong>
                        Students gain knowledge beyond textbooks and develop a deeper understanding of general topics.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800">
                        🏆 <strong>Prepares for Competitive Exams:</strong>
                        Early exposure to Olympiads builds interest in subjects, boosting confidence for future competitive exams.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800">
                        🎯 <strong>Develops Critical Thinking:</strong>
                        Encourages students to analyze concepts from multiple perspectives, improving problem-solving skills.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800">
                        🔍 <strong>Real-Life Application:</strong>
                        Helps students apply their classroom knowledge to real-world scenarios, enhancing logical reasoning.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
            Class 1 General Knowledge Olympiad Syllabus
        </h2>
        <p class="text-lg text-gray-800 leading-relaxed text-center">
            The syllabus covers various topics in General Knowledge, Science, Technology, and Current Affairs.
            Students must familiarize themselves with the syllabus before beginning their exam preparation.
        </p>

        <!-- Syllabus Topics Section -->
        <div class="mt-8">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Olympiad Syllabus Topics</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>📌 Me and My Surroundings:</strong> Famous people, houses in different regions, neighborhoods, and festivals.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🌌 The Universe and Solar System:</strong> Planets, galaxies, stars, and solar system concepts.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🌍 India and The World:</strong> National emblem, famous places, flags, water bodies, and landforms.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🌱 Plants and Animals:</strong> Fruits, vegetables, flowers, domestic & wild animals, and animal sounds.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🖥 Science and Technology:</strong> Computer parts, software logos, and brand logos.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🚦 Life Skills:</strong> Manners, moral values, traffic rules, and safety habits.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>🏅 Sports:</strong> Sports personalities and their equipment.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg text-gray-800"><strong>📰 Current Affairs:</strong> Famous world leaders, national & international current affairs.</p>
                </div>
            </div>
        </div>

        <!-- Preparation Section -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">How to Prepare for Class 1 General Knowledge Olympiad?</h3>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <p class="text-lg text-gray-800">
                    📝 <strong>Practice Previous Year Papers:</strong> Solve previous year question papers to understand exam patterns and question types.
                </p>
                <p class="text-lg text-gray-800 mt-4">
                    🎯 <strong>Take Mock Tests:</strong> Olympiad sample papers help students feel confident and improve ranking in the main exam.
                </p>
                <p class="text-lg text-gray-800 mt-4">
                    📖 <strong>Study the Syllabus Thoroughly:</strong> Ensure all syllabus topics are covered before the exam.
                </p>
            </div>
        </div>

        <!-- Awards Section -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Awards for General Knowledge Olympiad</h3>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <p class="text-lg text-gray-800">
                    🏆 <strong>Recognition for Excellence:</strong> Students securing top ranks are rewarded for their outstanding performance.
                </p>
                <p class="text-lg text-gray-800 mt-4">
                    🎖 <strong>Top Achievers Awards:</strong> Europa Olympiads recognize hard work by awarding trophies, medals, and certificates.
                </p>
                <p class="text-lg text-gray-800 mt-4">
                    📜 <strong>Global Recognition:</strong> High-ranking students gain international acknowledgment for their academic excellence.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
