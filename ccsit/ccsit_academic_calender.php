<?php include 'head.php'; ?>

<style>
  .vh-75 {
    height: 0vh !important;
  }
</style>

<?php
 include 'sidebar/ccsit_sidebar.php';
?>

<div class="col-12 col-sm-9 col-lg-10 mt-3 mt-sm-0 pt-2 pt-sm-5">
    <h2 class="text-center" style="color:#001055;
        text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Academic <span
            class="d-block d-sm-inline"> Calendar</span></h2>

    <div class="container">
        <div class="row mb-4">
            <object data="pdf/ccsit/University-Academic-Calendar-2023-24.pdf" type="application/pdf" width="100%"
                height="1120px">
                <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                <center><a type="button" class="tmu-btn btn-1 btn-lg btn-rounded text-lg waves-effect waves-light"
                        href="pdf/ccsit/University-Academic-Calendar-2023-24.pdf"
                        download="pdf/ccsit/University-Academic-Calendar-2023-24.pdf" data-uw-pdf-br="2"
                        data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to
                        download PDF file.</a></center>
            </object>
        </div>
    </div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>    