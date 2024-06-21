@include('layouts.layout')

<head>
    <style>
        .block {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .block-container {
            display: grid;
            grid-template-columns: 500px 750px;
            gap: 40px;
            padding: 60px;
            padding-bottom: 60px;
            text-align: center;
        }
        .block-container span {
            font-size: 1.5rem;
        }
        .block-container h2 {
            font-size: 2.0rem;
        }
        .container-background {
            background-color: rgba(170, 44, 244, 0.511);
            border-radius: 20px;
        }
        .navbar2 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-bottom-style: solid;
            border-color: rgb(0, 0, 0);
            border-width: 2px;
        }.navbar2 ul {
            display: flex;
            gap: 40px;
        }
        .navbar2 ul li {
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="navbar2">
        <ul>
            <li><a href="#workLife">Work Life</a></li>
        </ul>
        <ul>
            <li><a href="#studyLife">Study Life</a></li>
        </ul>
        <ul>
            <li><a href="#hobbies">Hobbies</a></li>
        </ul>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="workLife">
                <h2><br>work life</h2>
            </div>
            <div>
                <p>life in object expression</p>
                <p>life in petronas</p>
                <p>life in petron</p>
                <p>life in titan</p>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="studyLife">
                <h2><br>study life</h2>
            </div>
            <div>
                <p>uitm masters</p>
                <p>mmu degree</p>
                <p>utp foundation</p>
                <p>spm mrsm</p>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="hobbies">
                <h2>hobbies</h2>
            </div>
            <div>
                badminton
            </div>
        </div>
    </div>
</body>
