<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.categoriesManagement') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">{{ __('messages.categories') }}</h3>
                @if (Auth::user()->role === 'manager')
                    <a href="{{ route('categories.create') }}" class="btn btn-light btn-sm">
                        {{ __('messages.addCategory') }}
                    </a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{ __('messages.name') }}</th>
                            @if (Auth::user()->role === 'manager')
                                <th scope="col" class="text-center">{{ __('messages.action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                @if (Auth::user()->role === 'manager')
                                    <td class="text-center">
                                        <a href="{{ route('categories.edit', $category) }}"
                                            class="btn btn-warning btn-sm">{{ __('messages.edit') }}</a>
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('{{ __('messages.confirm') }}')">{{ __('messages.delete') }}</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
