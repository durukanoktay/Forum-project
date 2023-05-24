<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        #footer-d {
            clear: both;
            padding: 5px;
            margin: 0;
            background-color: #17a2b8;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
            color: #fff;
        }

        .top-navlist {
            width: 100%;
            padding: 4px 5px 5px 0;
            margin: 0 0 20px 0;
            text-align: left;
            letter-spacing: 3px;
            color: #fff;
            background: #17a2b8;
        }

        .top-navlist li {
            list-style: none;
            margin: 0;
            display: inline;
        }

        .top-navlist li a {
            padding: 5px .75em;
            margin: 0;
            color: #fff;
            background: #17a2b8;
            text-decoration: none;
        }

        .top-navlist li a:link {
            color: #fff;
            background: #17a2b8;
        }

        .top-navlist li a:visited {
            color: #fff;
            background: #17a2b8;
        }

        .top-navlist li a:hover {
            color: #000;
            background: #17a2b8;
        }

        .top-navlist li a#current {
            color: #fff;
            background: #17a2b8;
        }
        
    </style>
</head>

<body>
    @include('forum.layout.header')
    @yield('content')
    @include('forum.layout.footer')
</body>