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
<div class="container-fluid"></div>
    <div class="row align-items-center">
        <div class="col-sm-4 background text-white text-center"><h2>Hey There! I'm HARRIS</h2></div>
        <div class="col">
            A web developer focused on achieving results by building and managing websites and web applications that drive the success of the overall product.
        </div>
        <div class="col">
            <span>Click here to know more <br><br> <img src="/storage/gif/icons8-right.gif" width="40px" height="40px"><a href="/about"><img src="/storage/gif/icons8-about-me.gif"  width="60px" height="60px"></a></span>
        </div>
    </div>
</div>
@endsection
