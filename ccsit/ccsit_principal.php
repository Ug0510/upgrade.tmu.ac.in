<?php
include 'head.php';
?>
<link rel="stylesheet" href="ccsit_style.css">
    <!-- Content
    ============================================= -->
    <?php
    include 'sidebar/ccsit_sidebar.php';
    ?>
    <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
        <div class="container">
            <div class="row">
                <h2 class="text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important;">From the Desk <span> of Principal</span></h2>

                <div class="col-md-4 text-center img-container">
                   
                    <img src="https://www.tmu.ac.in/img/tmu/administration/principal/ccsit_principal_nivo.jpg" class="w-100" alt="R.K. Dwivedi">
                </div>
                <div class="col-md-8">
                        <blockquote class="zitat1">
                             "Wherever the art of medicine is loved, there is also a love of humanity."
                                     <!-- <cite>Peter Drucker</cite> -->
                        </blockquote>
                    <p>I am delighted to present the panorama of College of Computing Sciences and Information Technology (CCSIT) in all its hues and colours. The college has been taking forward the ethos of excellence in the field of computer education under the meticulous guidance of its committed and experienced faculty and staff members. It has been flushing out meritorious, qualified and genius students to build a career in ever expanding IT industry for fifteen years. The college nurtures them with the quality and etiquettes to face challenges in their future contribution and endeavours to society and industry. CCSIT is dedicated to provide globally competent IT Professionals to play instrumental role in the development of society.</p>
                    <p>We, at CCSIT, nurture the students so that they can develop a versatile personality and become responsible citizens of our nation. We provide ample scope, opportunities and facilities for the all-round development of personality and leadership qualities of the students through various academic, cultural, literary, sports, social and club activities.</p>
                    <p>students through various academic, cultural, literary, sports, social and club activities. A student is expected to reflect under all circumstances proper respect for order, morality and rights of others and a sense of personal honour required for being good citizen. We are desirous that the students of CCSIT become icons in their respective disciplines.</p>
                </div>
                <div class="col-md-12">
                <p> We firmly believe that students are like clay which can be given desired shape by experienced craftsman in the form of a teacher. Our endeavour is to create a pool of talented professionals possessing knowledge, ability and more importantly, the attitude and resilience to deliver both at regional as well as global level.</p>
                    <p>At CCSIT, we have been grooming our students with great care, ensuring that the best available inputs and the latest technology have gone into the process. Our thrust is to provide highest standards of education in Information Technology and enabling our students to achieve professional competence in their chosen fields. We believe in learning to explore new realms of wisdom. Students, at CCSIT, enjoy all academic and other activities enormously and therefore they demonstrate a high level of creativity, innovation and a spirit of teamwork. The academic atmosphere in the college is so conducive that it helps them bring out their talents, develop their personalities and improve their performance which has in turn led CCSIT alumni reach up to very senior levels in top companies all over the world.</p>
                </div>

                <div id="additional-content" style="display: none;">
                  
                    <p>A balanced academic regimen equips students with professional and personal skills to excel in the sector whichever they chose to work for. In addition, it enables them to adapt various challenging situations with ease and confidence. There is no doubt in my mind that they will surpass all expectations when it comes to fulfil their organizational objectives. The Institute has a track record of industrial interaction and has recently taken up innovative steps to encourage and enrich its interactions so that students are trained in a setting that recognizes the real needs of the field, and use a more practical and applied approach. CCSIT broad bases its curriculum continuously to cater the needs of the technological requirements and developments. The institute upgrades its laboratories, machines and workshops, accessories, software, hardware and other infrastructure on regular basis to provide the best facilities to its students.</p>
                    <p>I wish all success for the budding software professionals in their quest for personal as well as national growth.</p>
                    <div class="person-details">(Dr.) R. K. Dwivedi<br><span>Director / Principal</span></div>
                </div>
                <button id="load-more-btn" class="tmu-btn btn-1 m-0 py-1 px-2 mb-3 ">Read More!</button>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- <script>
    document.getElementById('load-more-btn').addEventListener('click', function() {
        var additionalContent = document.getElementById('additional-content');
        if (additionalContent.style.display === 'none') {
            additionalContent.style.display = 'block';
            document.getElementById('load-more-btn').innerText = 'Read Less';
        } else {
            additionalContent.style.display = 'none';
            document.getElementById('load-more-btn').innerText = 'Read More';
        }
    });
</script> -->

<script>
    var additionalContent = document.getElementById('additional-content');
    var numColumnsToShow = 6;
    var columns = additionalContent.querySelectorAll('p');
    var hiddenColumns = Array.from(columns).slice(numColumnsToShow);
    hiddenColumns.forEach(function(column) {
        column.style.display = 'none';
    });

    document.getElementById('load-more-btn').addEventListener('click', function() {
        hiddenColumns.forEach(function(column) {
            if (column.style.display === 'none') {
                column.style.display = 'block';
            } else {
                column.style.display = 'none';
            }
        });
    });
</script>


<?php include 'footer.php'; ?>