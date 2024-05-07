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


  .table {
    width: 1000px;
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

  /* .btn-underline */

  .button-container {
    text-align: center;
  }

  .button.button-border {
    --cnvs-btn-border-color: #001055;
    border: var(--cnvs-btn-border-width) solid #001055 !important;
    background: transparent;
    color: #001055;
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

          <div class="row mx-2">
            <h2 class=" text-center" style="color:#001055;
                      text-transform: capitalize;
                      font-weight:700!important; font-size:2.4vmax">Commemorative<span class="d-block d-sm-inline"> Days</span></h2>
            <h3><strong>National and International Commemorative Days, Events and Festivals</strong></h3>
            <p>Various activities has been organised by the different colleges / department of the university for
              inculcating values for becoming responsible citizens.</p>
            <table class="table table-bordered table-striped table-center" width="600px">
              <thead>
                <th>#</th>
                <th>Name of Activities</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>World Feeding Day</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>New Year</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Republic Day</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Independence Day</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Global Hand Washing Day</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Christmas Day</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Engineers Day</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Teachers Day</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Children’s Day</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Constitution Day</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>National Unity Day</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Mathematics Day</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>World Pharmacy Day</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Doctors Day</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>World Literacy Day</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>World Physiotherapy Day</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Nursing Day</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>World Heart Day</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>World Mental Health Day</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>World Anti-Tobacco Day</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td>Energy Conservation Day</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>National Youth Day</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td>World Health Day</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>Earth Day</td>
                </tr>

              </tbody>
            </table>

            <div class="button-container">
              <a href="https://www.tmu.ac.in/news/events-list-commemorative-days" class="button button-border button-rounded "><i class="bi-book"></i>Click Here To View
                News</a>
            </div>

          </div>
        </div>



      </div>
    </div>
  </div>

</section><!-- #content end -->


<br /><br />


<?php
include 'footer.php';
?>