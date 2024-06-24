<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="public/scss/app.css"> --}}
    <title>My Portfolio</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
        .img-profile {
            position: absolute;
            top: 10px;
            left: 50px;
            border-radius: 5%;
            width: 110px;
            height: 150px;
        }
        /* .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom-style: solid;
            border-color: rgb(0, 0, 0);
            border-width: 2px;
        }.navbar ul {
            display: flex;
            gap: 40px;
        }
        .navbar ul li {
            list-style: none;
        }
        a {
            text-decoration: none;
            font-weight: bold;
            color: black;
            font-size: 1rem;
            vertical-align: middle;
        }
        .shadow {
            text-shadow: 5px 5px 10px black;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 90%;
            justify-content: center;
        }
        .background {
            background-image: url('/storage/pictures/backgroundLayout.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .sidenav {
            height: 300px;
            width: 65px;
            position: fixed;
            z-index: 1;
            top: 15rem;
            left: 0;
            background-color: #b7b3b351;
            overflow-x: hidden;
            padding-top: 20px;
            border-radius: 50px;
        }
        .sidenav a img {
            padding: 6px 6px 6px 5px;
            text-decoration: none;
            font-size: 1rem;
            color: #818181;
            display: block;
        } */
        img.ex1:hover {
            width: 210px;
            height: 280px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand" href="#"><strong>Harris Bin Nazman</strong></h1>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col"><img src="/storage/pictures/picture no bg.png" class="img-profile ex1" width="110px" height="150px"></div>
            <div class="col-sm-6"><a style="font-size: 2rem;">Harris Bin Nazman</a></div>
            <div class="col"><a href="/">Home</a></div>
            <div class="col"><a href="/about">About Me</a></div>
            <div class="col"><a href="/experience">Experience</a></div>
            <div class="col"><a href="/project">Projects</a></div>
            <div class="col"><a href="/contact">Contact</a></div>
        </div>
    </div>
    <div id="index">
        @yield('content')
    </div>
    {{-- <div class="container">
        <div class="col">
            <div class="row-sm-5">
                <a href="https://github.com/Nyetso" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/github.png" width="55px" height="55px"></a>
            </div>
            <div class="row-sm-5">
                <a href="https://www.facebook.com/nermix/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/facebook.png" width="55px" height="55px"></a>
            </div>
            <div class="row-sm-5">
                <a href="https://www.instagram.com/harrisnazman/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/instagram.png" width="55px" height="55px"></a>
            </div>
            <div class="row-sm-5">
                <a href="https://www.linkedin.com/in/harris-nazman/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/linkedin.png" width="55px" height="55px"></a>
            </div>
            <div class="row-sm-5">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </div>
        </div>
    </div> --}}
</body>
{{-- <body class="grid-container background">
        <div class="navbar shadow">
            <ul>
                <li><img src="/storage/pictures/picture no bg.png" class="img-profile ex1"></li>
                <li><a style="font-size: 2rem;">Harris Bin Nazman</a></li>
            </ul>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Me</a></li>
                <li><a href="/experience">Experience</a></li>
                <li><a href="/project">Projects</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="sidenav">
            <a href="https://github.com/Nyetso" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/github.png" width="55px" height="55px"></a>
            <a href="https://www.facebook.com/nermix/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/facebook.png" width="55px" height="55px"></a>
            <a href="https://www.instagram.com/harrisnazman/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/instagram.png" width="55px" height="55px"></a>
            <a href="https://www.linkedin.com/in/harris-nazman/" target="_blank" rel="noopener noreferrer"><img src="/storage/pictures/linkedin.png" width="55px" height="55px"></a>
        </div>
</body> --}}
</html>
