<!-- =============== Start of Footer 1 =============== -->
<footer class="footer1">

    <!-- ===== Start of Footer Information & Links Section ===== -->
    <div class="footer-info ptb80">
        <div class="container">

            <!-- 1st Footer Column -->
            <div class="col-md-3 col-sm-6 col-xs-6 footer-about">

                <!-- Your Logo Here -->
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="">
                </a>

                <!-- Small Description -->
                <p class="pt40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type changed.</p>

                <!-- Info -->
                <ul class="nopadding">
                    <li><i class="fa fa-map-marker"></i>New York City, USA</li>
                    <li><i class="fa fa-phone"></i>(123) 456 789 0012</li>
                    <li><i class="fa fa-envelope-o"></i>youremail@cariera.com</li>
                </ul>
            </div>

            <!-- 2nd Footer Column -->
            <div class="col-md-3 col-sm-6 col-xs-6 footer-links">
                <h3>useful links</h3>

                <!-- Links -->
                <ul class="nopadding">
                    <li><a href="{{ route('front.blogs') }}"><i class="fa fa-angle-double-right"></i>bloq</a></li>
                    <li><a href="{{ route('front.job-search') }}"><i class="fa fa-angle-double-right"></i>iş elanları</a></li>
                    <li><a href="{{ route('front.resume-search') }}"><i class="fa fa-angle-double-right"></i>cv-lər</a></li>
                    <li><a href="{{ route('front.companies') }}"><i class="fa fa-angle-double-right"></i>şirkətlər</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-angle-double-right"></i>daxil ol</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-angle-double-right"></i>qeydiyyat</a></li>
                </ul>
            </div>

            <!-- 3rd Footer Column -->
            <div class="col-md-3 col-sm-6 col-xs-6 footer-posts">
                <h3>popular posts</h3>

                <!-- Single Post 1 -->
                <div class="footer-blog-post">

                    <!-- Thumbnail -->
                    <div class="thumbnail-post">
                        <a href="blog-post-right-sidebar.html">
                            <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="post-info">
                        <a href="blog-post-right-sidebar.html">blog post 1</a>
                        <span>1 day ago</span>
                    </div>
                </div>

                <!-- Single Post 2 -->
                <div class="footer-blog-post">

                    <!-- Thumbnail -->
                    <div class="thumbnail-post">
                        <a href="blog-post-right-sidebar.html">
                            <img src="{{ asset('assets/images/blog/blog2.jpg') }}" alt="">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="post-info">
                        <a href="blog-post-right-sidebar.html">blog post 2</a>
                        <span>2 day ago</span>
                    </div>
                </div>

                <!-- Single Post 3 -->
                <div class="footer-blog-post">

                    <!-- Thumbnail -->
                    <div class="thumbnail-post">
                        <a href="blog-post-right-sidebar.html">
                            <img src="{{ asset('assets/images/blog/blog3.jpg') }}" alt="">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="post-info">
                        <a href="blog-post-right-sidebar.html">blog post 3</a>
                        <span>4 day ago</span>
                    </div>
                </div>
            </div>

            <!-- 4th Footer Column -->
            <div class="col-md-3 col-sm-6 col-xs-6 footer-newsletter">
                <h3>newsletter</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                <!-- Subscribe Form -->
                <form action="#" class="form-inline mailchimp mtb30" novalidate>

                    <!-- Form -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" name="EMAIL" class="form-control" id="mc-email" placeholder="Your Email" autocomplete="off">
                            <label for="mc-email"></label>
                            <button type="submit" class="btn btn-blue btn-effect">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- Start of Live Chat -->
                <div class="footer-chat row nomargin">

                    <!-- Supporter Image -->
                    <div class="col-md-4">
                        <div class="supporter-image">
                            <img src="{{ asset('assets/images/clients/client4.jpg') }}" alt="">
                        </div>
                    </div>

                    <!-- Chat details -->
                    <div class="col-md-8">
                        <div class="chat-details">
                            <span>Helpline Center</span>

                            <p class="pt10 nomargin">Chat Live now!
                                <br>Hello, my name is John Doe, how may i help you?</p>

                            <!-- Live Chat Link -->
                            <div class="text-right pt15">
                                <a href="#"><i class="fa fa-comments-o"></i>Live Chat</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End of Live Chat -->
            </div>

        </div>
    </div>
    <!-- ===== End of Footer Information & Links Section ===== -->


    <!-- ===== Start of Footer Copyright Section ===== -->
    <div class="copyright ptb40">
        <div class="container">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <span>Copyright &copy; <a href="#">JobNest</a>. All Rights Reserved</span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start of Social Media Buttons -->
                <ul class="social-btns list-inline text-right">
                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll facebook">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll twitter">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll google-plus">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll instagram">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll linkedin">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll rss">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-rss"></i>
                                <i class="social-btn-roll-icon fa fa-rss"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End of Social Media Buttons -->
            </div>

        </div>
    </div>
    <!-- ===== End of Footer Copyright Section ===== -->

</footer>
<!-- =============== End of Footer 1 =============== -->

<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/isotope.mddin.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
@include('sweetalert::alert')

@stack('js')

</body>

</html>
