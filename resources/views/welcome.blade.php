<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Library Management') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            background-color: #f3f4f6;
        }

        .container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #1f2937;
            color: #fff;
        }


        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #3b82f6;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2563eb;
        }

        .dashboard-link {
            background-color: #10b981;
            color: white;
        }

        .dashboard-link:hover {
            background-color: #059669;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
        }

        .cards {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
        }

        .card {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-width: 280px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            flex: auto;
        }

        .card h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card p {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #4b5563;
        }

        @media (max-width: 768px) {
            .card {
                max-width: 100%;
            }
        }
    </style>

</head>

<body class="antialiased">
    <header class="header">
        <div></div>
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <h1>{{ __('messages.welcome') }}</h1>
        <div class="links mt-8 text-center">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn dashboard-link">{{ __('messages.dashboard') }}</a>
                    <a href="{{ url('/lang/ar') }}" class="btn">{{ __('messages.arabic') }}</a>
                    <a href="{{ url('/lang/en') }}" class="btn">{{ __('messages.english') }}</a>
                @else
                    <a href="{{ route('login') }}" class="btn">{{ __('messages.login') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">{{ __('messages.register') }}</a>
                    @endif
                @endauth
            @endif
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <div class="card">
                <h2>{{ __('messages.project_overview') }}</h2>
                <p>{{ __('messages.overview_text') }}</p>
            </div>
            <div class="cards">
                <div class="card">
                    <h2>{{ __('messages.booksManagement') }}</h2>
                    <p>{{ __('messages.books_text') }}</p>
                    <a href="{{ route('books.index') }}" class="btn dashboard-link">{{ __('messages.view') }}</a>
                </div>
                <div class="card">
                    <h2>{{ __('messages.categoriesManagement') }}</h2>
                    <p>{{ __('messages.categories_text') }}</p>
                    <a href="{{ route('categories.index') }}"class="btn dashboard-link">
                        {{ __('messages.view') }}
                    </a>
                </div>
                @if (Auth::check() && Auth::user()->role === 'manager')
                    <div class="card">
                        <h2>{{ __('messages.usersManagement') }}</h2>
                        <p>{{ __('messages.users_text') }}</p>
                        <a href="{{ route('users.index') }}" class="btn dashboard-link">{{ __('messages.view') }}</a>
                    </div>
                @endif
            </div>

        </div>


    </div>
</body>

</html>
