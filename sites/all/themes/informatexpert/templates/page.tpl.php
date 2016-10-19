<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
		<div id="pageloader">
			<div class="loader-item">
                <img src="/sites/all/themes/informatexpert/images/puff.svg" alt="page loader">
            </div>
		</div>

        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>


        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-op navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#page-top">
                        <img src="/sites/all/themes/informatexpert/images/logo/logo-default.png" alt="logo">
                        Pasific
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav mr20">
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a href="#welcome">Welcome</a></li>
                        <li><a href="#portfolioGrid">Works</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Login Modal Dialog Box
        ===================================== -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- modal content start -->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-lock fa-fw"></i> Sign In</h5>
                    </div>
                    <div class="modal-body pt25">
                        <div class="text-center">
                            <span class="color-dark">Sign in with your social account</span><br>
                            <a href="#">
                                <img src="assets/img/other/fbconnect.png" alt="" class="mt10 mb10">
                            </a>
                            <a href="#">
                                <img src="assets/img/other/twconnect.png" alt="" class="mt10 mb10"><br><br>
                            </a>
                            <span class="color-dark">- Or sign in with your email address -</span>
                        </div>

                        <form class="form-horizontal mt25 ml50">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                              <button type="submit" class="button button-pasific button-block">Sign in</button>

                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center">Don't have an account? <a href="#" class="color-dark">Register Now</a></span>
                    </div>
                </div>
                <!-- modal content end -->

            </div>
        </div>


        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- modal content start -->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>
                <!-- modal content end -->

            </div>
        </div>


        <!-- Intro Area
        ===================================== -->
        <header class="intro parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="assets/img/bg/img-bg-1.jpg">
            <div class="intro-body">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2  mt-100">
                            <h1 class="brand-heading text-capitalize font-pacifico mt-100 color-light animated" data-animation="fadeInUp" data-animation-delay="100">
                                We <i class="fa fa-heart color-pasific"></i> <span class="rotate mr10">Website, Mobile App, Graphic </span> Design
                            </h1>
                            <p class="intro-text mt25 color-gray animated" data-animation="fadeInUp" data-animation-delay="200">The simplest way to create website <br>and make your dream live.</p>
                            <a class="button button-pasific button-lg hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="300">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>

            </div>
        </header>


        <!-- Welcome Area
        ===================================== -->
        <div id="welcome" class="pt75">
            <div class="container">
                <div class="row">

                    <!-- title start -->
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Welcome to Pasific</small>
                            We Are Smart Creative Agency
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    <!-- title end -->

                    <!-- title description start -->
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p>
                            <span class="lead"><strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</strong></span><br><br>

                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                    <!-- title description end -->
                </div>

                <div class="row mt50">

                    <!-- item one start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <div class="content-box content-box-center">
                            <span class="icon-layers color-pasific"></span>
                                <h5>Clean Code</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>

                        </div>
                    </div>
                    <!-- item one end -->

                    <!-- item two start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
                        <div class="content-box content-box-center">
                            <span class="icon-mobile color-pasific"></span>
                                <h5>Mobile Optimzed</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>

                        </div>
                    </div>
                    <!-- item two end -->

                    <!-- item three start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                        <div class="content-box content-box-center">
                            <span class="icon-camera color-pasific"></span>
                                <h5>Photographer</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>

                        </div>
                    </div>
                    <!-- item three end -->

                    <!-- item four start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                        <div class="content-box content-box-center">
                            <span class="icon-briefcase color-pasific"></span>
                                <h5>Awesome Portfolio</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>

                        </div>
                    </div>
                    <!-- item four start -->

                </div>
            </div>
        </div>


        <!-- Portfolio Area
        ===================================== -->
        <div id="portfolioGrid">
            <div class="pt50">&nbsp;</div>
            <div class="container-fluid bg-gray pt30">

                <div class="row">
                    <div class="col-md-12">

                        <!-- filters start -->
                        <ul class="filters text-center  mt25 mb50">
                            <li><a class="active" data-filter="*">All Projects</a></li>
                            <li><a data-filter=".html">HTMl</a></li>
                            <li><a data-filter=".wordpress">Wordpress</a></li>
                            <li><a data-filter=".woocommerce">WooCommerce</a></li>
                            <li><a data-filter=".joomla">Joomla</a></li>
                            <li><a data-filter=".magento">Magento</a></li>
                            <li><a data-filter=".shopify">Shopify</a></li>
                        </ul>
                        <!-- filters end -->

                        <div class="portfolio center-block">

                            <!-- portfolio item one start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wordpress woocommerce" data-category="">
                                <a href="assets/img/portfolio/preview/1.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-1.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item one end -->

                            <!-- portfolio item two start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 joomla html">
                                <a href="assets/img/portfolio/preview/2.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-3.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item two end -->

                            <!-- portfolio item three start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wordpress joomla">
                                <a href="assets/img/portfolio/preview/img-370x165-1.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-2.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item three end -->

                            <!-- portfolio item four start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 html wordpress">
                                <a href="assets/img/portfolio/preview/3.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-4.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item four end -->

                            <!-- portfolio item five start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 html joomla wordpress">
                                <a href="assets/img/portfolio/preview/4.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-6.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item five end -->

                            <!-- portfolio item six start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 html shopify joomla">
                                <a href="assets/img/portfolio/preview/5.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-5.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item six end -->

                            <!-- portfolio item seven start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wordpress magento woocommerce">
                                <a href="assets/img/portfolio/preview/6.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-7.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item seven end -->

                            <!-- portfolio item eight start -->
                            <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 joomla html">
                                <a href="assets/img/portfolio/preview/7.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="assets/img/portfolio/thumbs/img-550x350-8.jpg" alt="portfolio woocommerce" class="img-responsive">
                            </div>
                            <!-- portfolio item eight end -->

                        </div><!-- portfolio end -->

                    </div><!-- col-md-12 end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section portfolio end -->


        <!-- Service Area
        ===================================== -->
        <div id="service" class="pt75 pb25">
            <div class="container">

                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Modern Service</small>
                            We Build Website &amp; App
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem.
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->

                <!-- service one start -->
                <div class="row mt75">
                    <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <img src="assets/img/other/img-other-3.png" alt="website service" class="img-responsive">
                    </div>
                    <div class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">

                        <h3 class="font-size-normal">
                            <small class="color-primary">Web Design &amp; Development</small>
                            Wordpress. Joomla. Opencart. Etc.
                        </h3>

                        <p class="mt20">
                            We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                            anything that you want to make great success.
                        </p>
                        <p>
                            <i class="fa fa-wordpress fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-joomla fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-drupal fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-shopping-basket fa-2x color-gray2 mr10"></i>
                        </p>
                        <p>
                            <a class="button-o button-sm button-primary hover-fade">Start Project</a>
                        </p>
                    </div>
                </div>
                <!-- service one end -->

                <!-- service two start -->
                <div class="row mt100">
                    <div class="col-md-6 col-md-push-6 animated" data-animation="fadeInRight" data-animation-delay="100">
                        <img src="assets/img/other/img-other-4.png" alt="website service" class="img-responsive">
                    </div>
                    <div class="col-md-5 col-md-pull-5">

                        <h3 class="font-size-normal">
                            <small class="color-success">App Design &amp; Development</small>
                            Android. iOS. Windows. Etc.
                        </h3>

                        <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                            We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                            anything that you want to make great success.
                        </p>
                        <p>
                            <i class="fa fa-android fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-apple fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-windows fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-amazon fa-2x color-gray2 mr10"></i>
                        </p>
                        <p>
                            <a class="button-o button-sm button-success hover-fade">Start Project</a>
                        </p>
                    </div>
                </div>
                <!-- service two end -->

                <!-- service three start -->
                <div class="row mt75">
                    <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <img src="assets/img/other/img-other-5.jpg" alt="website service" class="img-responsive">
                    </div>
                    <div class="col-md-5">

                        <h3 class="font-size-normal">
                            <small class="color-red">Graphic Design</small>
                            Logo. Icon. Infographic. Etc.
                        </h3>

                        <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                            We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                            anything that you want to make great success.
                        </p>
                        <p>
                            <i class="fa fa-file-image-o fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-object-ungroup fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-paper-plane-o fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-camera-retro fa-2x color-gray2 mr10"></i>
                        </p>
                        <p>
                            <a class="button-o button-sm button-red hover-fade">Start Project</a>
                        </p>
                    </div>
                </div>
                <!-- service three end -->

            </div><!-- container end -->
        </div><!-- section service end -->


        <!-- Info Area
        ===================================== -->
        <div id="info-1" class="pt50 pb50 mt75 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="assets/img/bg/img-bg-2.jpg">
            <div class="container">
                <div class="row pt75">
                    <div class="col-md-12 text-center">
                        <h1 class="color-light">
                            <small class="color-light">The best way to be success</small>
                            Are you ready to be success with us?
                        </h1>
                        <a class="button button-md button-pasific hover-ripple-out mt25">Start Project</a>
                        <a class="button-o button-md button-green hover-fade mt25"><span class="color-light">Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Team Area
        ===================================== -->
        <div id="team" class="pt75">
            <div class="container">

                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Amazing Team</small>
                            We have a lot of Smart People
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem.
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->

            </div>

            <div class="container-fluid">
                <div class="row">

                    <!-- team member one start -->
                    <div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">
                            <img src="assets/img/team/img-team-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                        </div>
                    </div>
                    <!-- team member one end -->

                    <!-- team member two start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">
                            <img src="assets/img/team/img-team-2.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                        </div>
                    </div>
                    <!-- team member two end -->

                    <!-- team member three start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">
                            <img src="assets/img/team/img-team-3.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                        </div>
                    </div>
                    <!-- team member three end -->

                    <!-- team member four start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">
                            <img src="assets/img/team/img-team-4.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                        </div>
                    </div>
                    <!-- team member four end -->

                    <!-- team member five start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">
                            <img src="assets/img/team/img-team-5.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                        </div>
                    </div>
                    <!-- team member five end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section team end -->


        <!-- Skill Area
        ===================================== -->
        <div id="progressBar2">
            <div class="container pt50 pb75">
                <div class="row">

                    <!-- left skill start -->
                    <div class="col-sm-6 col-md-6">
                        <h5 class="text-uppercase font-montserrat color-dark text-center mb25">Design Skills</h5>

                        <!-- skill one start -->
                        <h5 class="text-right">Adobe Photoshop</h5>
                        <div class="progress progress-xs progress-circle right">
                            <div class="progress-bar bg-primary" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                        <!-- skill one end -->

                        <!-- skill two start -->
                        <h5 class="text-right">Adobe Illustrator</h5>
                        <div class="progress progress-sm progress-circle right">
                            <div class="progress-bar bg-success" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                        <!-- skill two end -->

                        <!-- skill three start -->
                        <h5 class="text-right">Adobe InDesign</h5>
                        <div class="progress progress-md progress-circle right">
                            <div class="progress-bar bg-info" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                        <!-- skill three end -->

                        <!-- skill four start -->
                        <h5 class="text-right">Sketch</h5>
                        <div class="progress progress-lg progress-circle right">
                            <div class="progress-bar bg-pasific" role="progressbar" data-transitiongoal="95"></div>
                        </div>
                        <!-- skill four end -->
                    </div>
                    <!-- left skill end -->

                    <!-- right skill start -->
                    <div class="col-sm-6 col-md-6">
                        <h5 class="text-uppercase font-montserrat color-dark text-center mb25">CMS Programming Skills</h5>

                        <!-- skill five start -->
                        <h5>Wordpress</h5>
                        <div class="progress progress-circle progress-xs">
                            <div class="progress-bar bg-primary" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                        <!-- skill five end -->

                        <!-- skill six start -->
                        <h5>WooCommerce</h5>
                        <div class="progress progress-circle progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                        <!-- skill six end -->

                        <!-- skill seven start -->
                        <h5>Opencart</h5>
                        <div class="progress progress-circle progress-md">
                            <div class="progress-bar bg-info" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                        <!-- skill seven end -->

                        <!-- skill eight start -->
                        <h5>Shopify</h5>
                        <div class="progress progress-circle progress-lg">
                            <div class="progress-bar bg-pasific" role="progressbar" data-transitiongoal="95"></div>
                        </div>
                        <!-- skill eight end -->
                    </div>
                    <!-- right skill end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section skill end -->


        <!-- Fun Fact Area
        ===================================== -->
        <div id="fact" class="bg-grad-stellar pt100 pb100">
            <div class="container">

                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center mb50">
                        <h1 class="font-size-normal color-light">
                            <small class="color-light">Your Business Partner</small>
                            Better Solution for Better Business
                        </h1>

                    </div>
                </div>
                <!-- title and short description end -->

                <div class="row">

                    <!-- fun fact left start -->
                    <div class="col-md-3">
                        <div class="row">

                            <!-- fun fact one start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="387">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Projects Completed</span>
                                </div>
                            </div>
                            <!-- fun fact one end -->

                            <!-- fun fact two start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="578">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Happy Clients</span>
                                </div>
                            </div>
                            <!-- fun fact two end -->

                        </div>
                    </div>
                    <!-- fun fact left end -->

                    <!-- fun fact right start -->
                    <div class="col-md-3 col-md-push-6">
                        <div class="row">

                            <!-- fun fact three start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="175">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Coffee Cups</span>
                                </div>
                            </div>
                            <!-- fun fact three end -->

                            <!-- fun fact four start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="350">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Cupcakes</span>
                                </div>
                            </div>
                            <!-- fun fact four end -->

                        </div>
                    </div>
                    <!-- fun fact right end -->

                    <div class="col-md-6 col-md-pull-3">
                        <img src="assets/img/other/map.png" alt="macbook" class="img-responsive">
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-8 col-sm-push-2 text-center">
                        <h4 class="pt25 color-light">Have an idea? We will do the rest!</h4>
                        <p class="pb10 color-light alpha8">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <a href="#" class="button button-md button-gray hover-ripple-out"><span class="color-primary">Start Project</span></a>
                    </div>
                </div>

            </div><!-- container end -->
        </div><!-- section fun fact end -->


        <!-- Features Area
        ===================================== -->
        <div id="features" class="pt75 mb25">
            <div class="container">

                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Amazing Features</small>
                            Best Template with Tons of Features
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem.
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->

                <div class="row mt50">
                    <!-- feature one start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-mobile color-primary border-primary"></span>
                            <h5>Mobile Optimized</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature one end -->

                    <!-- feature two start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-documents color-success border-success"></span>
                            <h5>Online Documentation</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature two end -->

                    <!-- feature three start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-basket color-cyan border-cyan"></span>
                            <h5>Shop Ready</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature three end -->

                    <!-- feature four start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-layers color-pasific border-pasific"></span>
                            <h5>Clean Code</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature four end -->

                    <!-- feature five start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-adjustments color-green border-green"></span>
                            <h5>Easy to Customized</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature five end -->

                    <!-- feature six start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-bike color-red border-red"></span>
                            <h5>2000+ Icons Included</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature six end -->

                    <!-- feature seven start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-video color-pink border-pink"></span>
                            <h5>Video Background</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature seven end -->

                    <!-- feature eight start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-tools color-warning border-warning"></span>
                            <h5>Full Support</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature eight end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section feature end -->


        <!-- SVG Cart Area
        ===================================== -->
        <div class="svg-container2">
            <!-- svg start -->
            <svg id="svgLine" xmlns="http://www.w3.org/2000/svg" version="1.1"
                 width="100%" height="300" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2000 250" preserveAspectRatio="xMinYMax">

                <polygon points="-150,300 200,90 550,140 800,60 1100,150 1400,100 1700,10 1900,50 2500,90 2500,300"
                         fill="url(#BglinierGradient)" stroke="none">
                </polygon>

                <polyline points="-150,244 200,90 550,140 800,60 1100,150 1400,100 1700,10 1900,50 2500,90 2500,500"
                          fill="none" stroke="#7668af" stroke-width="0">
                </polyline>

                <text x="170" y="20" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Lines of Code</text>
                <text x="170" y="60" fill="#5cb85c" style="font-size: 250%; font-weight: 300;">120K</text>

                <text x="510" y="60" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Shortcodes</text>
                <text x="520" y="100" fill="#5f6467" style="font-size: 250%; font-weight: 300;">750</text>

                <text x="760" y="0" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Icons Included</text>
                <text x="760" y="40" fill="#b2cc71" style="font-size: 250%; font-weight: 300;">2000+</text>

                <text x="1060" y="70" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Happy Clients</text>
                <text x="1060" y="110" fill="#3c88c6" style="font-size: 250%; font-weight: 300;">950</text>

                <text x="1350" y="30" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Item Sales</text>
                <text x="1350" y="70" fill="#1abc9c" style="font-size: 250%; font-weight: 300;">5,780</text>

                <text x="1650" y="90" fill="#333333" style="font-size: 140%; font-weight: 300; font-family: 'Pacifico', cursive;">Counting..</text>

                <ellipse id="svg_1" rx="15" ry="15" cx="200" cy="90" fill="#5cb85c" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_2" rx="10" ry="10" cx="550" cy="140" fill="#5f6467" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_3" rx="15" ry="15" cx="800" cy="60" fill="#b2cc71" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_4" rx="15" ry="15" cx="1100" cy="150" fill="#3c88c6" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_5" rx="10" ry="10" cx="1400" cy="100" fill="#1abc9c" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_6" rx="10" ry="10" cx="1700" cy="10" fill="#a85ad4" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_7" rx="9" ry="9" cx="1900" cy="50" fill="#ff8b34" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_8" rx="6" ry="6" cx="2500" cy="90" fill="#fd40b3" stroke="#ffffff" stroke-width="5"></ellipse>
                <ellipse id="svg_9" rx="6" ry="6" cx="2200" cy="90" fill="#fd3635" stroke="#ffffff" stroke-width="5"></ellipse>

                <defs>
                  <lineargradient id="BglinierGradient" x1="0" y1="0" x2="0" y2="1">
                      <stop id="BgLinierGradientStop_1" stop-opacity="1" stop-color="#e8f3f5" offset="0"></stop>
                      <stop id="BgLinierGradientStop_2" stop-opacity="1" stop-color="#e8f3f5" offset="1"></stop>
                  </lineargradient>
                </defs>
            </svg>
            <!-- svg end -->
        </div><!-- svg container end -->


        <!-- Achievement Area
        ===================================== -->
        <div class="pt50" style="background: url(assets/img/bg/bg-wood.jpg) 100% 100% repeat-x #e8f3f5;">
            <div class="container">

                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-source-sans-pro text-center mb50">
                            <small class="heading heading-icon heading-icon-rounded bg-grad-stellar center-block">
                                <i class="fa fa-trophy color-light"></i>
                            </small>
                            The Best Web &amp; App Developer 2016
                            <small class="heading-desc text-lowercase color-dark">
                                Every day, We makes thousands of customers happy.
                            </small>
                        </h2>
                    </div>
                </div>
                <!-- title and short description end -->

                <div class="row mb50 text-center">
                    <div class="col-sm-12">
                        <i class="fa fa-android fa-3x mr20 color-green"></i>
                        <i class="fa fa-apple fa-4x mr20 color-dark"></i>
                        <i class="fa fa-amazon fa-4x mr20 color-red"></i>
                        <i class="fa fa-windows fa-3x color-purple"></i>
                    </div>
                </div>

                <div class="col-md-12">
                    <img src="assets/img/other/img-other-6.png" alt="device" class="img-responsive center-block">
                </div>

            </div><!-- container end -->
        </div><!-- section achievment end -->


        <!-- Info Area
        ===================================== -->
        <div id="Info-1" class="bg-gray pt30 bb-solid-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center pb35">
                        <h4>We are here to help you reach success</h4>
                        <a class="button button-md button-blue hover-ripple-out mr10">Purchase Now</a>
                        <a class="button button-md button-pasific hover-ripple-out">Start Project</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- General Content Area
        ===================================== -->
        <div id="general-content-1" class="pt100 pb100">
            <div class="container">
                <div class="row">

                    <!-- left content start -->
                    <div class="col-md-5">
                        <div class="general-content">
                            <h3 class="mb25">
                                <small class="color-red">Mobile Optimized</small>
                                Support for All Mobile Devices
                            </h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a class="button button-md button-pasific hover-ripple-out">Purchase Now</a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- left content end -->

                    <!-- right content start -->
                    <div class="col-md-5 col-md-push-1">
                        <img src="assets/img/other/img-other-1.png" alt="browser iphone" class="img-responsive pull-right">
                    </div>
                    <!-- right content end -->

                </div>
            </div>
        </div>


        <!-- General Content Area
        ===================================== -->
        <div id="general-content-2" class="bg-gray pt100 pb100">
            <div class="container">
                <div class="row">

                    <!-- left content start -->
                    <div class="col-md-6">
                        <img src="assets/img/other/img-other-2.png" alt="browser iphone" class="img-responsive center-block">
                    </div>
                    <!-- left content end -->

                    <!-- right content start -->
                    <div class="col-md-5 col-md-push-1">
                        <div class="general-content">
                            <h3 class="mb25">
                                <small class="color-red">eCommerce</small>
                                Online Store Ready
                            </h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a class="button button-md button-pasific hover-ripple-out">Purchase Now</a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- right content end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section general info end -->


        <!-- Shop Area
        ===================================== -->
        <div id="shop" class="pt70 pb50">
            <div class="container">

                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>eCommerce</small>
                        Online Shop
                        <small class="heading heading-solid center-block"></small>
                    </h1>
                </div>
                <!-- title end -->

                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="owlShop">

        <!-- Newsletter Area
        =====================================-->
        <div id="newsletter" class="bg-dark2 pt50 pb50">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="color-light">
                            Newsletter
                        </h4>
                    </div>

                    <div class="col-md-10">
                        <form name="newsletter">
                            <div class="input-newsletter-container">
                                <input type="text" name="email" class="input-newsletter" placeholder="enter your email address">
                            </div>
                            <a href="#" class="button button-sm button-pasific hover-ripple-out">Subscribe<i class="fa fa-envelope"></i></a>
                        </form>
                    </div>
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section newsletter end -->


        <!-- Testimonial Area
        ===================================== -->
        <div id="testimonial" class="pt75 pb75">
            <div class="container">

                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>Testimonials</small>
                        What Our Clients Say About Us
                        <small class="heading heading-solid center-block"></small>
                    </h1>
                </div>
                <!-- title end -->

                <div class="row">

                    <div class="col-sm-12">
                        <div class="row">

                            <div id="owlSectionThreeItem" class="owl-carousel">

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Pasific template is the best template so far. So easy to customize and clean code. Recommended!
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-1.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Martin Smith <a href="#">envato.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-2.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Steve Austin <a href="#">facebook.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-4.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Gisselse <a href="#">Smashingmagazine.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Pasific template is the best template so far. So easy to customize and clean code. Recommended!
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-1.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Martin Smith <a href="#">Smashingmagazine.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-2.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Steve Austin <a href="#">envato.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets/img/other/photo-4.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Goselle <a href="#">themeforest.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                            </div><!-- owlSectionThreeItem end -->
                        </div><!-- row end -->
                    </div><!-- col end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section testimonial end -->


        <!-- Contact Us Area
        =====================================-->
        <div id="contact" class="pt100 pb100 bg-grad-stellar">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">

                            <!-- title start -->
                            <div class="col-md-12 mb50">
                                <h1 class="font-size-normal color-light">
                                    <small class="color-light">Contact Us</small>
                                    Drop Us a Message
                                </h1>
                                <h5 class="color-light">Please feel free to say anything to us. Our staff will reply any message<br>as soon as possible.</h5>
                            </div>
                            <!-- title end -->

                            <!-- contact info start -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span class="icon-map color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Address</strong></h5>
                                <p class="color-light">Address Business 123 London, UK.</p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-megaphone color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Phone</strong></h5>
                                <p class="color-light">123-456-789</p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-envelope color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Email</strong></h5>
                                <p class="color-light">email@domain.com</p>
                            </div>
                            <!-- contact info end -->

                        </div><!-- row left end -->
                    </div><!-- col left end -->

                    <div class="col-md-6">
                        <div class="contact contact-us-one">
                            <div class="col-sm-12 col-xs-12 text-center mb20">
                                <h4 class="pb25 bb-solid-1 text-uppercase">
                                    Get in Touch
                                    <small class="text-lowercase">Please complete the form and we will get back to you.</small>
                                </h4>
                            </div>
                            <form name="contactform" id="contactForm" method="post" action="assets/php/send.php">

                                <!-- fullname start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="fullname" maxlength="100" required>
                                </div>
                                <!-- fullname end -->

                                <!-- email start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="senderEmail" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" maxlength="100" required>
                                </div>
                                 <!-- email end -->

                                <!-- website start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="url" name="senderWebsite" id="senderWebsite" class="input-md input-rounded form-control" placeholder="http://" maxlength="100">
                                </div>
                                <!-- website end -->

                                <!-- security start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderHuman" id="senderHuman" class="input-md input-rounded form-control" placeholder="" required>
                                    <input type="hidden" name="checkHuman_a" id="checkHuman_a">
                                    <input type="hidden" name="checkHuman_b" id="checkHuman_b">
                                </div>
                                  <!-- security end -->

                                <!-- textarea start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                                </div>
                                <!-- textarea end -->

                                <!-- button start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="sendMessage" id="sendMessage" class="button button-md button-block button-grad-stellar">Send Message</button>
                                </div>
                                <!-- button end -->

                                <div id="sendingMessage" class="statusMessage sending-message"><p>Sending your message. Please wait...</p></div>
                                <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                                <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                                <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>

                            </form>
                        </div><!-- div contact end -->
                    </div><!-- col end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section contact end -->


        <!-- Clients Area
        ===================================== -->
        <div id="client" class="bg-gray pt50 pb20">
            <div class="container">
                <div class="row">

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/paypal-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
                    </div>
                    <!-- logo client end -->

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/evernote-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
                    </div>
                    <!-- logo client end -->

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/microsoft-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
                    </div>
                    <!-- logo client end -->

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/smashing-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
                    </div>
                    <!-- logo client end -->

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/mashable-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
                    </div>
                    <!-- logo client end -->

                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="assets/img/brand/guardian-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
                    </div>
                    <!-- logo client end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section clients end -->


        <!-- footer Area
        ===================================== -->
        <div id="footer" class="footer-two pt50">
            <div class="container-fluid bb-solid-1">
                <div class="container pb35">
                    <div class="row">

                        <!-- footer about start -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">About Us</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit morbi sagittis.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <!-- footer about end -->

                        <!-- footer menu one start -->
                        <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Menu</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Member</a></li>
                            </ul>
                        </div>
                        <!-- footer menu one end -->

                        <!-- footer menu two start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Learn more</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">New Features</a></li>
                                <li><a href="#">Payment</a></li>
                            </ul>
                        </div>
                        <!-- footer menu two end -->

                        <!-- footer menu three start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Support</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Knowledgebase</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- footer menu three end -->

                        <!-- footer social icons start -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">Social Media</h6>
                            <div class="social social-two">
                                <a href="#"><i class="fa fa-twitter color-blue"></i></a>
                                <a href="#"><i class="fa fa-facebook color-primary"></i></a>
                                <a href="#"><i class="fa fa-linkedin color-blue"></i></a><br><br>
                                <a href="#"><i class="fa fa-github color-dark"></i></a>
                                <a href="#"><i class="fa fa-pinterest color-red"></i></a>
                            </div>
                        </div>
                        <!-- footer social icons end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->

            <div class="container-fluid pt20">
                <div class="container">
                    <div class="row">

                        <!-- copyright start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                            <p>Copyright &copy;2016 <a href="#">Pasific Studio, LLC</a>. All rights reserved.</p>
                        </div>
                        <!-- copyright end -->

                        <!-- footer bottom start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                            <p class="text-right">
                                <a href="#" class="mr20">Privacy Policy</a>
                                <a href="#" class="mr20">Term of Use</a>
                                <a href="#" class="mr50">Site Map</a>
                            </p>
                        </div>
                        <!-- footer bottom end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->
        </div><!-- footer end -->
