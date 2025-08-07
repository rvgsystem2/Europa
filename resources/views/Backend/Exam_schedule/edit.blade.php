<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Exam Schedule
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Edit Exam Schedule</h2>

        @if($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('exam_schedule.update', $exam_schedules->id) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf




            <!-- Exam Name -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Exam Name</label>
                <input
                    type="text"
                    name="exam_name"
                    value="{{ old('exam_name', $exam_schedules->exam_name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"
                    required
                />
            </div>

            <!-- Exam Date -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Exam Date</label>
                <input
                    type="date"
                    name="exam_date"
                    value="{{ old('exam_date', $exam_schedules->exam_date) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"
                    required
                />
            </div>
              <!-- Image Upload -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Exam Schedule Image</label>
                <input type="file" name="image" class="file-input" />

                @if($exam_schedules->image)
                    <img src="{{ asset('storage/' . $exam_schedules->image) }}" alt="Current Image" class="mt-4 w-48 h-32 object-cover rounded-lg shadow-md border border-gray-200">
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('exam_schedule.index') }}" class="text-gray-600 hover:text-blue-600 text-sm font-medium transition">
                    ← Back to Exam Schedules
                </a>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                    Update Exam Schedule
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
