<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    <header>
        <div class="h">

        <ul id="ul">
        
          <li><a href="{{ url('home') }}">Home</table></a></li>
          <li><a href="{{ url('inventaires/create') }}">Ajouter Article</a></li>
          <li class="nav-item">
         <li><img src="{{ asset('images/Logoo.jpeg') }}" alt="Description" class="logo"></li>
            
          </li>
        </ul>


        </div>
    </header>

    <div class="content-container">
        <div class="content">
            <div>@yield('content')</div>
        </div>
    </div>
</body>
</html>
