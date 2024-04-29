<?php
include 'head.php';
?>

<style>
    .table> :not(caption)>*>* {
        padding: 0.5rem !important;
        color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
        background-color: var(--bs-table-bg);
        border-bottom-width: var(--bs-border-width);
        box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
    }

    @media screen and (min-width:786px) {
        .w-md-50 {
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

                    <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Contact <span>US</span></h2>
                    <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Contact <span>US</span></h2>


                    <div class="container">
                        <div class="row">
                            <h3 class="mb-2 pb-0" style="color: #001055;"><b>Get In Touch</b></h3>
                            <p>For any query related to Innovation & Startup Cell, you may drop message or contact the officials at college.</p>
                            <h3 class="mb-2 pb-0" style="color: #001055"><b>The College</b></h3>
                            <p>
                                <i class="fa-solid fa-location-dot"></i> &nbsp<b>Address:</b> Delhi Road, Moradabad - 244001 (Uttar Pradesh) <br>
                                <i class="fa-solid fa-phone"></i> &nbsp<b>Phone:</b> (+91) 591-2476841<br>
                                <i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b> principal.engineering@tmu.ac.in<br>
                                <i class="fa-solid fa-envelope"></i> &nbsp<b>Email:</b> principal.computers@tmu.ac.in<br>
                            </p>
                            <h3 class="mb-2 pb-0" style="color: #001055;"><b>College Hours</b></h3>
                            <p>
                                Monday - Friday 9am to 5pm<br>
                                Saturday - 9am to 2pm<br>
                                Sunday - Closed
                            </p>
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