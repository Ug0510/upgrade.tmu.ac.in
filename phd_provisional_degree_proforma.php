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
            <h2 class=" text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Provisional Degree <span class="d-block d-sm-inline"> Performa</span></h2>
                <object data="https://www.tmu.ac.in/pdf/research/provisional_degree_certificate_proforma.pdf" type="application/pdf" width="100%" height="1100px">
					<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
					<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/provisional_degree_certificate_proforma.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
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
</section><!-- #content end -->

	<br /><br />

<?php
 include 'footer.php';
?>
