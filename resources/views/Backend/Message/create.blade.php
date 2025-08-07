<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Message</h2>
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
              action="{{ isset($message) ? route('message.update', $message->id) : route('message.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($message)) @endif

            <!-- Image -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Image</label>
                <input type="file" name="image" class="w-full border px-3 py-2 rounded" {{ isset($message) ? '' : 'required' }}>
                @if(isset($message) && $message->image)
                    <img src="{{ asset('storage/' . $message->image) }}" class="mt-2 w-48 h-32 object-cover rounded">
                @endif
            </div>

            <!-- Title -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title', $message->title ?? '') }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <!-- Message Text -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Message Text</label>
                <textarea name="message_text" class="w-full border px-3 py-2 rounded" rows="3" required>{{ old('message_text', $message->message_text ?? '') }}</textarea>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" class="w-full border px-3 py-2 rounded" rows="3" required>{{ old('description', $message->description ?? '') }}</textarea>
            </div>

            <!-- Submit -->
            <div class="flex justify-between">
                <a href="{{ route('message.index') }}" class="text-gray-600 hover:underline">← Back</a>
                <button type="submit" class="bg-sky-800 hover:bg-sky-900 text-white px-6 py-2 rounded">
                    {{ isset($message) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
