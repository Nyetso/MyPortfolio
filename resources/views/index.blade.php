@include('layouts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <style>
        .block {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .block-container {
            display: grid;
            grid-template-columns: auto auto;
            gap: 40px;
            padding: 60px;
            text-align: center;
        }
        .block-container span {
            font-size: 1.5rem;
        }
        .block-container h2 {
            font-size: 2.0rem;
        }
    </style>
</head>
<body class="block">
    <div class="block-container">
            <div>
                <h2>Hey There! I'm HARRIS<br></h2>
                <span style="text-align: justify;">
                    A web developer focused on achieving results by building and managing websites and<br>web applications that drive the success of the overall product.
                </span>
            </div>
            <div>
                <span><br>Click here to know more <br><br> <img src="/storage/gif/icons8-right.gif" width="40px" height="40px"><a href="/about"><img src="/storage/gif/icons8-about-me.gif"  width="60px" height="60px"></a></span>
            </div>
    </div>
</body>
</html>
