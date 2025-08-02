<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Notes') }}
            </h2>
            <a href="{{ route('notes.create') }}"
                class="px-5 py-2 bg-gradient-to-r from-[#0e7490] to-[#0f172a] text-white font-semibold rounded-lg shadow-md hover:from-[#0f172a] hover:to-[#0e7490] transition duration-300 ease-in-out">
                + Create Note
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="flex items-center bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Note List</h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-100 text-gray-700 uppercase font-semibold text-xs">
                            <tr>
                                <th class="px-6 py-4">ID</th>
                                <th class="px-6 py-4">Title</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Created</th>
                                <th class="px-6 py-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse ($notes as $note)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800">{{ $note->id }}</td>
                                    <td class="px-6 py-4 text-gray-700 font-medium">{{ $note->title }}</td>
                                    <td class="px-6 py-4 text-sm capitalize">
                                        <span class="px-2 py-1 rounded-full text-white 
                                            {{ $note->status == 'active' ? 'bg-green-500' : 'bg-gray-400' }}">
                                            {{ $note->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">{{ $note->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ route('notes.edit', $note->id) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition">
                                                ✏️ Edit
                                            </a>
                                            <form action="{{ route('notes.delete', $note->id) }}" method="get"
                                                onsubmit="return confirm('Are you sure?')" class="inline-block">
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                                <button
                                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition">
                                                    🗑️ Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-400 text-base">
                                        No notes found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $notes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
