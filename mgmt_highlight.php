<?php
include 'head.php';
?>

<style>

.main-timeline{
  font-family: 'poppins';
  position: relative;
}
.main-timeline:after{
  content: '';
  display: block;
  clear: both;
}
.main-timeline:before{
    content: '';
    height: 95%;
    width: 2px;
    border: 2px dashed #a3a3ad;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: 30px;
}
.main-timeline .timeline{
    width: 50%;
    padding: 0 35px 0 27px;
    margin: 0 10px 20px 0;
    float: left;
}
.main-timeline .timeline-content{
    background: linear-gradient(#f0f0f0);
    text-align: center;
    padding: 15px 115px 15px 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px -5px rgba(0,0,0,0.6);
    display: block;
    position: relative;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-content:before,
.main-timeline .timeline-content:after{
  content: "";
  background: linear-gradient(to bottom,#FF7900,#FF7900);
  width: 45px;
  height: 45px;
  transform: rotate(-45deg);
  position: absolute;
  top: 13px;
  right: -58px;
  z-index: 1;
}
.main-timeline .timeline-content:after{
  background: #fff;
  transform:rotate(-45deg) scale(0.6);
}
.main-timeline .timeline-icon{
  color: #fff;
  background: linear-gradient(to right,#617de0,#78b1f8);
  font-size: 23px;
  text-align: center;
  line-height: 40px;
  height: 40px;
  width: 40px;
  transform: translateY(-50%) rotate(-45deg);
  position: absolute;
  top: 50%;
  left: -20px;
}
.main-timeline .timeline-icon i{ transform: rotate(45deg); }
.main-timeline .timeline-year{
    color: #fff;
    background: #001055;
    font-size: 32px;
    font-weight: 900;
    text-align: center;
    line-height: 100px;
    height: 100%;
    width: 100px;
    border-radius: 0 0 5px 0;
    position: absolute;
    right: 0;
    top: 0;
}
.main-timeline .timeline-year:after{
    content: '';
    background: linear-gradient(to right bottom,#001055 49%, transparent 50%);
    height: 33px;
    width: 33px;
    position: absolute;
    right: -33px;
    top: 0;
}
.main-timeline .title{
  color: #000;
  font-size: 20px;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 0 0 7px 0;
}
.main-timeline .description{
    color: #333;
    font-size: 15px;
    letter-spacing: 1px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
  padding: 0 27px 0 35px;
    margin: 0 0 20px 10px;
    float: right;
}
.main-timeline .timeline:nth-child(even) .timeline-content{ padding: 15px 40px 15px 115px; }
.main-timeline .timeline:nth-child(even) .timeline-content:before,
.main-timeline .timeline:nth-child(even) .timeline-content:after{
  right: auto;
  left: -58px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
  left: auto;
  right: -20px;
}
.main-timeline .timeline:nth-child(even) .timeline-year{
  right: auto;
  left: 0;
  border-radius: 0 0 0 5px;
}
.main-timeline .timeline:nth-child(even) .timeline-year:after{
transform: rotateY(180deg);
right: auto;
left: -33px;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content:before,
.main-timeline .timeline:nth-child(4n+2) .timeline-icon {background:linear-gradient(to left,#FF7900, #FF7900);}
.main-timeline .timeline:nth-child(4n+2) .timeline-year {background:linear-gradient(to bottom,#FF7900, #FF7900);}
.main-timeline .timeline:nth-child(4n+2) .timeline-year:after{background:linear-gradient(to right bottom, #FF7900 49%, transparent 50%);}
.main-timeline .timeline:nth-child(4n+3) .timeline-content:before,
.main-timeline .timeline:nth-child(4n+3) .timeline-icon {background:linear-gradient(to bottom,#FF7900, #FF7900);}
.main-timeline .timeline:nth-child(4n+3) .timeline-year {background:linear-gradient(to bottom,#227e22,#227e22,#63a211);}
.main-timeline .timeline:nth-child(4n+3) .timeline-year:after{background:linear-gradient(to right bottom, #227e22 49%, transparent 50%);}
.main-timeline .timeline:nth-child(4n+4) .timeline-content:before,
.main-timeline .timeline:nth-child(4n+4) .timeline-icon {background:linear-gradient(to left,#7d5ac2 ,#b493fe);}
.main-timeline .timeline:nth-child(4n+4) .timeline-year {background:linear-gradient(to bottom,#7d5ac2,#7d5ac2,#b493fe);}
.main-timeline .timeline:nth-child(4n+4) .timeline-year:after{background:linear-gradient(to right bottom, #7d5ac2 49%, transparent 50%);}
@media screen and (max-width:767px){
  .main-timeline:before{
  left: 17px;
  transform: translateX(0);
  }
  .main-timeline .timeline,
  .main-timeline .timeline:nth-child(even){
  width: 100%;
  padding: 0 0 27px 40px;
  margin: 0 0 30px 0;
  }
  .main-timeline .timeline-content,
  .main-timeline .timeline:nth-child(even) .timeline-content{
  padding: 70px 15px 35px 15px;
  }
  .main-timeline .timeline-content:before,
  .main-timeline .timeline-content:after,
  .main-timeline .timeline:nth-child(even) .timeline-content:before,
  .main-timeline .timeline:nth-child(even) .timeline-content:after{
  height: 25px;
  width: 25px;
  top: 10px;
  right: auto;
  left: -34px;
  }
  .main-timeline .timeline-icon,
  .main-timeline .timeline:nth-child(even) .timeline-icon{
  transform: translateY(0) translateX(50%) rotate(-45deg);
  left: auto;
  right: 50%;
  top: auto;
  bottom: -20px;
  }
  .main-timeline .timeline-year,
  .main-timeline .timeline:nth-child(even) .timeline-year{
  width: 100%;
  height: 50px;
  line-height: 50px;
  border-radius: 0 5px 5px 5px;
  right: auto;
  left: 0;
  }
  .main-timeline .timeline-year:after,
  .main-timeline .timeline:nth-child(even) .timeline-year:after{
  height: 20px;
  width: 20px;
  transform: rotateY(180deg);
  right: auto;
  left: -20px;
  } 
}
@media screen and (max-width:576px){
  .main-timeline .title{ font-size: 18px; }
}
</style>

<?php
 include 'sidebar/management_sidebar.php';
?>

				<div class="col-12 col-md-9 mt-3 mt-sm-0 pt-5 ">
                <h2 class="tmu-text-primary tmu-page-heading">College <span style="color:#FF7900;">Highlights</span></h2>
                <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">College <span style="color:#FF7900;">Highlights</span></h2>
                   
                <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2001</span>
                        <h3 class="title">Year of Establishment</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">Established in 2001, TMIMT offers a range of management programmes including BBA, MBA, B.Com., and Ph.D., fostering excellence in business education.</p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Computer Laboratories</h3>
                        <p class="description" style="font-size:14px; text-align:justify;"> 4 with 275 computers & peripherals</p>
                    </a>
                </div>
            </div>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Language Laboratories</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">2 fully equipped with GOLS linguistic software</p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Books & Journals</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">
                        Books- 15018; Journals:30
                        </p>
                    </a>
                </div>
            </div>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">E-Journals & E-Books</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">15 through EBSCO & DELNET Database</p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">In-house Research Journal</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">
                        View Point (ISSN: 2229-3825), Online Journal: TMIMT International Journal (ISSN: 2348-988X)
                        </p>
                    </a>
                </div>
            </div>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Professional Membership</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">National Entrepreneurship Network (NEN), All India Management Association (AIMA), Global Institute of Flexible Systems Management, Indian Society for Training and Development (ISTD)</p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Foreign Collaboration</h3>
                        <p class="description" style="font-size:14px; text-align:justify;"> University of Regina, Canada & Sol Bridge Business School, South Korea</p>
                    </a>
                </div>
            </div>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Corporate Collaboration</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">National Entrepreneurship Network (NEN), All India Management Association (AIMA), Global Institute of Flexible Systems Management, Indian Society for Training and Development (ISTD)</p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Student Clubs</h3>
                        <p class="description" style="font-size:14px; text-align:justify;"> University of Regina, Canada & Sol Bridge Business School, South Korea</p>
                    </a>
                </div>
            </div>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                    <span class="timeline-year"></span>
                        <h3 class="title">Co-Curricular Activities</h3>
                        <p class="description" style="font-size:14px; text-align:justify;">Abhivyakti (Expressions on Posters), Udhyamita (Platform for Budding Entrepreneurs), Funday (Children’s Day Celebration), Biz Plan (Promoting New Business Ideas), Movie Mantra (Management Lessons from Movies), Daffodils- Annual Function, Holi Milan Samaroh with alumni.</p>
                    </a>
                </div>
            </div>
          <br/>
        </div>
    </div>
</div>
</div>
                        
            </div>
        </div>
    </section>
<?php 
include 'footer.php';
 ?>
