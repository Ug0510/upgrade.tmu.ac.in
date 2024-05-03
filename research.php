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

    #eye-right {
        padding-left: 85px;
    }

    .cover .num-up {
        position: absolute;
        top: 32px;
        left: 27px;
        letter-spacing: 25px;
        transform: rotate(-90deg);
    }

    .cover .num-down {
        position: relative;
        top: 33px;
        left: -47px;
        transform: rotate(-90deg);
    }

    .author {
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        position: absolute;
        top: 237px;
        left: 25px;
        opacity: 0.8;
    }

    .front>div {
        border-radius: 0 3px 3px 0;
        box-shadow: inset 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .front:after {
        content: '';
        position: absolute;
        top: 1px;
        bottom: 1px;
        left: -1px;
        width: 1px;
    }

    .cover:after {
        content: '';
        position: absolute;
        top: 0;
        left: 5px;
        bottom: 0;
        width: 1px;
        background: rgba(0, 0, 0, 0.1);
        box-shadow: 1px 0 2px rgba(255, 255, 255, 0.1);
    }

    .left-side .journals {
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
        background-image: url('https://upgrade.tmu.ac.in/assets/img/annual_report/table.png');
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

    .page-title-content{
        text-align:center!important;
    }
</style>

<link rel="stylesheet" href="./assets/css/journal.css">

<?php
include 'sidebar/research_sidebar.php';
?>


                <div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">

  
                <div class="row mx-0">
                    
                    <h2 class="tmu-text-primary tmu-page-heading">About Innovation & <span>Startup Cell</span></h2>
                        <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">About Innovation & <span>Startup Cell</span></h2>
                    
                    <div class="col-md-12">
                        
                        
                        
                    <p style="text-align:justify">As an educational institution, the University encourages students and scholars to expand human knowledge through analysis, innovation, and insight.</p>
                        <p style="text-align:justify">To lend a helping hand to the scholar burning the midnight oil, the University subscribes the following database providing access to thousands of journals in different disciplines for full text research articles and sector specific reports.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 mb-1">
                            <a href="https://www.ebsco.com/" target="_blank"><img src="https://www.tmu.ac.in/img/research/EBSCOhost_Flat.png" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 mb-1">
                            <a href="https://www.elsevier.com/en-in" target="_blank"><img src="https://www.tmu.ac.in/img/research/Untitled-630x325.png" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 mb-1">
                            <a href="http://delnet.in/" target="_blank"><img src="https://www.tmu.ac.in/img/research/delnet.jpg" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align:justify">The University collaborates with national and international institutions for teaching, research and exchange of faculty and students to contribute to cutting-edge research and evolve new standards. Another project, “UKIERI”, had been undertaken to improve teaching pedagogy and IT enabled teaching in the College of Nursing in collaboration with Napier University, U. K.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align:justify">A number of projects sponsored and funded by external agencies are in progress. Projects sponsored by the Ministry of Labor and Employment, Government of India, a project with the Consultancy Development Center, and a project under the aegis of UNICEF, are underway.</p>
                    </div>
                </div>
                <p>The University publishes the following journals on periodic basis:</p>

                    <div class="box d-none d-sm-block">
                        <div class="container">
                            <div class="bookshelf"></div>
                            <div class="book">

                                <div class="front">
                                    <div class="cover">
                                        <a href="https://upgrade.tmu.ac.in/assets/pdf/jnrl/viewpoint_jan_july_2021_1.pdf" target="_blank"><img src="https://upgrade.tmu.ac.in/assets/img/jnrl/8.jpg" alt="Book Cover Image" ></a>
                                       
                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>

                            </div>
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <a href="https://www.tmu.ac.in/img/research/pharmacoaerena.jpg" target="_blank"><img src="https://upgrade.tmu.ac.in/assets/img/jnrl/10.jpg" alt="Book Cover Image" ></a>
                                        <!-- <p class="num-up">84</p>
                        <p class="num-down">1</p>
                        <p class="author">George Orwell</p> -->
                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>

                            </div>
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <a href="https://www.tmu.ac.in/tmu/publication" target="_blank"><img src="https://www.tmu.ac.in/img/research/s&treview.jpg" alt="Book Cover Image" style="width:200px; height:275px;"></a>

                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <a href="https://tmujdent.co.in/archive.php" target="_blank"><img src="https://upgrade.tmu.ac.in/assets/img/jnrl/11.jpg" alt="Book Cover Image" style="height:275px;"></a>

                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <a href="https://journals.lww.com/amit/pages/default.aspx" target="_blank"><img src="https://upgrade.tmu.ac.in/assets/img/jnrl/12.jpg" alt="Book Cover Image" style="height:275px;"></a>

                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <a href="https://www.tmu.ac.in/tmu/publication" target="_blank"><img src="https://www.tmu.ac.in/img/research/ijrtcsit.jpg" alt="Book Cover Image" style="width:200px; height:275px;"></a>

                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2 class = "journals">
                                        <span>Journals</span>
                                    </h2>
                                </div>
                            </div>
                            <!-- Repeat the above book structure for additional books -->
                            <!-- ... -->
                        </div>
                            
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <p style="text-align:justify">Students and faculty members are encouraged to contribute towards research and participate in national and international conferences and seminars. The faculty members publish quality research papers which go a long way in contributing towards the promotion of research in varied disciplines.</p>
                    </div>
				</div>
                </div>

            </div>
        </div>
</section><!-- #content end -->


<section class="d-block d-sm-none">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
 
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://www.tmu.ac.in/img/research/s&treview.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/10.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://www.tmu.ac.in/img/research/s&treview.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/11.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/12.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="book-wrapper">
                    <div class="book-items">
                        <div class="main-book-wrap">
                            <div class="book-cover">
                                <div class="book-inside"></div>
                                <div class="book-image">
                                    <img src="https://www.tmu.ac.in/img/research/ijrtcsit.jpg" />
                                    <div class="effect"></div>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>




<script>
    function openBook(book) {
        const bookInner = book.querySelector('.book-inner');
        bookInner.style.transform = 'rotateY(0)';
        const pages = book.querySelector('.pages');
        pages.style.display = 'block';
    }

    function closeBook(book) {
        const bookInner = book.querySelector('.book-inner');
        bookInner.style.transform = 'rotateY(45deg)';
        const pages = book.querySelector('.pages');
        pages.style.display = 'none';
    }
</script>

<!-- JavaScript for smooth scrolling -->
<script>
    // Smooth scrolling function
    document.addEventListener("DOMContentLoaded", function() {
        var scrollLinks = document.querySelectorAll('a[href^="#"]');
        scrollLinks.forEach(function(scrollLink) {
            scrollLink.addEventListener('click', function(e) {
                e.preventDefault();
                var targetId = this.getAttribute('href').substring(1);
                var targetElement = document.getElementById(targetId);
                if (targetElement) {
                    // Check if the user is at the top of the screen
                    var isAtTop = window.scrollY === 0;
                    // Execute smooth scroll once or twice based on the current scroll position
                    if (isAtTop) {
                        // First smooth scroll
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                        // Delayed second smooth scroll
                        setTimeout(function() {
                            targetElement.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }, 1000); // 1000 milliseconds = 1 second
                    } else {
                        // Smooth scroll only once
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    });
</script>



<?php
include 'footer.php';
?>