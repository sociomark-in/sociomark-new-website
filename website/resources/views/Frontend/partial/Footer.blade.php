
    <!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper bg-title footer-layout1 footer-layout2">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-4">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a class="icon-masking" href="index.html">
                                    {{-- <img src="{{ asset('frontend-assets/img/logo/sc-white-horizontal.png') }}" alt="sociomark"> --}}
                                    <img src="{{ asset('frontend-assets/img/logo/sociomark-new-logo.png') }}"  height="200" alt="sociomark">
                                </a>
                            </div>
                            {{-- <p class="about-text">Saor, meaning "free" in Gaelic, embodies our dedication to liberating your brand's potential in the digital realm. Founded in 1995, we boast a rich history.</p> --}}
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Remarkable's</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Creator</a></li>
                                <li><a href="contact.html">Blogs</a></li>
                                <li><a href="#">Case Study</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Work</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Info</h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <div class="th-social">
                                    {{-- <img src="assets/img/icon/location.svg" alt=""> --}}
                                    <a><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="box-text">
                                    <a class="box-link">The Affaires, 6th Floor, 603, Sector 17, Palm Beach Road, Sanpada,Navi Mumbai 400705</a>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="th-social">
                                    <a><i class="fa fa-phone"></i></a>
                                    {{-- <img src="assets/img/icon/call.svg" alt=""> --}}
                                </div>
                                <div class="box-text">
                                    <a href="tel:+918169482831" class="box-link">+918169482831</a>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="th-social">
                                    {{-- <img src="assets/img/icon/mail.svg" alt=""> --}}
                                    <a><i class="fa fa-envelope"></i></a>
                                </div>
                                <div class="box-text">
                                    <a href="mailto:business@sociomark.in" class="box-link">business@sociomark.in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a href="#">Sociomark</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll To Top -->

<style>
    .th-widget-contact {
    max-width: 100%;
}
.th-widget-contact .info-box {
    align-items: center;
    margin-bottom: 15px;
}
</style>
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>