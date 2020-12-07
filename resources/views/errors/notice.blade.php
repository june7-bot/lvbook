<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
{{-- 
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

         
        </style> --}}
    </head>
    <body>
       <h1>{{ $title }}</h1>
       <p> {{  $description }}</p>
    </body>
</html>
