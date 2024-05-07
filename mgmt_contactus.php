<?php
include 'head.php';
?>

<style>
  .contact .php-email-form {
    width: 100%;
    height: 100%;
    background: #fff;
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 0 10px 10px 0;
  }

</style>

<section id="content">
    <div class="content-wrap py-0">

        <div class="container-fluid my-0  px-0 px-md-3">


            <div class="row">

                <?php
            include 'sidebar/management_sidebar.php';
            ?>

                <div class="col-12 col-md-10 col-lg-10 mt-3 mt-sm-0 pt-5 ">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <h1 class="tmu-text-primary tmu-page-heading"><span>Contact</span><span> Us</span></h1>



                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <h3 class="mb-2 pb-0" style="color: #001055;">The College</h3>
                                        <p>
                                            <i class="fa-solid fa-location-dot"></i> &nbsp<b>Location:</b> Opp.
                                            Parshvanath Plaza, Delhi
                                            Road, Moradabad - 244001 (Uttar Pradesh)<br>
                                            <i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b>
                                            principal.management@tmu.ac.in<br>
                                            <i class="fa-solid fa-phone"></i> &nbsp<b>Call:</b> (+91) 591-2487111 <br>
                                            (+91) 591-2487222
                                            <br> (+91) 591-2487333 <br>
                                            <i class="fa-solid fa-fax"></i> &nbsp<b>Fax:</b> (+91) 591-2487444, <br>
                                            (+91) 591-2487244
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <h3 class="mb-2 pb-0" style="color: #001055;">Get in Touch</h3>
                                        <h4 class="pb-0 mb-0"><b></b></h4>
                                        <p>For any query related to TMIMT College of Management, you may drop message or
                                            contact the
                                            officials at college.</p>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <h3 class="mb-2 pb-0" style="color: #001055;">College Hours</h3>
                                        <i class="fa-solid fa-calendar-days"></i>&nbsp<b>Days :</b>Monday - Friday 9am
                                        to 5pm,
                                        Saturday - 9am to 2pm,<br> Sunday - Closed
                                    </div>
                                </div>
                                <div class="row gx-lg-0 gy-4 mt-3">

                                    <div class="col-lg-12">
                                        <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <h3 class="text-left mt-1 mb-4" style="color:#001055; "> NEED MORE
                                                INFORMATION?</h3>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Your Name" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="text" class="form-control" name="contact" id="contact"
                                                    placeholder="Enter your Number" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="message" rows="7"
                                                    placeholder="Message" required></textarea>
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
    </div>
</section><!-- #content end -->
<br /><br />
<?php
include 'footer.php';
?>