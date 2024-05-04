    
    <?php
 include 'head.php';
?>

<style>
@media (max-width: 992px) {
	.blocks-faqs-3 .sticky-section { position: relative !important; }
}

/* Make accordion width 100% */
.blocks-faqs-3 .faqs .toggle {
width: 100%;
}

/* Ensure accordion button spans full width */
.blocks-faqs-3 .faqs .toggle {
width: 100%;
text-align: left; /* Align text to the left */
}

.blocks-faqs-3 .faqs .toggle {
background-color: #ffffff;
border-radius: 3px;
box-shadow: 0 2px 3px rgba(0, 0, 0, 0.085);
width: 100%!important; /* Set width to 100% */
margin: 0 auto; /* Center horizontally */
}

.blocks-faqs-3 .faqs .toggle-header {
padding: 15px 20px;
margin: 0;
background-color:#001055;
color:#fff;
font-size:18px;
letter-spacing:1px;
}

.blocks-faqs-3 .faqs .toggle-content {
border-top: 1px solid #000;
padding: 20px 25px;
}

@media (max-width: 991.98px) {
.blocks-faqs-3 .faqs{
    width: 100%;
  }
}

h3{
margin:0 0 2px 0;	
}

.font-body {
  font-size:22px;
  color:#001055;
  font-weight: 700;
}

p {
  margin-bottom:15px!important; 
}

li a{
    color:#001055;
    font-weight:bold;
}
li a:hover{
 color:#FF7900!important;
 font-weight:bold;
}
.centered-icon {
    text-align: center;
}
.text-middle{
color:#001055;
text-transform: capitalize; 
font-weight:700!important;
font-size:2.4vmax;
margin:0 0 10px 0;
text-align: center;
}

.vh-75 {
height: 0vh !important;
}

.container-fluid {
padding-right: 40px;
padding-left: 40px;
}

.m-ol-list{
text-align:justify;

}

.m-ol-list li::marker{
    font-size: 1.6vmax;
    color:#FF7900;
    font-weight: 700;
    text-align:justify;
 }
.m-ol-list b{
    /* color:#FF7900; */
    color:#001055;
    font-size: 1.4vmax;
 }

</style>


<?php
include 'sidebar/research_sidebar.php';
?>

        <div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Instructions for Applying <span
                class="d-block d-sm-inline"> in Ph.D. Programme</span></h2>

                <ol class="ps-5 m-ol-list">
        <li>Download the <a href="https://www.tmu.ac.in/pdf/research/phd_application_form.pdf" target="_blank">Application Form</a> for the Ph.D programme</li>
        <li>Take a print-out of the application form downloaded as above and fill in complete details.</li>
        <li>Paste a recent passport size colour photograph in the space provided for in the application form and sign it across. Also attach another copy of the photograph bearing your name, father’s name and subject of PhD on the backside of the photograph.</li>
        <li>Attach self attested copies of all your educational qualification certificates starting matriculation.</li>
        <li>If you are seeking relaxation in the minimum eligibility criteria, a self attested copy of supporting certificate issued by a competent authority must be attached. (Please refer to <a href="https://www.tmu.ac.in/tmu/phd-ordinance-2017-revised" target="_blank">Ph.D ordinance</a> of University for details).</li>
        <li>Attach self attested copies all your experience certificates.</li>
        <li>Attach a ‘No Objection Certificate’ from your present employer, if employed.</li>
        <li>Attach a copy of your latest CV with a recent passport size colour photograph pasted on it and signed across.</li>
        <li>Mention the proposed topic of research and also attach a brief proposal of research work.</li>
        <li>Attach a non refundable processing fee of Rs.2000/- through a demand draft drawn in favour of Teerthanker Mahaveer University and payable at Moradabad.</li>
        <li>Please do mention your mobile no. and e-mail id in the space provided for in the application, as most of the communication shall be done through e-mail and/or SMS.</li>
        <li>Send the completed application form to:
            <ul class="">
                <li style="list-style-type:none!important;"><strong>Joint Registrar<br />Administrative Block<br />Teerthanker Mahaveer University<br />Delhi Road, Moradabad - 244001<br />Uttar Pradesh</strong></li>
            </ul>
        </li>
        <li style="text-align:justify">Superscribe the envelope containing the completed application form with the words <strong style="font-size: 16px; ">"Application Form for Ph.D. Programme"</strong>.</li>
    </ol>
    <div class="card">
        <div class="card-body">
        <span style="color:#E74C3C; font-weight:bold; fotn-size: 22px;" class="mb-2" >Note:</span><br />
        <ol style="list-style-type:lower-roman">
            <li style="text-align:justify">Mere fulfillment of the minimum eligibility criteria does not entitle a candidate to registration in the Ph.D. programme. The decision of the Academic Council of the university shall be final in this context.</li>
            <li style="text-align:justify">Please read the Ph.D. Ordinance of the university carefully before applying. The ordinance is available on the university’s website.</li>
        </ol>
        </div>
    </div>

                  <!-- container ends -->
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
  </div>
</section><!-- #content end -->

	<br /><br />
    <script>
    // JavaScript to expand the FAQ section by default
    document.addEventListener('DOMContentLoaded', function() {
        var toggleHeader = document.querySelector('.toggle-header');
        var toggleContent = document.querySelector('.toggle-content');

        toggleHeader.classList.add('active');
        toggleContent.style.display = 'block';
    });
</script>


<?php
 include 'footer.php';
?>

    