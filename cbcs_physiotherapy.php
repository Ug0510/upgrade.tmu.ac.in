<?php
 include 'head.php';
?>

<style>
	
.color{
color:#FF7900!important;
}

h3{
margin:0 0 5px 0;	
}

.font-body {
  font-size:22px;
  color:#001055;
  font-weight: 700;
}

p {
  margin-bottom:15px!important; 
}

.fancy-title {
  --cnvs-fancy-title-bg: #fff;
  --cnvs-fancy-title-padding: 0.75rem;
  --cnvs-fancy-title-border-size: 1px;
  --cnvs-fancy-title-border-color: rgba(var(--cnvs-contrast-rgb), 0.1);
  --cnvs-fancy-title-dotted-border: images/icons/dotted.png;
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 0.55rem!important;
}

.title-bottom-border::before, .title-bottom-border::after {
  display: none;
}
.title-bottom-border h1, .title-bottom-border .h1,
.title-bottom-border h2,
.title-bottom-border .h2,
.title-bottom-border h3,
.title-bottom-border .h3,
.title-bottom-border h4,
.title-bottom-border .h4,
.title-bottom-border h5,
.title-bottom-border .h5,
.title-bottom-border h6,
.title-bottom-border .h6 {
  width: 100%;
  padding: 0 0 3px 0;
  border-bottom: calc(var(--cnvs-fancy-title-border-size) * 2) solid var(--cnvs-themecolor);
}

.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));

}

ul{
    margin-left:20px;
    font-size:16px;
    font-weight:500px;
}

.table{
    width: 500px!important;
}

.vh-75 {
    height: 0vh !important;
}
</style>

<?php
include 'sidebar/open_elective_sidebar.php';
?>

                <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">
					<!-- Write content for right side here  -->
                    
                    <div class="row mx-0">
								<h2 class=" text-center" style="color:#001055;
                                    text-transform: capitalize;
                                    font-weight:700!important; font-size:2.4vmax">Open Elective Courses under CBCS <span class="d-block d-sm-inline"> - Department of Physiotherapy</span></h2>
                        
                        <object data="https://www.tmu.ac.in/pdf/cbcs/cbcs_physiotherapy.pdf" type="application/pdf" width="100%" height="1120px">
							<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
							<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/cbcs/cbcs_physiotherapy.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
						</object>

                    </div>
                </div> 
			</div>
		</div>
	</div>
</section><!-- #content end -->

	</div><!-- #wrapper end -->
	<br /><br />

	
<?php
 include 'footer.php';
?>



