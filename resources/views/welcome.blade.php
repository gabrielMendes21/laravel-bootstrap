<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Bootstrap with Vite</title>

        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
        ])

        <style>
            body {
                background: url('/sneakers.jpg');
                background-repeat: no-repeat;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div class="container py-4 px-3 mx-auto bg-black rounded">
            <h1 class="text-primary">Hello, Bootstrap and Vite!</h1>
        </div>
    </body>
</html>