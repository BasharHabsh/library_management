<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">{{ __('messages.back') }}</a>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title">{{ $book->title }}</h3>
                <p class="card-text"><strong> {{ __('messages.author') }}:</strong> {{ $book->author }}</p>
                <p class="card-text"><strong> {{ __('messages.category') }}:</strong> {{ $book->category->name }}</p>
                <p class="card-text"><strong> {{ __('messages.description') }}:</strong> {{ $book->description }}</p>
                <p class="card-text"><strong> {{ __('messages.isAvailable') }}:</strong>
                    {{ $book->is_available ? __('messages.yes') : __('messages.no') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
