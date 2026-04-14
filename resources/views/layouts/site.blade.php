<!DOCTYPE html>
<html lang="pt-BR" class="font-sans scroll-smooth text-xs leading-normal md:text-sm xl:text-[0.8rem] 2xl:text-[0.9rem]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#11234E">
    <meta name="description" content="@yield('meta_description', 'Conheça a assessoria mais completa do mercado, feita para profissionais que querem chegar cada vez mais longe.')">
    <title>@yield('title', 'Univalores')</title>
    <link rel="icon" href="https://univalores.com.br/static/img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="font-sans antialiased flex min-h-full w-full flex-col bg-base-100 font-light text-base-900">
    @yield('content')
</body>
</html>
