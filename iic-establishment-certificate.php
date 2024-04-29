<?php
include 'head.php';
?>

<style>
    @media screen and (min-width:786px) {
        .w-md-50{
            width: 50%;
        }
    }
    .big-card {
        width: 70vw;
        box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.3);
        height: auto;
        margin: auto;
        position: relative;
        padding-bottom: 50px;
    }

    .big-card-heading {
        width: 95%;
        height: 4rem;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #001055;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .big-card-heading p {
        color: white;
        margin-bottom: 0;
        font-size: 28px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .big-card .min-text {
        color: #fe8d00;
        font-size: 12px;
        margin: 0;
        padding: 0;
        width: fit-content;
    }

    .big-card .main-text {
        font-size: 18px;
        text-align: justify;
    }

    .m-custom-card {
        height: 150px;
        box-shadow: 4px 4px 6px 1px rgba(0, 0, 0, 0.06);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        /* background: linear-gradient(115deg, rgba(251, 215, 134, 0.3), rgba(198, 255, 221, 0.3)); */
        background-color: rgba(205, 205, 205, 0.2);
        /* border:1px solid rgba(0, 0, 0, 0.01);  */
        transition: 0.2s all;
    }

    .m-custom-card img {
        width: 20%;
    }

    .m-custom-card span {
        text-transform: uppercase;
        font-size: 12px;
        margin-top: 20px;
        width: fit-content;
        font-weight: 500;
        text-align: center;
    }

    .m-custom-card:hover {
        scale: 0.99;
        box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.05);
        cursor: pointer;
    }

    @media screen and (max-width:992px) {
        .big-card {
            width: 90vw;
        }
    }

    @media screen and (max-width:480px) {
        .big-card {
            width: 90vw;
        }

        .big-card-heading {
            width: 85%;
        }

        .big-card-heading p {
            font-size: 19px;
        }

        .big-card .main-text {
            font-size: 14px;
        }

        .m-custom-card span {
            font-size: 15px;
        }
    }
</style>


<?php
include 'sidebar/iic_sidebar.php';
?>

                <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

                    <div class="row mx-0">
                        <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">IIC Establishment <span>Certificate</span></h2>
                        <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">IIC Establishment <span>Certificate</span></h2>

                        <div class="container">
                            <div class="row">
                                <h2 class="mb-0 ms-2"><b>University</b></h2>
                                <div class="p-4 pt-2" style="box-sizing:border-box;">
									<img src="https://www.tmu.ac.in/img/tmu/iic_certificates/university_certificate.jpg" class="w-md-50" alt="">
								</div>
                            </div>
                            <div class="row">
                            <h2 class="mb-0 ms-2"><b>Faculty of Engineering</b></h2>
                            <div class="col-md-6 p-4" style="box-sizing:border-box;">
									<img src="https://www.tmu.ac.in/img/coe/iic_certificate1.jpg" alt="">
								</div>
                            
                            <div class="col-md-6 p-4" style="box-sizing:border-box;">
									<img src="https://www.tmu.ac.in/img/coe/iic_certificate3.jpg" alt="">
								</div>
                            </div>

                            <div class="row">
                            <h2 class="mb-0 ms-2"><b>Medical College & Research Centre</b></h2>
                            <div class="col-md-6 p-4" style="box-sizing:border-box;">
									<img src="https://www.tmu.ac.in/img/medical/iic_certificate1.jpg" alt="">
								</div>
                            
                            <div class="col-md-6 p-4" style="box-sizing:border-box;">
									<img src="https://www.tmu.ac.in/img/medical/iic_certificate2.jpg" alt="">
								</div>
                            </div>
                            
                        </div>



                    </div>

                </div>
            </div>
        </div>


    </div>
</section><!-- #content end -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<?php
include 'footer.php';
?>