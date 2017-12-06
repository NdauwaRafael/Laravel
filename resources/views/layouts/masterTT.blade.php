<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js" ></script>
    </head>

    <body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">TimeTable</li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
            </ul>
        </div>
    </div>

    <div class="grid-container">
        @yield('content')
    </div>
    </body>
</html>