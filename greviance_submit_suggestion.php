<?php
 include 'head.php';
?>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0  px-0">
            <div class="row">
                <?php
                include 'sidebar/greviances_sidebar.php';
                    ?>
                <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
                    <!-- Write content for right side here  -->
                    <div class="row mx-0">
                        <section id="contact" class="contact mb-5">
                            <div class="container" data-aos="fade-up">

                                <h1 class="tmu-text-primary tmu-page-heading"><span> Write </span><span> To Us</span>
                                </h1>
                                <div class="row gx-lg-0 gy-4 mt-2">
                                    <div class="col-lg-12">
                                        <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <div class="row gx-lg-0 gy-4 mt-2">
                                                <div class="col-lg-12">
                                                    <form action="forms/contact.php" method="post" role="form"
                                                        class="php-email-form">
                                                        <h3 class="text-left mt-1 mb-4 tmu-text-primary"><span>NEED MORE
                                                            </span><span> INFORMATION?</span></h3>
                                                        <div class="row">
                                                            <div class="col-md-4 form-group">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Your Name" required>
                                                            </div>
                                                            <div class="col-md-4 form-group mt-2 mt-md-0">
                                                                <input type="text" class="form-control"
                                                                    name="rollnumber" id="rollnumber"
                                                                    placeholder="Your Enrolment Number" required>
                                                            </div>

                                                            <div class="col-md-4 form-group mt-2 mt-md-0">
                                                                <input type="text" class="form-control" name="text"
                                                                    id="f-name" placeholder="Your Father's Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <input type="text" name="programme" class="form-control"
                                                                    id="programme" placeholder="Programme Name"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6 form-group mt-2 mt-md-0">
                                                                <input type="number" class="form-control"
                                                                    name="Semester" id="semester" placeholder="Semester"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <input type="email" name="programme"
                                                                    class="form-control" id="email"
                                                                    placeholder="Your Mail Id" required>
                                                            </div>
                                                            <div class="col-md-6 form-group mt-2 mt-md-0">
                                                                <input type="number" class="form-control" name="contact"
                                                                    id="contact" placeholder="Your Conatact Number"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <input type="text" class="form-control" name="c-name"
                                                                id="c-name" placeholder="College Name" required>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="subject" required>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <textarea class="form-control" name="message" rows="7"
                                                                placeholder="Message" required></textarea>
                                                        </div>
                                                        <div style="text-align: center;">
                                                            <button class="tmu-btn btn-1 py-2 mt-3">Send Us!</button>
                                                        </div>
                                                    </form>
                                                </div><!-- End Contact Form -->
                                            </div>
                                        </form>
                                    </div><!-- End Contact Form -->
                                </div>
                            </div>
                        </section><!-- End Contact Section -->
                    </div>
                </div>
            </div>
        </div>
    </div>        
</section><!-- #content end -->

<?php
 include 'footer.php';
?>