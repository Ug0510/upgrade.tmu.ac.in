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
 include 'sidebar/nep_sidebar.php';
?>

				<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">2-NEP Immplementation <span
                        class="d-block d-sm-inline"> Committee</span></h2>
                    
                        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/nep/nep1.jpg" class="card-img-top" alt="Image 3">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Ms. Neha Anand</h5>
                    <p class="card-text">Assistant Director - Academics</p>
                    <p class="card-text">dy.registrar.academics@tmu.ac.in</p>
                    <p class="card-text">+91-9458539308</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/nep/nep2.jpg" class="card-img-top" alt="Image 2">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Mr. Basavaraj Mudhol</h5>
                    <p class="card-text">Group Vice Chairman</p>
                    <p class="card-text">dr.governance@tmu.ac.in</p>
                    <p class="card-text">+91-9108623430</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/nep/nep3.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Mr. Sahil Sharma</h5>
                    <p class="card-text">Sr. Executive</p>
                    <p class="card-text">sahil.incubator@tmu.ac.in</p>
                    <p class="card-text">+91-9761122198</p>
                  </div>
                </div>
              </div>     

                    </div>
            </div>
        </div>
    </section>


<?php 
include 'footer.php';
 ?>