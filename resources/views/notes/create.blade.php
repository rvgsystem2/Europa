<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($note) ? 'Edit Note' : 'Create Note' }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($note) ? 'Edit Note' : 'Create New Note' }}
                </h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($note) ? route('notes.update', $note->id) : route('notes.store') }}"
                    method="POST" class="space-y-4">
                    @csrf
                    {{-- @if(isset($note))
                        @method('PUT')
                    @endif --}}

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title"
                            value="{{ old('title', $note->title ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Enter note title" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Content</label>
                        <textarea name="content"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            rows="5" placeholder="Write note content..." required>{{ old('content', $note->content ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                            <option value="active" {{ (old('status', $note->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ (old('status', $note->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                            class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($note) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
