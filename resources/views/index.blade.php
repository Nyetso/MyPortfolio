@extends('layouts.layout')

@section('content')

<head>
    <style>
        .background {
            background-color: rgba(170, 44, 244, 0.511);
            border-radius: 20px;
        }
        .border {
            padding: 20px;
            padding-left: 200px;
        }
    </style>
</head>
<div class="border">
    <div class="container-fluid px-5"></div>
        <div class="row">
            <div class="col-sm-4 background align-items-center"><h2>Hey There! I'm HARRIS<br></h2></div>
            <div class="col" style="text-align: justify;">
                A web developer focused on achieving results by building and managing websites and<br>web applications that drive the success of the overall product.<br><br><br>
            </div>
            <div class="col">
                <span><br>Click here to know more <br><br> <img src="/storage/gif/icons8-right.gif" width="40px" height="40px"><a href="/about"><img src="/storage/gif/icons8-about-me.gif"  width="60px" height="60px"></a></span>
            </div>
        </div>
    </div>
</div>
@endsection
