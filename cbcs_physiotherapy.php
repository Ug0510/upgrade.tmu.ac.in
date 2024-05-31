<?php
 include 'head.php';
?>
<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0 px-0">
            <div class="row">
                <?php
include 'sidebar/open_elective_sidebar.php';
?>

                <div class="col-12 col-sm-9 col-lg-10 mt-3 mt-sm-0 pt-2 pt-sm-5 ">
                    <!-- Write content for right side here  -->

                    <div class="row mx-0 mb-3">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Open Elective Courses under CBCS
                            </span><span> - Department of Physiotherapy</span></h1>

                        <object data="https://www.tmu.ac.in/pdf/cbcs/cbcs_physiotherapy.pdf" type="application/pdf"
                            width="100%" height="1120px">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                            <center><a type="button"
                                    class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light"
                                    href="https://www.tmu.ac.in/pdf/cbcs/cbcs_physiotherapy.pdf"
                                    download="https://www.tmu.ac.in/pdf/cbcs/cbcs_physiotherapy.pdf" data-uw-pdf-br="2"
                                    data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click
                                    here to download PDF file.</a></center>
                        </object>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

<?php
 include 'footer.php';
?>