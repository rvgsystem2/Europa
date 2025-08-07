<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Create About' }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800"> About</h1>
            <a href="{{ route('about.create') }}" class="inline-flex items-center px-5 py-2 bg-sky-800 text-white font-semibold rounded-lg shadow hover:bg-sky-900 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Add About
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($abouts as $about)
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition duration-300">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="about Image" class="w-full h-48 object-cover rounded-t-xl">

                    <div class="p-5 space-y-2 text-gray-800">
                        <h2 class="text-lg font-semibold truncate">{{ $about->title }}</h2>
                        <p class="text-sm text-gray-600 line-clamp-2">{{ $about->about_text }}</p>
                        <p class="text-sm text-gray-500 line-clamp-2">{{ $about->description }}</p>
                    </div>

                    <div class="flex justify-between items-center px-5 py-4 border-t border-gray-100">
                        <a href="{{ route('about.edit', $about->id) }}" class="text-blue-600 hover:underline font-medium text-sm flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536M9 11l6.586-6.586a2 2 0 112.828 2.828L11.828 13.828a2 2 0 01-1.414.586H9v-1.414a2 2 0 01.586-1.414z"/>
                            </svg>
                            Edit
                        </a>
                        <a href="{{ route('about.delete', $about->id) }}" class="text-red-600 hover:underline font-medium text-sm flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </a>
                    </div>
                </div>
            @empty
                <div class="text-center text-gray-500 col-span-3">
                    No abouts found.
                </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
