<?php
 include 'head.php';
?>

<style>
	.slider-feature {
	position: relative;
	transform: translateY(-20%);
	z-index: 4;
}

.slider-feature a {
	color: #222;
	transition: all .2s ease;
}

.slider-feature a:hover {
	background-color: var(--cnvs-themecolor);
	transform: translateY(-2px);
	z-index: 1;
}

.slider-feature a i {
	position: relative;
	top: 4px;
	font-size: 20px;
	padding-right: 6px;
}


</style>

<div id="slider" class="slider-element min-vh-0">
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-xl-end">
            <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                <h1 class="display-4 fw-bolder ls-n-1">Build Powerful Websites in a flash.</h1>
                <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p>
                <a href="#" class="button button-large px-lg-5 py-lg-3 rounded-pill m-0 mb-4">Download Brocher</a>
                <a href="#" class="button button-large px-lg-5 py-lg-3 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply Now</a>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <img src="demos/saas-2/images/hero2.svg" alt="..">
            </div>
        </div>
    </div>
</div>



<section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
    <div class="cd-h-timeline__container container">
      <div class="cd-h-timeline__dates">
        <div class="cd-h-timeline__line">
          <ol>
            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">16 Jan</a></li>
            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">28 Feb</a></li>
            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">20 Mar</a></li>
            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">20 May</a></li>
            <li><a href="#0" data-date="09/07/2014" class="cd-h-timeline__date">09 Jul</a></li>
            <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">30 Aug</a></li>
            <li><a href="#0" data-date="15/09/2014" class="cd-h-timeline__date">15 Sep</a></li>
            <li><a href="#0" data-date="01/11/2014" class="cd-h-timeline__date">01 Nov</a></li>
            <li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">10 Dec</a></li>
            <li><a href="#0" data-date="19/01/2015" class="cd-h-timeline__date">29 Jan</a></li>
            <li><a href="#0" data-date="03/03/2015" class="cd-h-timeline__date">3 Mar</a></li>
          </ol>
          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
        </div> <!-- .cd-h-timeline__line -->
      </div> <!-- .cd-h-timeline__dates -->
        
      <ul>
        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
      </ul>
    </div> <!-- .cd-h-timeline__container -->

    <div class="cd-h-timeline__events">
      <ol>
        <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2>
            <em class="cd-h-timeline__event-date">January 16th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">February 28th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">March 20th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">May 20th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">July 9th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">August 30th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">September 15th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">November 1st, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">December 10th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">January 29th, 2015</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">March 3rd, 2015</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>
      </ol>
    </div> <!-- .cd-h-timeline__events -->
  </section>




  <div class="section section-features m-0" style="padding: 120px 0;">
					<div class="container">
						<div class="row justify-content-start justify-content-sm-center justify-content-md-start">
							<div class="col-lg-4 col-md-6">
								<div class="heading-block services-info pe-1">
									<h2 class="fw-normal ls-0 text-transform-none font-primary">Our Services</h2>
									<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
								</div>
							</div>
						</div>
						<div class="row align-items-md-center mt-3">
							<div class="col-md-4 px-lg-4">
								<div class="card p-2 py-lg-5 px-xl-3 px-lg-2">
									<div class="card-body rounded">
										<div class="feature-box media-box">
											<div class="fbox-icon position-relative mb-4" style="width: 70px;height: 70px">
												<svg enable-background="new 0 0 485.5 485.5" viewBox="0 0 485.5 485.5" xmlns="https://www.w3.org/2000/svg"><path d="m422.1 126.2h-295.7c-27.4 0-49.8-22.3-49.8-49.8 0-27.4 22.3-49.8 49.8-49.8h295.8c7.4 0 13.3-6 13.3-13.3 0-7.4-6-13.3-13.3-13.3h-295.8c-42.1 0-76.4 34.3-76.4 76.4v332.7c0 42.1 34.3 76.4 76.4 76.4h295.8c7.4 0 13.3-6 13.3-13.3v-332.7c-.1-7.3-6-13.3-13.4-13.3zm-13.3 332.7h-282.4c-27.4 0-49.8-22.3-49.8-49.8v-274.7c13.4 11.5 30.8 18.5 49.8 18.5h282.4z"><path d="m130.6 64.3c-7.4 0-13.3 6-13.3 13.3s6 13.3 13.3 13.3h249.8c7.4 0 13.3-6 13.3-13.3s-6-13.3-13.3-13.3z"><path d="m177.4 400.7c1.5.5 3 .8 4.5.8 5.5 0 10.6-3.4 12.5-8.8l16.2-45.3h62.4c.5 0 1.1 0 1.6-.1l16.2 45.4c1.9 5.4 7.1 8.8 12.5 8.8 1.5 0 3-.3 4.5-.8 6.9-2.5 10.5-10.1 8-17l-60.6-169.9c-.1-.4-.3-.8-.5-1.2-.1-.2-.2-.4-.3-.6s-.2-.4-.3-.6-.3-.4-.4-.7c-.1-.1-.2-.3-.3-.4-.1-.2-.3-.4-.5-.6-.1-.1-.2-.3-.4-.4-.1-.2-.3-.3-.5-.5s-.3-.3-.5-.5c-.1-.1-.3-.2-.4-.4-.2-.2-.4-.3-.6-.5-.1-.1-.3-.2-.4-.3-.2-.1-.4-.3-.6-.4s-.4-.2-.6-.3-.4-.2-.6-.3c-.4-.2-.8-.4-1.2-.5h-.1c-.4-.1-.8-.2-1.2-.3-.2 0-.3-.1-.5-.1-.3-.1-.5-.1-.8-.2-.2 0-.4 0-.6-.1-.2 0-.5-.1-.7-.1s-.4 0-.6 0-.4 0-.7 0c-.2 0-.5 0-.7.1-.2 0-.4 0-.6.1-.3 0-.5.1-.8.2-.2 0-.3.1-.5.1-.4.1-.8.2-1.1.3h-.1c-.4.1-.8.3-1.2.5-.2.1-.4.2-.6.3s-.4.2-.6.3-.4.3-.7.4c-.1.1-.3.2-.4.3-.2.2-.4.3-.6.5-.1.1-.3.2-.4.4-.2.2-.3.3-.5.5s-.3.3-.5.5c-.1.1-.2.3-.4.4-.2.2-.3.4-.5.6-.1.1-.2.3-.3.4-.1.2-.3.4-.4.6s-.2.4-.3.6-.2.4-.3.6c-.2.4-.4.8-.5 1.2l-60.8 169.9c-2.2 7 1.4 14.6 8.3 17.1zm65.3-142.9 22.5 63h-45.1z"></svg>
											</div>
											<div class="fbox-content">
												<h3 class="fw-normal ls-0 text-transform-none">25+ Multiple Languages.</h3>
												<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
												<a href="#" class="btn btn-link font-body mt-3 p-0">Read More..</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-lg-4 mt-3 mt-md-0">
								<div class="card border-color-pink p-2 py-lg-5 px-xl-3 px-lg-2">
									<div class="card-body rounded">
										<div class="feature-box media-box">
											<div class="fbox-icon position-relative mb-3" style="width: 70px;height: 70px">
												<svg enable-background="new 0 0 464.585 464.585" viewBox="0 0 464.585 464.585" xmlns="https://www.w3.org/2000/svg"><path d="m464.585 393.312-87.463-315.015-75.392 20.932 8.329 29.998h-83.857v-41.781h-78.243v30.92h-42.373v-68.159h-105.586v364.17h90.586 15 42.373 15 48.243 15 98.153v-233.662l64.838 233.528zm-301.626-290.866h48.243v37.147h-48.243zm0 99.364h48.243v170.575h-48.243zm0-15v-8.608h48.243v8.608zm0-23.608v-8.609h48.243v8.609zm-72.373 206.987h-75.586v-275.99h75.586zm0-304.982v13.992h-75.586v-13.992zm-75.586 334.171v-14.189h75.586v14.189zm132.959 0h-42.373v-266.012h42.373zm15 0v-11.993h48.243v11.993zm146.396 0h-83.153v-255.152h83.153zm90.279-3.6-52.742-189.961 46.485-12.907 52.742 189.961zm-56.755-204.414-4.133-14.884 46.485-12.907 4.133 14.884zm23.802-94.602 14.537 52.358-46.485 12.907-14.537-52.358z"><path d="m243.621 160.457h48.315v15h-48.315z"><path d="m243.621 186.81h48.315v15h-48.315z"><path d="m243.621 213.164h48.315v15h-48.315z"><path d="m243.621 365.797h48.315v15h-48.315z"><path d="m119.272 272.274h15v25.255h-15z"><path d="m119.272 311.805h15v57.099h-15z"><path d="m119.272 189.919h15v68.081h-15z"><path d="m119.272 150.387h15v26.354h-15z"></svg>
											</div>
											<div class="fbox-content">
												<h3 class="fw-normal ls-0 text-transform-none">32+ Categories Available.</h3>
												<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
												<a href="#" class="btn btn-link font-body mt-3 p-0">Read More..</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card border-color-yellow p-2 py-lg-5 px-xl-3 px-lg-2 mt-3 mt-lg-5">
									<div class="card-body rounded">
										<div class="feature-box media-box">
											<div class="fbox-icon position-relative mb-4" style="width: auto;height: 50px">
												<div class="d-flex align-items-center">
													<svg width="32px" height="32px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
														<g>
															<path d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#0A0A08"></path>
														</g>
													</svg>
													
													<span class="text-muted ms-3 h6 m-0">+</span>
													<svg width="32" height="32" class="ms-3" viewBox="0 0 512 512" xmlns="https://www.w3.org/2000/svg"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"></svg>
												</div>
											</div>
											<div class="fbox-content">
												<h3 class="fw-normal text-transform-none ls-0">On Social Networks.</h3>
												<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
												<a href="#" class="btn btn-link font-body mt-3 p-0">Read More..</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-lg-4 mt-3 mt-md-0">
								<div class="card border-color-info p-2 py-lg-5 px-xl-3 px-lg-2">
									<div class="card-body rounded">
										<div class="feature-box media-box">
											<div class="fbox-icon position-relative mb-3" style="width: 70px;height: 70px">
												<svg enable-background="new 0 0 496.592 496.592" viewBox="0 0 496.592 496.592" xmlns="https://www.w3.org/2000/svg"><path d="m400.296 328v-51.696l-21.816 8.488-.064-.144-.52-.944c-8.36-13.016-21.88-22.072-37.104-24.832l-52.496-9.552v-4.144c19.632-11.4 34.008-30.848 38.488-53.84 14.544-3.008 25.512-15.912 25.512-31.336v-79.016c0-22.328-14.624-41.8-35.84-48.136l-4-4c-18.608-18.608-43.344-28.848-69.656-28.848-54.312 0-98.504 44.184-98.504 98.504v61.496c0 15.424 10.968 28.328 25.512 31.336 4.488 22.992 18.856 42.448 38.488 53.84v4.144l-52.488 9.544c-15.208 2.76-28.72 11.8-37.088 24.808l-.48 1.168-21.944-8.536v51.696c-13.232 0-24 10.768-24 24v32c0 13.232 10.768 24 24 24v29.472l152 59.12 152-59.12v-29.472c13.232 0 24-10.768 24-24v-32c0-13.232-10.768-24-24-24zm-97.008-59.688 34.64 6.296c10.2 1.856 19.232 7.744 25.256 16.128l-77.4 30.096zm-78.312-15.8c7.384 2.256 15.208 3.488 23.32 3.488s15.936-1.232 23.32-3.488l-23.32 17.488zm11.144 28.352-16.328 16.32-10.592-31.768 5.096-.92zm46.176-16.36 5.096.92-10.592 31.768-16.328-16.32zm46-90.728v-27.552c4.76 2.776 8 7.88 8 13.776s-3.24 11-8 13.776zm-160 0c-4.76-2.776-8-7.88-8-13.776s3.24-11 8-13.776zm0-53.776v9.136c-2.848.744-5.52 1.864-8 3.312v-33.944c0-45.488 37.008-82.504 82.504-82.504 22.032 0 42.76 8.584 58.344 24.168l7.056 7.064 2.152.528c15.28 3.816 25.944 17.48 25.944 33.224v51.464c-2.48-1.448-5.152-2.576-8-3.312v-9.136h-25.368c-21.68 0-42.4-10.352-55.4-27.688l-6.36-8.496-15.896 15.904c-13.088 13.08-30.48 20.28-48.976 20.28zm16 56v-40.368c19.752-1.832 38.08-10.4 52.288-24.6l3.112-3.112c16.04 17.704 39.144 28.08 63.232 28.08h9.368v40c0 35.288-28.712 64-64 64s-64-28.712-64-64zm-25.632 98.608 34.64-6.296 17.504 52.52-77.416-30.104c6.024-8.392 15.072-14.264 25.272-16.12zm-70.368 109.392v-32c0-4.416 3.592-8 8-8 13.232 0 24 10.768 24 24s-10.768 24-24 24c-4.408 0-8-3.584-8-8zm152 92.304-128-49.768v-21.928c14.104-6.192 24-20.248 24-36.608s-9.896-30.416-24-36.608v-31.696l128 49.776zm-23.752-153.232 31.752-31.76 31.752 31.752-31.752 12.352zm167.752 103.456-128 49.768v-126.824l128-49.776v31.696c-14.104 6.192-24 20.248-24 36.608s9.896 30.416 24 36.608zm24-42.528c0 4.416-3.592 8-8 8-13.232 0-24-10.768-24-24s10.768-24 24-24c4.408 0 8 3.584 8 8z"></svg>
											</div>
											<div class="fbox-content">
												<h3 class="fw-normal ls-0 text-transform-none">Full Customer Satisfaction.</h3>
												<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
												<a href="#" class="btn btn-link font-body mt-3 p-0">Read More..</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

	
                <section id="content"  >
			<div class="content-wrap" style="background-color: #001055; ">
				<div class="container" style="margin-bottom: 17px;">


					<div class="row justify-content-center ">
						<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
							<h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 22px;">TMU <span
								style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

						</div>
						<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
							<h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">TMU <span
								style="color: #FFFFFF;">HIGHLIGHTS</span></h2>

						</div>
					</div>

					
					<div class="row col-mb-37" >
						<main class="postcontent col-lg-9 col-md-9">
							<div class="row g-4">


								<div class=" mb-0 entry col-lg-12 col-md-12" >
									<div class="owl-carousel" id="owl-carousel2">
										<div class="item" >

											<div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
												<div class="entry-image mb-0">
													<div class="fslider" data-arrows="false" data-lightbox="gallery">
														<div class="flexslider">
															<div class="slider-wrap">
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="p-2">
													<div class="entry-title">
														<a herf="" style="font-size: 18px; font-weight: 500; " >TMU's Educational Odyssey to Narora Atomic Power Station</a>
													</div>
													<div class="entry-meta">
														<ul>
															<li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
															<li><a href="blog-single.html#comments"><i
																		class="uil uil-comments-alt"></i> 13</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="item">

											<div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
												<div class="entry-image mb-0">
													<div class="fslider" data-arrows="false" data-lightbox="gallery">
														<div class="flexslider">
															<div class="slider-wrap">
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="p-2">
													<div class="entry-title">
														<a herf="" style="font-size: 18px; font-weight: 500; " >TMU's Faculty of Education Marks 24th Vijay Diwas.</a>
													</div>
													<div class="entry-meta">
														<ul>
															<li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
															<li><a href="blog-single.html#comments"><i
																		class="uil uil-comments-alt"></i> 13</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>


										<div class="item">

											<div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
												<div class="entry-image mb-0">
													<div class="fslider" data-arrows="false" data-lightbox="gallery">
														<div class="flexslider">
															<div class="slider-wrap">
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-1.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-1.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-2.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
																<div class="slide"><a
																		href="demos/modern-blog/images/items/lightbox/4-3.jpg"
																		data-lightbox="gallery-item"
																		style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="p-2">
													<div class="entry-title">
														<a herf="" style="font-size: 18px; font-weight: 500; " >CTLD's Faculty Development Programme Empowers Educators with Emotional Intelligence</a>
													</div>
													<div class="entry-meta">
														<ul>
															<li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
															<li><a href="blog-single.html#comments"><i
																		class="uil uil-comments-alt"></i> 13</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Blog Carousel Starts Here -->

							<div class="row g-4 mb-0 d-none d-sm-block">

								<div class="owl-carousel" id="owl-carousel3">
									<div class="item">

										<article class="mb-0 entry event col-12 ">
											<div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
												<div class="col-md-4 mb-md-0">
													<a href="#" class="entry-image mb-0 h-100">
														<img src="images/blog1.jpg"
															alt="Inventore voluptates velit totam ipsa tenetur"
															class="rounded-2 h-100 object-cover">
														<div class="bg-overlay">
															<div
																class="bg-overlay-content justify-content-start align-items-start">
																<div class="badge bg-light text-dark rounded-pill">
																	Latest Blog</div>
															</div>
														</div>
													</a>
												</div>
												<div class="col-md-8 p-4">
													<div class="entry-meta no-separator mb-1 mt-0">
														<ul>
															<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
																	@
																	3:00PM</a></li>
														</ul>
													</div>

													<div class="entry-title nott">
														<a herf="" style="font-size: 18px; font-weight: 500; " >Scope and Opportunity through Non-Clinical Medical</a>
													</div>
													<div class="entry-content my-3">
														<p style="font-size: 14px;">Explore the diverse opportunities in non-clinical medical programs like MD Biochemistry, Physiology,[...]</p>
													</div>

													<div class="entry-meta no-separator">
														<ul>
															<li><a href="#" class="fw-normal"><i
																		class="uil uil-map-marker"></i>
																	Chiang Mai,
																	Thailand</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
									</div>


									<div class="item">

										<article class="mb-0 entry event col-12 ">
											<div
												class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
												<div class="col-md-4 mb-md-0">
													<a href="#" class="entry-image mb-0 h-100">
														<img src="images/blog2.jpg"
															alt="Inventore voluptates velit totam ipsa tenetur"
															class="rounded-2 h-100 object-cover">
														<div class="bg-overlay">
															<div
																class="bg-overlay-content justify-content-start align-items-start">
																<div class="badge bg-light text-dark rounded-pill">
																	Latest Blog</div>
															</div>
														</div>
													</a>
												</div>
												<div class="col-md-8 p-4">
													<div class="entry-meta no-separator mb-1 mt-0">
														<ul>
															<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
																	@
																	3:00PM</a></li>
														</ul>
													</div>

													<div class="entry-title nott">
														<a herf="" style="font-size: 18px; font-weight: 500; " >Top 10 engineering colleges in India</a>
													</div>
													<div class="entry-content my-3">
														<p style="font-size: 14px;">Explore the top 10 Engineering colleges in India and the top 10 things to consider while choosing a [...]</p>
													</div>

													<div class="entry-meta no-separator">
														<ul>
															<li><a href="#" class="fw-normal"><i
																		class="uil uil-map-marker"></i>
																	Chiang Mai,
																	Thailand</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
									</div>



									<div class="item">

										<article class="mb-0 entry event col-12 ">
											<div
												class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
												<div class="col-md-4 mb-md-0">
													<a href="#" class="entry-image mb-0 h-100">
														<img src="images/blog3.jpg"
															alt="Inventore voluptates velit totam ipsa tenetur"
															class="rounded-2 h-100 object-cover">
														<div class="bg-overlay">
															<div
																class="bg-overlay-content justify-content-start align-items-start">
																<div class="badge bg-light text-dark rounded-pill">
																	Latest Blog</div>
															</div>
														</div>
													</a>
												</div>
												<div class="col-md-8 p-4">
													<div class="entry-meta no-separator mb-1 mt-0">
														<ul>
															<li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
																	@
																	3:00PM</a></li>
														</ul>
													</div>

													<div class="entry-title nott">
														<a herf="" style="font-size: 18px; font-weight: 500; " >Top 100 Universities in India</a>
													</div>
													<div class="entry-content my-3">
														<p style="font-size: 14px;">Get guidance on India's top 100 universities, offering comprehensive insights into diverse education[...]</p>
													</div>

													<div class="entry-meta no-separator">
														<ul>
															<li><a href="#" class="fw-normal"><i
																		class="uil uil-map-marker"></i>
																	Chiang Mai,
																	Thailand</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
									</div>


								</div>
							</div>
							<!-- 
														Blog Carousel Starts Here
														-->
						</main>
						<!-- 
												Side Menu Code start here
											 -->


						<aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
							<div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

								<div class="widget">

									<h4>Latest Blogs</h4>
									<hr>
									<div class="posts-sm row col-mb-30" id="post-list-sidebar"
										style="margin-top: -0.25rem;">



										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/3.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/1.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/1.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/2.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>


										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/3.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="images/events/thumbs/1.jpg"
																alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>





									</div>
								</div>
							</div>
						</aside>


						<aside class="sidebar col-lg-3 col-md-12">
							<div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

								<div class="widget">

									<h4>Notice Board</h4>
									<hr>
									<div class="posts-sm row col-mb-30" id="post-list-sidebar"
										style="margin-top: -0.25rem;">
										<marquee id="notice-marquee" direction="up" height="468vh" scrollamount="5"
											loop="50" style="margin-bottom: 10px;">

											<div class="entry col-12">
												<div class="grid-inner row g-0">
													
													<div class="col ps-3">
														<div class="entry-title">
															<a herf="" style="font-size: 14px; font-weight: 500; " >Debitis nihil placeat, illum est nisi</a>
														</div>
														<div class="entry-meta">
															<ul>
																<li style="font-size: 10px;">10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="entry col-12">
												<div class="grid-inner row g-0">
													
													<div class="col ps-3">
														<div class="entry-title">
															<a herf="" style="font-size: 14px; font-weight: 500; " >Lorem ipsum dolor sit amet, consectetur</a>
														</div>
														<div class="entry-meta">
															<ul>
																<li style="font-size: 10px;">10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="entry col-12">
												<div class="grid-inner row g-0">
													
													<div class="col ps-3">
														<div class="entry-title">
															<a herf="" style="font-size: 14px; font-weight: 500; " >Debitis nihil placeat, illum est nisi</a>
														</div>
														<div class="entry-meta">
															<ul>
																<li style="font-size: 10px;">10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="entry col-12">
												<div class="grid-inner row g-0">
													
													<div class="col ps-3">
														<div class="entry-title">
															<a herf="" style="font-size: 14px; font-weight: 500; " >Lorem ipsum dolor sit amet, consectetur</a>
														</div>
														<div class="entry-meta">
															<ul>
																<li style="font-size: 10px;">10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="entry col-12">
												<div class="grid-inner row g-0">
													
													<div class="col ps-3">
														<div class="entry-title">
															<a herf="" style="font-size: 14px; font-weight: 500; " >Lorem ipsum dolor sit amet, consectetur</a>
														</div>
														<div class="entry-meta">
															<ul>
																<li style="font-size: 10px;">10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<hr>



										</marquee>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<!-- 
												Side Menu Code Ends Here
											 -->


				</div>
			</div>
		</section><!-- #content end -->

		 <!------VIDEO TESTIMONIALS START------->
		 <section id="content">
            <div class="content-wrap py-0 mb-5 mt-5">
                <div class="col-xl-12 col-lg-10 text-center">
                    <h3 class="h1 fw-bold mb-3">Success Stories</h3>
                </div>

                <div class="owl-carousel" id="owl-carousel4">
                    <div class="item">
                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket1" data-lightbox="inline"><img src="video-testimonial/1.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket2" data-lightbox="inline"><img src="video-testimonial/2.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket2">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket3" data-lightbox="inline"><img src="video-testimonial/3.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket3">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                    <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket4" data-lightbox="inline"><img src="video-testimonial/4.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket4">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                        <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                    <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
                                <iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
                                    <div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
                                    <div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
                                    <div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
                                    <div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
                                </div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
                                                    <h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
                                                <p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>

                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
							<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65">
                                </p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
								<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
								<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
								<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
								<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
							</div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
												<h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
											<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>

                    <div class="item">

                        <div class="card shadow-sm ">
                            <!-- <div class="card-img-top ratio-16x9" >
						<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div> -->
                            <a href="#block-modal-ticket5" data-lightbox="inline"><img src="video-testimonial/5.svg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
                                <h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
                                <center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
                                        class="img-fluid career-tran__arrow"></center>
                                <p class="career-tran__prev-role">Senior Technical Account Manager</p>
                                <p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
                                <p class="mb-4 op-07" style="line-height: 1.65"></p>
                                <!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
                                <!-- <div class="row g-0 mb-2 car-features">
							<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
							<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
							<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
							<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
						</div> -->
                            </div>

                        </div>

                        <div class="modal1 mfp-hide" id="block-modal-ticket5">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-white rounded">

                                    <div class="row m-0 g-0">
                                        <div class="col-12">
                                            <div class="fancy-title title-double-border title-center my-2 p-4">
                                                <h3 class="">Alumni Testimonial</h3>
                                            </div>
                                        </div>
                                        <div class="col-12 bg-light">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between align-items-center p-5 col-mb-30">
                                                <div class="col-lg-2">
                                                    <div class="d-flex flex-column align-items-lg-center entry-date">
                                                        <!-- <h3 class="mb-0 h1">10</h3>
											<h4 class="mb-0">Apr</h4> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <h4 class="mb-2">Heading</h4>
										<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>



                </div>

                <!-- Code for the Desktop view Ends -->


                <!-- Code for the Mobile View Starts Here -->




                <!-- Code for the Mobile View Ends Here -->

            </div>
        </section><!-- #content end -->

				

			


<?php
 include 'footer.php';
?>