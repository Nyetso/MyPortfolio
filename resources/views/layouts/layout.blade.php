<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>

    <style>
        .navbar {
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
            width: auto;
            height: auto;
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
        }
        .sidenav a img {
            padding: 6px 6px 6px 5px;
            text-decoration: none;
            font-size: 1rem;
            color: #818181;
            display: block;
        }
    </style>
</head>
<body class="grid-container background">
        <div class="navbar shadow">
            <ul>
                <li><img src="/storage/pictures/picture no bg.png" width="110px" height="150px"></li>
                <li><a style="font-size: 2rem;"><br>Harris Bin Nazman</a></li>
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
</body>
</html>
