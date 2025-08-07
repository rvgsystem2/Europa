<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Edit Banner' }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-12 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit Banner</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('banner.update', $banners->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('POST') <!-- or PATCH/PUT if using resource controller properly -->

            <!-- Current Banner Preview -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Current Banner</label>
                <img src="{{ asset('storage/' . $banners->image) }}" alt="Current Banner Image" class="w-full max-w-lg rounded-lg border border-gray-200 shadow-sm">
            </div>

            <!-- New Image Upload -->
            <div>
                <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">Replace Image <span class="text-gray-500 text-sm">(Optional)</span></label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                >
                @error('image')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center">
                <a href="{{ route('banner.index') }}" class="text-gray-600 hover:text-blue-600 transition font-medium text-sm">
                    ← Back to Banners
                </a>
                <button type="submit" class="bg-sky-800 text-white px-6 py-2 rounded-lg hover:bg-sky-900 font-semibold transition">
                    Update Banner
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
