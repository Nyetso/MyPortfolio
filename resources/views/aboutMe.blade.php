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
        <div class="row align-items-center">
            <h2 class="col-sm-4 background text-white text-center">Work Life</h2>
            <div class="col">
                <ul>
                    <li>Life in Object Expression</li>
                    <li>Life in Profix</li>
                    <li>Life in Tatsuno</li>
                    <li>Life in Petron</li>
                    <li>Life in Titan</li>
                </ul>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <h2 class="col-sm-4 background text-white text-center">Study Life</h2>
            <div class="col">
                <ul>
                    <li>uitm masters</li>
                    <li>mmu degree</li>
                    <li>utp foundation</li>
                    <li>mrsm spm</li>
                </ul>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <h2 class="col-sm-4 background text-white text-center">Hobbies</h2>
            <div class="col">
                <ul>
                    <li>badminton</li>
                </ul>
            </div>
        </div>
    </div>
</body>

@endsection
