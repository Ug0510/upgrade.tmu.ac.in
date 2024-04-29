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
 include 'sidebar/about_tmu_sidebar.php';
?>
                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                    <!-- <h3 class="mb-2 pb-0"><b>University Administration</b> </h3> -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/suresh.jpg" class="card-img-top" alt="Image 3">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Shri. Suresh Jain</h5>
                    <p class="card-text">Chancellor</p>
                    <p class="card-text">chancellor@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360000</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/manish.jpg" class="card-img-top" alt="Image 2">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Shri. Manish Jain</h5>
                    <p class="card-text">Group Vice Chairman</p>
                    <p class="card-text">vc@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360888</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/saj.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Shri Akshat Jain</h5>
                    <p class="card-text">Executive Director</p>
                    <p class="card-text">akshat.jain@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360000</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/p(hd.png" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Prof. (Dr.) Harbansh Dixit</h5>
                    <p class="card-text">Acting Vice Chancellor</p>
                    <p class="card-text">vicechancellor@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360222</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/aditya1.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Dr. Aditya Kr. Sharma</h5>
                    <p class="card-text">Registrar</p>
                    <p class="card-text">registrar@tmu.ac.in</p>
                    <p class="card-text">+91-591-2476813</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/shri2.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Shri Abhishek kapoor</h5>
                    <p class="card-text">Director (Administration)</p>
                    <p class="card-text">director.admin@tmu.ac.in</p>
                    <p class="card-text">+91-9917100544</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/manjula.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Prof. Manjula Jain</h5>
                    <p class="card-text">Dean (Academics)</p>
                    <p class="card-text">dean@tmu.ac.in</p>
                    <p class="card-text">0591-2476800</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/pradeep1.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Dr. Pradeep Agarwal</h5>
                    <p class="card-text">Controller of Examinations</p>
                    <p class="card-text">coe@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360078</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/sag1.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Shri Ajay Garg</h5>
                    <p class="card-text">Director (Hospital Administration)</p>
                    <p class="card-text">dir.ha@tmu.ac.in</p>
                    <p class="card-text">+91-9568626444</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card">
                  <img src="https://www.tmu.ac.in/img/tmu/administration/m.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body text-center"> <!-- Added 'text-center' class -->
                    <h5 class="card-title">Dr. M. P. Singh</h5>
                    <p class="card-text">Dean Students' Welfare</p>
                    <p class="card-text">studentswelfare@tmu.ac.in</p>
                    <p class="card-text">+91-591-2360222</p>
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