<?php
include 'head.php';
?>

<section id="content">
  <div class="content-wrap py-0">
    <div class="container-fluid my-0  px-0 px-md-3">
      <div class="row">

        <?php
        include 'sidebar/iqac_erp.php';
        ?>

        <div class="col-12 col-sm-9 col-lg-10 mt-3 mt-sm-0 pt-2 pt-sm-5 ">
          <div class="row mx-0">
          <h1 class="tmu-text-primary tmu-page-heading"><span> Enterprise Resource </span><span> Planning (ERP)</span></h1>

            <p class="mt-0">Teerthanker Mahaveer University (TMU) began its Inception for ERP in 2015 and Implementation and Deployment started by 2017-18.</p>
            <p class="mt-0">It is based on Microsoft Dynamics Nav and .Net Framework with SQL Server Database. It is deployed on 9 Server Cluster. We formed an In House Team for maintenance and support in 2020 and also further developments based on the .Net Framework.</p>
            <p class="mt-0">Most of the processes related to academics and examination are automated. Some events are user-triggered but moving towards automating maximum processes.</p>
            <p class="mt-0">The various Modules and Key Activities implemented in ERP at TMU are:</p>

            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>S.No.</th>
                  <th>Main Modules</th>
                  <th>Sub-Modules</th>
                  <th>View</th>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Planning and Development</td>
                    <td><b>Academics</b>
                      <ul class="m-ol-list ps-4">
                        <li>Student IDCard Generation</li>
                        <li>Student Attendance</li>
                        <li>Scheme of Work</li>
                        <li>Student Assignments</li>
                        <li>Student Fine</li>
                        <li>Course Creation</li>
                        <li>Student Course Registration</li>
                        <li>Student Group</li>
                        <li>Batches Creation</li>
                        <li>Time Table</li>
                        <li>Internals & External Marks Entry</li>
                        <li>Subject</li>
                        <li>Student Promotion</li>
                        <li>Student Detainee</li>
                        <li>Semester</li>
                        <li>Faculty Load Calculation</li>
                        <li>Course wise Faculty Allotment</li>
                        <li>Course-wise Performance</li>
                        <li>Course Syllabus</li>
                        <li>Miscellaneous Events Notification</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/academic-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Faculty Portal</b>
                      <ul class="m-ol-list ps-4">
                        <li>Faculty Login</li>
                        <li>Faculty Profile</li>
                        <li>Create and View Time Table</li>
                        <li>Assignments</li>
                        <li>Access to Course and Program Details</li>
                        <li>Enter Student Marks</li>
                        <li>Mark Student Attendance via Mobile or Desktop</li>
                        <li>View Faculty Load</li>
                        <li>View Academic Calendar</li>
                        <li>Make Transport Requests</li>
                        <li>Principal and HOD Approve and Process Student Marks</li>
                        <li>Principal and HOD Approve and Finalize Detainee List</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/faculty-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td class="text-center">2.</td>
                    <td>Administration (including Hospital Administration and Medical Records)</td>
                    <td><b>Hostel & Mess Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Hostel Enquiry Capturing</li>
                        <li>Hostel Fee Collection</li>
                        <li>Hostel Rooms</li>
                        <li>Hostel Maintenance</li>
                        <li>Room Allocation</li>
                        <li>Room Vacant</li>
                        <li>No Dues Generation</li>
                        <li>Hostel Attendance</li>
                        <li>Room Change</li>
                        <li>Mess Menu</li>
                        <li>Mess Attendance</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/hostel-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Transport Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Vehicle Record-Keeping</li>
                        <li>Vehicle Maintenance</li>
                        <li>Route Allotment</li>
                        <li>Student Transport Enquiry</li>
                        <li>Registration</li>
                        <li>Transport Staff Allotment</li>
                        <li>Fuel Ledger Entries</li>
                        <li>Refueling Records Entries</li>
                        <li>Tyre & Battery Maintenance</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/transport-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Placement Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Placement Register</li>
                        <li>Company List for Placement</li>
                        <li>Student Eligible for Placements</li>
                        <li>Placement Schedule</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/placement-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>HR & Payroll</b>
                      <ul class="m-ol-list ps-4">
                        <li>Hiring Procedure</li>
                        <li>Employee Records Maintenance</li>
                        <li>Employee-wise Shift Allotment</li>
                        <li>Manpower Requisition</li>
                        <li>Online Leave Application</li>
                        <li>Approval Process</li>
                        <li>Leave Posting</li>
                        <li>Employee Attendance Automation using Biometric Machines</li>
                        <li>Earning Arrears & Salary Calculation</li>
                        <li>Employee Taxation Planning</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/hr-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Employee Portal</b>
                      <ul class="m-ol-list ps-4">
                        <li>Employees have access to their daily punch data</li>
                        <li>View Attendance</li>
                        <li>Appraisal Forms</li>
                        <li>Mark Leaves</li>
                        <li>View Leave Balance</li>
                        <li>Tour Claims</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/employee-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Security</b></td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/security-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td class="text-center">3.</td>
                    <td>Finance and Accounts</td>
                    <td><b>Fee Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Fee Set-up</li>
                        <li>Fee Classification</li>
                        <li>Fee Collection</li>
                        <li>Discounts</li>
                        <li>Fee Statement</li>
                        <li>Daily Collection</li>
                        <li>Bank Collection</li>
                        <li>Payment Reconciliation</li>
                        <li>Account Summary</li>
                        <li>Fee Due</li>
                        <li>Fee payment linked to Student Portal</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/fee-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Purchase</b>
                      <ul class="m-ol-list ps-4">
                        <li>Vendor & Item Registration</li>
                        <li>PO & PI entries</li>
                        <li>Warehouse Maintenance</li>
                        <li>Indent Creation</li>
                        <li>Approval for Departments</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/purchase-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td class="text-center">4.</td>
                    <td>Student Admission and Support</td>
                    <td><b>Student Admission Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Student Enquiry</li>
                        <li>Application</li>
                        <li>Creation of Student</li>
                        <li>Program Identification</li>
                        <li>College Identification</li>
                        <li>Student Registration</li>
                        <li>Student Selection Procedure</li>
                        <li>Analysis from inquiry till registration</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/admissions-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><b>Student Portal</b>
                      <ul class="m-ol-list ps-4">
                        <li>Student Login</li>
                        <li>Student Profile</li>
                        <li>Student Course-wise Details</li>
                        <li>Student TimeTable</li>
                        <li>Student Fees Payment</li>
                        <li>Student Examination Details (Internal/External)</li>
                        <li>Syllabus</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/student-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>

                  <tr>
                    <td class="text-center">5.</td>
                    <td>Examination</td>
                    <td><b>Examination Management</b>
                      <ul class="m-ol-list ps-4">
                        <li>Examination Form</li>
                        <li>Examination Schedule</li>
                        <li>Exam Center & Room/Seat Allocation</li>
                        <li>Internal & External Date Sheets</li>
                        <li>Internal & External Room Statements</li>
                        <li>Invigilation & Faculty Allocation</li>
                        <li>Copy Distribution & Collection</li>
                        <li>Coding-Decoding</li>
                        <li>External Marks Entry</li>
                        <li>Admit Cards</li>
                        <li>Award Lists</li>
                        <li>Result Processing</li>
                        <li>Tabulation Sheet</li>
                        <li>Consolidated Marksheet</li>
                        <li>Degree Certificate</li>
                        <li>Re-appear Process</li>
                        <li>Hall Ticket</li>
                        <li>Re-evaluation</li>
                        <li>Result Declaration on Student and Principal Portal</li>
                        <li>Result Analysis</li>
                      </ul>
                    </td>
                    <td class="text-center"><a href="https://www.tmu.ac.in/tmu/iqac-cell/erp/examination-module"><i class="fa-solid fa-file-pdf"></i></a></td>
                  </tr>
                </tbody>
              </table>
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