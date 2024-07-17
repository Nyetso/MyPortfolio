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
                    <li>1) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\6 - Coming Soon Page\comingSoon.html" target="_blank">Coming Soon Page</a></li>
                    <li>2) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\5 - Personal Website\onePageWebsite.html" target="_blank">Personal Website Layout</a></li>
                    <li>3) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\4 - Google Home Page\google.html" target="_blank">Google Home Page</a></li>
                </ul>
            </div>
            <div class="col-sm-4 text-left">
                <ul>
                    <li>4) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\3 - Survey Page\survey.html" target="_blank">Survey Page</a></li>
                    <li>5) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\2 - Product Landing Pages\casper.html" target="_blank">Product Landing Page</a></li>
                    <li>6) <a href="\storage\projects\PHPFullStackDevBootCamp\htmlCss\1 - Website  Layout\layout.html" target="_blank">Website Layout</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

@endsection
