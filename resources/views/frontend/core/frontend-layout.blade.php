<html>
    <header>
        <title>
            RE-CMS
        </title>

        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- CSS -->
        
        <link href="{{ URL::asset('public/assets/frontend.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </header>
    <body>
    @yield('menu')
    @yield('content')
    </body>
    <footer>
        
        <script src="{{ URL::asset('public/assets/frontend.js') }}" type="text/javascript"></script>
        
    </footer>
</html>