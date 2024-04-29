<?php
include 'head.php';
?>

<style>
    .table> :not(caption)>*>* {
        padding: 0.5rem !important;
        color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
        background-color: var(--bs-table-bg);
        border-bottom-width: var(--bs-border-width);
        box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
    }

    .big-card {
        width: 70vw;
        box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.3);
        height: auto;
        margin: auto;
        position: relative;
        padding-bottom: 50px;
    }

    .big-card-heading {
        width: 95%;
        height: 4rem;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #001055;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .big-card-heading p {
        color: white;
        margin-bottom: 0;
        font-size: 28px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .big-card .min-text {
        color: #fe8d00;
        font-size: 12px;
        margin: 0;
        padding: 0;
        width: fit-content;
    }

    .big-card .main-text {
        font-size: 18px;
        text-align: justify;
    }

    .m-custom-card {
        height: 150px;
        box-shadow: 4px 4px 6px 1px rgba(0, 0, 0, 0.06);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        /* background: linear-gradient(115deg, rgba(251, 215, 134, 0.3), rgba(198, 255, 221, 0.3)); */
        background-color: rgba(205, 205, 205, 0.2);
        /* border:1px solid rgba(0, 0, 0, 0.01);  */
        transition: 0.2s all;
    }

    .m-custom-card img {
        width: 20%;
    }

    .m-custom-card span {
        text-transform: uppercase;
        font-size: 12px;
        margin-top: 20px;
        width: fit-content;
        font-weight: 500;
        text-align: center;
    }

    .m-custom-card:hover {
        scale: 0.99;
        box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.05);
        cursor: pointer;
    }

    @media screen and (max-width:992px) {
        .big-card {
            width: 90vw;
        }
    }

    @media screen and (max-width:480px) {
        .big-card {
            width: 90vw;
        }

        .big-card-heading {
            width: 85%;
        }

        .big-card-heading p {
            font-size: 19px;
        }

        .big-card .main-text {
            font-size: 14px;
        }

        .m-custom-card span {
            font-size: 15px;
        }
    }
</style>


<?php
include 'sidebar/iic_sidebar.php';
?>

                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5">

                    <div class="row mx-0">
                        <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Innovation & <span>Startup Committee</span></h2>
                        <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Innovation & <span>Startup Committee</span></h2>


                        <div class="container">
                        <div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td colspan="4">
                    <p class="text align center"><strong>MEMBER LIST-IIC 5.0(2022-2023)</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p class="text align center"><strong>Members</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>S.N</strong></p>
                </td>
                <td>
                    <p><strong>Name of Member</strong></p>
                </td>
                <td>
                    <p><strong>Name of College</strong></p>
                </td>
                <td>
                    <p><strong>Key Role / Position assigned in HC</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    1.
                </td>
                <td>
                    Dr. Manjula Jain
                </td>
                <td>
                    IIC-TMU
                </td>
                <td>
                    President
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    Dr. Geetanshu Dawar
                </td>
                <td>
                    Dental College
                </td>
                <td>
                    Convener
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p class="text align center"><strong>External Members</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Dr. Deepak Mendiratta
                </td>
                <td>
                    Agri Business Centre
                </td>
                <td>
                    Innovation
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Prof. Ravi Kant
                </td>
                <td>
                    SRM University
                </td>
                <td>
                    IPR
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Mr. Rachit Agarwal
                </td>
                <td>
                    United Resourcing Services
                </td>
                <td>
                    Startup
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p class="text align center"><strong>Internal Members</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Dr. Ankita Jain
                </td>
                <td>
                    Dental College
                </td>
                <td>
                    Innovation Activity Coordinator/ARIIA Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    Dr. Thanveer K
                </td>
                <td>
                    Dental College
                </td>
                <td>
                    Startup activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    8
                    <br role="presentation" data-uw-rm-sr="">
                    .
                </td>
                <td>
                    Dr. Nimish Agarwal
                </td>
                <td>
                    Dental College
                </td>
                <td>
                    IPR/Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    9.
                </td>
                <td>
                    Dr Amrita Singh
                </td>
                <td>
                    Dental College
                </td>
                <td>
                    ARIIA/NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    10.
                </td>
                <td>
                    Dr. Bindoo Malviya
                </td>
                <td>
                    Management College
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    11.
                </td>
                <td>
                    Ms. Anupama Verma
                </td>
                <td>
                    Management College
                </td>
                <td>
                    Social Media Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    12.
                </td>
                <td>
                    Mr. Akash Bhatnagar
                </td>
                <td>
                    Management College
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    13.
                </td>
                <td>
                    Mr. Sumit Kumar
                </td>
                <td>
                    Management College
                </td>
                <td>
                    ARIIA/NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    14.
                </td>
                <td>
                    Mr. Vivek Birla
                </td>
                <td>
                    Management College
                </td>
                <td>
                    Innovation Activity&nbsp; Coordinator/ Startup Activity&nbsp; Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    15.
                </td>
                <td>
                    Mr. B.R. Mourya
                </td>
                <td>
                    LAW College
                </td>
                <td>
                    Startup activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    16.
                </td>
                <td>
                    Mr. Pradeep Kashyap
                </td>
                <td>
                    LAW College
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    17.
                </td>
                <td>
                    Mr. Arunoraj Singh
                </td>
                <td>
                    LAW College
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    18.
                </td>
                <td>
                    Mr. Yogesh Chand Gupta
                </td>
                <td>
                    LAW College
                </td>
                <td>
                    ARIIA Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    19.
                </td>
                <td>
                    Mr. Saurabh Batar
                </td>
                <td>
                    LAW College
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    20.
                </td>
                <td>
                    Dr. Ruchi Kant
                </td>
                <td>
                    Paramedical College
                </td>
                <td>
                    Innovation Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    21.
                </td>
                <td>
                    Mr. Rakesh Yadav
                </td>
                <td>
                    Paramedical College
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    22.
                </td>
                <td>
                    Mr. Himanshu Yadav
                </td>
                <td>
                    Paramedical College
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    23.
                </td>
                <td>
                    Mr. Raushan Kumar
                </td>
                <td>
                    Paramedical College
                </td>
                <td>
                    ARIIA Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    24
                </td>
                <td>
                    Dr. Ankita Mittal
                </td>
                <td>
                    Medical College
                </td>
                <td>
                    Startup activity Coordinator/Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    25.
                </td>
                <td>
                    Dr. Ashutosh Kumar
                </td>
                <td>
                    Medical College
                </td>
                <td>
                    NIRF Coordinator/Social Media Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    26.
                </td>
                <td>
                    Mr. Anul Tandon
                </td>
                <td>
                    Medical College
                </td>
                <td>
                    Social Media Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    27.
                </td>
                <td>
                    Dr. Vivek Sngh
                </td>
                <td>
                    Medical College
                </td>
                <td>
                    ARIIA Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    28.
                </td>
                <td>
                    Mr. Ashish Bishnoi
                </td>
                <td>
                    CCSIT
                </td>
                <td>
                    Innovation Activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    29.
                </td>
                <td>
                    Mr RP Pandey
                </td>
                <td>
                    CCSIT
                </td>
                <td>
                    Startup activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    30.
                </td>
                <td>
                    Mr. Farhan Khan
                </td>
                <td>
                    Physiotherapy
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    31.
                </td>
                <td>
                    Mrs Sheetal Malhan
                </td>
                <td>
                    Physiotherapy
                </td>
                <td>
                    NIRRF/ARIIA Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    32.
                </td>
                <td>
                    Dr. Devendra Pal Singh
                </td>
                <td>
                    Agriculture
                </td>
                <td>
                    Innovation Activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    33.
                </td>
                <td>
                    Dr. Ashutosh Awasthi
                </td>
                <td>
                    Agriculture
                </td>
                <td>
                    Startup activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    34.
                </td>
                <td>
                    Dr. Akanchha Singh
                </td>
                <td>
                    Agriculture
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    35.
                </td>
                <td>
                    Dr. Upasana
                </td>
                <td>
                    Agriculture
                </td>
                <td>
                    Internship&nbsp; coordinator
                </td>
            </tr>
            <tr>
                <td>
                    36.
                </td>
                <td>
                    Dr. Anil Kumar Choudhary
                </td>
                <td>
                    Agriculture
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    37.
                </td>
                <td>
                    Pooja Jha
                </td>
                <td>
                    Nursing
                </td>
                <td>
                    Start-up Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    38.
                </td>
                <td>
                    Dr Anurag Verma
                </td>
                <td>
                    Pharmacy
                </td>
                <td>
                    Innovation&nbsp; activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    39.
                </td>
                <td>
                    Dr Piyush Mittal
                </td>
                <td>
                    Pharmacy
                </td>
                <td>
                    Internship&nbsp; coordinator
                </td>
            </tr>
            <tr>
                <td>
                    40.
                </td>
                <td>
                    Dr Mukesh Singh
                </td>
                <td>
                    Pharmacy
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    41.
                </td>
                <td>
                    Dr Mayur Porwal
                </td>
                <td>
                    Pharmacy
                </td>
                <td>
                    ARIIA coordinator
                </td>
            </tr>
            <tr>
                <td>
                    42.
                </td>
                <td>
                    Dr Mithul V Mammen
                </td>
                <td>
                    Pharmacy
                </td>
                <td>
                    IPR activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    43.
                </td>
                <td>
                    Mr. Arun Gupta
                </td>
                <td>
                    FOE
                </td>
                <td>
                    Internship Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    44.
                </td>
                <td>
                    Dr Garima Goswami
                </td>
                <td>
                    FOE
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    45.
                </td>
                <td>
                    Dr Pankaj Goswami
                </td>
                <td>
                    FOE
                </td>
                <td>
                    Innovation Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    46.
                </td>
                <td>
                    Mr Pradeep Kumar Verma
                </td>
                <td>
                    FOE
                </td>
                <td>
                    Start-up Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    47.
                </td>
                <td>
                    Ankur dev
                </td>
                <td>
                    Fine Arts
                </td>
                <td>
                    Innovation Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    48.
                </td>
                <td>
                    Pravesh Chandra Verma
                </td>
                <td>
                    Fine Arts
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    49.
                </td>
                <td>
                    Vaibhav Jha
                </td>
                <td>
                    Fine Arts
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    50.
                </td>
                <td>
                    Ms. Mohita Verma
                </td>
                <td>
                    Faculty of Edu.
                </td>
                <td>
                    Innovation Activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    51.
                </td>
                <td>
                    Mrs. Nahid Bi
                </td>
                <td>
                    Faculty of Edu.
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    52.
                </td>
                <td>
                    Mr Yogendra Sharma
                </td>
                <td>
                    College of Physical Eucation
                </td>
                <td>
                    Innovation Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    53.
                </td>
                <td>
                    Mr Vaibhav Rai
                </td>
                <td>
                    Digital Marketing Manager
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    54.
                </td>
                <td>
                    Mr Neeraj Mittal
                </td>
                <td>
                    Incubation Manager
                    TMU-BIC
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    55.
                </td>
                <td>
                    Vishakha jain
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    InnovationActivity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    56
                </td>
                <td>
                    Abhinav Sagar
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    Innovation Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    57
                </td>
                <td>
                    Satakshi Agarwal
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    58
                </td>
                <td>
                    Yash kumar
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    59
                </td>
                <td>
                    Neha jain
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    60
                </td>
                <td>
                    Pankaj verma
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    61
                </td>
                <td>
                    Purnima kumari
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    62
                </td>
                <td>
                    Manasvi Sharma
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    63
                </td>
                <td>
                    Abhimanyu chandel
                </td>
                <td>
                    BFA (U.G.)
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    64
                </td>
                <td>
                    Charvi Jain
                </td>
                <td>
                    TMIMT
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    65
                </td>
                <td>
                    Nishant Agarwal
                </td>
                <td>
                    TMIMT
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    66
                </td>
                <td>
                    Anuj Saraswat
                </td>
                <td>
                    TMIMT
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    67
                </td>
                <td>
                    Tanmay Singh
                </td>
                <td>
                    TMIMT
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    68
                </td>
                <td>
                    Ms. Joyala Dev
                </td>
                <td>
                    RIT (U.G.)
                </td>
                <td>
                    InnovationActivity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    69
                </td>
                <td>
                    Ali Khan
                </td>
                <td>
                    Optom (PG)
                </td>
                <td>
                    InnovationActivity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    70
                </td>
                <td>
                    Deepak Negi
                </td>
                <td>
                    RIT (P.G.)
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    71
                </td>
                <td>
                    Viswanath Pratap Singh
                </td>
                <td>
                    RIT (PG)
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    72
                </td>
                <td>
                    Saloni Martolia
                </td>
                <td>
                    RIT (PG)
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    73
                </td>
                <td>
                    Shmriti
                </td>
                <td>
                    RIT (PG)
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    74
                </td>
                <td>
                    Vanshdeep Sharma
                </td>
                <td>
                    Optom (U.G.)
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    75
                </td>
                <td>
                    Ayushi Singh
                </td>
                <td>
                    MLT (U.G.)
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    76
                </td>
                <td>
                    Tushar Saini
                </td>
                <td>
                    MLT (U.G.)
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    77
                </td>
                <td>
                    Farhan Saifi
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    InnovationActivity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    78
                </td>
                <td>
                    Sanskriti Sharma
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    InnovationActivity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    79
                </td>
                <td>
                    Syed Ibadur Rehman
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    80
                </td>
                <td>
                    Mohd Abuzar
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    81
                </td>
                <td>
                    Rakib Hussain
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    82
                </td>
                <td>
                    Sidra Zaheen
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    83
                </td>
                <td>
                    Rishabh Chaubey
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    84
                </td>
                <td>
                    Tarun Chauhan
                </td>
                <td>
                    MPT 1stsem (PG)
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    85
                </td>
                <td>
                    Faireen Khanam
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    86
                </td>
                <td>
                    Rituraj Singh
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    87
                </td>
                <td>
                    Aanchal Chaudhry
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    88
                </td>
                <td>
                    RahmatIlahi
                </td>
                <td>
                    BPT 3rd Year UG
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    89
                </td>
                <td>
                    Shivangi Kanaujia
                </td>
                <td>
                    BSc (N) II Year
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    90
                </td>
                <td>
                    Priyanka Saini
                </td>
                <td>
                    BSc (N) II Year
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    91
                </td>
                <td>
                    Aanchal Sharma
                </td>
                <td>
                    BSc (N) I Year
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    92
                </td>
                <td>
                    Paavni Agarwal
                </td>
                <td>
                    BSc (N) I Year
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    93
                </td>
                <td>
                    Amisha Jasmine
                </td>
                <td>
                    BSc (N) I Year
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    94
                </td>
                <td>
                    Aryan Rajput
                </td>
                <td>
                    BSc (N) I Year
                </td>
                <td>
                    IPR activity coordinator
                </td>
            </tr>
            <tr>
                <td>
                    95
                </td>
                <td>
                    Harshit Sethi Jain
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    NIRF Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    96
                </td>
                <td>
                    Yugi Jain
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    Startup Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    97
                </td>
                <td>
                    Parkhi Jain
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    IPR Activity Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    98
                </td>
                <td>
                    Anubhav Nigam
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    Social&nbsp;media coordinator
                </td>
            </tr>
            <tr>
                <td>
                    99
                </td>
                <td>
                    Anu Sethia
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    Internship Coordinator
                </td>
            </tr>
            <tr>
                <td>
                    100
                </td>
                <td>
                    Pratham Varshney
                </td>
                <td>
                    BDS FINAL YEAR
                </td>
                <td>
                    ARIIA /NIRF Coordinator
                </td>
            </tr>
        </tbody>
    </table>
    <p><br role="presentation" data-uw-rm-sr=""><br role="presentation" data-uw-rm-sr=""></p>
</div>

                        </div>


                    </div>

                </div>
            </div>
        </div>


    </div>
</section><!-- #content end -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<?php
include 'footer.php';
?>