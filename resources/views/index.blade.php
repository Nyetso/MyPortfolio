@extends('layouts.layout')

@section('content')

<head>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
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
    <div class="row align-items-center">
        <div class="col-sm-4 background text-white text-center">
            <h2>Hey There! I'm HARRIS</h2>
        </div>
        <div class="col-sm-5">
            A web developer focused on achieving results by building and managing websites and web applications that drive the success of the overall product.
        </div>
        <div class="col-sm-2 text-center">
            <span>Click here to know more <br><br><img src="/storage/pictures/icons8-forward-button-48.png" width="25px" height="25px"></i><a href="/about"><img src="/storage/gif/icons8-about-me.gif"  width="60px" height="60px"></a></span>
        </div>
    </div>
</div>
</body>
@endsection
