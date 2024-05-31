<?php include 'head.php'; ?>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid my-0  px-0 px-md-3">
            <div class="row">
                <?php
                include 'sidebar/management_sidebar.php';
                ?>
                <div class="col-12 col-sm-9 col-lg-10 mt-3 mt-sm-0 pt-2 pt-sm-5">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Academic </span><span>Calendar</span></h1>
                    <div class="row">
                        <object data="https://www.tmu.ac.in/pdf/pdf/TMIMT_AC_23_24.pdf" type="application/pdf"
                            width="100%" height="1120px">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                            <center>
                                <a type="button" class="tmu-btn btn-1 m-0 py-1 px-2 mb-3"
                                    href="https://www.tmu.ac.in/pdf/pdf/TMIMT_AC_23_24.pdf" download=""
                                    data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2"
                                        aria-hidden="true"></i>Click here to download PDF file.</a>
                            </center>
                        </object>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>