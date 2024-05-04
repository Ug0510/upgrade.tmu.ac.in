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
 include 'sidebar/ctld_sidebar.php';
?>
                <div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
                    <!-- <h3 class="mb-2 pb-0"><b>University Administration</b> </h3> -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/1.jpg" class="card-img-top" alt="Image 3">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">PROF. (DR.) R. N. KRISHNIA</h5>
                    <p class="card-text">Director (Centre for Teaching Learning & Development)</p>

                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/2.jpg" class="card-img-top" alt="Image 2">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">DR. DILIP DUTT VARSHNEY</h5>
                    <p class="card-text">Deputy Director</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/3.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">DR. JASMINE STEPHEN</h5>
                    <p class="card-text">Chief Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/13.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. ANANT BHARADWAJ</h5>
                    <p class="card-text">Master Trainer - Aptitude</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/5.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. ANKIT SHARMA</h5>
                    <p class="card-text">Master Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/10.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. ATUL DAYAL</h5>
                    <p class="card-text">Master Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/9.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. SAGAR PRATAP SINGH</h5>
                    <p class="card-text">Senior Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/11.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. PRADEEP PANWAR</h5>
                    <p class="card-text">Senior Trainer - Aptitude</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/12.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MS. ALKA DAYAL</h5>
                    <p class="card-text">Executive Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/7.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. CHANDRABHUSHAN SINHA</h5>
                    <p class="card-text">Executive Trainer - Aptitude</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/8.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. DEEPAK KATIYAR</h5>
                    <p class="card-text">Executive Trainer - Aptitude</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/4.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MS. CHARVEE KHATRI</h5>
                    <p class="card-text">Trainer - Soft Skills</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="images/CTLD_CARDS_IMAGES/6.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">MR. PALLAV PANDEY</h5>
                    <p class="card-text">Trainer - Aptitude</p>
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