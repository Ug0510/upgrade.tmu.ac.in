<?php
 include 'head.php';
?>

<!-- <link rel="stylesheet" href="demos/headphones/headphones.css">
<link rel="stylesheet" href="demos/recipes/recipes.css"> -->

<style>
.carousel-indicators li {
  background-color: transparent;
  width: 10px; 
  height: 10px; 
  margin: 0 5px; 
  cursor: pointer;
}

.carousel-controls {
  position: absolute;
  bottom: 20px;
  left: 0;
  right: 0;
  text-align: center;
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 20px;
    margin-right: 10%;
    margin-bottom: 1rem;
    margin-left: 10%;
}
</style>

<style>
.sublime {
  font-family:'poppins';
  line-height:28px;
  text-align:center;
  justify-content: center;
  padding: 0 10%!important;
  font-size:18px;
  font-weight:500px;
}
</style>

<style>
.custom-box {
  background-color: #001055;
  color: white;
  padding: 10px;
}

.custom-list{
  list-style-type: none;
  padding-left: 10%; 
  padding-right: 10%; 
  color:#fff!important;
}

.custom-list li a{
  list-style-type: none;
  color:#fff!important;
  }
</style>

<style>
p a {
  color:#001055;
  margin-bottom:20px;
  font-family:'poppins';
  font-weight:700;
  }

p {
  margin:0 0 10px 0;
  font-size:14px;
}
</style>

<style>
.center-table {
  margin: 0 auto; 
  width: 100%; 
  padding-left: 10%; 
  padding-right: 10%; 
}

/* For mobile and tablet views */
@media only screen and (max-width: 768px) {
  .table td, .table th {
    display: block;
    text-align:center; 
    margin-top:-10px;
  }
}

@media screen and (max-width: 768px) {
  .table > :not(caption) > * > * {
    padding: 1rem !important; 
  }
}

.table > :not(caption) > * > * {
  padding:1.2rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
</style>

<style>
.chance-img {
  --color: #8A9B0F; /* the border color */
  --border: 5px;   /* the border thickness*/
  --offset: 20px;   /* control the offset*/
  --gap: 5px;       /* the gap on hover */
  
  --_c: var(--color) var(--border), #0000 0 calc(100% - var(--border)),var(--color) 0;
  --_o: calc(3*var(--offset));
  padding: 
    calc(var(--gap) + var(--border))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border));
  background: 
    linear-gradient(      var(--_c)) var(--_o) var(--_o), 
    linear-gradient(90deg,var(--_c)) var(--_o) var(--_o);
  background-size: calc(100% - var(--_o)) calc(100% - var(--_o));
  background-repeat: no-repeat;
  transition: .5s;
  cursor: pointer;
}

/* .chance-img:hover {
  background-position: 0px 0px;
  background-size: calc(100% - var(--offset)) calc(100% - var(--offset));
  filter: grayscale(0);
} */

@media only screen and (max-width: 767px) {
  img {
  padding: calc(var(--border)) calc(var(--border)) calc(var(--border)) calc(var(--border));
  background-size: 100% 100%;
  }
}

.chance-msg p{
font-size: 16px;
font-weight:400;
line-height:32px;
text-align:justify;
}

.chance-img{
  margin-top:-2.55rem;
}

.chance-detail{
  margin-top:1.80rem;
}

ol {
  list-style: none;
}
.chance-detail ol li {
  margin: 0.25rem;
  font-weight:500; 
  font-size:14px;
}

@media screen and (max-width:  991px) {
  .chance-img,
  .chance-detail{
    order:1;
  }

  .chance-msg {
    order:2;
  }
}

@media screen and (max-width: 996px) {
  .chance-img{
    width:50%;
    display:block;
    margin:auto;
  }
}

@media screen and (max-width:  480px) {
  .chance-img{
    width:80%;
    display:block;
    margin:auto;
  }
}

a.underline-hover-effect {
  text-decoration: none;
  color: #ff7a00;
}

.underline-hover-effect {
  display: inline-block;
  padding-bottom: 0.25rem; 
  position: relative;
}

.underline-hover-effect::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: #001055;
  transition: width 0.25s ease-out;
}

.underline-hover-effect:hover::before {
  width: 100%;
}

@media (max-width: 767px) {
    .essential-section .col-lg-3 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}
</style>

<style>
.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #ff7A00!important;
}
</style>

<?php
 include 'sidebar/about_tmu_sidebar.php';
?>

<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 py-3"> 
<section>
<div class="container">
    <div class="row">
        <h2 class=" text-center d-block d-md-none"
            style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">About <span
                style="color:#ff7a00;">University</span></h2>
        <h2 class=" text-center d-none d-md-block"
            style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">About <span
                style="color:#ff7a00;">University</span></h2>
        <div class="col-lg-12">
            <h4 class="sublime" style="text-align-justify; margin-top:1rem;">On National Highway 9, 144 Km from New
                Delhi, TMU stands committed to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge and Right Conduct in all spheres
                of activity and aspires to be the ultimate destination for world-class education.</h4>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <a class="grid-item" href="images/about-img.jpg" data-lightbox="gallery-item"><img
                            src="images/about-img.jpg" alt="Gallery Thumb 1"></a>
                </div>
                <div class="col-md-8 mt-2">
                    <p style="text-align:justify; font-size:14px;">As a multi-disciplinary varsity, we offer
                        career-oriented programmes
                        at all levels, i.e., UG, PG, and Doctoral degrees across diverse streams <a
                            href="https://www.tmu.ac.in/medical-college-and-research-centre"
                            target="_blank">Medical</a>, <a
                            href="https://www.tmu.ac.in/dental-college-and-research-centre" target="_blank">Dental</a>, <a href="https://www.tmu.ac.in/college-of-pharmacy" target="_blank">Pharmacy</a>, <a href="https://www.tmu.ac.in/college-of-nursing" target="_blank">Nursing</a>, <a
                            href="https://www.tmu.ac.in/college-of-paramedical-sciences" target="_blank">Paramedical Sciences</a>, <a href="https://www.tmu.ac.in/department-of-physiotherapy" target="_blank">Physiotherapy</a>, <a href="https://www.tmu.ac.in/tmimt-college-of-management" target="_blank">Hospital Administration</a>, 
                            <a href="https://www.tmu.ac.in/tmimt-college-of-physical-education" target="_blank">Physical Education</a>, <a href="https://www.tmu.ac.in/tmimt-college-of-management" target="_blank">Management</a>, <a href="https://www.tmu.ac.in/faculty-of-engineering" target="_blank">Engineering</a>,<a href="https://www.tmu.ac.in/faculty-of-engineering" target="_blank">Polytechnic</a>,
                            <a href="https://www.tmu.ac.in/college-of-law-and-legal-studies" target="_blank">Law</a>, <a href="https://www.tmu.ac.in/college-of-fine-arts" target="_blank">Fine Arts</a>,<a href="https://www.tmu.ac.in/college-of-agriculture-sciences" target="_blank">Agriculture</a> and <a href="https://www.tmu.ac.in/centre-of-jain-studies" target="_blank">Jain Studies</a> to meet rising aspirations of the youth.
                    </p>

                    <p style="text-align:justify; font-size:14px;">TMU provides a unique environment for students to
                        grow under the guidance of experienced academicians and acquire the creative and technical skills demanded to make them industry ready. Our brilliant faculty and staff form a dedicated team committed to the
                        mission of the University. Being a dynamic, research-oriented University devoted to developing life-saving discoveries to address some of the most pressing global challenges.</p>

                    <p style="text-align:justify; font-size:14px;">Education at TMU is not just about books and
                        classrooms, but also about personality development and honing special skills. We provide an environment conducive to
                        teaching and learning supported by innovative practices. </p>
                    <p style="text-align:justify; font-size:14px;"> Being a best private university, we have state-of-the-art laboratories and research facilities, well-planned residential space, and an excellent ecosystem for extra-curricular activities.The campus is wi-fi enabled thus uses advanced technology to
                        impart education. Due to the availability of these essential building blocks, TMU is in a unique position to support the development of students in such a way that they gain lifelong learning skills and become competent professionals.</p>    
                </div>
                <!--<div class="col-md-12">-->
                    
                <!--</div>-->
            </div>
        </div>
    </div>
</div>    
</section>

<section>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="custom-box">
        <h2 style="text-align:center; text-transform:uppercase; color:#fff;">Our Colleges</h2>
        <div class="row">
          <div class="col-lg-6 col-xl-4">
            <ul class="custom-list" style="font-size: 14px; line-height: 30px; text-wrap:nowrap;">
              <li><a href="https://www.tmu.ac.in/medical-college-and-research-centre"><i class="fa-solid fa-arrow-right"></i>&nbsp;Medical College & Research Centre</li></a>
               <li><a href="https://www.tmu.ac.in/dental-college-and-research-centre"><i class="fa-solid fa-arrow-right"></i>&nbsp;Dental College & Resaerch Centre</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-nursing"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Nursing</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-pharmacy"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Pharmacy</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-paramedical-sciences"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Paramedical Sciences</li></a>
            </ul>
          </div>
          <div class="col-lg-6 col-xl-4">
            <ul class="custom-list" style="font-size: 14px; line-height: 30px; text-wrap:nowrap;">
               <li><a href="https://www.tmu.ac.in/department-of-physiotherapy"><i class="fa-solid fa-arrow-right"></i>&nbsp;Department of Physiotherapy</li></a>
               <li><a href="https://www.tmu.ac.in/tmimt-college-of-management"><i class="fa-solid fa-arrow-right"></i>&nbsp;TMIMT College of Management</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-law-and-legal-studies"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Law & Legal Studeis</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-computing-sciences-and-it"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Computing Sciences</li></a>
               <li><a href="https://www.tmu.ac.in/faculty-of-engineering"><i class="fa-solid fa-arrow-right"></i>&nbsp;Faculty of Engineering</li></a>
            </ul>
          </div>
          <div class="col-lg-6 col-xl-4">
            <ul class="custom-list" style="font-size: 14px; line-height: 30px; text-wrap:nowrap;">
               <li><a href="https://www.tmu.ac.in/college-of-fine-arts"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Fine Arts</li></a>
               <li><a href="https://www.tmu.ac.in/faculty-of-education"><i class="fa-solid fa-arrow-right"></i>&nbsp;Faculty of Education</li></a>
               <li><a href="https://www.tmu.ac.in/tmimt-college-of-physical-education"><i class="fa-solid fa-arrow-right"></i>&nbsp;TMIMT College of Physical Education</li></a>
               <li><a href="https://www.tmu.ac.in/college-of-agriculture-sciences"><i class="fa-solid fa-arrow-right"></i>&nbsp;College of Agriculture Sciences</li></a>
               <li><a href="https://www.tmu.ac.in/centre-of-jain-studies"><i class="fa-solid fa-arrow-right"></i>&nbsp;Centre for Jain Studies</li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<style>
.quote-container {
    display: flex;
    justify-content: center !important;
    align-items: center;
    height: 65vh;
    background-color: #f0f0f0;
  }
  .quote-box {
    width: 90%;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex;
    align-items: center;
  }
  .quote-symbol {
    font-size: 50px; /* Increase the font size of the quote symbol */
    margin: 0px;
    color: #888; /* Adjust the color of the quote symbol */
  }
  .quote-text {
    flex: 1;
    padding: 0 20px;
    text-align: right;
  }
  .quote-text h4 {
    font-size: 20px;
    margin-bottom: 0px;
    font-weight: 400;
    line-height: 24px;
    text-align: justify;
  }
  .quote-text p {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.1;
    color: #ff7a00;
    margin-bottom: 0px;
  }
  .profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .quote-text span{
    font-size: 30px;
    line-height: 24px;
    color: #b40000;
  }

  /* Responsive Styles */
  @media only screen and (max-width: 1050px) {
    .quote-box {
      flex-direction: column;
      text-align: center;
    }
    .quote-text {
      text-align: center;
    }
    .quote-text h2 {
        margin-top: 20px;
    }
  }
    
</style>
 
<div class="">
    <h2 class="tmu-text-primary text-center"><span>Message from the </span><span>Chancellor</span></h2>
  <div class="quote-box">
    <div class="profile-image">
      <img src="images/suresh_jain_tmu.png" alt="Profile Image">
    </div>
    <div class="quote-text"> 
    
      <h4> <i class="bi bi-quote" style="font-size:50px; color: #737373;"></i>It is my firm belief that harmonious development of the society can be achieved by enlightenment of the individual heart, mind and soul. This has become a prerequisite in today’s fast changing world where material gains have out-placed basic human values.</h4>
      
      <p>- Shri Suresh Jain</p>
      <p>Chancellor</p>
    </div>
  </div>
</div>

<section>
<div class="container mt-4">
<h2 style="text-align:center; text-transform:uppercase;">The Journey of TMU </h2>
  <div class="row">
    <div class="center-table" style="font-family:poppins;">
      <table class="table">
        <tbody>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2001</strong></h2></td>
            <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#ff7A00;">TMIMT College of Management</b><br>
            Established in 2001, TMIMT offers a range of management programmes including BBA, MBA, B.Com., and Ph.D., fostering excellence in business education.
        </td>
          </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2003</strong></h2></td>
            <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#ff7A00;">Faculty of Education</b><br>
            Founded in 2003, the Faculty of Education provides comprehensive programmes such as B.Ed., M.Ed., and Ph.D., contributing to the advancement of educational practices.     
           </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2005</strong></h2></td>
            <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#ff7A00;">Dental College & Research Centre</b><br>
            Inaugurated in 2005, the Dental College is a hub of dental excellence, offering BDS, MDS, and PhD programmes in oral healthcare.
                </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2007</strong></h2></td>
              <td style="text-align:justify; margin-bottom:1rem; font-size:14px; "><b style="color:#ff7A00;">Teerthanker Mahaveer Hospital</b><br>
              Established in 2007, the hospital, with more than 800 beds, caters to the medical needs of a vast area, embodying TMU's commitment to healthcare accessibility.
         </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2></td>
              <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">Medical College & Research Centre</b><br>
              Founded in 2008, the Medical College offers MBBS, MD/MS, M.Sc. Medical, and Ph.D. programmes, shaping future medical professionals.         
         </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2></td>
            <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">Establishment of Teerthanker Mahaveer University</b><br>
            Established in 2008, the College of Pharmacy offers a diverse array of programmes, equipping students with skills for patient care and healthcare systems.
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2></td>
            <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Pharmacy</b><br>
            Inaugurated in 2008, the Faculty offers AICTE-approved programmes in various engineering disciplines, fostering academic excellence and innovation.        
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2></td>
        <td style="text-align:justify; font-size:14px; " class="mb-3"><b style="color:#ff7A00;">Faculty of Engineering</b><br>
        Inaugurated in 2008, the Faculty offers AICTE-approved programmes in various engineering disciplines, fostering academic excellence and innovation.        
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2009</strong></h2></td>
        <td style="text-align:justify; font-size:14px; " class="mb-3"><b style="color:#ff7A00;">College of Nursing</b><br>
        Formed in 2009, the College offers a spectrum of nursing programmes, preparing students for diverse roles in the healthcare sector.
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2></td>
          <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Paramedical Sciences</b><br>
          Introduced in 2010, the College offers programmes in medical lab technology, X-ray technology, optometry, forensic science, and more, catering to pre-hospital emergency services.        
         </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2></td>
          <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Physiotherapy</b><br>
          Founded in 2010, the College offers programmes aimed at helping patients maintain, recover, or improve their physical abilities, contributing to rehabilitative medicine.        
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2></td>
          <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Law & Legal Studies</b><br>
          Established in 2010, the College attracts bright minds aspiring to contribute meaningfully to the legal profession, offering integrated LL.B. programmes and a Ph.D. in law.      
         </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2></td>
          <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">University Polytechnic</b><br>
          Initiated in 2010, the Polytechnic offers diploma programmes in various engineering disciplines, nurturing skilled personnel for the industrial sector.        
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2011</strong></h2></td>
            <td style="text-align:justify;font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Fine Arts</b><br>
            Established in 2011, the College offers programmes in fine arts, building on historical perspectives, and nurturing creativity in students.          
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2011</strong></h2></td>
            <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">TMIMT College of Physical Education</b><br>
            Founded in 2011, the College offers programmes in physical education, emphasising the importance of fitness and wellness in society.          
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2012</strong></h2></td>
            <td style="text-align:justify;font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Jain Studies</b><br>
            Established in 2012, the College imparts moral education, comparative studies of different philosophies, and conducts research in religious studies.          
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2014</strong></h2></td>
            <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Computing Sciences & IT</b><br>
            Established in 2014, the College offers programmes in computer science, animation, and IT, providing essential education to aspiring technologists.          
        </tr>
          <tr>
            <td><h2 style="color:#001055;"><strong style="font-weight:600;">2014</strong></h2></td>
            <td style="text-align:justify; font-size:14px;" class="mb-3"><b style="color:#ff7A00;">College of Agriculture Sciences</b><br>
            Inaugurated in 2014, the College focuses on core areas of agriculture and environmental studies, aligning with the recommendations of the Vth Deans Committee of ICAR.        
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!-- Key Facts -->
<section >
<div class="container mb-3 mt-5 w-100">
<h2 style="text-align:center; text-transform:uppercase;">Numbers That Define Us</h2>
<div class="row essential-section">
    <div class="col-lg-3 col-sm-6 text-center">
        <i class="fa-solid fa-user-graduate" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
        <div class="counter counter-lined" style="color:#000; font-size:35px;">15K+</div>
        <p style="color:#000;">Students</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center">
        <i class="fa-solid fa-handshake" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
        <div class="counter counter-lined" style="color:#000; font-size:35px;">82%</div>
        <p style="color:#000;">Placements</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center">
        <i class="fa-solid fa-people-group" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
        <div class="counter counter-lined" style="color:#000; font-size:35px;">800+</div>
        <p style="color:#000;">Faculties</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center">
        <i class="fa-solid fa-certificate" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
        <div class="counter counter-lined" style="color:#000; font-size:35px;">1700+</div>
        <p style="color:#000;">Patents</p>
    </div>
</div>

  </div>
</section>
<!--  -->

<!-- Campus Initiative  -->
<div class="container mt-2">
    <div style="text-align:center;">
        <h2 class="text-uppercase">TMU's Campus Initiatives</h2>
    </div>
</div>


<div class="container">
    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <!-- Remove the carousel controls -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <article class="entry event col-12 mb-4">
                    <!-- Content for Solar Energy -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Water_Recycling_System.JPG" alt="Water Recycling System at TMU"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                                <h4>Preserving Water Resources</h4>
                            </div>
                            <div class="entry-content my-3">
                                <p class="mb-0">Our advanced water recycling system efficiently captures and treats wastewater from campus facilities, ensuring that water is reused for landscaping and other non-potable purposes. This innovative system helps conserve water resources and minimises our impact on the environment.</p>
                                    &nbsp;
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Solar-Energy.jpg" alt="Solar energy at TMU"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                                <h4>Adopting Clean Energy Solutions</h4>
                            </div>
                            <div class="entry-content my-3">
                                <p class="mb-0">TMU is proud to utilise solar energy as a primary source of power for our campus. By installing solar panels on buildings and other structures, we harness renewable energy from the sun, reducing our reliance on traditional electricity sources and decreasing our carbon footprint.</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Eco-Green_Campus.jpg" alt="Eco green campus at TMU"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                                <h4>Creating Sustainable Landscapes</h4>
                            </div>
                            <div class="entry-content my-3">
                                <p class="mb-0">Our commitment to greenery enhancement involves the cultivation of native plant species, the creation of green spaces, and the implementation of sustainable landscaping practices. These efforts not only beautify our campus but also promote biodiversity, improve air quality, and provide a peaceful environment for studies.</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
        </div>
        <!-- Keep only the carousel indicators at the bottom -->
        <ol class="carousel-indicators" style="bottom: 10px;">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>
    </div>
</div>
<!-- ends Here -->

<!-- Campus Facilities Starts Here-->
<section>
<div class="container-fluid d-none d-md-block">

<div style="text-align:center; margin-top:2rem;">
  <h2 class="text-uppercase">Campus Facilities</h2>
  <p style="text-align:center; padding:0 30px;">Many students at TMU reside in university dormitories, apartments, and townhouses, as well as at the TMU Inn and Conference Center. Additionally, there are Greek houses available for six fraternities and sororities. New students are assured housing at TMU. </p>
</div>
</div>
    <div class="container d-none d-md-block">
    <div class="row justify-content-center">
<div class="col-md-3 text-center">
    <a href="">
        <img class="img-fluid mb-2" src="images/campus_facilities/Hospital_02.JPG" alt="Image">
    </a>
    <h4 class="mb-0">Hospital Services</h4>
    <p>Access to Comprehensive Medical Care</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/Hostel.jpg" alt="Image">
    </a>
    <h4 class="mb-0">Hostel Accommodation</h4>
    <p >Comfortable Residency for Students</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/Faculty_Residences.jpg" alt="Image">
    </a>
    <h4 class="mb-0">Faculty Residences</h4>
    <p>Faculty Accommodation Within Campus</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/Indoor.jpg" alt="Image">
    </a>
    <h4 class="mb-0" >Indoor Stadiums</h4>
    <p>Modern Sports Facilities</p>
</div>
<div class="col-md-3 text-center">
    <a href="">
        <img class="img-fluid mb-2" src="images/campus_facilities/Gym.JPG" alt="Image">
    </a>
    <h4 class="mb-0">Gym Facilities (for Both Girls and Boys)</h4>
    <p>Fitness Centres and Facilities</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/Outdoor.jpg" alt="Image">
    </a>
    <h4 class="mb-0"> Outdoor Stadiums</h4>
    <p >Modern Sports Facilities</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/CCTV.jpg" alt="Image">
    </a>
    <h4 class="mb-0">24/7 Surveillance System</h4>
    <p>Ensuring Safety with more than 3600 Night Vision Cameras</p>
</div>
<div class="col-md-3 text-center" >
    <a href="#">
        <img class="img-fluid mb-2" src="images/campus_facilities/E_lobby.jpg" alt="Image">
    </a>
    <h4 class="mb-0" >E-Lobby (Food Court)</h4>
    <p>Varied Dining Choices at E-Lobby</p>
</div>
</div>
</div>
</section> 

<div class="section bg-transparent my-0 pt-2 pb-4 py-lg-5 d-block d-md-none">
  <div class="container">
    <div style="text-align:center; margin-top:2rem;">
      <h2 class="text-uppercase">Campus Facilities</h2>
      <p style="text-align:center; padding:0 30px;">Many students at TMU reside in university dormitories, apartments, and townhouses, as well as at the TMU Inn and Conference Center. Additionally, there are Greek houses available for six fraternities and sororities. New students are assured housing at TMU. </p>
    </div>
		<div class="container">
    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <!-- Remove the carousel controls -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Solar Energy -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-12 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Hospital_02.JPG" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 p-4">
                            <div class="entry-title nott">
                                  <h4 class="mb-0">Hospital Services</h4>
                                  <p>Access to Comprehensive Medical Care</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Hostel.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                              <h4 class="mb-0">Hostel Accommodation</h4>
                              <p >Comfortable Residency for Students</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Faculty_Residences.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                                <h4 class="mb-0">Faculty Residences</h4>
                                <p>Faculty Accommodation Within Campus</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Indoor.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                              <h4 class="mb-0" >Indoor Stadiums</h4>
                              <p>Modern Sports Facilities</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Gym.JPG" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                              <h4 class="mb-0">Gym Facilities (for Both Girls and Boys)</h4>
                              <p>Fitness Centres and Facilities</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/Outdoor.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                            <h4 class="mb-0"> Outdoor Stadiums</h4>
                              <p >Modern Sports Facilities</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/CCTV.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                              <h4 class="mb-0">24/7 Surveillance System</h4>
                              <p>Ensuring Safety with more than 3600 Night Vision Cameras</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                    <!-- Content for Waste Recycling System -->
                    <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-4 col-sm-12 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="images/campus_facilities/E_lobby.jpg" alt="Inventore voluptates velit totam ipsa tenetur"
                                    class="rounded-2 h-100 object-cover">
                                <div class="bg-overlay">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-12 p-4">
                            <div class="entry-title nott">
                              <h4 class="mb-0" >E-Lobby (Food Court)</h4>
                              <p>Varied Dining Choices at E-Lobby</p>
                            </div>
                        </div>
                      </div>
                </article>
            </div>
            

        </div>
        <!-- Keep only the carousel indicators at the bottom -->
        <ol class="carousel-indicators" style="bottom: 10px;">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="5"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="6"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="7"></li>

        </ol>
    </div>
</div>
<!-- ends Here -->
	</div>
</div>

       </div>
    </div>  
</section>                           

<?php
 include 'footer.php';
?>