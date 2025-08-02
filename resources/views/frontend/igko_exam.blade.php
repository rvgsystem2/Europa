@extends('component.main')
@section('content')
    <header class="banner">

            <img src="{{ asset('asset/img/IGKO-FRONT.jpg') }}" alt="Globe" class="h-auto w-auto ">

    </header>
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-4 md:px-8">

            <p class="text-lg leading-relaxed">
                The Europa International General Knowledge Olympiad (EIGKO) is an international competitive exam held for
                students in Grades 1 - 10. There will be 2
                levels for students of all Grades 1 - 10. The exam is an objective-type test that the students need to
                complete in 60 minutes.
            </p>

            <h3 class="text-2xl font-semibold text-gray-800 mt-6">Other Important Information:</h3>
            <ul class="list-disc pl-5 space-y-2 text-lg">
                <li>There are separate question papers for each and every class.</li>
                <li>The medium of the exam is Hindi & English.</li>
                <li>The syllabus of various international boards is followed for the setting of test papers.</li>
                <li> 4. The online exams are conducted on web-enabled devices like laptop, tablet or desktop with webcam.
                    Mobile devices are not allowed.</li>
                <li>For students of Grades 1 and 2, the parent/teacher can assist the child in guiding through the
                    questions.</li>
            </ul>


            <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center md:text-left">
                EIGKO Science Olympiad Highlights
            </h3>

            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border border-gray-300 text-gray-800 text-left text-sm md:text-base">
                    <thead class="bg-gray-100 font-semibold">
                        <tr>
                            <th class="border px-4 py-2">Attribute</th>
                            <th class="border px-4 py-2">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Conducted for Grades</td>
                            <td class="border px-4 py-2">1 to 10</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Mode of Examination</td>
                            <td class="border px-4 py-2">Offline</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Mode of Registration</td>
                            <td class="border px-4 py-2">Through Schools</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">EIGKO Exam Duration</td>
                            <td class="border px-4 py-2">For Grade 1 - 10: 60 minutes</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Type of Questions</td>
                            <td class="border px-4 py-2">Multiple Choice Questions (MCQs)</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Levels of Examination</td>
                            <td class="border px-4 py-2">2 Level</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <p class="text-gray-700 mt-8 text-base md:text-lg leading-relaxed">
                Europa International General Knowledge Olympiad (EIGKO) is popularly known by students globally for serving
                exceptional
                quality questions, and the exam is held annually.
            </p>


        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Title -->
            <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
                Why Europa International General Knowledge Olympiad?
            </h2>

            <!-- Reasons to Participate -->
            <ul class="list-decimal pl-5 space-y-2 text-lg text-gray-800">
                <li>By participating in the Europa General Knowledge Olympiad children get exposure to new skills and can
                    learn and practice a variety of things, such as
                    reasoning, analytical and problem-solving skills.</li>
                <li> Participating in Europa International Olympiad will definitely be an asset for students helping them
                    understand concepts better and deeper, unlike
                    conventional rote learning.</li>
                <li> Apart from this, exposure to new challenges and a competitive environment will develop students'
                    confidence level.</li>
            </ul>

            <!-- Syllabus & Exam Pattern Section -->
            <h2 class="text-3xl font-bold text-red-700 mt-10 mb-6 text-center">
                Syllabus & Exam Pattern for Europa General Knowledge Olympiad
            </h2>
            <p class="text-lg leading-relaxed text-gray-800">
                The Europa International General Knowledge Olympiad gives a platform to showcase their talent & examine
                their skill sets in the field of Science and
                technology. The exam prepares children for other national & international competitions as well. The marking
                scheme varies for each question and each
                class
            </p>

            <!-- Exam Pattern Table -->
            <div class="overflow-x-auto mt-6">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="border border-gray-300 px-4 py-2 text-lg">Grade</th>
                            <th class="border border-gray-300 px-4 py-2 text-lg">Number of Questions</th>
                            <th class="border border-gray-300 px-4 py-2 text-lg">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-4 py-2">Grade 1 - 2</td>
                            <td class="border border-gray-300 px-4 py-2">35</td>
                            <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">Grade 3 - 5</td>
                            <td class="border border-gray-300 px-4 py-2">40</td>
                            <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-4 py-2">Grade 6 - 10</td>
                            <td class="border border-gray-300 px-4 py-2">50</td>
                            <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Exam Fee Information -->
            <p class="text-lg leading-relaxed text-gray-800 mt-6">
                The exam fee is <strong>INR 150</strong> for students enrolling from India. For students residing outside of
                India, the fee is country-specific.
            </p>
        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Title -->
            <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
                How to Prepare for EIGKO Exam
            </h2>
            <p class="text-lg text-gray-800 leading-relaxed text-center">
                Preparing for the Europa International General Knowledge Olympiad (EIGKO) requires a well-rounded approach
                focusing on a variety of topics.
                Here’s a step-by-step guide to help you prepare effectively.
            </p>

            <!-- Preparation Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- Syllabus Section -->
                <div>
                    <h3 class="text-2xl font-semibold text-red-600 mb-4">Understand the Syllabus</h3>
                    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                        <li><strong>Current Affairs:</strong> Stay updated with the latest news, including national and
                            international events, sports, politics, economics and science</li>
                        <li><strong>General Knowledge:</strong> Cover topics like history, geography, literature, and
                            important discoveries.</li>
                        <li><strong>Science & Technology:</strong> Understand basic principles and recent advancements in
                            these fields
                        </li>
                        <li><strong>Environment:</strong>Learn about important environmental issues and conservation efforts
                        </li>
                        <li><strong>Literature & Art:</strong> Familiarize yourself with famous books, authors, and artists.
                        </li>
                        <li><strong>Social Studies:</strong>Cover important aspects of civics, economics and social issues
                        </li>
                    </ul>
                </div>

                <!-- Study Materials -->
                <div>
                    <h3 class="text-2xl font-semibold text-red-600 mb-4">Study Materials & Resources</h3>
                    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                        <li><strong>Books:</strong> Use general knowledge books designed for Olympiad exams, such Europa
                            Olympiad IGKO Book</li>
                        <li><strong>Magazines & Newspapers:</strong> Regularly read newspapers and magazines</li>
                        <li><strong>Online Resources:</strong> Website and Olympiad trainer website can be very helpful
                        </li>
                        <li><strong>Educational Apps:</strong> Use apps that focus on general knowledge and current
                            affairs..</li>
                    </ul>
                </div>
            </div>

            <!-- Practice and Revision -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Practice & Revision</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Mock Tests:</strong> Regularly take mock tests and sample papers to familiarize yourself
                        with the exam pattern and time management. You can also participate
                        in Europa Olympiad Practice Test which we conduct before 1 month of Main Examination.</li>

                    <li><strong>Quiz Competitions:</strong> Participate in online quizzes and competitions to test your
                        knowledge and improve recall speed.</li>
                    <li><strong>Flashcards:</strong>Create flashcards for quick revision of important facts and figures</li>
                    <li><strong>Discussion Groups:</strong> Join group studies and online forums to discuss topics and gain
                        different perspectives</li>
                </ul>
            </div>

            <!-- Time Management -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Time Management</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Study Schedule:</strong> Create a balanced study schedule that allocates time for each
                        subject area, ensuring you cover all topics.</li>
                    <li><strong>Daily Updates:</strong> Dedicate at least 30 minutes daily to read current affairs.</li>
                    <li><strong>Regular Revision:</strong> Regularly revise the topics you have studied to ensure better
                        retention.
                    </li>
                </ul>
            </div>

            <!-- Exam Strategy -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Exam Strategy</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Read Questions Carefully:</strong>Ensure you understand the question before attempting to
                        answer it.</li>
                    <li><strong>Time Management:</strong> Keep track of time and allocate it wisely to different sections of
                        the pape</li>
                    <li><strong>Accuracy Over Speed:</strong> Focus on accuracy to avoid mistakes such as wrong bubble
                        filling and overwrite the bubble.
                    </li>
                    <li><strong>Stay Calm:</strong> Focus on accuracy to avoid mistakes such as wrong bubble filling and
                        overwrite the bubble.
                    </li>
                <p>    While preparing for the Europa examinations do not forget to follow Healthy Habits such as :
                </p>
                   <strong> Balanced Diet:</strong> <p>Eat a nutritious diet to keep your mind and body healthy.</p>
                   <strong> Adequate Sleep:</strong> <p>Ensure you get enough sleep to keep your mind sharp.</p>
                   <strong> Exercise:</strong> <p>Regular physical activity can help reduce stress and increase focus.</p>
                   <p> By following this comprehensive preparation plan, you can maximize your chances of performing well in
                    the Europa International General Knowledge
                    Olympiad Examination.</p>

                </ul>
            </div>


        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Title -->
            <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
                Olympiad Awards
            </h2>
            <p class="text-lg text-gray-800 leading-relaxed text-center font-bold">
                The Europa Olympiads awards and recognition offered to students are as follows:
            </p>

            <!-- Award Highlights -->
            <div class="mt-8 space-y-4">
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🏆</span>
                    <p class="text-lg text-gray-800 ml-3">
                    Europa Olympiads provides students with amazing and exciting awards. There are prizes for<strong>50% of top scorers.</strong>
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🥇</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>International Rank (Top 3):</strong> students International Trophy + Special Medal + Gift + Special Certificate.
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🥈</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>National Rank (Top 3):</strong>  students International Trophy + Special Medal + Special Certificate.
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🏅</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>Zonal Topper:</strong> Trophy + Medal + Certificate.
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🥉</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>City Topper:</strong> Trophy + Medal + Certificate.
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🏅</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>Best Performer of the School</strong>
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🎖️</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>Excellence Student of the School</strong>
                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🏆</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>Class Level:</strong>Top 10% rank holders in class will get class Topper Medals.

                    </p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                    <span class="text-xl font-semibold text-red-600">🎖️</span>
                    <p class="text-lg text-gray-800 ml-3">
                        <strong>Section Level:</strong> Top 20% rank holders in a section.
                    </p>
                </div>
            </div>

            <!-- Class-wise Olympiad Information -->
            <div class=" mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4 text-center">
                    Explore class-wise General Knowledge Olympiad complete information -
                </h3>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 1
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 2
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 3
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 4
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 5
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 6
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 7
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 8
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 9
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International General Knowledge Olympiad for class 10
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
