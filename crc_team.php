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
 include 'sidebar/crc_sidebar.php';
?>
                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                    <!-- <h3 class="mb-2 pb-0"><b>University Administration</b> </h3> -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CRC_TEAM/14.jpg" class="card-img-top" alt="Image 3">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">SIDHARTH SINGH</h5>
                    <p class="card-text">Joint Director (CRC)</p>
                    <p class="card-text">+91-7055317317</p>
                    <p class="card-text">sidharth.crc@tmu.ac.in</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CRC_TEAM/15.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">AKASH BHATNAGAR</h5>
                    <p class="card-text">Asst. Director (Corporate Relations)</p>
                    <p class="card-text">+91-9927670666</p>
                    <p class="card-text">placementcell@tmu.ac.in</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CRC_TEAM/16.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. DANISH REHMANI</h5>
                    <p class="card-text">Assistant Manager</p>
                    <p class="card-text">+91-7983275334</p>
                    <p class="card-text">crc.data@tmu.ac.in</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </div>
</div>
</div>



<?php 
include 'footer.php';
 ?>