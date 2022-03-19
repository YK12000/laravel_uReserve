<html>
    <head>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        live-wireテスト <span class="text-blue-300">register</span>
        @livewire('register')

        @livewireScripts
    </body>

</html>
