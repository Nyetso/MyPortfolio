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
            <h2 class="col">Object Expression Sdn Bhd</h2>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <div class="col-sm-4 background text-white text-center">
                <h3><u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u></h3>
                <span>Housing Integrated Management System (HIMS)</span>
                <span><a href="https://hims.kpkt.gov.my/bahagian/login" target="_blank"><img src="/storage/pictures/link2.png" width="25px" height="25px"></a></span>
            </div>
            <div class="col-sm-4 text-center">
                <span>
                    The National Housing Development (JPN) under KPKT has developed the
                    Housing Integrated Management System (HIMS), a unified platform designed to
                    replace BLESS, IDAMAN, and e-Pemaju. HIMS is live on January 31, 2022.
                </span>
            </div>
            <div class="col-sm-4">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="/storage/pictures/kpkt.png" width="220px" height="250px"></span>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <div class="col-sm-4">
                <span><img src="/storage/pictures/osc.png" width="350px" height="200px"></span>
            </div>
            <div class="col-sm-4 text-center">
                <span>
                    The OSC 3.0 Plus Online System is fully owned by the Local Government Department
                    (Jabatan Kerajaan Tempatan, JKT) under the Ministry of Housing and Local Government
                    (Kementerian Perumahan dan Kerajaan Tempatan, KPKT). This system is an upgraded
                    version of the OSC System Online 2.0, which was launched in 2007.
                </span>
            </div>
            <div class="col-sm-4 background text-white text-center">
                <h3><u>KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN (KPKT)</u></h3>
                <span>One Stop Center (OSC 3.0 Plus Online System)</span>
                <span><a href="https://osc3plus.kpkt.gov.my/" target="_blank"><img src="/storage/pictures/link2.png" width="25px" height="25px"></a></span>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-center">
            <div class="col-sm-4 background text-white text-center">
                <h3><u>MINISTRY OF FINANCE (MOF)</u></h3>
                <span>Malaysian Government Tax Management and Information System (MyCukai)</span>
                <span><a href="https://mycukai.treasury.gov.my/portal" target="_blank"><img src="/storage/pictures/link2.png" width="25px" height="25px"></a></span>
            </div>
            <div class="col-sm-4 text-center">
                <span>
                    MyCukai (Malaysian Government Tax Management and Information System) is a
                    platform that replaces the existing SMPC, SEC GST, and ePPC systems at the
                    Ministry of Finance (MOF). MyCukai facilitates online applications and generates
                    decision letters, including recommendations from agencies for tax exemptions,
                    remissions, and tax returns.
                </span>
            </div>
            <div class="col-sm-4">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="/storage/pictures/mycukai.png" width="240px" height="250px"></span>
            </div>
        </div>
    </div>
</body>

@endsection
