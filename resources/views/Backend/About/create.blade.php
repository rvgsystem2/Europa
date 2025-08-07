<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create About</h2>
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
              action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($about)) @endif



            <!-- Title -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title', $about->title ?? '') }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <!-- about Text -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">about Text</label>
                <textarea name="about_text" class="w-full border px-3 py-2 rounded" rows="3" required>{{ old('about_text', $about->about_text ?? '') }}</textarea>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" class="w-full border px-3 py-2 rounded" rows="3" required>{{ old('description', $about->description ?? '') }}</textarea>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Image</label>
                <input type="file" name="image" class="w-full border px-3 py-2 rounded" {{ isset($about) ? '' : 'required' }}>
                @if(isset($about) && $about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" class="mt-2 w-48 h-32 object-cover rounded">
                @endif
            </div>
            <!-- Submit -->
            <div class="flex justify-between">
                <a href="{{ route('about.index') }}" class="text-gray-600 hover:underline">← Back</a>
                <button type="submit" class="bg-sky-800 hover:bg-sky-900 text-white px-6 py-2 rounded">
                    {{ isset($about) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
