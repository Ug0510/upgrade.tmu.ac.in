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

.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
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
padding-right: 20px;
padding-left: 20px;
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
                          font-weight:700!important; font-size:2.4vmax">Admission Notice for <span
                class="d-block d-sm-inline"> Ph.D. Programme</span></h2>

               <div class="col-md-12">
					    <img class="card-img-top" src="	https://www.tmu.ac.in/pdf/research/Ph.D_ADVT_July_2024.jpg" alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
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
