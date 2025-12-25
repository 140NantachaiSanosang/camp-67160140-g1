<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>HTML - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
                background-image :url('https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2021/06/35211_4DA8E347FB9842EB.jpg?w=419&h=283&crop=0');
                background-size: cover;
            }
            .container{
                background: #F8F0D1;
                width: 700px;
                border-radius: 15px;
                padding: 30px 40px;
            }

        </style>
        @stack('styles')
    </head>
    <body>

        <div class="container mt-4">
        <h1>File Default</h1>
        @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
