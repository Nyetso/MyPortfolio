@extends('layouts.layout')

@section('content')

<head>
    <style>
        .background {
            background-color: #0e223e;
            border-radius: 20px;
            padding: 50px;
        }
        a:hover {
            background-color: rgba(169, 169, 169, 0.503);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-start">
            <h2 class="col-sm-4 background text-white text-center">Work Life</h2>
            <div class="col-sm-4 font-monospace flex-fill border">
                <p>My career began in 2018 at <a href="https://www.linkedin.com/company/titan-group-of-companies/?originalSubdomain=my"><strong>Titan Oil & Gas Sdn Bhd</strong></a>, where I worked as a Technician. This role introduced me to the Oil & Gas industry, focusing on the maintenance of petrol station equipment as a vendor. In 2019, I continued as a Technician while also training newcomers.</p>
                <br><p>In 2019, I advanced my career by joining <a href="https://www.petron.com.my/"><strong>Petron Malaysia Sdn Bhd</strong></a> as a Retail Asset Management Area Engineer. This marked the beginning of my engineering career. I was responsible for monitoring all assets at petrol stations in Negeri Sembilan and Pahang, overseeing maintenance conducted by vendors.</p>
                <br><p>In 2021, <a href="https://www.tatsuno.com.my/"><strong>Tatsuno Engineering & Services Malaysia Sdn Bhd</strong></a> hired me for my expertise in petrol station equipment. As a Senior Project Executive, my role encompassed the responsibilities of a Project Manager. I managed the entire process from tendering to handover.</p>
                <br><p>In 2022, I worked at Profix Fleet Marketing as their General Manager, overseeing the operation of a petrol station under Petronas. My responsibilities included managing the entire station operation and participating in projects led by Petronas Engineers.</p>
                <br><p>In 2024, I decided to switch industries and pursue my passion for IT as a software developer. I began my journey at <a href="https://objectexpression.com/"><strong>Object Expression Sdn Bhd</strong></a>, where I worked as both a Project Manager and Software Developer. This role allowed me to expand my knowledge in software development, learning languages such as C++, PHP, Java, HTML, CSS, Bootstrap, and JavaScript. I also gained experience with frameworks like Laravel for the back-end and Vue.js for the front-end. My work involved using databases such as SQL, MySQL, MariaDB, and Navicat, as well as version control tools like GitHub and GitLab.</p>
                <br>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-start">
            <h2 class="col-sm-4 background text-white text-center">Study Life</h2>
            <div class="col-sm-4 font-monospace flex-fill border">
                <p>
                    <strong>Master of Science in Telecommunication and Information Engineering</strong><br>
                    <strong>UITM Shah Alam</strong><br>
                    August 2022 - Current (Expected Graduation in 2025)
                </p><br>
                <p>
                    <strong>Bachelor of Engineering (Hons) Mechanical</strong><br>
                    <strong>Multimedia University, Melaka</strong><br>
                    September 2013 - July 2018
                </p><br>
                <p>
                    <strong>Foundation Programme in Technology</strong><br>
                    <strong>Universiti Teknologi Petronas</strong><br>
                    January 2010 - January 2011
                </p><br>
                <p><strong>Sijil Pelajaran Malaysia (SPM)</strong><br>
                    <strong>MRSM Alor Gajah</strong><br>
                    January 2008 - December 2009
                </p><br>
            </div>
        </div>
        <br><br><br>
        <div class="row align-items-start">
            <h2 class="col-sm-4 background text-white text-center">Hobbies</h2>
            <div class="col-sm-4 font-monospace flex-fill border">
                <h4><strong>Badminton</strong><br></h4><br>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th class="table-dark">#</th>
                            <th class="table-dark">Club</th>
                            <th class="table-dark">Activities</th>
                            <th class="table-dark">Timeline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>RIS Badminton Club</td>
                            <td>Captain</td>
                            <td>2022 - Current</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CyberMaxx Badminton Club</td>
                            <td>Treasurer and Logistics</td>
                            <td>2021 - Current</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cyber Badminton Club</td>
                            <td>Member</td>
                            <td>2018 - Current</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Warga Puchong Badminton Club</td>
                            <td>Member</td>
                            <td>2018 - Current</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Boroi Badminton Club</td>
                            <td>Member</td>
                            <td>2018 - Current</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@endsection
