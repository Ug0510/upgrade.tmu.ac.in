<?php
include 'head.php';
?>
<div id="wrapper">

    <style>
        .person-details {
            /* border:2px solid #A07046; */
            border-top: none;
            padding-left: 1.5rem;
            margin-top: 0;
            line-height: 2.3rem;
            color: #001055;
            font-weight: 600;
            font-size: 1.2rem;
            text-transform: uppercase;
            float: left;
            letter-spacing: 1.2px;
            /* margin-top: -4rem; */
            padding-bottom: 2rem;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .person-details span {
            color: #FF7900;
            font-family: 'Poppins', sans-serif;
        }

        .person-quote {
            text-align: justify;
            font-size: 14px;
            /* padding-top: 2rem; */
        }


        .person-quote i {
            color: #555;
            font-size: 2.5rem;
            margin-right: 0rem;
            color: #FF7900;
            position: absolute;
            top: 0rem;
            left: 0rem;
        }


        .highlight {
            background-color: transparent;
            color: #FF7900;
            font-weight: 600;
        }

        @media screen and (max-width:786px) {
            .person-quote i {
                color: #555;
                font-size: 2.5rem;
                margin-right: 0rem;
                color: #FF7900;
                position: absolute;
                top: 0rem;
                left: 1rem;

            }
        }
    </style>


    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">



            <div class="container-fluid my-0  px-0 px-md-3">


                <div class="row">
                    <?php
                    include 'sidebar/about_tmu_sidebar.php';
                    ?>
                    <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
                        <div class="container">
                            <div class="row">
                                <h2 class=" text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Founder Vice <span class="d-block d-sm-inline">Chancellor Desk</span></h2>
                                <div class="col-md-4 text-center img-container">
                                    <img src="/assets/image/pvc.png" class="w-100" alt="">
                                </div>
                                <div class="col-md-8">
                                    <p class="person-quote px-4 px-md-5">
                                        The challenge before the educationists today is to channelize the intelligent, creative and enthusiastic youth of the country into the <span class="highlight">nation building process</span>. I strongly believe that right mix of education focusing on <span class="highlight">head, heart and hand</span> can substantially help in meeting this challenge. The need therefore is to <span class="highlight">reorient education</span> that concentrates on the development of <span class="highlight">right attitude, knowledge and skill set</span> of the students and that is what we are concentrating upon here. In recent past interactive meets with the industries at Kashipur- Rudrapur, Haridwar, Gajraula and Dehradun have opened up new opportunities for the students and faculty to understand the issues confronting the industries and their solutions, besides providing larger avenues for training and placement.<br>
                                        The facilities and the efforts to promote research activities in the university have started yielding satisfactory results whereby in the last one year <span class="highlight">210 quality research papers have been published</span>. We are further consolidating the research base by adding more research labs and collaborating with industries and academia.<br>
                                    </p>

                                </div>
                                <div class="col-md-12">
                                    <p class="col-12 person-quote px-4 pt-0 py-md-5 pb-md-2 text-justify mb-0">
                                        Similarly, a beginning has been made towards <span class="highlight">consultancy by taking projects from local industries</span> in association with Consultancy Development Centre, New Delhi. I am confident that these initiatives shall sufficiently groom the students to acquire the required competencies to smoothly sail through their journey of <span class="highlight">personal and professional life</span>.<br>
                                        My best wishes to all the aspiring students.
                                    <div class="person-details float-right">Prof. R. K. Mittal <br><span>(संस्थापक कुलपति)</span></div>
                                    </p>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>