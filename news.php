<?php
 include 'head.php';
?>

<!-- Document Wrapper
	============================================= -->
<div id="wrapper">
    <!-- Page Title
		============================================= -->
    <section class="page-title bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div class="page-title-content">
                    <h1>Blog Single</h1>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                    </ol>
                </nav>

            </div>
        </div>
    </section><!-- .page-title end -->

    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container col-12 col-md-9">

                <div class="single-post mb-0">

                    <!-- Single Post
						============================================= -->
                    <div class="entry">

                        <!-- Entry Title
							============================================= -->
                        <div class="entry-title mb-2">
                            <h2>This is a Standard post with a Preview Image</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
							============================================= -->
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 10th July 2021</li>
                                <li><a href="#"><i class="uil uil-user"></i> admin</a></li>
                                <li><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a>
                                </li>
                                <li><a href="#"><i class="uil uil-comments-alt"></i> 43 Comments</a></li>
                            </ul>
                        </div><!-- .entry-meta end -->

                        <!-- Entry Image
							============================================= -->
                        <div class="entry-image mb-5">
                            <a href="#"><img src="images/222.webp" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
							============================================= -->
                        <div class="entry-content mt-0">

                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et.</p>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit
                                    tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere
                                velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida
                                at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

                            <blockquote>
                                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at
                                    lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                                    vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                    eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                                    fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                            </blockquote>

                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis
                                consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget
                                metus.</p>

                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum
                                nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer
                                posuere erat a ante venenatis dapibus posuere velit aliquet.
                            </p>

                            <pre>
				#header-inner {
				width: 940px;
				margin: 0 auto;
				padding-top: 40px;
				}</pre>

                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et.</p>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus
                                porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras
                                justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
                                felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum
                                id ligula porta felis euismod semper.</p>
                            <!-- Post Single - Content End -->

                            <h3>3 Columns</h3>

					<div class="masonry-thumbs grid-container row row-cols-3" data-big="2" data-lightbox="gallery">
						<a class="grid-item" href="assets/img/gallery/1.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/1.webp" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="assets/img/gallery/2.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/2.webp" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="assets/img/gallery/3.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/3.webp" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="assets/img/gallery/4.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/4.webp" alt="Gallery Thumb 4"></a>
						<a class="grid-item" href="assets/img/gallery/5.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/5.webp" alt="Gallery Thumb 5"></a>
						<a class="grid-item" href="assets/img/gallery/6.webp" data-lightbox="gallery-item"><img src="assets/img/gallery/6.webp" alt="Gallery Thumb 6"></a>
					</div>

					<div class="divider"><i class="bi-circle-fill"></i></div>

                            <!-- Tag Cloud
								============================================= -->
                            <div class="tagcloud mb-5">
                                <a href="#">general</a>
                                <a href="#">information</a>
                                <a href="#">media</a>
                                <a href="#">press</a>
                                <a href="#">gallery</a>
                                <a href="#">illustration</a>
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
								============================================= -->
                            <div class="card border-default my-4">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                                        <div class="d-flex">
                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-facebook"
                                                title="Facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>

                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-twitter"
                                                title="Twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>

                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest"
                                                title="Pinterest">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>

                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp"
                                                title="Whatsapp">
                                                <i class="fa-brands fa-whatsapp"></i>
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>

                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-rss"
                                                title="RSS">
                                                <i class="fa-solid fa-rss"></i>
                                                <i class="fa-solid fa-rss"></i>
                                            </a>

                                            <a href="#"
                                                class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0"
                                                title="Mail">
                                                <i class="fa-solid fa-envelope"></i>
                                                <i class="fa-solid fa-envelope"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Post Single - Share End -->
                        </div>
                    </div><!-- .entry end -->

                    <h4 class="fs-4 fw-medium">Recommended for you</h4>
                    <div class="related-posts row posts-md g-4">
                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="entry-meta font-secondary fst-italic mt-0">
                                        <ul>
                                            <li><a href="#">Entertainment</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-title title-sm text-transform-none">
                                        <h3><a href="#">Best Ways to be more Creative</a></h3>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>Posted 4 Days ago</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 12</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="entry-meta font-secondary fst-italic mt-0">
                                        <ul>
                                            <li><a href="#">Viral</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-title title-sm text-transform-none">
                                        <h3><a href="#">5 Interesting Viral Videos</a></h3>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>Posted 2 weeks ago</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 422</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="entry-meta font-secondary fst-italic mt-0">
                                        <ul>
                                            <li><a href="#">Pictures</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-title title-sm text-transform-none">
                                        <h3><a href="#">10 Amazing Designer Outfits</a></h3>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>Posted 8 days ago</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments
						============================================= -->
                    <div id="comments">

                        <h3 id="comments-title"><span>3</span> Comments</h3>

                        <!-- Comments List
							============================================= -->
                        <ol class="commentlist">

                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                <div id="comment-1" class="comment-wrap">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar">
                                                <img alt='Image'
                                                    src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                    class='avatar avatar-60 photo avatar-default' height='60'
                                                    width='60'></span>

                                        </div>

                                    </div>

                                    <div class="comment-content">

                                        <div class="comment-author">John Doe<span><a href="#"
                                                    title="Permalink to this comment">April 24, 2012 at 10:46
                                                    am</a></span></div>

                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id
                                            dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                            venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>


                                <ul class='children'>

                                    <li class="comment byuser comment-author-_smcl_admin odd alt depth-2"
                                        id="li-comment-3">

                                        <div id="comment-3" class="comment-wrap">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar">
                                                        <img alt='Image'
                                                            src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                            class='avatar avatar-40 photo' height='40'
                                                            width='40'></span>

                                                </div>

                                            </div>

                                            <div class="comment-content">

                                                <div class="comment-author"><a href='#' rel='external nofollow'
                                                        class='url'>SemiColon</a><span><a href="#"
                                                            title="Permalink to this comment">April 25, 2012 at 1:03
                                                            am</a></span></div>

                                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                </ul>

                            </li>

                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                id="li-comment-2">

                                <div id="comment-2" class="comment-wrap">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar">
                                                <img alt='Image'
                                                    src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                    class='avatar avatar-60 photo' height='60' width='60'></span>

                                        </div>

                                    </div>

                                    <div class="comment-content">

                                        <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb'
                                                rel='external nofollow' class='url'>SemiColon</a><span><a href="#"
                                                    title="Permalink to this comment">April 25, 2012 at 1:03
                                                    am</a></span></div>

                                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>

                            </li>

                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form
							============================================= -->
                        <div id="respond">

                            <h3>Leave a <span>Comment</span></h3>

                            <form class="row" action="#" method="post" id="commentform">
                                <div class="col-md-4 form-group">
                                    <label for="author">Name</label>
                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                        class="form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                        class="form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="url">Website</label>
                                    <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                        class="form-control">
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" cols="58" rows="7" tabindex="4"
                                        class="form-control"></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                        class="button button-3d m-0">Submit Comment</button>
                                </div>
                            </form>

                        </div><!-- #respond end -->

                    </div><!-- #comments end -->

                </div>

            </div>
        </div>
    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="uil uil-angle-up"></div>

<?php
 include 'footer.php';
?>