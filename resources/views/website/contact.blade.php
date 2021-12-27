@extends('website.web.app')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                                <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <form id="contact-form" action="https://template.hasthemes.com/mitech-v2/assets/php/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Subject *">
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">San Francisco</h5>
                                <ul class="conact-info__list">
                                    <li>58 Howard Street #2 San Francisco, CA 941</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.sanfrancisco@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">New York</h5>
                                <ul class="conact-info__list">
                                    <li>58 Howard Street #14 New York</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.newyork@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+47)1221 09878</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Russia</h5>
                                <ul class="conact-info__list">
                                    <li>The Courtyard Building 11 Curtain Road, Russia</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Conact us info End  ====================-->






            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->




        </div>




        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper reveal-footer bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/images/logo/dark-logo-160x48.webp" width="160" height="48" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>58 Howard Street #2 San Francisco, CA 941</li>
                                <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a></li>
                                <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">IT Services</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Managed IT</a></li>
                                <li><a href="#" class="hover-style-link">IT Support</a></li>
                                <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                                <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                                <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                                <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Forum Support</a></li>
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                                <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                                <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.webp" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <span class="copyright-text">&copy; 2021 Mitech. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->









    </div>
    <!-- Start Toolbar -->
    <div class="demo-option-container">
        <!-- Start Toolbar -->
        <div class="aeroland__toolbar">
            <div class="inner">
                <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                    <i class="fal fa-project-diagram"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                    <i class="fal fa-life-ring"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource" aria-label="Purchase Mitech">
                    <i class="fal fa-shopping-cart"></i>
                </a>
            </div>
        </div>
        <!-- End Toolbar -->
        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource"><i class="far fa-shopping-cart me-2"></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="assets/images/demo-images/home-01.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="assets/images/demo-images/home-02.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="assets/images/demo-images/home-03.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="assets/images/demo-images/home-04.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="assets/images/demo-images/home-05.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="assets/images/demo-images/home-06.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-modern-it-company.html" aria-label="Modern IT Company">
                    <img class="img-fluid" src="assets/images/demo-images/modern-it-company.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-machine-learning.html" aria-label="Machine Learning">
                    <img class="img-fluid" src="assets/images/demo-images/machine-learning.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-software-innovation.html" aria-label="Software Innovation">
                    <img class="img-fluid" src="assets/images/demo-images/software-innovation.webp" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                <li><a href="index-processing.html"><span>Processing</span></a></li>
                                <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                <li><a href="index-services.html"><span>Services</span></a></li>
                                <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                                <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                                <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="about-us-01.html"><span>About us</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                        <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                        <li class="has-children">
                                            <a href="#"><span>Submenu Level Two</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="leadership.html"><span>Leadership</span></a></li>
                                <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                <li><a href="our-history.html"><span>Our history</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="careers.html"><span>Careers</span></a></li>
                                <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">IT solutions</a>
                            <ul class="sub-menu">
                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                <li><a href="industries.html"><span>Industries</span></a></li>
                                <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Element Group 01</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                        <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                        <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                        <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                        <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                        <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                        <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                        <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 02</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-counters.html"><span>Counters</span></a></li>
                                        <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                        <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                        <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                        <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                        <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                        <li><a href="element-lists.html"><span>Lists</span></a></li>
                                        <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 03</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                        <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                        <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                        <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                        <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                        <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                        <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                        <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 04</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                        <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                        <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                        <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Case Studies</a>
                            <ul class="sub-menu">
                                <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Blogs</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->
@endsection