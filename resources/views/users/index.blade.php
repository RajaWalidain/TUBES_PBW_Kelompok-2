<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot>
    <div class="container mx-auto p-8">
        <div class="text-center mb-12">
            <div class="sm:flex sm:items-center sm:justify-between">
                <x-section-title>
                    <x-slot name="title">Users</x-slot>
                    <x-slot name="description">
                        A list of all the users in your account including their name, title, email and role.
                    </x-slot>
                </x-section-title>
                <div class="mt-4 sm:mt-0">
                    <x-button class="bg-blue-500 hover:text-black hover:bg-white" as="a" href="/users/create">
                        Add user
                    </x-button>
                </div>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <x-table>
                <x-table.thead>
                    <tr>
                        <x-table.th>No</x-table.th>
                        <x-table.th>Name</x-table.th>
                        <x-table.th>Email</x-table.th>
                        <x-table.th>Created At</x-table.th>
                        <x-table.th class="text-right">Actions</x-table.th>
                    </tr>
                </x-table.thead>
                <x-table.tbody>
                    @foreach ($users as $user)
                        <tr>
                            <x-table.td>
                                {{ $loop->iteration }}
                            </x-table.td>
                            <x-table.td>
                                {{ $user->name }}
                            </x-table.td>
                            <x-table.td>
                                {{ $user->email }}
                            </x-table.td>
                            <x-table.td>
                                {{ $user->created_at->format('d M Y') }}
                            </x-table.td>
                            <x-table.td class="text-right">
                                <div class="flex gap-x-2">
                                    <a href="/users/{{ $user->id }}" class="text-blue-500 hover:underline">
                                        View
                                    </a>
                                    <a href="/users/{{ $user->id }}/edit" class="text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-table.tbody>
            </x-table>
        </div>
    </div>
</x-app-layout>
