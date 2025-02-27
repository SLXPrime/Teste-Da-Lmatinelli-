<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Título da Página')</title>
    <!-- Aqui você pode adicionar seus links para CSS, fontes, etc -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilo para o carregamento */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    @livewireStyles
</head>

<body>
    @livewire('loading-page')

    <!-- Header -->
    <x-header></x-header>
    <!-- Conteúdo principal da página -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer-component/>

    <!-- Scripts -->
    @livewireScripts
</body>

</html>
