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
            grid-template-columns: 600px auto;
            gap: 40px;
            padding: 60px;
            padding-bottom: 60px;
            text-align: center;
        }
        .block-container span {
            font-size: 1rem;
        }
        .block-container h2 {
            font-size: 2.0rem;
        }
        .container-background {
            background-color: rgba(170, 44, 244, 0.511);
            border-radius: 20px;
            padding: 60px;
        }
        .navbar3 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-bottom-style: solid;
            border-color: rgb(0, 0, 0);
            border-width: 2px;
        }.navbar3 ul {
            display: flex;
            gap: 40px;
        }
        .navbar3 ul li {
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="navbar3">
        <ul>
            <li><a href="#kpkt-hims">KPKT-HIMS</a></li>
            <li><a href="#kpkt-osc">KPKT-OSC</a></li>

        </ul>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="kpkt-hims">
                <strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u><br><br>
                &nbsp;&nbsp;Housing Integrated Management System (HIMS)
            </div>
            <div>
                huraian
                <img src="/storage/pictures/kpkt.png" width="220px" height="250px">
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="kpkt-osc">
                <strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u><br><br>
                &nbsp;&nbsp;One Stop Center (OSC 3.0 Plus Online System)
            </div>
            <div>
                huraian sistem
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="kpkt-osc">
                <strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>MINISTRY OF FINANCE (MOF)</u><br><br>
                &nbsp;&nbsp;MyCukai
            </div>
            <div>
                huraian sistem
            </div>
        </div>
    </div>
</body>
