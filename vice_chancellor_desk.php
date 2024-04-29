<?php
include 'head.php';
?>

<style>
       
        
       .person-details {
           /* border:2px solid #A07046; */
           border-top: none;
           padding-left: 1.5rem;
           margin-top: 0;
           line-height: 2.3rem;
           color: #001055;
           font-weight: 600;
           font-size: 1.2rem;
           text-transform: uppercase;
           float: left;
           letter-spacing: 1.2px;
           /* margin-top: -4rem; */
           padding-top: 0;
           padding-bottom: 2rem;
           font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }

       .person-details span {
           color: #FF7900;
           font-family: 'Poppins', sans-serif;
       }

       .person-quote {
           text-align: justify;
           font-size: 14px;
           /* padding-top: 2rem; */
       }


       .person-quote i {
           color: #555;
           font-size: 2.5rem;
           margin-right: 0rem;
           color: #FF7900;
           position: absolute;
           top: 0rem;
           left: 0rem;
       }

      
       .highlight {
       background-color: transparent ;
       color: #FF7900;
       font-weight: 600;
   }

       @media screen and (max-width:786px) {
           .person-quote i {
               color: #555;
               font-size: 2.5rem;
               margin-right: 0rem;
               color: #FF7900;
               position: absolute;
               top: 0rem;
               left: 1rem;

           }
       }
   </style>



<!-- Content
    ============================================= -->
<?php
include 'sidebar/about_tmu_sidebar.php';
?>
<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
    <div class="container">
        <div class="row">
            <h2 class=" text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important;"> Vice <span>Chancellor Desk</span></h2>
            <div class="col-md-4 text-center img-container">
                    <img src="/assets/image/vc.png" class="w-100" alt="">
                </div>
            <div class="col-md-8">
                <p class="person-quote text-justify px-4 px-md-5">
                    The statement<span class="highlight">"your future will be decided by what you do today" </span>is so apt for everyone joining TMU. Your destiny will be shaped by what you do during the years you are with us. It's important to differentiate between earning a degree & learning. The academic processes of TMU are tailored to learning and skill development. Many years ago Albert Einstein said <span class="highlight">"the purpose of education is to develop thinking"</span> and similarly Herbert Simon stated,<span class="highlight"> "learning occurs from what the student does & thinks"</span>.
                    <br><br>
                    The biggest challenge for both, institutions and students is to take a detour from the traditional approach of <span class="highlight">rote learning & written examination</span> which emphasized, for too long, <span class="highlight">recall & memorization</span>, this approach stifled well-structured & creativity in universities. For decades, we have been functioning in classrooms like a trans-receiver system and evaluating students through "<span class="highlight">direct & single correct answer</span>" questions which never tested learning & thinking. It was a test of memory.<br>
            
                </p>

            </div>
            <p class="col-12 person-quote px-4 pt-0 py-md-5 pb-md-2 text-justify">
            We can assure you a different experience in TMU where you will deal with <span class="highlight">real-life problem situations</span>. You will spend good amount of time in <span class="highlight">doing and thinking</span>. The academic processes in TMU will equip you with <span class="highlight">skills & thinking to deal with both professional & personal lives</span>. We have a well structured programme delivery mechanism that assures learning and well rounded personality. I am sure your experience will be unique & quite enriching thus preparing you to face <span class="highlight">real-life challenges in the future</span>.<br>
            Wishing you all the best!
            <div class="person-details float-right">Prof. (Dr.) V K Jain <br><span>(कुलपति)</span></div>

    </p>



        </div>
    </div>
</div>
</div>


<?php include 'footer.php'; ?>