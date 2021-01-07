<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hair">
    <meta name="author" content="Hair">
    <meta name="generator" content="Hair">
    <title>Dashboard Template · Bootstrap</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('mix-manifest.json') }}">
    <meta name="theme-color" content="#563d7c">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @stack('csss')
</head>

<body>
    <x-header />
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <x-sidebar />
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
    <x-footer />
    @stack('scripts')
</body>

</html>