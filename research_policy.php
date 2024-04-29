<?php
 include 'head.php';
?>

<style>

h3{
margin:0 0 2px 0;	
}

.font-body {
  font-size:22px;
  color:#001055;
  font-weight: 700;
}

p {
  margin-bottom:15px!important; 
}

.table > :not(caption) > * > * {
  padding:0.5rem !important;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}

.fa-solid.fa-file-pdf:hover {
color: #001055;
justify-content:center;
}

.centered-icon {
    text-align: center;
}
.text-middle{
color:#001055;
text-transform: capitalize; 
font-weight:700!important;
font-size:2.4vmax;
margin:0 0 10px 0;
text-align: center;
}

.vh-75 {
height: 0vh !important;
}
</style>

<style>
    button,
input {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

a {
    color: #f96332;
}

a:hover,
a:focus {
    color: #f96332;
}

p {
    line-height: 1.61em;
    font-weight: 300;
    font-size: 1.2em;
}

.category {
    text-transform: capitalize;
    font-weight: 700;
    color: #9A9A9A;
}

body {
    color: #2c2c2c;
    font-size: 14px;
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    overflow-x: hidden;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

.nav-item .nav-link,
.nav-tabs .nav-link {
    -webkit-transition: all 300ms ease 0s;
    -moz-transition: all 300ms ease 0s;
    -o-transition: all 300ms ease 0s;
    -ms-transition: all 300ms ease 0s;
    transition: all 300ms ease 0s;
}

.card a {
    -webkit-transition: all 150ms ease 0s;
    -moz-transition: all 150ms ease 0s;
    -o-transition: all 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: all 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"] i {
    -webkit-transition: transform 150ms ease 0s;
    -moz-transition: transform 150ms ease 0s;
    -o-transition: transform 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: transform 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}


.now-ui-icons {
    display: inline-block;
    font: normal normal normal 14px/1 'Nucleo Outline';
    font-size: inherit;
    speak: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

@-webkit-keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes nc-icon-spin {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    }
}

@keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.now-ui-icons.objects_umbrella-13:before {
    content: "\ea5f";
}

.now-ui-icons.shopping_cart-simple:before {
    content: "\ea1d";
}

.now-ui-icons.shopping_shop:before {
    content: "\ea50";
}

.now-ui-icons.ui-2_settings-90:before {
    content: "\ea4b";
}

.nav-tabs {
    border: 0;
    padding: 15px 0.7rem;
}

.nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
    box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
}

.card .nav-tabs {
    border-top-right-radius: 0.1875rem;
    border-top-left-radius: 0.1875rem;
}

.nav-tabs>.nav-item>.nav-link {
    color: #888888;
    margin: 0;
    margin-right: 5px;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 30px;
    font-size: 14px;
    padding: 11px 23px;
    line-height: 1.5;
}

.nav-tabs>.nav-item>.nav-link:hover {
    background-color: transparent;
}

.nav-tabs>.nav-item>.nav-link.active {
    background-color: #444;
    border-radius: 30px;
    color: #FFFFFF;
}

.nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    font-size: 14px;
    position: relative;
    top: 1px;
    margin-right: 3px;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
    color: #FFFFFF;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
    background-color: #ff8A00;
    color: #FFFFFF;
}

.card {
    border: 0;
    border-radius: 0.1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.card .card-header {
    background-color: transparent;
    border-bottom: 0;
    background-color: transparent;
    border-radius: 0;
    padding: 0;
}

.card[data-background-color="orange"] {
    background-color: #f96332;
}

.card[data-background-color="red"] {
    background-color: #FF3636;
}

.card[data-background-color="yellow"] {
    background-color: #FFB236;
}

.card[data-background-color="blue"] {
    background-color: #2CA8FF;
}

.card[data-background-color="green"] {
    background-color: #15b60d;
}

[data-background-color="orange"] {
    background-color: #001055;
}

[data-background-color="black"] {
    background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) p {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    color: #FFFFFF;
}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@media screen and (max-width: 768px) {
    .nav-tabs {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    .nav-tabs .nav-item>.nav-link {
        margin-bottom: 5px;
    }
}

.container-fluid {
padding-right: 40px;
padding-left: 40px;
}

.m-ol-list li::marker{
    font-size: 1.6vmax;
    color:#FF7A00;
    font-weight: 700;
 }
.m-ol-list b{
    /* color:#FF7A00; */
    color:#001055;
    font-size: 1.4vmax;
 }

</style>


<?php
include 'sidebar/research_sidebar.php';
?>

        <div class="col-12 col-md-9 col-lg-9 mt-3 mt-sm-0 pt-5 ">

          <div class="row mx-0">
            <h2 class=" text-center" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">Research <span
                class="d-block d-sm-inline"> Policy</span></h2>

                
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <div class="container mt-0">
  <div class="row">
    <div class="col-md-12 ml-auto col-xl-12 mr-auto">
      <!-- Tabs with Background on Card -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">Consultancy & <br> Research Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">Seed Money <br> Grant Scheme</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">Financial Assistance <br> for result</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">Intellectual Property <br> Rights Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#settings2" role="tab">Vice Chancellor's <br> Innovation Fund</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content text-center">
            <div class="tab-pane active" id="home1" role="tabpanel">
            <object data="https://www.tmu.ac.in/pdf/research/consultancy_research_project_policy.pdf" type="application/pdf" width="100%" height="1120px">
				<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
				<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/consultancy_research_project_policy.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
			</object>
            </div>
            <!-- Dental Tabs -->
            <div class="tab-pane" id="profile1" role="tabpanel">
            <object data="https://www.tmu.ac.in/pdf/research/seed_money_policy.pdf" type="application/pdf" width="100%" height="1120px">
					<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
					<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/seed_money_policy.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
			</object>
            </div>
            <!-- Jain Studies -->
            <div class="tab-pane" id="messages1" role="tabpanel">
            <object data="https://www.tmu.ac.in/pdf/research/incentive_policy.pdf" type="application/pdf" width="100%" height="1120px">
				<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
						<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/incentive_policy.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
			</object>
            </div>
                  <!-- Nursing -->
            <div class="tab-pane" id="settings1" role="tabpanel">
            <object data="https://www.tmu.ac.in/pdf/research/ipr_policy.pdf" type="application/pdf" width="100%" height="1120px">
				<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
					<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/ipr_policy.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
				</object>
            </div>
            <!-- Other programmes -->
            <div class="tab-pane" id="settings2" role="tabpanel">
            <object data="https://www.tmu.ac.in/pdf/research/innovation_fund.pdf" type="application/pdf" width="100%" height="1120px">
				<p>Your web browser doesn't have a PDF plugin.  Instead you can</p>
					<center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="https://www.tmu.ac.in/pdf/research/innovation_fund.pdf" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
				</object>
            </div>
          </div>
        </div>
      </div>
      <!-- End Tabs on plain Card -->
    </div>
  </div>
</div>
                  <!-- container ends -->
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
  </div>
  </div>
  </div>
</section><!-- #content end -->

	<br /><br />
    <script>
    // JavaScript to expand the FAQ section by default
    document.addEventListener('DOMContentLoaded', function() {
        var toggleHeader = document.querySelector('.toggle-header');
        var toggleContent = document.querySelector('.toggle-content');

        toggleHeader.classList.add('active');
        toggleContent.style.display = 'block';
    });
</script>


<?php
 include 'footer.php';
?>
