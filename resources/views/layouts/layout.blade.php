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
            font-size: 1.5rem;
        }
        .shadow {
            text-shadow: 5px 5px 10px black;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 90%;
            justify-content: center;
        }
    </style>
</head>
<body class="grid-container">
    <div class="navbar shadow">
        <a href="#" style="font-size: 2rem;">Harris Bin Nazman</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Experience</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <span>
        <img src="C:\laragon\www\MyPortfolio\public\pictures\background-layout.png" width="1370px" height="907px" alt="Error Image">
    </span>
</body>
</html>
