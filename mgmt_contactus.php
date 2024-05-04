<?php
include 'head.php';
?>

<style>
  h3 {
    margin: 0 0 2px 0;
  }

  .font-body {
    font-size: 22px;
    color: #001055;
    font-weight: 700;
  }

  p {
    margin-bottom: 15px !important;
  }

  .table> :not(caption)>*>* {
    padding: 0.5rem !important;
    color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
    background-color: var(--bs-table-bg);
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
  }

  .table {
    width: 1000px;
    text-align: center;
  }

  .text-middle {
    color: #001055;
    text-transform: capitalize;
    font-weight: 700 !important;
    font-size: 2.4vmax;
    margin: 0 0 10px 0;
    text-align: center;
  }

  .vh-75 {
    height: 0vh !important;
  }
</style>

<style>
  .contact .info-container {
    background-color: var(--color-primary);
    height: 100%;
    padding: 20px;
    border-radius: 10px 0 0 10px;
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
  }

  .contact .info-item {
    width: 100%;
    background-color: #FF7A00;
    color: #fff;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 10px;
    color: #fff;
  }

  .contact .info-item:last-child {
    margin-bottom: 0;
  }

  .contact .info-item i {
    font-size: 20px;
    color: #fff;
    float: left;
    width: 44px;
    height: 44px;
    background-color: rgba(255, 255, 255, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
    margin-right: 15px;
  }

  .contact .info-item h4 {
    padding: 0;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
  }

  .contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
  }

  .contact .info-item:hover i {
    background: #fff;
    color: #000;
  }

  .contact .php-email-form {
    width: 100%;
    height: 100%;
    background: #fff;
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 0 10px 10px 0;
  }

  .contact .php-email-form .form-group {
    padding-bottom: 8px;
  }

  .contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #df1529;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form .error-message br+br {
    margin-top: 25px;
  }

  .contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #059652;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }

  .contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #059652;
    border-top-color: #fff;
    animation: animate-loading 1s linear infinite;
  }

  .contact .php-email-form input,
  .contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
  }

  .contact .php-email-form input[type=text],
  .contact .php-email-form input[type=email],
  .contact .php-email-form textarea {
    padding: 12px 15px;
  }

  .contact .php-email-form input[type=text]:focus,
  .contact .php-email-form input[type=email]:focus,
  .contact .php-email-form textarea:focus {
    border-color: var(--color-primary);
  }

  .contact .php-email-form textarea {
    padding: 10px 12px;
  }

  .contact .php-email-form button[type=submit] {
    background: #001055;
    border: 0;
    padding: 14px 45px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }

  .contact .php-email-form button[type=submit]:hover {
    background: #ff7A00;
  }

  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>

<style>
        .tmu-btn {
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
        }

        .tmu-btn.btn-1 {
            border: 1px solid #FF7900;
            background-color: #FF7900;
            color: white;
        }

        .tmu-btn.btn-2 {
            border: 1px solid #001055;
            background-color: transparent;
            color: #001055;
        }

        .tmu-btn:hover {
            cursor: pointer;
        }

        .tmu-btn.btn-1:hover,
        .tmu-btn.btn-2:hover {
            border: 1px solid #FF7900;
            background-color: white;
            /* background-color: #dd6900;
        border:1px solid #dd6900; */
            color: #FF7900;
        }

        .tmu-btn.btn-2:hover {
            border: 1px solid #001055;
            background-color: #0010551e;
            color: #001055;
            background-color: #001055;
            color: white;
        }

        .tmu-btn.btn-3:hover {
            box-shadow: 3px 3px 7px 2px rgba(0, 0, 0, 0.1);
        }
    </style>

<?php
 include 'sidebar/management_sidebar.php';
?>
				<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <h2 class="text-center" style="color:#001055;
			text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Contact<span class="d-block d-sm-inline"> Us</span></h2>

              <div class="container">
                <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <h3 class="mb-2 pb-0" style="color: #001055;"><b>The College</b></h3>
                    <p>
                    <i class="fa-solid fa-location-dot"></i> &nbsp<b>Location:</b> Opp. Parshvanath Plaza, Delhi Road, Moradabad - 244001 (Uttar Pradesh)<br>
                    <i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b> principal.management@tmu.ac.in<br>
                    <i class="fa-solid fa-phone"></i> &nbsp<b>Call:</b> (+91) 591-2487111 <br> (+91) 591-2487222 <br> (+91) 591-2487333 <br>
                    <i class="fa-solid fa-fax"></i> &nbsp<b>Fax:</b> (+91) 591-2487444, <br> (+91) 591-2487244               
                    </p>
                    </div>
                <div class="col-lg-4 col-sm-6">
                  <h3 class="mb-2 pb-0" style="color: #001055;"><b>Get in Touch</b></h3>
                  <h4 class="pb-0 mb-0"><b></b></h4>
                  <p>For any query related to TMIMT College of Management, you may drop message or contact the officials at college.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h3 class="mb-2 pb-0" style="color: #001055;"><b>College Hours</b></h3>
                    <i class="fa-solid fa-calendar-days"></i>&nbsp<b>Days :</b>Monday - Friday 9am to 5pm,
                    Saturday - 9am to 2pm,<br> Sunday - Closed
                </div>
              </div>
              <div class="row gx-lg-0 gy-4 mt-3">

                <div class="col-lg-12">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <h2 class="text-left mt-1 mb-4" style="color:#001055;text-transform: capitalize; font-weight:700!important; font-size:1.4vmax">NEED MORE INFORMATION?</h2>

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