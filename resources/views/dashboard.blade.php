<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-center font-semibold">{{ __('messages.welcome') }}</h2>

                    <div class="mt-4">
                        <h3 class="text-lg font-semibold">{{ __('messages.project_overview') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('messages.overview_text') }}</p>
                    </div>

                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-center">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-md font-semibold">{{ __('messages.booksManagement') }}</h4>
                            <p class="text-sm mt-2">{{ __('messages.books_text') }}</p>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-md font-semibold">{{ __('messages.categoriesManagement') }}</h4>
                            <p class="text-sm mt-2">{{ __('messages.categories_text') }}</p>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-md font-semibold">{{ __('messages.usersManagement') }}</h4>
                            <p class="text-sm mt-2">{{ __('messages.users_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
