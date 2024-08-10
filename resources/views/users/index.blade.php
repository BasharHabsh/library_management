<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.usersManagement') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">{{ __('messages.users') }}</h3>
                <a href="{{ route('users.create') }}" class="btn btn-light btn-sm">{{ __('messages.addUser') }}</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{ __('messages.name') }}</th>
                            <th scope="col">{{ __('messages.email') }}</th>
                            <th scope="col">{{ __('messages.role') }}</th>
                            <th scope="col" class="text-center">{{ __('messages.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ ucfirst($user->role) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user) }}"
                                        class="btn btn-warning btn-sm">{{ __('messages.edit') }}</a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this user?')">{{ __('messages.delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
