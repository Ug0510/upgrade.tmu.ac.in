<?php
include 'head.php';
?>

<?php
 include 'sidebar/nep_sidebar.php';
?>

<style>
.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
</style>

				<div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">
                <h2 class=" text-center" style="color:#001055;
                          text-transform: capitalize;
                          font-weight:700!important; font-size:2.4vmax">Identified List of Disciplines <span
                        class="d-block d-sm-inline"> along with its related Minor</span></h2>
                    
                    <div class="container">
                            <div class="table-responsive">
                            <table class="table table-bordered">
                    <thead>
<tr><th>S.No.</th><th> Faculty Name</th><th> Department/College</th><th> Programme</th><th> Major Discipline</th><th> Related Minor Discipline </th></tr>
</thead>
<tbody>
<tr><td>1</td><td> Faculty of Commerce Management & Law</td><td> Department of Commerce</td><td> B. Com</td><td> Commerce</td><td> Tax Laws & Ethics, Digital Marketing</td></tr>
<tr><td>2</td><td> Faculty of Engineering</td><td> Department of Computing Sciences & IT</td><td> BCA</td><td> Computer Applications</td><td> Law (Cyber Laws) Management Economics, Mathematics, Data Science, Computer Science</td></tr>
<tr><td>3</td><td> Faculty of Commerce Management & Law</td><td> Department of Management Studies</td><td> BBA</td><td> Management</td><td> Economics & Finance Business Analytics</td></tr>
<tr><td>4</td><td> Faculty of Engineering</td><td> Department of Physics</td><td> B.Sc</td><td> Physics</td><td> Mathematics, Chemistry, Data Science, Computer Applications</td></tr>
<tr><td>5</td><td> Faculty of Engineering</td><td> Department of Chemistry</td><td> B.Sc</td><td> Chemistry</td><td> Mathematics, Physics, Data Science, Computer Applications</td></tr>
<tr><td>6</td><td> Faculty of Engineering</td><td> Department of Mathematics</td><td> B.Sc</td><td> Mathematics</td><td> Physics, Chemistry, Data Science</td></tr>
<tr><td>7</td><td> </td><td></td><td>B.Sc</td><td> Botany</td><td> Chemistry, Mathematics, Zoology, Computer Applications</td><tr>
<tr><td>8</td><td> </td><td></td><td>B.Sc</td><td> Zoology</td><td> Chemistry, Mathematics, Botany, Computer Applications</td></tr>
<tr><td>9</td><td> Faculty of Engineering</td><td> Department of Computing Sciences & IT</td><td> B.Sc</td><td> Computer Science</td><td> Data Science, Physics, Mathematics, Chemistry, Economics, Management, Computer Application, Cyber security & Information Security</td></tr>
<tr><td>10</td><td> Faculty of Humanities & Social sciences</td><td> Department of English</td><td> BA</td><td> English</td><td> Economics, Psychology</td></tr>
<tr><td>11</td><td> Faculty of Humanities & Social sciences</td><td> Department of Economics</td><td> BA</td><td> Economics</td><td> English, Psychology, Statistics, Computer Applications, Management </td></tr>
<tr><td>12</td><td> Faculty of Humanities & Social sciences</td><td> Department of Psychology</td><td> BA</td><td> Psychology</td><td> English, Economics, Management, Statistics</td></tr>
</tbody>
</table>
                            </div>
                            </div>

                    </div>
            </div>
        </div>
    </section>


<?php 
include 'footer.php';
 ?>