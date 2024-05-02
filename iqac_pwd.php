<?php
 include 'head.php';
?>

<style>
.careers-accordion {
		background-color: white;
		color: #000;
		cursor: pointer;
		padding: 5px;
		width: 100%;
		text-align: left;
		border: none;
		outline: none;
		transition: background-color 0.3s ease;
		font-size: 18px;
		font-weight: bold;
		display: flex;
		/* Added */
		align-items: center;
		/* Added */
		justify-content: space-between;
		/* Added */
	}

	.careers-accordion:hover {
		background-color: #001055;
		color: #fff;
	}

	.panel {
		padding: 0 18px;
		display: none;
		overflow: hidden;
		border-top: 1px solid #ddd;
		/* Added */
		overflow-y: auto;
		/* Added */
	}

	.panel p {
		margin-top: 20px;
	}

	.panel.active {
		display: block;
	}

	.icon {
		font-size: 35px;
		font-weight: 400;
		margin-left: 5px;
	}

	/* Add style for the horizontal line */
	.horizontal-line {
		border-top: 1px solid #4f4f4f;
		margin: 0;
	}

	/* Added class for clicked state */
	.clicked {
		background-color: #001055;
		color: #fff;
	}

	.text-color {
		color: #212529;
		line-height: 18px;
		font-size: 12px;
		font-weight: 400;
		text-align: justify;
	}

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
</style>

<?php
 include 'sidebar/institutional_values_sidebar.php';
?>

        <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5">

          <div class="row mx-0">
          <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Persons with Disabilities<span
                class="d-block d-sm-inline"> (PwD) Facilities</span></h2>
        
		<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion"> Ramps / Lifts for easy access to Classrooms & Centers<span class="icon">+</span></button>
            <div class="panel active">
            <p>Lifts are available in each Academic Block / Administrative Block / Hostels Block for the Persons with
        Disabilities (PwD). The list of lifts is as follows:</p>
      <table class="table table-bordered table-striped">
        <thead>
          <th>#</th>
          <th>Lift Location</th>
          <th>Lift No.</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Old Hospital</td>
            <td>1</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Old Dental</td>
            <td>2</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Mala Bhawan</td>
            <td>3</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Medical College</td>
            <td>4</td>
          </tr>
          <tr>
            <td>5</td>
            <td>New Hospital for Patient</td>
            <td>5</td>
          </tr>
          <tr>
            <td>6</td>
            <td>New Hospital for Patient</td>
            <td>6</td>
          </tr>
          <tr>
            <td>7</td>
            <td>New Hospital for Staff</td>
            <td>7</td>
          </tr>
          <tr>
            <td>8</td>
            <td>New Hospital for Student</td>
            <td>8</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Gyan Bhawan</td>
            <td>9</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Gyan Bhawan</td>
            <td>10</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Engineering Block</td>
            <td>11</td>
          </tr>
          <tr>
            <td>12</td>
            <td>Pharmacy College</td>
            <td>12</td>
          </tr>
          <tr>
            <td>13</td>
            <td>CCSIT College</td>
            <td>13</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Engineering Block</td>
            <td>14</td>
          </tr>
          <tr>
            <td>15</td>
            <td>Prakash Bhawan</td>
            <td>15</td>
          </tr>
          <tr>
            <td>16</td>
            <td>Nursing College Boys</td>
            <td>16</td>
          </tr>
          <tr>
            <td>17</td>
            <td>Nursing College Girls</td>
            <td>17</td>
          </tr>
          <tr>
            <td>18</td>
            <td>New Dental College</td>
            <td>18</td>
          </tr>
          <tr>
            <td>19</td>
            <td>New Dental College</td>
            <td>19</td>
          </tr>
          <tr>
            <td>20</td>
            <td>Vardhaman Bhawan</td>
            <td>20</td>
          </tr>
          <tr>
            <td>21</td>
            <td>Vardhaman Bhawan</td>
            <td>21</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Vardhaman Bhawan</td>
            <td>22</td>
          </tr>
          <tr>
            <td>23</td>
            <td>Vardhaman Bhawan</td>
            <td>23</td>
          </tr>
          <tr>
            <td>24</td>
            <td>Guest House</td>
            <td>24</td>
          </tr>
          <tr>
            <td>25</td>
            <td>Management College</td>
            <td>25</td>
          </tr>
          <tr>
            <td>26</td>
            <td>ADMINISTRATIVE BLOCK</td>
            <td>26</td>
          </tr>
          <tr>
            <td>27</td>
            <td>ADMINISTRATIVE BLOCK</td>
            <td>27</td>
          </tr>
  <tr>
  <td>28</td>
    <td>Girnar Apartment</td>
    <td>28</td>
  </tr>
  <tr>
  <td>29</td>
    <td>Kailash Apartment</td>
    <td>29</td>
  </tr>
  <tr>
  <td>30</td>
    <td>Arihant Apartment</td>
    <td>30</td>
  </tr>
  <tr>
  <td>31</td>
    <td>Shikhar Apartment</td>
    <td>31</td>
  </tr>
  <tr>
  <td>32</td>
    <td>Vaishali Apartment</td>
    <td>32</td>
  </tr>
  <tr>
  <td>33</td>
    <td>Vaishali Apartment</td>
    <td>33</td>
  </tr>

        </tbody>
      </table>
      <div class="row justify-content-center gutter-30 col-mb-5">
        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/1.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 1 Old Hospital Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/2.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 2 Old Dental Block</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/3.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 3 Mala Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/4.jpeg" alt="" style="height: 270px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 4 Medical College & Research Centre</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/5.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 5 New Hospital Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/6.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 6 New Hospital Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/7.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 7</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/8.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 8 New Hospital Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/9.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 9 Gyan Bhawan Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src=" https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/10.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 10 Gyan Bhawan Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/11.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 11 Engineering Block</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/12.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 12 College of Pharmacy Lift</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/13.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 13, College of Computing Sciences & IT</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/14.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 14, Engineering Block 
                </h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/15.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 15, Vidya Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/16.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 16, College of Nursing</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/17.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 17, College of Nursing</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/18.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 18, Dental College & Research Centre</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/18.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 19, Dental College & Research Centre</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/20.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 20, Vardhman Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/21.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 21, Vardhman Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/22.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 22, Vardhman Bhawan </h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/23.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 23, Vardhman Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/24.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 24, University Guest House</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/25.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 25, Tmimt College of Management</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/lift_no_26.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 26, Administrative Block</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/lift_no_27.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 27, Administrative Block</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/28.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 28, Girnar Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/29.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 29, Kailash Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/30.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 30, Arihant Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/31.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 31, Shikhar Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/32.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 32, Vaishali Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/33.jpg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Lift No. 33,  Vaishali Apartment</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="hr"></div>
        <p>Ramps are also available in each Academic Block, Administrative Block, Hostels Block etc. for the Persons with Disabilities (PwD) & the list of ramps is as follows:</p>

        <table class="table table-bordered table-striped">
        <thead>
          <th>#</th>
          <th>Building</th>
        </thead>
        <tbody>
        <tr>
    <td>1</td>
    <td>Blood Bank</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Central Store Medical</td>
  </tr>
  <tr>
    <td>3</td>
    <td>College of Nursing</td>
  </tr>
  <tr>
    <td>4</td>
    <td>College of Pharmacy</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Vidya Bhawan</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Guest House</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Hospital Radiology Department</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Prakash Bhawan</td>
  </tr>
  <tr>
    <td>9</td>
    <td>Main Hospital Building</td>
  </tr>
  <tr>
    <td>10</td>
    <td>Vardhaman Bhawan</td>
  </tr>
  <tr>
    <td>11</td>
    <td>Old Dental Building</td>
  </tr>
  <tr>
    <td>12</td>
    <td>Gyan Bhawan</td>
  </tr>
  <tr>
    <td>13</td>
    <td>Physiotherapy O.P.D.</td>
  </tr>
  <tr>
    <td>14</td>
    <td>Pulmonary Medicine Department</td>
  </tr>
  <tr>
    <td>15</td>
    <td>Ridhisidhi Bhavan</td>
  </tr>
  <tr>
    <td>16</td>
    <td>Teerthanker Mahaveer Dental College & Research Centre</td>
  </tr>
  <tr>
    <td>17</td>
    <td>Teerthanker Mahaveer Jinalaya</td>
  </tr>
  <tr>
    <td>18</td>
    <td>Teerthanker Mahaveer Medical & Research Centre</td>
  </tr>
  <tr>
    <td>19</td>
    <td>Casualty Emergency</td>
  </tr>
        </tbody>
      </table>

      <div class="row justify-content-center gutter-30 col-mb-5">
        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r1.jpeg" alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Prakash Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r2.jpeg" alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, TMU Hospital</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r3.jpeg" alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Center Store (Medical)</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r4.jpeg" alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Vidya Bhawan </h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r5.jpeg" alt="" >
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Gyan Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r6.jpeg" alt="" style="height: 210px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp University Guest House</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r7.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Jinalya</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r8.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Prakash Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r9.jpeg" alt="" style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, TMU Hospital</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r10.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Vardhaman Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r11.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Physiotherapy OPD</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r13.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Ridhisidhi Bhawan</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r15.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Dental College & Research Centre</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r16.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Dental College & Research Centre 
                </h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r17.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Test Tube Baby Centre</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r18.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, Tmimt College of Physical Education</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/r19.jpeg" alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>Ramp, TMU Hospital</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>
    </div>

      
      </div> 
        </div>    
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion"> Disabled-Friendly Washrooms<span class="icon">+</span></button>
        <div class="panel">
        <p>As per norms, separate rest rooms are available for persons with disabilities (PwD) in all blocks. On the
        request of PwD the wheelchairs are also provided.</p>

      <div class="row justify-content-center gutter-30 col-mb-5">
        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img
                src="https://www.tmu.ac.in/img/facilities/institutional�s/pwd_facilities/disabled_friendly_washroom1.jpeg"
                alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>PwD Friendly Washrooms Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  Denatl College & Research Centre, TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img
                src="https://www.tmu.ac.in/img/facilities/institutional�s/pwd_facilities/disabled_friendly_washroom2.jpeg"
                alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>PwD Friendly Washrooms Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  Denatl College & Research Centre, TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img
                src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/disabled_friendly_washroom3.jpeg"
                alt="" style="height: 230px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>PwD Friendly Washrooms Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  Administrative Block, TMU Campus</span>
              </div>
            </div>
          </div>
        </div>       
         </div>
</div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Signage including Tactile Path Lights, Display Boards and Signposts<span class="icon">+</span></button>
    <div class="panel">
    <p>Signage boards are displayed at the prominent places of the university to help the PwD.</p>
      <div class="row justify-content-center gutter-30 col-mb-5">
        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s1.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s2.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s3.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s4.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s5.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s6.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s7.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s8.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s9.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s10.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s11.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s12.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/signage/s13.jpg" alt=""
                style="height: 300px;">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4>SignAge for Pwd Persons</h4><span class="fst-normal"><i class="fa-solid fa-location-dot"></i>
                  TMU Campus</span>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Assistive technology and facilities for persons with disabilities<span
		class="icon">+</span></button>
<div class="panel">
	<p>This University website is assessable and handy for PwD to follow the "Sugamya Bharat Abhiyan".</p>
	<div class="row justify-content-center gutter-30 col-mb-5">
		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/Screenshot126.png"
						alt="" style="height: 300px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/Screenshot_127.png"
						alt="" style="height: 300px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/Screenshot128.png"
						alt="" style="height: 300px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/Screenshot129.png"
						alt="" style="height: 300px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <hr class="horizontal-line">

    <button class="careers-accordion">Provision for enquiry and information<span class="icon">+</span></button>
<div class="panel">
	<p>The university has established a facility office at the entrance for the assistance of PwD and E-Operated wheel
		chair facility is also provided on request.</p>
	<div class="row justify-content-center gutter-30 col-mb-5">
		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/pwd_assistance1.jpeg"
						alt="" style="height: 400px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
				<div class="team-image">
					<img src="https://www.tmu.ac.in/img/facilities/institutional_values/pwd_facilities/pwd_assistance2.jpeg"
						alt="" style="height: 380px;">
				</div>
				<div class="team-desc p-2">
					<div class="team-title pt-0">
						<h4>Assistive technology and facilities at tmu portal for Pwd Persons</h4><span
							class="fst-normal"><i class="fa-solid fa-location-dot"></i>
							TMU Campus</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <hr class="horizontal-line">
    </div>
  </div>
  </div>
  </div>
</section><!-- #content end -->


	<br /><br />

	<script>
        //   career accordian
	var acc = document.getElementsByClassName("careers-accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function () {
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
				this.querySelector(".icon").innerHTML = "+";
				this.classList.remove("clicked"); // Remove clicked class when closing
			} else {
				// Close all other panels
				var allPanels = document.querySelectorAll('.panel');
				for (var j = 0; j < allPanels.length; j++) {
					allPanels[j].style.display = 'none';
					var accordion = allPanels[j].previousElementSibling;
					accordion.querySelector(".icon").innerHTML = "+";
					accordion.classList.remove("clicked"); // Remove clicked class from other accordions
				}
				panel.style.display = "block";
				this.querySelector(".icon").innerHTML = "-";
				this.classList.add("clicked"); // Add clicked class when opening
			}
		});
	}
    </script>
	<br /><br />

	
<?php
 include 'footer.php';
?>



