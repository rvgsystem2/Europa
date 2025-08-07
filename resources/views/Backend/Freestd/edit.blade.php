<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Edit Freestd' }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-12 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit Freestd</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('freestd.update', $freestds->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('POST') <!-- or PATCH/PUT if using resource controller properly -->

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Freestd Title</label>
                <input type="text" name="title" value="{{ old('title', $freestds->title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       required>
                @error('title')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Current Freestd Preview -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Current Freestd</label>
                <img src="{{ asset('storage/' . $freestds->image) }}" alt="Current Freestd Image" class="w-full max-w-lg rounded-lg border border-gray-200 shadow-sm">
            </div>



            <!-- Action Buttons -->
            <div class="flex justify-between items-center">
                <a href="{{ route('freestd.index') }}" class="text-gray-600 hover:text-blue-600 transition font-medium text-sm">
                    ← Back to Freestds
                </a>
                <button type="submit" class="bg-sky-800 text-white px-6 py-2 rounded-lg hover:bg-sky-900 font-semibold transition">
                    Update Freestd
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
