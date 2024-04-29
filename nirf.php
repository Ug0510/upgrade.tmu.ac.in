<?php
 include 'head.php';
?>

<style>
.team-desc>.team-title>* {
    font-family: 'poppins' !important;
}

.container {
    z-index: 1;
    perspective: 3000px;
    display: flex;
}

.book {
    position: relative;
    display: block;
    width: 150px;
    height: 275px;
    margin: 3% 10px;
    border-radius: 2px 4px 4px 2px;
    background: linear-gradient(45deg, #001055 0%, #001055 100%);
    font-family: acumin-pro, sans-serif;
    font-weight: 400;
    color: #001055;
    transform-style: preserve-3d;
    transition: transform 0.5s;
    transform: rotateY(40deg);
    z-index: 1;
}

.book:hover {
    transform: rotateY(0deg);
    z-index: 12;
    transition: scale 0.5s;
    scale: 1.1;
}

.book>div,
.front>div {
    display: block;
    position: absolute;
}

.front {
    transform-style: preserve-3d;
    transform-origin: 0% 50%;
    transition: transform 0.5s;
    transform: translate3d(0, 0, 10px);
    z-index: 10;
}

.front>div {
    width: 200px;
    height: 275px;
}

.left-side {
    width: 20px;
    left: -10px;
    height: 275px;
    background-color: #001055;
    transform: rotate3d(0, 1, 0, -90deg);
}

.cover svg {
    position: absolute;
    top: 50%;
    left: 45%;
    margin-top: -50px;
    margin-left: -55px;
    width: 150px;
}

h2 {
    width: 250px;
    height: 20px;
    color: #2b2b2b;
    font-size: 7.5px;
    line-height: 20px;
    padding-right: 5px;
    text-align: right;
    transform-origin: 0 0;
    transform: rotate(90deg) translateY(-20px);
}

.cover {
    background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
}

.left-side h2 span:first-child {
    font-weight: 400;
    font-size: 12px;
    padding-right: 10px;
    z-index: 11;
}

.left-side h2 span:last-child {
    font-family: acumin-pro, sans-serif;
}

/* Bookshelf style */
.bookshelf {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 1100px;
    height: 50px;
    background-image: url('assets/img/annual_report/table.png');
    /* Replace 'path/to/your/bookshelf-image.jpg' with the actual path to your bookshelf image */
    background-size: cover;
    background-position: center;
}

.hm {
    font-size: 24px;
    color: #001055;
    margin: 30px;
    font-weight: 700;
}

.box {
    background-color: #EFEFEF;
    max-width: 1200px;
}
</style>

<?php
 include 'sidebar/nirf_sidebar.php';
?>

				<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                    <div class="box d-none d-sm-block">
                        <h3 class="hm text-center pt-2" id="overall" style="font-family:'poppins'!important;">NIRF 2024 Overall Data</h3>
                        <div class="container">
							<object data="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Overall.pdf" type="application/pdf" width="100%" height="1100px">
								<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
								<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Overall.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
						    </object>
						</div>
                        <h3 class="hm text-center pt-2" id="medical" style="font-family:'poppins'!important;"> NIRF 2024 Medical Data</h3>
                        <div class="container">
						<object data="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Medical.pdf" type="application/pdf" width="100%" height="1100px">
							<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
							<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Medical.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
						</object>
                        </div>
                        <h3 class="hm text-center pt-2" id="dental" style="font-family:'poppins'!important;">NIRF 2024 Dental Data</h3>
                        <div class="container">
						<object data="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Dental.pdf" type="application/pdf" width="100%" height="1100px">
							<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
							<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/nirf/2024/TMU_NIRF_2024_Dental.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
						</object>
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



