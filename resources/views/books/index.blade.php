<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.booksManagement') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">{{ __('messages.books') }}</h3>
                @if (Auth::user()->role === 'manager')
                    <a href="{{ route('books.create') }}" class="btn btn-light btn-sm">{{ __('messages.addBook') }}</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{ __('messages.title') }}</th>
                            <th scope="col">{{ __('messages.author') }}</th>
                            <th scope="col">{{ __('messages.category') }}</th>
                            <th scope="col">{{ __('messages.isAvailable') }}</th>
                            <th scope="col" class="text-center">{{ __('messages.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->category->name }}</td>
                                <td>{{ $book->is_available ? __('messages.yes') : __('messages.no') }}</td>
                                <td class="text-center">
                                    @if ($book->is_available)
                                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">
                                            {{ __('messages.view') }}
                                        </a>
                                    @endif

                                    @if (Auth::user()->role === 'manager')
                                        <a href="{{ route('books.edit', $book) }}"
                                            class="btn btn-warning btn-sm">{{ __('messages.edit') }}</a>
                                        <form action="{{ route('books.destroy', $book) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('{{ __('messages.confirm') }}')">
                                                {{ __('messages.delete') }}
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
