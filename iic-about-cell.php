<?php
include 'head.php';
?>
<style>
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

                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

                    <div class="row mx-0">
                        <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">About Innovation & <span>Startup Cell</span></h2>
                        <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">About Innovation & <span>Startup Cell</span></h2>

                        <!-- Hero Banner -->
                        <div class="container mb-3">
                            <div class="row">
                                <img src="https://www.tmu.ac.in/img/slides/startup-tip-over-innovatie.jpg" alt="">
                            </div>
                        </div>

                        <p>Teerthanker Mahaveer University's Institution Innovation Council (TMU-IIC) was established in October 2018 and reconstituted in November-December 2020, after which it became fully functional. It is initiated with the primary aim of converting the ideas of today into the enterprises of tomorrow.</p>
                        <p>TMU’s Institution Innovation Council has received the highest 4-star rating given to Higher Education Institutions in the National IIC ranking 2020-2021 (IIC-3.0) and 2021–2022 (IIC-4.0), making it among the top universities in the NRO region. TMU-IIC has a diversified constitution that includes industry experts, alumni, entrepreneurs, academicians, and healthcare professionals.</p>
                        <p>The Institution’s Innovation Council (IIC) is continuously and effectively disseminating information about Critical Thinking, Design Thinking, Prototype Development, Intellectual Property Rights (IPR) etc. The council encourages the creativity of the students as well as methodically promotes a culture of innovation and entrepreneurship in the university.</p>

                        <h3 class="mb-2 pb-0"><b>Vision: </b> </h3>
                        <p>To establish an innovation and entrepreneurship-based ecosystem that will help in transforming ideas into sustainable start-ups.</p>

                        <h3 class="mb-2 pb-0"><b>Major focus of IIC</b> </h3>
                        <ol class="m-ol-list ps-5">
                            <li>Provide a robust boost to innovation and entrepreneurship at the grass-root level.</li>
                            <li>Promote a culture of innovation and start-ups within the university.</li>
                            <li>Encourage faculty and students to participate in various activities related to innovation and entrepreneurship.</li>
                            <li>Assist students in ideation and project handling at the pre-incubation and incubation stages.</li>
                        </ol>

                        <h3 class="mb-2 pb-0"><b>Functions of IICs</b> </h3>
                        <ol class="m-ol-list ps-5">
                            <li>To promote innovation in the institution through multifarious modes of learning.</li>
                            <li>To organise various innovation and entrepreneurial-related activities in a time-bound fashion as prescribed by the MIC.</li>
                            <li>To schedule hackathons, demo day exhibitions, idea competitions, etc.</li>
                            <li>To develop innovative, entrepreneurial, and cognitive skills in students.</li>
                            <li>To create a network with various national & international entrepreneurs and entrepreneurial development organisations.</li>
                            <li>To establish a mentor pool for aspiring entrepreneurs.</li>
                            <li>To promote and encourage innovative projects of students which can further be converted into sustainable start-ups.</li>
                        </ol>

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