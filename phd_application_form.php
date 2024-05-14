<?php
include 'head.php';
?>
<link rel="stylesheet" href="demos/headphones/headphones.css">

<style>

  .custom-btn {
    transition: all 0.3s ease;
  }

  .custom-btn:hover {
    transform: scale(1.1);
    background-color: #001055 !important;
    color: #fff;
  }

  .modal-header {
    background-color: #FF7900;
    color: #fff !important;
    font-family: Arial, sans-serif;
    font-size: 20px;
    font-weight: bold;
    padding: 15px;
  }

  .modal-title {
    font-size: 18px;
    font-weight: bold;
    letter-spacing: 1px;
    font-family: 'poppins';
    color: #fff;
  }


  .modal-header .btn-close {
    padding: calc(var(--bs-modal-header-padding-y)* 0.5) calc(var(--bs-modal-header-padding-x)* 0.5);
    margin: calc(-0.5* var(--bs-modal-header-padding-y)) calc(-0.5* var(--bs-modal-header-padding-x)) calc(-0.5* var(--bs-modal-header-padding-y)) auto;
    color: #fff !important;
  }

  .btn-close {
    --bs-btn-close-color: #fff;
    --bs-btn-close-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e);
    --bs-btn-close-opacity: 0.5;
    --bs-btn-close-hover-opacity: 0.75;
    --bs-btn-close-focus-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-btn-close-focus-opacity: 1;
    --bs-btn-close-disabled-opacity: 0.25;
    --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: 0.25em 0.25em;
    color: var(--bs-btn-close-color);
    background: transparent var(--bs-btn-close-bg) center / 1em auto no-repeat;
    border: 0;
    border-radius: 0.375rem;
    opacity: var(--bs-btn-close-opacity);
  }

  filter: invert(100%) sepia(100%) saturate(12%) hue-rotate(213deg) brightness(102%) contrast(105%);
</style>

<?php
include 'sidebar/research_sidebar.php';
?>

<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">

  <div class="row mx-0">
    <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Application Form for <span class="d-block d-sm-inline"> Admission in Ph.D. Programme</span></h2>


    <!-- Information Section
					============================================= -->
    <div class="row mt-2 text-center g-5 mb-3 m-0 p-0">
      <div class="section-contact col-lg-4 col-md-6">
        <div class=" rounded-6">
          <i class="i-plain i-large mx-auto mb-4 icon-featured fa fa-keyboard-o"></i>
          <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">APPLY ONLINE</h3>
          <span>Apply Online, Upload Documents, Pay Online</span><br>
          <a href="https://admissions.tmu.ac.in/" class="btn btn-secondary btn-sm custom-btn me-2 mt-2" style="background-color:#FF7900;"><span>Apply Online</span></a>
        </div>
      </div>

      <div class="section-contact col-lg-4 col-md-6">
        <div class=" rounded-6">
          <i class="i-plain i-large mx-auto mb-4 uil-download-alt"></i>
          <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">Download Form</h3>
          <span>Download Application Form for offline submission</span><br>
          <a href="#" class="btn btn-secondary btn-sm custom-btn me-2 mt-2" style="background-color:#FF7900;" data-bs-toggle="modal" data-bs-target="#contactUsModal"><span>Download Form</span></a>
        </div>
      </div>

      <div class="section-contact col-lg-4 col-md-6">
        <div class=" rounded-6">
          <i class="i-plain i-large mx-auto mb-4 icon-featured fa fa-inr"></i>
          <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">BUY APPLICATION PACK</h3>
          <span>Buy application pack from Campus/Information Centers</span><br>
          <a href="#" class="btn btn-secondary btn-sm custom-btn me-2 mt-2" style="background-color:#FF7900;" data-bs-toggle="modal" data-bs-target="#signUpModal"><span>BUY APPLICATION PACK</span></a>
        </div>
      </div>

      <div class="section-contact col-lg-4 col-md-6">
        <div class=" rounded-6">
          <i class="i-plain i-large mx-auto mb-4 fa fa-undo"></i>
          <h3 class="mb-2" style="font-size:16px; font-family:'poppins';">Application Form Fee Refund Policy</h3>
          <br>
          <a href="#" class="btn btn-secondary btn-sm custom-btn me-2 mt-2" style="background-color:#FF7900;" data-bs-toggle="modal" data-bs-target="#refundPolicyModal"><span>Refund Policy</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9">
        <div class="modal fade" id="refundPolicyModal" tabindex="-1" role="dialog" aria-labelledby="refundPolicyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="refundPolicyModalLabel">Application Form Fee Refund Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Your refund policy content goes here -->
                <p class="mb-0">The downloaded form should be duly filled-up and can be forwarded to Director (Admissions), Teerthanker Mahaveer University, Delhi Road, Moradabad (U.P.) - 244 001 alongwith a demand draft of Rs 1,000/- favoring 'Teerthanker Mahaveer University', payable at Moradabad.
                  <br><br><strong>Note:</strong> For online payments, it is important for candidates to note the transaction number for future reference and request for any type of Refund, for whatsoever reason, will be at the sole discretion of the University.
                </p>
              </div>
              <div class="modal-footer">
                <!-- Optional: Add buttons in the footer -->
                <button type="button" class="btn btn-secondary btn-center" style="background-color:#FF7900;" data-bs-dismiss="modal">No Thanks!</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade text-start bs-example-modal-sm" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="contactUsModalLabel">Download Form</h4>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <p class="mb-0">The downloaded form should be duly filled-up and can be forwarded to Joint Registrar, Administrative Block, Teerthanker Mahaveer University, Delhi Road, Moradabad (U.P.) - 244 001 alongwith a demand draft of <b style="color:#FF7900;">2,000/-</b> favoring 'Teerthanker Mahaveer University', payable at Moradabad.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary custom-btn" style="background-color:#FF7900;" data-bs-dismiss="modal">Close</button>
                <a href="https://www.tmu.ac.in/pdf/research/phd_application_form.pdf"><button type="button" class="btn btn-secondary custom-btn" style="background-color:#FF7900;">Get it <i class="uil-download-alt"></i></button></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Small modal -->
        <div class="modal fade text-start bs-example-modal-sm" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="signUpModalLabel">Buy Application Form</h4>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
              </div>
              <div class="modal-body">
                <p class="mb-0">Duly fill-in the required details completely, affix recent passport size photo and submit along with photocopy of Class-X mark sheet at following centres.</p>
                <b>University Campus</b><br>
                Delhi Road, Moradabad - 244001 (Uttar Pradesh)
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary custom-btn" style="background-color:#FF7900;" data-bs-dismiss="modal">Close</button>
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
</section><!-- #content end -->

<br /><br />


<?php
include 'footer.php';
?>