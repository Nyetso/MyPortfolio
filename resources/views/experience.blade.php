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
            grid-template-columns: 480px 290px 290px;
            gap: 40px;
            padding: 60px;
            padding-bottom: 60px;
            text-align: center;
        }
        .block-container2 {
            display: grid;
            grid-template-columns: 290px 290px 430px;
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
        .remarks {
            padding: 60px;
        }
        .picture {
            padding: 60px 60px 60px 0px;
        }
        .navbar3 {
            height: 200px;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 15rem;
            right: 0;
            background-color: #b7b3b351;
            overflow-x: hidden;
            padding-top: 55px;
            border-radius: 50px;
        }
        hr.line {
            border-left: 800px solid rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="navbar3">
        <ul>
            <li><a href="#kpkt-hims">KPKT-HIMS</a></li>
        </ul>
        <ul>
            <li><a href="#kpkt-osc">KPKT-OSC</a></li>
        </ul>
        <ul>
            <li><a href="#mof-mycukai">MOF-MyCukai</a></li>
        </ul>
    </div>
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="kpkt-hims">
                <br><br><strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u><br><br>
                &nbsp;&nbsp;Housing Integrated Management System (HIMS)
            </div>
            <div class="remarks">
                The National Housing Development (JPN) under KPKT has developed the
                Housing Integrated Management System (HIMS), a unified platform designed to
                replace BLESS, IDAMAN, and e-Pemaju. HIMS is live on January 31, 2022.
            </div>
            <div class="picture">
                <img src="/storage/pictures/kpkt.png" width="220px" height="250px">
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="block">
        <div class="block-container2">
            <div class="picture">
                <img src="/storage/pictures/osc.png" width="350px" height="200px">
            </div>
            <div class="remarks">
                The OSC 3.0 Plus Online System is fully owned by the Local Government Department
                (Jabatan Kerajaan Tempatan, JKT) under the Ministry of Housing and Local Government
                (Kementerian Perumahan dan Kerajaan Tempatan, KPKT). This system is an upgraded
                version of the OSC System Online 2.0, which was launched in 2007.
            </div>
            <div class="container-background" id="kpkt-osc">
                <br><br><strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u><br><br>
                &nbsp;&nbsp;One Stop Center (OSC 3.0 Plus Online System)
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="block">
        <div class="block-container">
            <div class="container-background" id="mof-mycukai">
                <br><br><strong style="font-size: 1.5rem;">Object Expression Sdn Bhd</strong><br><br><br>
                <u>MINISTRY OF FINANCE (MOF)</u><br><br>
                &nbsp;&nbsp;Malaysian Government Tax Management and Information System (MyCukai)
            </div>
            <div class="remarks">
                MyCukai (Malaysian Government Tax Management and Information System) is a
                platform that replaces the existing SMPC, SEC GST, and ePPC systems at the
                Ministry of Finance (MOF). MyCukai facilitates online applications and generates
                decision letters, including recommendations from agencies for tax exemptions,
                remissions, and tax returns.
            </div>
            <div class="picture">
                <img src="/storage/pictures/mycukai.png" width="240px" height="250px">
            </div>
        </div>
    </div>
</body>
