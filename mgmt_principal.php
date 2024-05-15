<?php
include 'head.php';
?>


<style>
    .component {
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        width: 750px;
        margin: 0 auto;
        padding: 3rem;
    }

    .component blockquote.quote {
        position: relative;
        text-align: center;
        padding: 1rem 1.2rem;
        width: 80%;
        /* create space for the quotes */
        color: #484748;
        margin: 1rem auto 2rem;
    }

    .component blockquote.EN {
        background:
            linear-gradient(to right, #039be5 4px, transparent 4px) 0 100%,
            linear-gradient(to left, #039be5 4px, transparent 4px) 100% 0,
            linear-gradient(to bottom, #039be5 4px, transparent 4px) 100% 0,
            linear-gradient(to top, #039be5 4px, transparent 4px) 0 100%;
        background-repeat: no-repeat;
        background-size: 20px 20px;
    }

    .component blockquote.DE {
        background:
            linear-gradient(to right, #039be5 4px, transparent 4px) 0% 0%,
            linear-gradient(to bottom, #039be5 4px, transparent 4px) 0% 0%,
            linear-gradient(to left, #039be5 4px, transparent 4px) 100% 100%,
            linear-gradient(to top, #039be5 4px, transparent 4px) 100% 100%;
        background-repeat: no-repeat;
        background-size: 20px 20px;
    }


    /* -- create the quotation marks -- */
    .component blockquote.quote:before,
    .component blockquote.quote:after {
        font-family: FontAwesome;
        position: absolute;
        color: #039be5;
        font-size: 34px;
    }

    .component blockquote.EN:before {
        content: "\f10d";
        top: -12px;
        margin-right: -20px;
        right: 100%;
    }

    .component blockquote.EN:after {
        content: "\f10e";
        margin-left: -20px;
        left: 100%;
        top: auto;
        bottom: -20px;
    }

    .component blockquote.DE:before {
        content: "\f10e";
        margin-right: -20px;
        bottom: -20px;
        right: 100%;
    }

    .component blockquote.DE:after {
        content: "\f10d";
        margin-left: -20px;
        left: 100%;
        top: -20px;
        bottom: auto;
    }

    .zitat1 {
        position: relative;
        font-family: 'poppins';
        font-size: 24px;
        line-height: 1.5em;
    }

    .zitat1 cite {
        font-family: 'poppins';
        font-size: 0.6em;
        font-weight: 700;
        color: #001055;
        float: right;
    }

    .zitat1 cite:before {
        content: '\2015' ' ';
    }

    .zitat1:after {
        content: '\201d';
        position: absolute;
        top: 0.28em;
        right: 0px;
        font-size: 6em;
        font-style: italic;
        color: #bdbec0;
        z-index: -1;
    }
</style>
<!-- Content
    ============================================= -->


<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0  px-0 px-md-3">
            <div class="row">
                <?php
                include 'sidebar/management_sidebar.php';
                ?>
                <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important;">From the Desk <span> of Principal</span></h2>

                            <div class="col-md-4 text-center img-container">

                                <img src="https://www.tmu.ac.in/img/tmu/administration/principal/management_principal_nivo.jpg" class="w-100" alt="">
                            </div>
                            <div class="col-md-8">
                                <blockquote class="zitat1">
                                    " Management is doing things right; leadership is doing the right things"
                                    <cite>Peter Drucker</cite>
                                </blockquote>
                                <p>Welcome to Teerthanker Mahaveer Institute of Management and Technology (TMIMT). TMIMT is a leader in Management and Commerce Education in UP West region in India.</p>
                                <p>We offer many programmes and courses which cater to the needs of the ever increasing demand of qualified Graduates and Post Graduates. By virtue of its ethically trained manpower, TMIMT has established a niche for itself in the Northern Zone of India.</p>
                                <p>We offer a variety of courses in management, finance, marketing, international business and shipping and logistics at under graduate and post graduate level and also Ph.D. programmes with many specializations. The various programmes offered by the college are tailor made to suit the human resources requirements in banks, public administration, private sector, financial institutions and insurance companies.</p>
                                <p>We are looking at introducing additional courses to suit the needs of the industry. All our courses are taught by very experienced and well qualified Faculty.</p>
                                <p>The college seeks to advance knowledge through high quality teaching and research. The college offers ground-breaking training in management and commerce. It prepares the students for future – be it career as an entrepreneur, a white collar professional in MNC or the public sector.</p>
                                <p>We continually strive to address global aspects of the disciplines we teach making our courses particularly striking to domestic and overseas students in the context of increasing economic and financial integration. We seek to provide a gratifying, enjoyable and collegiate work environment that enables members of students and staffs to develop their career and fulfill their potential. The teaching staff in our college is passionate about academic and is fervent about the teaching programme.</p>

                            </div>
                            <div class="col-md-12">
                                <p class="col-12 person-quote px-0 pt-0 py-md-2 pb-md-2 text-justify">Here at TMIMT, we understand the need of holistic development in the era of conflicting personal values and crushing competition of the market. Keeping that in mind, we make it a point to train students for such situations and circumstances in life where in they stand tall and put forward their best both in terms of effective decision making and resilience. We put family values and cultural awareness at priority so as to make students connected to their roots and stay ahead in times of turmoil.</p>
                                <p>Here at TMIMT, we understand the need of holistic development in the era of conflicting personal values and crushing competition of the market. Keeping that in mind, we make it a point to train students for such situations and circumstances in life where in they stand tall and put forward their best both in terms of effective decision making and resilience. We put family values and cultural awareness at priority so as to make students connected to their roots and stay ahead in times of turmoil.</p>
                                <p>The TMIMT family wishes the aspiring students an enjoyable and rewarding academic year ahead. We look forward to work as a dedicated and disciplined team.</p>
                                <p>We hope you will accept the challenge of becoming a student of the college. Your only limitation will be your imagination. We hope you will make the most of your college years in TMIMT through your hard work and eagerness to grasp the opportunities. The college can get you where you want to be, whether you are a first time freshman, an existing student, or a working professional.</p>
                                <div class="person-details">Prof. (Dr.) Vipin Jain <br><span>Director / Principal</span>
                                    <p style="color:#000;">Ph.D, FCMA, MBA(Gold Medalist), LLB, CS(Executive) <br> Department of Management Studies<br> Department of Commerce<br> Teerthanker Mahaveer Institute of Management and Technology (TMIMT) <br><i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b>principal.management@tmu.ac.in <br><i class="fa-solid fa-phone"></i> &nbsp<b>Telephone:</b> 0591-2487111<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include 'footer.php'; ?>