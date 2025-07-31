@extends('component.main')

@section('content')
    <section class="bg-red-50 py-12 px-6">
        <div
            class="max-w-6xl justify-center mx-auto bg-white shadow-2xl rounded-2xl p-8 border-t-8 border-red-600 flex flex-col md:flex-row gap-8">
            <div>
                <h2 class="text-3xl font-bold text-red-700 mb-4 text-center">Get In Touch</h2>
                <p class="text-gray-700 text-center mb-6">If you have any questions, feel free to send us a message.</p>

                <div class="bg-red-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📍 Address:</p>
                    <p class="text-gray-700">K-38, Keshavpuram, Awas Vikas Kalyanpur, Kanpur (U.P) 208-17</p>
                </div>

                <div class="mt-4 bg-red-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📞 Phone:</p>
                    <p class="text-gray-700">+91 9170032441</p>
                </div>

                <div class="mt-4 bg-red-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📧 Email:</p>
                    <p class="text-gray-700">info@europaolympaid.org</p>
                </div>

                <div class="mt-4 bg-red-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">🌐 Website:</p>
                    <a href="https://www.europaolympiad.org" class="text-red-600 font-medium hover:underline">
                        www.europaolympiad.org
                    </a>
                </div>

            </div>
            <div>
                <h3 class="text-3xl font-bold text-red-700 mt-2 mb-4 text-center">For Any Inquiry</h3>



                <!-- Custom Contact Form -->
                <form action="#" method="POST" class="mt-6 bg-white p-6 rounded-lg shadow-md border border-red-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium">Your Name</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Full Name" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Email ID</label>
                            <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Email ID" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Contact Number</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Contact Number" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Name</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Full Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Mobile Number</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Contact Number">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Email ID</label>
                            <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Email ID">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Name</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Address</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Address">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School City</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School City">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School State</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School State">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Pincode</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Pincode">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Your Country</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Your Country">
                        </div>
                    </div>

                    <button type="submit"
                        class="mt-6 bg-red-600 text-white py-3 px-6 w-full rounded-lg font-bold text-lg hover:bg-red-700 transition duration-300 ease-in-out shadow-lg">
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
