<?php
include 'head.php';
?>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0 px-0">
            <div class="row">
                <?php
                    include 'sidebar/ccsit_sidebar.php';
                ?>
                <div class="col-12 col-md-10 col-lg-10 mt-3 mt-sm-0 pt-5 ">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <h1 class="tmu-text-primary tmu-page-heading"><span> Contact </span><span>Us</span></h1>
                            <div class="container">
                                <div class="row">
                                    <h3 class="mb-2 pb-0 tmu-text-primary"><span>Get In </span><span>Touch</span></h3>
                                    <p class="mb-3">For any query related to Faculty of Engineering, you may drop message or contact the officials at college.</p>
                                    <h3 class="mb-2 pb-0 tmu-text-primary"><span>The </span><span>College</span></h3>
                                    <p class="mb-3">
                                        <i class="fa-solid fa-location-dot"></i> &nbsp;<b>Location:</b> Delhi Road,
                                        Moradabad - 244001 (Uttar Pradesh)<br>
                                        <i class="fa-solid fa-envelope"></i> &nbsp;<b>Email:</b>
                                        <a href="mailto:principal.engineering@tmu.ac.in">dir.engg@tmu.ac.in</span><br><span class="ms-5"><a href="mailto:principal.engineering@tmu.ac.in">principal.engineering@tmu.ac.in</a></span><br>
                                        <i class="fa-solid fa-phone"></i> &nbsp;<b>Call:</b> +91- 9639266555 <br>
                                    </p>
                                    <h3 class="mb-2 pb-0 tmu-text-primary"><span>College </span><span> Hours</span></h3>
                                    <p class="mb-3"><i class="fa-solid fa-calendar-days"></i>&nbsp;<b>Days:</b> Monday - Friday 9am to
                                        5pm, <br><span class="ms-5">Saturday - 9am to 2pm</span>,<br><span
                                          class="ms-5"> Sunday - Closed</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row gx-lg-0 gy-4 mt-0">
                                <div class="col-lg-12">
                                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <h3 class="tmu-text-primary mt-1 mb-4"><span> NEED MORE </span><span> INFORMATION?</span></h3>
                                      <div class="row">
                                        <div class="col-md-6 form-group">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                          <div class="col-md-6 form-group mt-2 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                          </div>
                                      </div>
                                        <div class="form-group mt-1">
                                                <input type="text" class="form-control" name="contact" id="contact"  placeholder="Enter your Number" required>
                                        </div>
                                        <div class="form-group mt-1">
                                          <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                                        </div>
                                        <div style="text-align: center;">
                                            <button class="tmu-btn btn-1 py-2 mt-4">Send Us!</button>
                                        </div>
                                  </form>
                              </div><!-- End Contact Form -->
                            </div>
                        </div>
                    </section><!-- End Contact Section -->
                </div>
            </div>
        </div>
</section><!-- #content end -->
<?php
include 'footer.php';
?>