<?php
include 'head.php';
?>

<link rel="stylesheet" href="./assets/css/tmu-testimonial.css">
<link rel="stylesheet" href="./assets/css/tmimt.css">
<link rel="stylesheet" href="./assets/css/college.css">


<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0  px-0 px-md-3">
            <div class="row">
                <?php
                    include 'sidebar/ctld_sidebar.php';
                    ?>
                <div class="col-12 col-sm-9 col-lg-10 mt-3 mt-sm-0 pt-2 pt-sm-5 ">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Students</span><span>Testimonial</span></h1>
                    <div class="container tmu-testimonial mt-5 mb-3">
                        <div class="row">
                            <div class="oc-item text-start col-md-4">
                                <div class="media ">
                                    <img src="https://www.tmu.ac.in/uploads/testimonial/Manali_Jain.jpg"
                                        class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="overview mb-3"><b>Manali Jain</b>, B.Tech. CSE</p>
                                            <p>I am obliged to the Centre of Teaching Learning & Development (CTLD) dept. of our university, who supported me while I was trying to find my way to be a professional. One time, I had lost my confidence, but Jasmine Ma'am (Trainer) helped me out, and I started gaining the confidence that helped me in my Technical Interview. There was a time I couldn't solve Maths; I feared my company interviews wouldn't go well due to it, but Tarun Sir taught me so well that I understood the concepts, and now I love to solve the Aptitude set. I am immensely thankful to all the CTLD Department members & the University for establishing such a department for the students. They helped me in all ways by providing online lectures, guidance with full dedication and personalized attention.
                                            </p>
                                        </div>
                                    </div>
                                    <button
                                        class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                        onclick="showTestimonialModal()">Read More <i
                                            class="bi bi-chevron-down ps-2"></i></button>

                                </div>
                            </div>

                            <div class="oc-item text-start col-md-4">
                                <div class="media">
                                    <img src="https://www.tmu.ac.in/uploads/testimonial/Kanika_Kapoor.jpg"
                                        class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="overview mb-3"><b>Ms. Kanika Kapoor </b>, BCA</p>
                                            <p>It was my immense luck and fortune to be a part of the CTLD department at Teerthanker Mahaveer University, where I have grown as a professional. The entire faculty and department leave no stone unturned to shape one's future. Tremendous respect, love, and devotion for the entire faculty members and department & the university. It's credible to say that even the pandemic couldn't stop our faculty members from providing us with a regular dose of studies through online classes. Regularly our aptitude tests were conducted, with proper & personalized feedback and soft skills sessions have really to help us all. I am very grateful to Mr. Tarun Sir, Mr. Abhinav Sir, Mr. Dilip Sir, Mr. Atul Sir for effectively and sincerely helping me grab at every level.</p>
                                        </div>
                                        <button
                                            class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                            onclick="showTestimonialModal()">Read More <i
                                                class="bi bi-chevron-down ps-2"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item text-start col-md-4">
                                <div class="media">
                                    <img src="https://www.tmu.ac.in/uploads/testimonial/Website_Photos_(Testimonial).jpg"
                                        class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="overview mb-3"><b>Aditya Jain</b>, B.Tech.</p>
                                            <p> My sincere appreciation & gratitude to TMU for the establishment of CTLD department in our college and all the staffs of ctld department for their efforts in imparting quality training. I am very grateful to Abhinav Shrivastava sir for improving my aptitude, verbal and logical reasoning area,Jasmine Stephen ma'am and Dilip Sir to enhance my Soft skills, communication skills, presentation skills, group discussion and resume writing. I really had a fantastic time and learnt so much along the way, which helped me to clear the exams and got able to placed in big companies like INNOLABZ and ACCENTURE.
                                            </p>
                                        </div>
                                        <button
                                            class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                            onclick="showTestimonialModal()">Read More <i
                                                class="bi bi-chevron-down ps-2"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Modal -->
                            <div id="testimonialModal" class="tmu-modal">
                                <div class="overlay" onclick="closeTestimonialModal()"></div>
                                <div class="tmu-modal-box">
                                    <div class="close-btn" onclick="closeTestimonialModal()">x</div>
                                    <div class="tmu-testimonial bg-light">
                                        <div class="media">
                                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik
                                                            Khan</b>, MBA</p>
                                                    <p class="testimonial-content">TMU, for me, is not just an MBA
                                                        destination, it's the crucible where my leadership skills
                                                        were forged. Beyond textbooks and case studies, TMU offered a
                                                        dynamic learning
                                                        environment where theories met practical challenges. It's a
                                                        journey where I honed the
                                                        skills that set me apart in the dynamic landscape of business
                                                        and management.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./assets/js/tmimt.js"></script>

<?php
include 'footer.php';
?>