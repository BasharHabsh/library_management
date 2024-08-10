<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.editBook') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('books.update', $book) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('messages.title') }}</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $book->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">{{ __('messages.author') }}</label>
                            <input type="text" class="form-control" id="author" name="author"
                                value="{{ $book->author }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('messages.description') }}</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $book->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">{{ __('messages.category') }}</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('messages.updateBook') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
