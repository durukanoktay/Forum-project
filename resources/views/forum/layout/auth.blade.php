<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', "Custom Auth")</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f7f7f7;
        }

        .container-log {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }

        .form-box-log {
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
          text-align: center;
        }

        input[type="name"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
          display: block;
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          font-size: 16px;
        }

        input[type="submit"] {
          background-color: #28a745;
          color: #fff;
          cursor: pointer;
        }
    </style>
</head>

<body>
    
    @yield('content')
    @include('forum.layout.footer')
</body>
