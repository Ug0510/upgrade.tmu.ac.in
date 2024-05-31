<?php
include 'head.php';
?>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0 px-0">
            <div class="row">
                <?php
                    include 'sidebar/medical_sidebar.php';
                ?>
                <div class="col-12 col-md-10 col-lg-10 mt-3 mt-sm-0 pt-5 ">
                    <div class="container">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Letter of  </span><span> Affiliation </span></h1>
                    <object data="https://www.tmu.ac.in/pdf/medical/affiliation.pdf" type="application/pdf" width="100%" height="1150px">
		                <p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
		                <center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/medical/affiliation.pdf" download type="https://www.tmu.ac.in/pdf/medical/affiliation.pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
	                </object>
                </div>
            </div>
        </div>
    </div>            
</section>

<?php 
include 'footer.php';
 ?>