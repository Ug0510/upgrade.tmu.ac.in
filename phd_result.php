<?php
 include 'head.php';
?>

<style>

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
</style>

<style>
    /*horizontal tabs start*/
    
    .nav-tabs {
        background-color: #001055; /* White background for tabs */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow effect */
        border-radius: 8px; /* Rounded corners */
    }
    .nav-tabs .nav-item .nav-link {
        color: #ffffff; /* Dark blue text color */
        border: none; /* Remove borders */
        border-radius: 8px 8px 0 0; /* Rounded corners for top */
    }
    .nav-tabs .nav-item .nav-link.active {
        color: #ffffff; /* White text color for active tab */
        background-color: #ff7a00; /* Dark blue background for active tab */
    }
    .tab-content {
        background-color: #ffffff; /* White background for tab content */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow effect */
        border-radius: 0 0 8px 8px; /* Rounded corners for bottom */
        padding: 20px; /* Add some padding */
        margin-top: -1px; /* Offset border-top of tab content */
    }
    
    /*horizontal tabs end*/
</style>



<?php
include 'sidebar/research_sidebar.php';
?>


        <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">  Result of <span
                class="d-block d-sm-inline"> Ph.D. Programme</span></h2>

                
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <div class="container mt-5">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#Tab1" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fa-solid fa-book-open"></i> TRAT Result</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#Tab2" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fa-solid fa-book-open"></i> Course Work Result</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
        <h3 style="text-align:center; color:#E74C3C; font-weight:bold;" class="mb-2">TRAT Result January 2024</h3>
               <object data="https://www.tmu.ac.in/uploads/announcement/TRAT_03_Jan_2024_Result_0001.pdf" type="application/pdf" width="100%" height="1100px">
				    <p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
				    <center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/uploads/announcement/TRAT_03_Jan_2024_Result_0001.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
			    </object>
        </div>
        <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <h3 style="text-align:center; color:#E74C3C; font-weight:bold;" class="mb-2">Result of Ph.D. Coursework & Re-appear - January 2024</h3>
                <object data="https://www.tmu.ac.in/uploads/announcement/Coursework&re_appearResult_Jan_2024.pdf" type="application/pdf" width="100%" height="1100px">
					<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
					<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/uploads/announcement/Coursework&re_appearResult_Jan_2024.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
				</object>
        </div>
    </div>
</div>

        </div>
    </div>
  </div>
</section><!-- #content end -->
                  <!-- container ends -->
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
