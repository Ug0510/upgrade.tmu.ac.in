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
 include 'sidebar/about_tmu_sidebar.php';
?>
                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">University <span
                class="d-block d-sm-inline"> Organogram</span></h2>

               <div class="col-md-12">
					    <img class="card-img-top" src="images/stock_images/TMU_organogram.jpg" alt="Card image cap">
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
