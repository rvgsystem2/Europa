<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Create Banner' }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Add New Banner</h2>

        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Banner Image</label>
                <input
                    type="file"
                    name="image"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                    required
                >
            </div>

            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition"
                >
                    Upload Banner
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
