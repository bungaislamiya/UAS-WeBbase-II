<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/template2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>

    <body id="bg">
    <div id="basic">
        <nav style ="padding: 15px;" >           
                    <ul id="navigasi">         
                    <img src="/img/loogo.jpg" width="150" height="70">         
                        <li><a href="/" class="font" style= "margin-left :35rem;">Home</a></li>
                        <li><a href="/about" class="font" id="bg2">About</a></li>
                        <li class="dropdown"><a href="#" class="font">Content</a>
                            <ul class="isi-dropdown">
                            <li><a href="/woman" class="font1"><img src="/img/woman.png" width="30" height="30" style="margin-left : 10px;"/>Aroma Woman</a></li>
                            <li><a href="/man" class="font1"><img src="/img/man.png" width="30" height="30" style="margin-left : 10px;"/>Aroma Man</a></li>
                            </ul>
                        </li>
                    </ul>
        </nav>
        </div>

        <div class="col">
            @yield('isi')
        </div>

    </body>


</html>