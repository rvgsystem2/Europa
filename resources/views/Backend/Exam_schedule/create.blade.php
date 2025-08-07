<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Exam Schedule</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded shadow">
        @if($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST"
              action="{{ isset($exam_schedule) ? route('exam_schedule.update', $exam_schedule->id) : route('exam_schedule.store') }}"
              enctype="multipart/form-data">
            @csrf

            @if(isset($exam_schedule))
                @method('PUT')
            @endif

            <!-- Image -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Banner Image</label>
                <input type="file" name="image" class="w-full border px-3 py-2 rounded" {{ isset($exam_schedule) ? '' : 'required' }}>
                @if(isset($exam_schedule) && $exam_schedule->image)
                    <img src="{{ asset('storage/' . $exam_schedule->image) }}" class="mt-2 w-48 h-32 object-cover rounded">
                @endif
            </div>

            <!-- Exam Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Exam Name</label>
                <input type="text" name="exam_name" class="w-full border px-3 py-2 rounded" required value="{{ old('exam_name', $exam_schedule->exam_name ?? '') }}">
            </div>

            <!-- Exam Date -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Exam Date</label>
                <input type="date" name="exam_date" class="w-full border px-3 py-2 rounded" required value="{{ old('exam_date', isset($exam_schedule) ? \Carbon\Carbon::parse($exam_schedule->exam_date)->format('Y-m-d') : '') }}">
            </div>

            <!-- Submit -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('message.index') }}" class="text-gray-600 hover:underline">← Back</a>
                <button type="submit" class="bg-sky-800 hover:bg-sky-900 text-white px-6 py-2 rounded">
                    {{ isset($exam_schedule) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
