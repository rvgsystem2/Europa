@extends('component.main')
@section('content')
    <header class="banner">

            <img src="{{ asset('asset/img/ISO-FRONT.jpg') }}" alt="Globe" class="h-auto w-auto ">

    </header>
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-4 md:px-8">

            <p class="text-lg leading-relaxed">
                The Europa International Science Olympiad (EISO) is an international competitive exam held for students in Grades 1 - 10. There will be 2 levels for
                students of all Grades 1 - 10. The exam is an objective-type test that the students need to complete in 60 minutes.

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
                EISO Science Olympiad Highlights

            </h3>

            <div class="grid grid-cols-1 gap-4 text-base md:text-lg text-gray-700">
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">Conducted for Grades</p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">1 to 10</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">Mode of Examination</p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">Offline</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">Mode of Registration</p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">Through Schools</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">EISO exam duration  </p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">For Grade 1 - 10: 60 minutes</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">Type of Questions </p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">Multiple Choice Questions (MCQs)</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-evenly ">
                    <p class="font-medium">Levels of Examination</p>
                    <span class="font-bold text-center ">-</span>
                    <p class="text-right sm:text-left">2 Level</p>
                </div>
            </div>

            <p class="text-gray-700 mt-8 text-base md:text-lg leading-relaxed">
                Europa International Science Olympiad (EISO) is popularly known by students globally for serving exceptional quality questions and the exam is held
                annually.
            </p>


        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Title -->
            <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
                Why Europa International Science Olympiad?
            </h2>

            <!-- Reasons to Participate -->
            <ul class="list-decimal pl-5 space-y-2 text-lg text-gray-800">
                <li>Participating in Europa International Science Olympiad helps students to enhance problem-solving skills and promotes outside-the-box thinking.
                </li>
                <li> . Participating in Europa International Olympiad will definitely be an asset for students helping them understand concepts better and deeper, unlike
                    conventional rote learning.</li>
                <li> Participating in Europa International Science Olympiad gives students an insight into the competition that exists outside of school. Also, help students
                    in preparing for future competitive exams like SAT, JEE, NEET, etc.
                    </li>
            </ul>

            <!-- Syllabus & Exam Pattern Section -->
            <h2 class="text-3xl font-bold text-red-700 mt-10 mb-6 text-center">
                Syllabus & Exam Pattern for Science Olympiad
            </h2>
            <p class="text-lg leading-relaxed text-gray-800">
                The Europa International Science Olympiad gives a platform to showcase their talent & examine their skill sets in the field of Science and technology. The
                exam prepares children for other national & international competitions as well. The marking scheme varies for each question and each class.
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
                How to prepare for EISO Exam


            </h2>
            <p class="text-lg text-gray-800 leading-relaxed text-center">
                Preparing for the Europa International Science Olympiad (EISO) requires a thorough understanding of scientific concepts, critical thinking skills, and
                practical application. Here’s a guide to help you prepare effectively:
            </p>

            <!-- Preparation Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- Syllabus Section -->
                <div>
                    <h3 class="text-2xl font-semibold text-red-600 mb-4">Understand the Exam Format</h3>
                    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                        <li><strong>Syllabus Review:</strong> : Review the official syllabus for the ISO. It typically covers physics, chemistry, biology, and sometimes astronomy or earth science.
                            Europa ISO Syllabus (PDF Link).</li>
                        <li><strong>Exam Pattern:</strong> Familiarize yourself with the exam structure, which usually consists of multiple-choice questions, theoretical questions, Europa ISO
                            Marking (PDF Link) .</li>

                    </ul>
                </div>

                <!-- Study Materials -->
                <div>
                    <h3 class="text-2xl font-semibold text-red-600 mb-4">Study Materials & Resources</h3>
                    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                        <li><strong> Book:</strong> Refer to Europa Book for covering topics from the ISO syllabus from Europa International Science Olympiad Book.
                        </li>

                        <li><strong>Online Resources:</strong> Explore educational websites, forums and platforms and the official Europa website for practice test and study materials.

                        </li>

                    </ul>
                </div>
            </div>

            <!-- Practice and Revision -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Preparation Strategy</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Create a Study Plan:</strong>   Develop a structured study plan that allocates time for each subject according to your strengths and weaknesses.</li>

                    <li><strong>Conceptual Understanding: </strong> :  Focus on understanding the underlying principles and theories in physics, chemistry, and biology, rather than memorizing
                        facts.</li>

                </ul>
            </div>

            <!-- Time Management -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Practical Skills
                </h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Experimental Knowledge: </strong> Familiarize yourself with basic laboratory techniques and experiments related to physics, chemistry, and biology.

                    </li>
                    <li><strong>Data Interpretation: </strong>  Practice analyzing experimental data and drawing conclusions based on observations.

                    </li>

                </ul>
            </div>

            <!-- Exam Strategy -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Focus on Key Areas
                </h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Physics: </strong> Focus on mechanics, electricity and magnetism, thermodynamics, and optics
                    </li>
                    <li><strong>Chemistry: </strong> Pay attention to chemical bonding, thermodynamics and reaction kinetics
                    </li>
                    <li><strong>Biology: </strong> Study topics like cell biology and genetics.
                    </li>

                        <h3 class="text-2xl font-semibold text-red-600 mb-4"> Mock Tests and Sample Papers
                        </h3>

                 <li>
                    <strong>Take Mock Tests:</strong> Simulate exam conditions by taking timed mock tests regularly. This helps improve time management and familiarizes you with the
                    exam format. You can also participate in Europa IAO practice test which we conduct before 1 month of Main Examination.

                 </li>
                 <li>  <strong> Review Sample Papers:</strong> Solve Sample ISO papers to understand the question pattern and difficulty level. Analyze the solutions to learn different
                    approaches to solving problems.</li>

                    <h3 class="text-2xl font-semibold text-red-600 mb-4">  Additional Tips
                    </h3>

                  <li> <strong> Stay Updated:</strong> Keep yourself updated with the latest developments in the field of science through science magazines, journals, and online resources.
                </li>
                <li> <strong>Seek Guidance:</strong> If possible, seek guidance from teachers, mentors, or science olympiad coaches who can provide valuable insights and support.

                </li>

                <p class="font-bold">  While preparing for the Europa examinations do not forget to follow Healthy Habits such as :
                </p>
               <li>
               <strong> Balanced Lifestyle:</strong> Maintain a balanced lifestyle with regular exercise, healthy eating habits, and sufficient sleep to keep your mind and body in optimal
                condition for learning and problem-solving.
               </li>
                 <p>   By following these steps and staying dedicated to your preparation, you can enhance your chances of performing well in the Europa International Science
                    Olympiad.</p>

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
                        Europa International Science Olympiad for class 1
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 2
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 3
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 4
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 5
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 6
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 7
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 8
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 9
                    </a>
                    <a href="#"
                        class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                        Europa International Science Olympiad for class 10
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
