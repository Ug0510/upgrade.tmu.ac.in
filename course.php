<?php
include 'head.php';
?>


<style>
    .banner {
        display: flex;
        height: 380px;
        width: 100%;
        background-color: #dcebca;
    }

    .ban-text {
        /* padding: 30px;
  font-size: 20px;
  line-height: 8px; */
        margin-top: 0px;
        padding: 10px;
        padding-top: 120px;
    }

    .ban-img {
        text-align: right;
        z-index: 2;
    }
</style>

<style>
    /* Slideshow container */
    .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #ffffff;
        font-size: 20px;
        margin-bottom: 100px;
        margin-left: 50px;
        margin-top: 20px;
        padding: 20px;
        position: absolute;
        bottom: 8px;
        width: 40%;
        text-align: Left;
    }

    .text h1 {
        color: #ffffff;
        margin-left: 30px;
        font-size: 50px;
        font-weight: bold;
        line-height: 60px;
        text-decoration: none;
        text-align: left;
    }

    .text p {
        color: #ffffff;
        margin-left: 30px;
        font-size: 20px;
        line-height: 30px;
        text-decoration: none;
        text-align: left;
    }

    /* Caption text */
    .img-right {
        position: absolute;
        bottom: 0px;
        height: 100;
        width: 100%;
        text-align: Right;
    }

    .img-right img {
        width: 50%;
        height: 50%;
    }

    @media screen and (max-width: 1250px) {
        .text h1 {
            color: #ffffff;
            margin-left: 30px;
            font-size: 40px;
            font-weight: 700;
            line-height: 50px;
            text-decoration: none;
            text-align: left;
        }

        .text p {
            color: #ffffff;
            margin-left: 30px;
            font-size: 18px;
            line-height: 26px;
            text-decoration: none;
            text-align: left;
        }
    }

    @media screen and (max-width: 1105px) {
        .text h1 {
            color: #ffffff;
            margin-left: 25px;
            font-size: 35px;
            font-weight: 600;
            line-height: 40px;
            text-decoration: none;
            text-align: left;
        }

        .text p {
            color: #ffffff;
            margin-left: 25px;
            font-size: 16px;
            line-height: 20px;
            text-decoration: none;
            text-align: left;
        }
    }

    @media screen and (max-width: 975px) {
        .text h1 {
            color: #ffffff;
            margin-left: 25px;
            font-size: 30px;
            font-weight: 500;
            line-height: 40px;
            text-decoration: none;
            text-align: left;
        }

        .text p {
            color: #ffffff;
            margin-left: 25px;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
            text-align: left;
        }

        .text {
            color: #ffffff;
            font-size: 20px;
            margin-bottom: 20px;
            margin-left: 50px;
            margin-top: 20px;
            padding: 20px;
            position: absolute;
            bottom: 8px;
            width: 50%;
            text-align: Left;
        }
    }
</style>



<div class="container">
    <div class="sidebar-contact">
        <div class="toggle-side">
            <p class="vericaltext">Enquire now</p>
        </div>
        <h2>Contact Us</h2>
        <div class="scroll">
            <form>
                <input type="text" name="" placeholder="Name">
                <input type="email" name="" placeholder="Email">
                <input type="rel" name="" placeholder="Phone Number">
                <textarea placeholder="Message here.."></textarea>
                <input type="submit" name="" value="send">
            </form>
        </div>
    </div>
</div>

<!-- Slider
		============================================= -->

<!-- <div id="slider" class="slider-element min-vh-80 " style="width: 1523px; max-height: 85.1vh; background-image: url('demos/saas-2/images/hero4.jpg');">
            <div class="container d-none d-sm-block">
                <div class="row justify-content-between align-items-center align-items-xl-end">
                    <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                        <h1 class="display-4 fw-bolder ls-n-1" style="color: #ffffff;">Build Powerful Websites in a flash.</h1>
                        <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p>
                        <a href="#" class="button button px-lg-3 py-lg-2 rounded-pill m-0 mb-4">Download Brocher</a>
                        <a href="#" class="button button px-lg-3 py-lg-2 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply Now</a>
                    </div>
                    <div class="col-lg-6 col-xxl-7">
                        <img src="demos/saas-2/images/hero6.png" alt="..">
                    </div>
                </div>
            </div>
        </div> -->

<div id="slider" class="slideshow-container">
    <img class="d-none d-sm-block" src="demos/saas-2/images/hero4.jpg" style="width:100%">
    <div class="text d-none d-sm-block" style="color: #000000;">
        <h1>Master of Science in Data Science</h1>
        <p>Go the extra mile to become a data-driven leader.</p>
        <a href="#" class="tmu-btn btn-2">Download Brocher</a>
        <a href="#" class="tmu-btn btn-2">Apply Now</a>
    </div>
    <div class="img-right img d-none d-sm-block w-fit-content border border-primary">
        <img src="demos/saas-2/images/hero6.png" alt=".." class="border border-success">
    </div>
</div>
<div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url('demos/saas-2/images/hero7.jpg');">
    <div class="ban-text">
        <div class="col-xs-6 ban-text">
            <h1 class="display-4 fw-bolder ls-n-1" style="font-size: 20px; color: #ffffff;">Build Your Future with Data Science</h1>
            <a class="my-button tmu-btn btn-2">Download Brocher</a>
            <a class="my-button-blk tmu-btn btn-2">Apply Now</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary"><span>Fee Structure for </span><span > B.Tech CSE</span></h2>

        </div>
    </div>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>B.Tech</th>
                    <th>Fee Type</th>
                    <th>Year 1</th>
                    <th>Year 2</th>
                    <th>Year 3</th>
                    <th>Year 4</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-af"></span>
                        </span>
                        <span>Academic Fees</span>
                    </td>
                    <td>Tuition Fee</td>
                    <td>3,70,000</td>
                    <td>3,70,000</td>
                    <td>3,70,000</td>
                    <td>3,70,000</td>
                    <td>14,80,000</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-af"></span>
                        </span>
                        <span>&nbsp;</span>
                    </td>
                    <td>Registration Fees One Time (INR) (Non-Refundable)</td>
                    <td>45,000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>45,000</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-al"></span>
                        </span>
                        <span>&nbsp;</span>
                    </td>
                    <td>One Time Security Deposit (Refundable) (INR)</td>
                    <td>30,000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>30,000</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-dz"></span>
                        </span>
                        <span>Living expenses #1</span>
                    </td>
                    <td>Annual Hostel Charges (INR) (Twin Sharing) (incl. boarding, lodging and laundry)</td>
                    <td>1,80,000</td>
                    <td>1,80,000</td>
                    <td>1,80,000</td>
                    <td>1,80,000</td>
                    <td>7,20,000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>








<div class="table-container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
            <h2 class="tmu-text-primary"><span>B.Tech CSE </span> <span> Scholerships 2023 </span></h2>
        </div>
        
    </div>
    <p class="text-justify">The Teerthanker Mahaveer University Admission Scholarships
        is awarded for the first year of the Undergraduate program. Continuation of Admission
        Scholarship in subsequent years is subject to obtaining CGPA of 8 on a scale of 10, having no backlog
        and no discipline case being recorded
        against the student. The decision for this scholarship is based on the candidate's scores in qualifying
        examinations, i.e., 10+2 score or
        JEE Mains 2023 score or SAT Score. In case candidate is not meeting the Admission scholarship criteria,
        he/she may be eligible for Academic
        Scholarships as outlined in the next section.</p><br>
    <p>In case candidate is not meeting the Admission scholarship criteria, he/she may be eligible for Academic
        Scholarships as outlined in the next section.</p>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Scholarship Range</th>
                    <th>XII Score (Best of 3)*</th>
                    <th>JEE Mains 2023 Score</th>
                    <th>SAT Score</th>
                    <th>IB Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-af"></span>
                        </span>
                        <span>50%</span>
                    </td>
                    <td>>=95</td>
                    <td>>=90</td>
                    <td>>=1401</td>
                    <td>>=40</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-af"></span>
                        </span>
                        <span>35%</span>
                    </td>
                    <td>90-94.99</td>
                    <td>75-89.99</td>
                    <td>1301-1400</td>
                    <td>34-39</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-al"></span>
                        </span>
                        <span>20%;</span>
                    </td>
                    <td>85-89.99</td>
                    <td>70-74.99</td>
                    <td>1201-1300</td>
                    <td>32-33</td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <span class="fi fi-al"></span>
                        </span>
                        <span>10%;</span>
                    </td>
                    <td>80-84.99</td>
                    <td>65-69.99</td>
                    <td>1150-1200</td>
                    <td>30-31</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<!-- Content
		============================================= -->
<section id="content">

    <div class="container" style="margin-top: 12px; margin-bottom: 8px;">


        <div class="row align-items-lg-center min-vh-lg-100">
            <div class="col-lg-6">
                <img src="eligiblity.jpg" alt="Girl in a jacket">
            </div>

            <div class="col-lg-6 align-self-center">
                <h2 class="h1 fw-bold" style="font-size: 24px; font-weight: 500; line-height: 30px; color:#FF7900; margin-Bottom: 15px;margin-top: 20px;">B.Tech CSE<span style="color: #000000;"> Eligibility Criteria & Selection Process</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0">Eligiblity</h3>
                                <p>Passed XII standard from any recognised Education Board with Physics
                                    and Mathematics as compulsory subjects and obtained minimum 60%
                                    marks along with any other third subject OR IB Board with minimum
                                    score of 24</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0">Selection</h3>
                                <p>Selection will be based on the merit of Class XII Best of 3 subjects
                                    score (comprising of Physics and Maths as compulsory subjects and
                                    any other third subject with highest score)</p>
                                <p style="color: #FF7900; font-size: 15px; margin-top: 2px; font-weight: bold;">
                                    OR</p>
                                <p>on the JEE 2023 score</p>
                                <p style="color: #FF7900; font-size: 15px; margin: 0px; font-weight: bold;">
                                    OR</p>
                                <p>SAT score</p>
                                <p style="color: #FF7900; font-size: 15px; margin: 0px; font-weight: bold;">
                                    OR</p>
                                <p>CUET Percentile score</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section><!-- #content end -->


<div class="marquee" style="margin-bottom: 20px;">
    <section class="marquee-content">
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
        </div>
    </section>
    <section class="marquee-content">
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
        </div>
        <div class="marquee-block">
            <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
        </div>
    </section>
</div>





<div class="section my-0 bg-transparent">
    <div class="container" style="margin-top: 15px; margin-bottom: 12px;">
        <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
            <div class="col-lg-12 mt-lg-5.5">
                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
                        <h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7900; margin-bottom: 22px;">B.Tech CSE<span style="color: #000000;"> Frequently Asked Questions</h2>

                    </div>
                    <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
                        <h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 54px; color:#FF7900; margin-bottom: 7px; margin-top: -12px;">B.Tech CSE<span style="color: #000000;"> Frequently Asked Questions</h2>

                    </div>
                </div>
                <div class="px-lg-6 p-5 rounded" style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-icon">
                                <i class="toggle-closed bi-check-lg"></i>
                                <i class="toggle-open bi-check-lg"></i>
                            </div>
                            <div class="toggle-title fw-semibold">
                                What is the Master's in Data Science with TMU?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The Master's degree is an engaging yet rigorous 18-month online program designed specifically for working professionals to develop practical knowledge and skills, establish a professional network, and accelerate entry into data science careers.
                        </div>
                    </div>

                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-icon">
                                <i class="toggle-closed bi-credit-card"></i>
                                <i class="toggle-open bi-credit-card"></i>
                            </div>
                            <div class="toggle-title fw-semibold">
                                What should I expect from the Master's Degree in Data Science?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">Expect to carry out several industry-relevant projects simulated as per the actual workplace, making you a skilled data science professional at par with leading industry standards.</div>
                    </div>

                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-title fw-semibold">
                                What should I NOT expect from the Master's Degree in Data Science?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The program is NOT going to be easy. It will be requiring at least 15 hours of time commitment per week, applying new concepts and executing industry relevant projects.</div>
                    </div>

                    <div class="toggle toggle-lg py-4 mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-title fw-semibold">
                                Which topics are going to be covered as part of the program?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The program is designed for working professionals looking for a transition or growth into the data domain. Considering the requirements of different data roles in the industry, the curriculum is divided into five tracks. These five tracks will have a common curriculum running for approximately 5-6 months that everyone will go through after which they have to do one specialization course and a capstone project in the remaining 6-7 months. The topics that are going to be covered as a part of the common curriculum and each of the five specializations are as follows:Common Curriculum: Basics of SQL, Python, Statistics and EDA, Basic Machine Learning Models Deep Learning Specialization: Advanced Machine Learning, Neural NetworksNatural Language Processing Specialization: Advanced Machine Learning, Natural Language ProcessingBusiness Analytics: Advanced Machine Learning, Storytelling and Advanced Business Problem SolvingBusiness Intelligence/Data Analytics: Advanced SQL and NoSQL Databases, Storytelling with Advanced VisualizationData Engineering: Data Modelling and Data Warehousing, Building Data Pipelines, Data Streaming and Processing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



<?php
include 'footer.php';
?>