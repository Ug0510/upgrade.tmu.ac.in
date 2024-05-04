<?php
include 'head.php';
?>

<link rel="stylesheet" href="ccsit_style.css">
<?php
 include 'sidebar/ccsit_sidebar.php';
?>
				<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <h2 class="text-center" style="color:#001055;
			text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Contact<span class="d-block d-sm-inline"> Us</span></h2>

              <div class="container">
                        <div class="row">
                            <h3 class="mb-2 pb-0" style="color: #001055;"><b>Get In Touch</b></h3>
                            <p>For any query related to Innovation & Startup Cell, you may drop message or contact the officials at college.</p>
                            <h3 class="mb-2 pb-0" style="color: #001055"><b>The College</b></h3>
                            <p>
                              <i class="fa-solid fa-location-dot"></i> &nbsp<b>Location:</b> Delhi Road, Moradabad - 244001 (Uttar Pradesh)<br>
                              <i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b> principal.ccsit@tmu.ac.in<br>
                              <i class="fa-solid fa-phone"></i> &nbsp<b>Call:</b> (+91) 591-2476832 <br>
                            </p>
                            <h3 class="mb-2 pb-0" style="color: #001055;"><b>College Hours</b></h3>
                            <p><i class="fa-solid fa-calendar-days"></i>&nbsp<b>Days:</b> Monday - Friday 9am to 5pm,
                              <br><span style="margin-left:3.988rem;">Saturday - 9am to 2pm</span>,<br><span style="margin-left:3.988rem;"> Sunday - Closed</span></p>
                            </p>
                        </div>
                    </div>

              <div class="row gx-lg-0 gy-4 mt-0">
                <div class="col-lg-12">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <h2 class="text-left mt-1 mb-4" style="color:#001055;text-transform: capitalize; font-weight:700!important; font-size:1.4vmax; font-family:'poppins';">NEED MORE INFORMATION?</h2>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your Number" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
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
<br /><br />
<?php
include 'footer.php';
?>