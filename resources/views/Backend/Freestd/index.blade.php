<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Create freestd' }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-extrabold text-gray-800 text-center mb-8">Manage freestds</h1>

        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('freestd.create') }}" class="inline-flex items-center px-6 py-2 bg-sky-800 text-white font-semibold rounded-lg shadow hover:bg-sky-900 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Add New freestd
            </a>

            @if(session('success'))
                <div class="text-green-600 font-medium">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        @if(count($freestds))
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($freestds as $freestd)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <p>{{$freestd->title}}</p>
                        <img src="{{ asset('storage/' . $freestd->image) }}" alt="freestd" class="w-full h-56 object-cover">

                        <div class="p-4 flex items-center justify-between">
                            <a href="{{ route('freestd.edit', $freestd->id) }}" class="text-blue-600 hover:underline font-medium flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.232 5.232l3.536 3.536M9 11l6.586-6.586a2 2 0 112.828 2.828L11.828 13.828a2 2 0 01-1.414.586H9v-1.414a2 2 0 01.586-1.414z"/>
                                </svg>
                                Edit
                            </a>
                            <a href="{{ route('freestd.delete', $freestd->id) }}" class="text-red-600 hover:underline font-medium flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                Delete
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-gray-500 text-center mt-12 text-lg">
                No freestds found. Add a new one to get started.
            </div>
        @endif
    </div>



</x-app-layout>
