<?php
 include 'head.php';
?>
    <style>
    /* Extra CSS for modern look */
    .card {
      border: none;
      border-radius: 15px;
      background-color: #f8f9fa;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }
    .card img {
      border-radius: 15px 15px 0 0;
      object-fit: cover;
      height: auto;
    } 
     .card-body {
      padding: 20px;
    }
    .card-body p {
      font-size: 14px;
      font-weight: 500;
      margin: 5px;
    }
    .card-body h5{
    	color: #001055;
        }
    .card-title {
      font-weight: bold;
      color: #333;
    }
    .card-text {
      color: #666;
    }
    .social-icons a {
      color: #666;
      text-decoration: none;
      transition: color 0.3s ease;
      margin-right: 10px;
    }
    .social-icons a:hover {
      color: #333;
    }


    /* Navigation Home Button */
    @media only screen and (max-width: 991px) {
  .navigation-button {
    padding-left: 2rem;
    padding-right: 2rem;
  }
}

</style>

<?php
 include 'sidebar/research_development_center_sidebar.php';
?>

						<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5 ">

						<!-- Write content for right side here  -->
                    <div class="row mx-0" >
					<h2 class=" text-center" style="color:#001055; text-transform: capitalize;
                        font-weight:700!important; font-size:2.4vmax">RDC <span class="d-block d-sm-inline"> Faculty Profile</span></h2>

          <div class="row">
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/souviksur.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Dr. Souvik Sur</h5>
                    <p class="card-text">Assistant Professor</p>
                    <p class="card-text">souviks.rdc@tmu.ac.in</p>
                    <p class="card-text">+91-9051498210</p>
                  </div>
                </div>
              </div>
          </div>
		</section><!-- #content end -->	
<?php
 include 'footer.php';
?>
  
