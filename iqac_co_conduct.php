<?php
include 'head.php';
?>

<style>
  @media (max-width: 992px) {
    .blocks-faqs-3 .sticky-section {
      position: relative !important;
    }
  }

  .blocks-faqs-3 .faqs .toggle {
    background-color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.085);
    width: 98%;
    /* Set width to 100% */
    margin: 0 auto;
    /* Center horizontally */
  }

  .blocks-faqs-3 .faqs .toggle-header {
    padding: 15px 20px;
    margin: 0;
    background-color: #001055;
    color: #fff;
    font-size: 18px;
    letter-spacing: 1px;
  }

  .blocks-faqs-3 .faqs .toggle-content {
    border-top: 1px solid #000;
    padding: 20px 25px;
  }

  h3 {
    margin: 0 0 2px 0;
  }

  .font-body {
    font-size: 22px;
    color: #001055;
    font-weight: 700;
  }

  p {
    margin-bottom: 15px !important;
  }


  .fa-solid.fa-file-pdf:hover {
    color: #001055;
    justify-content: center;
  }

  .centered-icon {
    text-align: center;
  }

  .text-middle {
    color: #001055;
    text-transform: capitalize;
    font-weight: 700 !important;
    font-size: 2.4vmax;
    margin: 0 0 10px 0;
    text-align: center;
  }

  .vh-75 {
    height: 0vh !important;
  }

  .m-ol-list li::marker {
    font-size: 1.6vmax;
    color: #FF7900;
    font-weight: 700;
  }

  .m-ol-list b {
    /* color:#FF7900; */
    color: #001055;
    font-size: 1.4vmax;
  }

  .centered-icon {
    text-align: center;
  }
</style>

<section id="content">
  <div class="content-wrap py-0">



    <div class="container-fluid my-0  px-0 px-md-3">


      <div class="row">

        <?php
        include 'sidebar/institutional_values_sidebar.php';
        ?>

        <div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Code of Conduct <span class="d-block d-sm-inline"> for Employee</span></h2>
            <div class="row justify-content-center gutter-50 blocks-faqs-3">
              <div class="clear"></div>
              <!-- FAQs - Filter Content
                    ============================================= -->
              <div id="faqs" class="faqs">
                <div id="marketplace" class="page-section pt-5">
                  <div class="toggle active faq pb-0 mb-3">
                    <div class="toggle-header">
                      <div class="toggle-title fw-medium ps-1 fw-bold color-white">
                        COMMITTEE
                      </div>
                      <div class="toggle-icon">
                        <i class="toggle-closed fa-solid fa-plus"></i>
                        <i class="toggle-open fa-solid fa-minus"></i>
                      </div>
                    </div>
                    <div class="toggle-content ps-4">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th>#</th>
                          <th>Name & Designation</th>
                          <th>Capacity</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Prof. Raghuvir Singh, Vice Chancellor</td>
                            <td>Chairperson</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Prof. Manjula Jain, Associate Dean (Academics)</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Dr. M. P. Singh, Director (Student Welfare)</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Prof. Vipin Jain, Principal, TMIMT College of Management</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Dr. Aditya Sharma, Registrar</td>
                            <td>Member Secretary</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div id="marketplace" class="page-section pt-0">
                  <div class="toggle faq pb-0 mb-3">
                    <div class="toggle-header">
                      <div class="toggle-title fw-medium ps-1 fw-bold color-white">
                        POLICY
                      </div>
                      <div class="toggle-icon">
                        <i class="toggle-closed fa-solid fa-plus"></i>
                        <i class="toggle-open fa-solid fa-minus"></i>
                      </div>
                    </div>
                    <div class="toggle-content ps-4">

                      <table class="table table-bordered table-striped">
                        <thead>
                          <th>#</th>
                          <th>Description</th>
                          <th>View More</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Code of Conduct for Employees of the University</td>
                            <td class="centered-icon"><a href="https://www.tmu.ac.in/pdf/employee_code_of_conduct.pdf"><i class="fa-solid fa-file-pdf"></i></a></td>
                          </tr>
                      </table>
                    </div>
                  </div>
                </div>

                <div id="marketplace" class="page-section pt-0">
                  <div class="toggle active faq pb-0 mb-3">
                    <div class="toggle-header">
                      <div class="toggle-title fw-medium ps-1 fw-bold color-white">
                        COMMITTEE
                      </div>
                      <div class="toggle-icon">
                        <i class="toggle-closed fa-solid fa-plus"></i>
                        <i class="toggle-open fa-solid fa-minus"></i>
                      </div>
                    </div>
                    <div class="toggle-content ps-4">
                      <ol class="ps-5 m-ol-list">
                        <li>Students are expected to maintain decorum in their behavior and habits, at all times, befitting the prestige of the College and the University. Students are also expected to dress decently in all public places.</li>
                        <li style="margin-top:10px;">Students are advised to attend all classes and to ensure that they maintain the attendance criteria as laid down in the university ordinance governing the same. A minimum of 75% attendance (except in cases where the concerned regulatory council has stipulated a higher percentage) in lectures, presentations and practical classes individually in each course/subject is mandatory to appear in end/final term examinations. In case of deviation, university is empowered to detain the student from appearing from end semester/year examinations. For details, students are advised to read the <a href="https://www.tmu.ac.in/tmu/exam-ordinance">university ordinance</a> carefully.</li>
                        <li style="margin-top:10px;">Participation of students in academic activities such as seminar/workshop, industrial visits is compulsory. Non participation without prior permission, may adversely affect the student’s internal assessment performance.</li>
                        <li style="margin-top:10px;">If a student absents himself/herself from the classes for seven consecutive working days without prior permission his/her name may be struck off the rolls.</li>
                        <li style="margin-top:10px;">During teaching hours students are not allowed to leave the college campus without written permission from class coordinator.</li>
                        <li style="margin-top:10px;">Students are prohibited from engaging in acts of intimidation, violence or abuse against any of the students, employees, staff and faculty members of the university. Students are expected to show sincere, decent and cordial attitude towards their classmates, students of other programs, staff, faculty and other employees of the university.</li>
                        <li style="margin-top:10px;">Students’ loitering in the campus is prohibited.</li>
                        <li style="margin-top:10px;">Ragging is an inhuman act and is banned both inside and outside the campus of the University. The Honorable Supreme Court of India has taken serious cognizance of the offence of ragging and has issued strict directives to ensure its elimination. Students shall not directly or indirectly indulge in, aid or abet any activity that might be construed as ragging. Violators will face necessary disciplinary and legal action includes lodging of a criminal case, against the student at the Police Station. (For details, refer to Anti-ragging policy of the university.)</li>
                        <li style="margin-top:10px;">Use of cell phone is strictly prohibited in university teaching areas. The cell phone will be confiscated, if found being used in prohibited area.</li>
                        <li style="margin-top:10px;">Smoking, chewing pan, pan-masala, gutka, gambling, consumption of alcoholic drinks and use of hallucinogenic drugs and other illegal substances, or the possession of such substances, anywhere in the University campus, is strictly forbidden.</li>
                        <li style="margin-top:10px;">Carrying any explosive/fire arm, and/or weapon inside the campus is strictly prohibited.</li>
                        <li style="margin-top:10px;">Non-vegetarian food is strictly prohibited in the campus.</li>
                        <li style="margin-top:10px;">Students are advised not to indulge in any prohibited, illegal and unethical, immoral activities inside and/or outside the College/University campus, or else, they will be liable for punishment as per University rules.</li>
                        <li style="margin-top:10px;">Safety of all personal valuables/belongings will be the responsibility of the student.</li>
                        <li style="margin-top:10px;">If the student is found involved in activities resulting in direct or indirect loss/damage to the College/ University, the same shall be borne by the student. He/ She will be asked to compensate the university for the same.</li>
                        <li style="margin-top:10px;">Adherence to dress code is compulsory for academic and allied activities in the campus.</li>
                        <li style="margin-top:10px;">Each student will be issued an Identity card which is non-transferable. The student is expected to keep the ID card on his/her person while in the university campus and especially when appearing in tests and examinations, etc. and also when going out of the campus.</li>
                        <li style="margin-top:10px;">College/University would not be liable for any compensation/claim whatsoever under any circumstances, in case of any casualty/injury or otherwise to any student during his/her academic course inside or outside the College/ University campus.</li>
                        <li style="margin-top:10px;">In case of any dispute on any matter, the decision of the university would be final and binding.</li>
                        <li style="margin-top:10px;">Competent authority of the university possesses the right to modify the aforesaid rules and/or insert/delete from time to time in future and the same shall be binding upon the students.</li>
                      </ol>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>



</section><!-- #content end -->




<?php
include 'footer.php';
?>