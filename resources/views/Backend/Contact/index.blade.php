<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($contact) ? 'Edit Contact' : 'Manage Contacts' }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 mt-6">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Contact Messages</h2>

            </div>

            @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left text-gray-700">
                    <thead class="bg-gray-50 font-semibold text-gray-600">
                        <tr>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4">Phone</th>
                            <th class="px-6 py-4">Message</th>
                            <th class="px-6 py-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $contact->name }}</td>
                                <td class="px-6 py-4">{{ $contact->email }}</td>
                                <td class="px-6 py-4">{{ $contact->phone ?? '-' }}</td>
                                <td class="px-6 py-4">{{ Str::limit($contact->message, 50) }}</td>
                                <td class="px-6 py-4 text-center space-x-4">

                                    <form action="{{ route('contact.delete', $contact->id) }}" method="POST"
                                          class="inline-block"
                                          onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                    No contacts found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
