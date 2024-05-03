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



.fa-solid.fa-file-pdf:hover {
color: #001055;
justify-content:center;
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
padding-right: 15px;
padding-left: 40px;
}

.m-ol-list{
text-align:justify;

}

</style>


<?php
include 'sidebar/research_sidebar.php';
?>

        <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Semester Progress Report <span
                class="d-block d-sm-inline"> of Research Work</span></h2>

                <object data="https://www.tmu.ac.in/pdf/research/semester_progress_report_proforma.pdf" type="application/pdf" width="100%" height="1100px">
							<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
							<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/semester_progress_report_proforma.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
						</object>

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
