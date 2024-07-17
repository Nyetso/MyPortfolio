@extends('layouts.layout')

@section('content')
<head>
    <style>
        .background {
            background-color: #0e223e;
            border-radius: 20px;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-center background text-white text-center">
            <h2 class="col">PHP Full Stack Web Development Bootcamp</h2>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <div class="col-sm-4 background text-white text-center">
                <h3><u>HTML5 + CSS</u></h3>
            </div>
            <div class="col-sm-4 text-left">
                <ul>
                    <li>1) <a href="\resources\views\projects\PHP Full Stack Web Development Bootcamp\HTML5 + CSS3\6 - Coming Soon Page\comingSoon.html" target="_blank">Coming Soon Page</a></li>
                    <li>2) Personal Website Layout</li>
                    <li>3) Google Home Page</li>
                </ul>
            </div>
            <div class="col-sm-4 text-left">
                <ul>
                    <li>4) Survey Page</li>
                    <li>5) Product Landing Page</li>
                    <li>6) Website Layout</li>
                </ul>
            </div>
        </div>
    </div>
</body>

@endsection
