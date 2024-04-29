<?php
include 'head.php';
?>
<link rel="stylesheet" href="./assets/css/custom-accordian.css">
<style>
    .table> :not(caption)>*>* {
        padding: 0.5rem !important;
        color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
        background-color: var(--bs-table-bg);
        border-bottom-width: var(--bs-border-width);
        box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
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

                    <div class="row mx-0">
                        <h2 class=" text-center d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">IIC Activities <span>Calendar</span></h2>
                        <h2 class=" text-center d-none d-md-block" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:2.4vmax">IIC Activities <span>Calendar</span></h2>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <!-- Icon -->
                                            <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
                                            <!-- Document Name -->
                                            <h5 class="card-title">IIC Calendar Activities for Academic Year 2022-23</h5>
                                            <!-- View PDF Button -->
                                            <a href="https://www.tmu.ac.in/pdf/iic_calendars/iic_activity_calendar_2022-23.pdf" class="more-link fst-normal ms-2" style="font-family:'Poppins';font-size:12px;">View pdf <i class="bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <!-- Icon -->
                                            <i class="fas fa-file-pdf fa-4x mb-3" style="color:#FF8A00; "></i>
                                            <!-- Document Name -->
                                            <h5 class="card-title">IIC Calendar Activities for Academic Year 2021-22</h5>
                                            <!-- View PDF Button -->
                                            <a href="https://www.tmu.ac.in/pdf/iic_calendars/iic_activity_calendar_2021-22.pdf" class="more-link fst-normal ms-2" style="font-family:'Poppins';font-size:12px;">View pdf <i class="bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <section id="info-utile" class="bg-white py-5">
                                    <div class="container">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        2020
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="text-align:center">#</th>
                                                                        <th style="text-align:center;width:20%">Date</th>
                                                                        <th style="text-align:center;">Name of Event</th>
                                                                        <th style="text-align:center;width:40%">Resource Person</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td style="text-align:center">1</td>
                                                                        <td>December 28-30, 2020</td>
                                                                        <td>3 Days EAC</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Mr. Mahendra Kumar Gupta</li>
                                                                                <li>Mr. Vikash Yadav</li>
                                                                                <li>Mr Ajay Sethhi</li>
                                                                                <li>Mr. Nitin Sagar</li>
                                                                                <li>Ms Neha Anand</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">2</td>
                                                                        <td>December 26, 2020</td>
                                                                        <td>My Story - Motivational Session by Successful Innovators</td>
                                                                        <td>Mr. Vaibhav Sharma, Head of Operations, Energy Intelligence</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">3</td>
                                                                        <td>December 23, 2020</td>
                                                                        <td>Entrepreneurial Development into the field of IoT and Cloud Computing</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Mr. Manjeet Rawat</li>
                                                                                <li>Dileep Tiwari</li>
                                                                                <li>Naveen Toshniwal</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">4</td>
                                                                        <td>December 31, 2020</td>
                                                                        <td>Call for paper writing and Research Report on Innovation</td>
                                                                        <td>Dr. Diptonil Banerjee, Assistant Professor, Department of Physics, TMU</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">5</td>
                                                                        <td>December 22, 2020</td>
                                                                        <td>Orientation Session on National Innovation and Startup Policy (NISP)</td>
                                                                        <td>Dr. Pankaj Goswami</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">6</td>
                                                                        <td>December 02, 2020</td>
                                                                        <td>Workshop on "Entrepreneurship and Innovation as Career Opportunity"</td>
                                                                        <td>Dr. Vaishali Dhingra </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">7</td>
                                                                        <td>September 11, 2020</td>
                                                                        <td>Purposes, Challenges &amp; Implications of NEP 2020: One Week SYMPOSIUM (Webinar Series)</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Prof. R. S. Grewal, Former Vice Chancellor, Chitkara University</li>
                                                                                <li>Dr. Sanjeev Pandey, Regional Director, IGNOU New Delhi</li>
                                                                                <li>Prof. N.K. Dhooper, Prof. Emeritus &amp; Advisor, IMT-Centre for Distance Learning, Ghaziabad</li>
                                                                                <li>Prof. S. K. Yadav, Teacher Education Expert, Former Head- Department of Teacher Education, NCERT, New Delhi</li>
                                                                                <li>Prof. S. S. Bhakar, Director, Prestige Institute of Management &amp; Research, Gwalior</li>
                                                                                <li>Prof. Ram Chandra, Former Vice Chancellor, Monad University</li>
                                                                                <li>Prof. Nasrin, Chair Person, Department of Education, Aligarh Muslim University</li>
                                                                                <li>Prof. Supriya Agarwal, Dean, Social Sciences &amp; Languages, Central University of Rajasthan</li>
                                                                                <li>Prof. Harsh Dwivedi, Director, Poddar Institute of Management, University of Rajasthan</li>
                                                                                <li>Prof. Vinod Kumar Jain, Dean FoE &amp; Dean Academics, Mody University, Lakshmangarh</li>
                                                                                <li>Dr. Ramesh R. Lakhe, Director, Shreyas Quality Management System Nagpur, QCI, Govt. of India Approved Sr. Consultant</li>
                                                                                <li>Prof. Karunesh Saxena, Former Director, FMS, MLS University, Udaipur</li>
                                                                                <li>Prof. Shakti Kumar, Director, PIET Panipat, Former Vice Chancellor, Baddi University</li>
                                                                                <li>Prof. Manohar Lal, Former Professor and Director, SOCIS, IGNOU, New Delhi</li>
                                                                                <li>Prof. (Dr.) Manoj Kumar, Dean, Faculty of Management Studies, Maharshi Dayanand Saraswati University, Ajmer, Rajasthan</li>
                                                                                <li>Prof. (Dr) Vandana Suhag, Dean Education Quality, Munjal University, Haryana</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">8</td>
                                                                        <td>October 06, 2020</td>
                                                                        <td>Boot Camp 1.0 </td>
                                                                        <td>Dr. Rashmi Jain</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">9</td>
                                                                        <td>October 15-23, 2020</td>
                                                                        <td>KAPILA: Kalam Program for IP Literacy and Awareness</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Shri Ramesh Pokhriyal 'Nishank', Hon'ble Education, Minister, MoE</li>
                                                                                <li>Dr. Abhay Jere, Chief Innovation, Officer, MIC</li>
                                                                                <li>Dr. Mohit Gambhir, Director, MIC</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">10</td>
                                                                        <td>November 03, 2020</td>
                                                                        <td>IKS Orientation Session</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Prof. Anil Sahasrabudhe, Chairman, AICTE</li>
                                                                                <li>Shri A B Shukla COO, IKS, AICTE</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">11</td>
                                                                        <td>July 11, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Shri Shashi Shekhar , CEO Prasar Bharati</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">12</td>
                                                                        <td>June 20, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Mr. Shridhar Venkat, CEO</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">13</td>
                                                                        <td>June 13. 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Shri R. Subrahmanyam, Secretary</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">14</td>
                                                                        <td>June 08-09, 2020</td>
                                                                        <td>Two days Webinar on "Industrial Attributes &amp; Role of IoT during COVID 19"</td>
                                                                        <td>Soft Pro India Computer Tech. Pvt. Ltd.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">15</td>
                                                                        <td>June 06, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Ashwini Deshpande Founder Elephant Design</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">16</td>
                                                                        <td>June 06, 2020</td>
                                                                        <td>Webinar</td>
                                                                        <td>Smart Energy Solutions to Boost Power Sector Economy during Pandemic</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">17</td>
                                                                        <td>May 30, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Dr. Nilesh N Oak, Expert, Indian Civilization &amp; History</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">18</td>
                                                                        <td>May 23, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Shri Mahesh Babu, CEO, Mahindra Electric Mobility Ltd</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="text-align:center">19</td>
                                                                        <td>May 22, 2020</td>
                                                                        <td>Session 17: Interaction with Student Innovators and Entrepreneurs Emerged from Smart India Hackathon (SIH)</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Pulkit Jain, Team Vidyut</li>
                                                                                <li>Lokesh Goswami, Team Slick</li>
                                                                                <li>Arpit Nandi, Team Quarks &amp; Leptons</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">20</td>
                                                                        <td>May 21, 2020</td>
                                                                        <td>Session 16: Frugal Innovations and Social Entrepreneurship</td>
                                                                        <td>Dr. Raman Gujaral, EDII, Ahmedabad</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">21</td>
                                                                        <td>May 20, 2020</td>
                                                                        <td>Session 15: Use of Market Data and Application of Marketing Research Tools and Methodology - Increasing Chances of Survivality of Innovation and Venture - Advance Level</td>
                                                                        <td>Dr. Preet Deep Singh, AVP Invest India</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">22</td>
                                                                        <td>May 19, 2020</td>
                                                                        <td>Session 14: Idea, Entrepreneurship Opportunities, Business Model and Business Plan</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Dr. S. R. Acharya, EDII, Ahmedabad</li>
                                                                                <li>Dr. Amit Dewedi, EDII, Ahmedabad</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">23</td>
                                                                        <td>May 15, 2020</td>
                                                                        <td>Session 13: Innovation Risk DiagnosticsProduct Innovation Rubric(PIR)</td>
                                                                        <td>Dr. Lakshami Meera Program Director, Forge Incubator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">24</td>
                                                                        <td>May 14, 2020</td>
                                                                        <td>Session 12: Understanding Role and Application of Marketing Research at Idea to Start up Stage - Foundation Level</td>
                                                                        <td>Dr. Preet Deep Singh, AVP Invest India</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">25</td>
                                                                        <td>May 13, 2020</td>
                                                                        <td>Session 11: Innovating Self- Screen and Identify right opportunities</td>
                                                                        <td>Prof. Sanjay Inamdar, Chairman, AICTE Startup Policy Implementation Committee</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">26</td>
                                                                        <td>May 12, 2020</td>
                                                                        <td>Session 10: Legal and Ethical Steps - Productive Entrepreneurship and Startup</td>
                                                                        <td>Mr. Harit Mohan, Founder &amp; CEO, Signicent LLP (India) &amp; Signicent LLP (USA)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">27</td>
                                                                        <td>May 09, 2020</td>
                                                                        <td>Leadership Talk Examination &amp; Academics in Current Covid 19 Crisis</td>
                                                                        <td>Prof. D. P. Singh, Chairman@ugc_india</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">28</td>
                                                                        <td>May 08, 2020</td>
                                                                        <td>Session 9: Understanding Angel and Venture Capital Funding - What is there for Early Stage innovator &amp; Entrepreneurs</td>
                                                                        <td>Mr. Sushanto Mitra, CEO, Lead Angels Pvt. Ltd</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">29</td>
                                                                        <td>May 07, 2020</td>
                                                                        <td>Session 8: Intellectual Property (IP) Management at Early Stage of Innovation and Start-ups</td>
                                                                        <td>Dr Sanjeeva Kumar Majumdar, Manager-IPR, Start-Up &amp; Incubation, National Research Development Corporation, New Delhi</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">30</td>
                                                                        <td>May 06, 2020</td>
                                                                        <td>Session 7: How to Ideintify Right Problem and Solution using the Double Diamond Approach in Design</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Prajakta Kulkarni, Founder &amp; Director, Nodes Pvt. Ltd, Pune</li>
                                                                                <li>Sanket Inamdar, Co-founder &amp; CEO</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">31</td>
                                                                        <td>May 05, 2020</td>
                                                                        <td>Session 6: Entrepreneurship, Business Idea and Business Model Canavas</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Dr. Sunil Shukla, Director general, EDII, Ahmedabad</li>
                                                                                <li>Dr. Amit Dwivedi, Associate senior faculty EDII,Ahmedabad</li>
                                                                                <li>Mr. Mayank Patel, CEO, Cradle, Incubator, EDII, Ahmedabad</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">32</td>
                                                                        <td>May 04, 2020</td>
                                                                        <td>Session 5: Hangout with Successful Startup Founder</td>
                                                                        <td>Dr. Pankaj Parashar, CEO/Founder, Cutting Edge Medical Devices Pvt. Ltd., Indore</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">33</td>
                                                                        <td>May 02, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Dr. Madhuri Kanitkar, Lieutenant General</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">34</td>
                                                                        <td>May 01, 2020</td>
                                                                        <td>Session 4: Role of Network Enablers in driving I&amp;E in HEIs - A Case of TiE, India</td>
                                                                        <td>Ms. Geetika Dayal, Executive Director TiE, Delhi-NCR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">35</td>
                                                                        <td>April 30, 2020</td>
                                                                        <td>Session 3: Hangout with Emerging Innovator &amp; Entrepreneurs Supported through MIC &amp; AICTE</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Ms. Vandana Thakur, Female Innovator cum Entrepreneur, Canada India Acceleration Program 2020, L M College of Pharmacy, Ahmedabad</li>
                                                                                <li>Mr. Amit Sanjay Lokhende Innovator Cum Entrepeneur, India-South Korea Startup Exchange Program 2020 Institute of Chemical Technology, Mumbai</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">36</td>
                                                                        <td>April 28, 2020</td>
                                                                        <td>Session 1: National Innovation and Startup Policy for Students and Faculty 2019 - A Guiding Framework for HEIs for Implementation</td>
                                                                        <td>Dipan Sahu, Asst. Innovation Director at the Ministry of Education's Innovation Cell, &amp; AICTE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">37</td>
                                                                        <td>April 28, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Ms. Anu Acharya, Serial Entrepreneur and winner of Young Entrepreneur Award by World Economic Forum</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">38</td>
                                                                        <td>April 27, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Dr. BVR Mohan Reddy, Chairman Cyient, Chairman IIT-Hyderabad &amp; Ex-Chairman NASSCOM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">39</td>
                                                                        <td>April 23, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Mr. Gautam Bambawale, Ex-India's Ambassador to China</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">40</td>
                                                                        <td>April 22, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Padma Shri Vaidya Rajesh Kotecha, Secretary Ministry of Ayush</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">41</td>
                                                                        <td>April 22, 2020</td>
                                                                        <td>Session 2: Role and Importance of Pre-Incubators, Incubators and Accelerators in HEIs - Harnesing Innovation and Entrepreneurial Potential of Students and Faculties at Early Stage</td>
                                                                        <td>Mr. Muthu Singaram, CEO, IIT Madras HTIC Incubator, Founder, VibaZone</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">42</td>
                                                                        <td>April 21, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Dr. Gururaj 'Desh' Deshpande, Founder, Deshpande Foundation</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">43</td>
                                                                        <td>April 20, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Yashraj Bhradwaj, Youngest Researcher / Entrepreneur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">44</td>
                                                                        <td>April 18, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Prof. K. K. Aggarwal, Chairman, National Board of Accreditation</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">45</td>
                                                                        <td>April 17, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Mr. Ronnie Screwvala</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">46</td>
                                                                        <td>April 16, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Dr. Vinay Sahasrabudhe, President, ICCR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">47</td>
                                                                        <td>April 15, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Sharma Shradha, Founder &amp; CEO, YourStoryCo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">48</td>
                                                                        <td>April 14, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Anand Deshpande, Chairman Persistent Systems</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">49</td>
                                                                        <td>April 13, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Padma Bhushan Dr. VK Saraswat, Member NITI Aayog &amp; Ex-Chief Scientific Adviser, Defense Ministry</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">50</td>
                                                                        <td>April 11, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Mr. Abhishek Singh CEO MyGov</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">51</td>
                                                                        <td>April 10, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Hon’ble Vice Chairman of AICTE, Prof. M.P. Poonia</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">52</td>
                                                                        <td>April 10, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Prof. Partha Chakraborty, Chairman, National Digital Library</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">53</td>
                                                                        <td>April 09, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Prof. Anil D. Sahasrabudhe, Chairman, AICTE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">54</td>
                                                                        <td>April 08, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Prof. K Vijay Raghavan, Principal Scientific Adviser, Government of India</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">55</td>
                                                                        <td>April 07, 2020</td>
                                                                        <td>Leadership Talk</td>
                                                                        <td>Mr. Abhishek Suryavanshi, Director Wikipedia.....</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">56</td>
                                                                        <td>February 28, 2020</td>
                                                                        <td>National Science Day-2020</td>
                                                                        <td>Director, Faculty and Students</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">57</td>
                                                                        <td>January 30, 2020</td>
                                                                        <td>Internal Hack A Thon</td>
                                                                        <td>Director, Heads, CoDs faculties</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        2019
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="text-align:center">#</th>
                                                                        <th style="text-align:center;width:20%">Date</th>
                                                                        <th style="text-align:center;">Name of Event</th>
                                                                        <th style="text-align:center;width:40%">Resource Person</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="text-align:center">1</td>
                                                                        <td>December 02-03, 2019</td>
                                                                        <td>Two Days workshop on Design &amp; Installation of Solar Photovoltaic System </td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Mr. Ashutosh Sharma, Project Head, AMPERES ENERY SOLUTION Gr. Noida</li>
                                                                                <li>Ms. Akanksha Morya, Manager Procurement, AMPERES ENERY SOLUTION Gr. Noida</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">2</td>
                                                                        <td>October 25, 2019</td>
                                                                        <td>IIC Rating</td>
                                                                        <td>MIC official</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">3</td>
                                                                        <td>October 23, 2019</td>
                                                                        <td>Guest Lecture on "Big Bang and the Expanding Universe".</td>
                                                                        <td>Dr. Punit Kumar, Associate Prof., University of Lucknow</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">4</td>
                                                                        <td>November 19, 2019</td>
                                                                        <td>Session on automobile engineering and IC engine</td>
                                                                        <td>Director, Heads, CoDs faculties.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">5</td>
                                                                        <td>October 19, 2019</td>
                                                                        <td>one-days’ Workshop on Intellectual Property Rights (IPR)</td>
                                                                        <td>
                                                                            <ul style="list-style:decimal;padding-left:15px">
                                                                                <li>Ms. Pooja Kumar Director &amp; CEO of Innove Intellects / Patent Agent</li>
                                                                                <li>Dr. Sakshi Gupta, Academics Training Head &amp; Registered Patent Agent</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">6</td>
                                                                        <td>October 15, 2019</td>
                                                                        <td>Poster &amp; Slogan Making Competition</td>
                                                                        <td>Director, Heads, CoDs faculties.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align:center">7</td>
                                                                        <td>August 22, 2019</td>
                                                                        <td>Innovation for resurgent India First Leadership Talk Series (IFLTS), MHRD Innovation Cell</td>
                                                                        <td>Dr. Ramesh Pokhrial, Hon'ble Minister of HRD</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>

                            </div>
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