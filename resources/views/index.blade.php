<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
    <style>
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }.navbar ul {
            display: flex;
            gap: 20px;
        }
        .navbar ul li {
            list-style: none;
        }
        a {
            text-decoration: none;
            font-weight: bold;
            color: black;
        }
        .shadow {
            text-shadow: 5px 5px 5px black;
        }
    </style>
</head>
<body>
    <div class="navbar shadow">
        <a href="#">My Website</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Me</a></li>
        </ul>
    </div>

    <div class="body-details shadow">
        <span class="details-relative">
            <a style="color: antiquewhite">HEY THERE!</a><br>
            <a style="color: antiquewhite">I AM <strong>HARRIS</strong></a><br>
            <a style="color: antiquewhite">Wanted to know more ?
                <a href="#">About Me</a>
            </a><br>
        </span>
        <span class="img img-relative">
            <img src="/Exercise04/img/picture.png" width="200" alt="Error Image">
        </span>
    </div>


    <h1>What I Do:</h1>
    <nav>
        <ul style="color:rgb(231, 227, 174)">
            <li><a href="/Exercise03/softwareDeveloper.html"><b>Software Developer</b></a></li>
            <li><a href="/Exercise03/hobbies.html"><b>Hobbies/Interests</b></a></li>
        </ul>
    </nav>
</body>
</html>
