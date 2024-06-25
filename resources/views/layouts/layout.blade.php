<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/scss/style.css', 'resources/js/app.js', 'resources/js/script.js'])

    <style>
        .img-profile {
            /* position: relative;
            top: 60px;
            left: 80px; */
            transition-property: none;
            border-radius: 5%;
            width: 110px;
            height: 160px;
        }
        img.ex1:hover {
            width: 210px;
            height: 280px;
        }
        .border2 {
            padding: 20px;
            position: relative;
            left: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand"><strong>&nbsp;&nbsp;&nbsp;Harris Bin Nazman</strong></a>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">contact</a></li>
                    <li></li>
                </ul>
            </form>
        </div>
    </nav>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <img src="/storage/pictures/picture no bg.png" class="img-profile ex1" width="110px" height="150px">
            </div>
            <div class="d-flex">&nbsp;</div>
            <div class="d-flex">
                <div id="toggle-btn">
                    <i class="lni lni-grid-alt"></i>
                </div>
                <div class="sidebar-logo">
                    <span>Navigation</span>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="https://github.com/Nyetso" target="_blank" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        {{-- GitHub --}}
                        <span><img src="/storage/pictures/github.png" width="55px" height="55px"></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="https://www.facebook.com/nermix/" target="_blank" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        {{-- Facebook --}}
                        <span><img src="/storage/pictures/facebook.png" width="55px" height="55px"></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="https://www.instagram.com/harrisnazman/" target="_blank" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        {{-- Instagram --}}
                        <span><img src="/storage/pictures/instagram.png" width="55px" height="55px"></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="https://www.linkedin.com/in/harris-nazman/" target="_blank" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        {{-- Linkedin --}}
                        <span><img src="/storage/pictures/linkedin.png" width="55px" height="55px"></span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>


    <div id="index" class="border2">
        @yield('content')
    </div>
</body>
</html>
