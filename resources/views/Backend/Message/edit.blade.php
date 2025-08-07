<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Message
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Edit Message</h2>

        @if($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('message.update', $messages->id) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('POST') <!-- Or PATCH if you’re using RESTful update -->

            <!-- Image Upload -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Message Image</label>
                <input
                    type="file"
                    name="image"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                >

                @if($messages->image)
                    <img src="{{ asset('storage/' . $messages->image) }}" alt="Current Image" class="mt-4 w-48 h-32 object-cover rounded-lg shadow-md border border-gray-200">
                @endif
            </div>

            <!-- Title -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $messages->title) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:outline-none focus:ring-2"
                    required
                >
            </div>

            <!-- Message Text -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Message Text</label>
                <textarea
                    name="message_text"
                    rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:outline-none focus:ring-2"
                    required
                >{{ old('message_text', $messages->message_text) }}</textarea>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <textarea
                    name="description"
                    rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:outline-none focus:ring-2"
                    required
                >{{ old('description', $messages->description) }}</textarea>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('message.index') }}" class="text-gray-600 hover:text-blue-600 text-sm font-medium transition">
                    ← Back to Messages
                </a>
                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition"
                >
                    Update Message
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
