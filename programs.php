<?php
 include 'head.php';
?>

<style>
        .course-card {
            border: none;
            border-radius: 10px;
            height: 80px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
            background-color: #ffffff;
            /* Background color for the card */
        }

        .course-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #ee9118;
        }

        .course-card img {
            filter: invert(0%) sepia(100%) saturate(7500%) hue-rotate(130deg) brightness(88%) contrast(111%);
        }

        .card-body-content {
            margin-left: 20px;
            /* Adjust the margin as needed */
        }

        .card-body-content h5 {
            font-size: 15px;
            line-height: 18px;
             color: #001055;
        }
        .card-body-content p {
            font-size: 12px;
             color: #001055;
        }

        .card-title,
        .card-text {
            color: #001055;
            /* Text color for the title and duration */
            font-weight: bold;
            /* Make the text bold */
        }
    /* Custom styles for search input */
    #searchInput {
      border: 2px solid #007bff; /* Set border color and width */
      border-radius: 10px;
      padding: 10px 15px; /* Add padding to input */
      font-size: 16px; /* Adjust font size */
      width: 100%; /* Make input full width */
      transition: border-color 0.3s ease-in-out; /* Smooth transition for border color */
    }
    #searchInput:hover {
      border-color: #0056b3; /* Change border color on hover */
    }
  </style>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mb-4">
                <!-- Search Field -->
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>
        </div>
        <div class="row" id="courseCards">
            <!-- Course Card -->
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/1.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MBBS (Bachelor of Medicine and Bachelor of Surgery)</h5>
                            <p class="card-text">Duration: 4 years</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/2.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Anatomy)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/3.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Forensic Medicine)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/4.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Physiology)
                            </h5>
                            <p class="card-text">Duration: 5 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/5.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Biochemistry)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/6.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Microbiology)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/7.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Pharmacology)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/8.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Pathology)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/9.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (General Medicine)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/10.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Radio-Diagnosis/Radiology)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/5.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">BCA</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/11.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Paediatrics)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/12.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Psychiatry)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/16.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">B-Tech</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/13.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MD (Dermatology, Venereology and Leprosy)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/5.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">MBA</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/14.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">B.Sc. Medical Anatomy (From Session 2023-24 Onwards)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/15.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">B.Sc. Medical Biochemistry (From Session 2023-24 Onwards)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/16.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">B.SC. Medical Physiology (From Session 2023-24 Onwards)</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 card-item">
                <div class="card course-card">
                    <div class="card-body d-flex align-items-center">
                        <img src="assets/img/programs/5.png" alt="" width="50" height="50">
                        <div class="card-body-content">
                            <h5 class="card-title">Fine Arts</h5>
                            <p class="card-text">Duration: 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Course Card -->

            <!-- Add more course cards as needed -->

        </div>
    </div>

    
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('keyup', function() {
      var searchText = searchInput.value.toLowerCase();
      var cardItems = document.querySelectorAll('.card-item');
      cardItems.forEach(function(cardItem) {
        var cardTitle = cardItem.querySelector('.card-title').textContent.toLowerCase();
        var cardText = cardItem.querySelector('.card-text').textContent.toLowerCase();
        if (cardTitle.includes(searchText) || cardText.includes(searchText)) {
          cardItem.style.display = 'block';
        } else {
          cardItem.style.display = 'none';
        }
      });
    });
  });
</script>

<?php
 include 'footer.php';
?>