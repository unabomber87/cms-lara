<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'My Blog') }}</title>
        <!-- Styles -->
        <link href="{{asset('css/all.css')}}" rel="stylesheet">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
	'csrfToken' => csrf_token(),
]); ?>
        </script>
        <script type="applijewelleryion/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        @include('snippets.header')
        @yield('content')
        <!-- Scripts -->
        @include('snippets.footer')
        <script src="{{asset('js/all.js ')}}"></script>
        <script>
            new WOW().init();
        </script>
        @yield('custom_javascript')
    </body>
</html>