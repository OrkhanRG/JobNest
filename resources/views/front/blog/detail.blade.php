@extends('layouts.front')
@section('title', 'X Bloq')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>blog post - right sidebar</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">blog</li>
                        <li class="active">single post</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->


    <!-- ===== Start of Single Blog Post Section ===== -->
    <section class="ptb80" id="blog-post">
        <div class="container">

            <!-- Start of Blog Post Content Wrapper -->
            <div class="col-md-8 col-xs-12 post-content-wrapper">

                <!-- Start of Post Title -->
                <div class="post-title">
                    <h2>top 10 meditation tips</h2>
                    <!-- Post Details -->
                    <div class="post-detail">
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>4:30</span>
                        <span><i class="fa fa-comments-o"></i>12 Comments</span>
                    </div>
                </div>
                <!-- End of Post Title -->

                <!-- Start of Post Content -->
                <div class="post-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <!-- Post Image -->
                    <div class="post-img">
                        <img src="{{ asset('assets/images/blog/blog1.jpg') }}" class="img-responsive" alt="">
                    </div>

                    <h4>Subtitle</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                    <!-- Post Quote -->
                    <div class="post-quote">
                        <blockquote>Where there is peace and meditation, there is neither anciety nor doubt.</blockquote>
                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline mt20">
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
                            <a href="#" class="social-btn-roll pinterest">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                    <i class="social-btn-roll-icon fa fa-pinterest"></i>
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
                    </ul>
                    <!-- End of Social Media Buttons -->


                    <!-- Start of Blog Post Comments -->
                    <div class="mt60" id="blog-comments">
                        <div class="main-content">

                            <h4>4 comments</h4>

                            <!-- Start of Comment List -->
                            <ul class="comments-list">

                                <!-- Start of Comment 1 -->
                                <li class="comment">
                                    <!-- Commenter Image -->
                                    <a class="pull-left commenter" href="#">
                                        <img src="{{ asset('assets/images/clients/client1.jpg') }}" alt="" class="img-responsive">
                                    </a>

                                    <div class="media-body comment-body">
                                        <!-- Comment Wrapper -->
                                        <div class="comment-content-wrapper">
                                            <div class="media-heading clearfix">

                                                <!-- Commenters Name -->
                                                <h6 class="commenter-name">john doe</h6>

                                                <div class="comment-reply pull-right">
                                                    <a href="javascript:void(0)" class="btn btn-blue btn-small btn-effect">reply</a>
                                                </div>

                                                <!-- Comment Info -->
                                                <div class="comment-info">
                                                    <span>Nov 11, 2016 at 7:49 am</span>
                                                </div>

                                                <!-- Comment -->
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>

                                            <!-- ==== Start of Comment Replies ==== -->
                                            <ul class="comment-replies">

                                                <!-- Start of Comment Reply 1 -->
                                                <li class="comment-replied">
                                                    <!-- Commenter Image -->
                                                    <a class="pull-left commenter" href="#">
                                                        <img src="{{ asset('assets/images/clients/client2.jpg') }}" alt="" class="img-responsive">
                                                    </a>

                                                    <div class="media-body comment-body">
                                                        <!-- Comment Wrapper -->
                                                        <div class="comment-content-wrapper">
                                                            <div class="media-heading clearfix">

                                                                <!-- Commenters Name -->
                                                                <h6 class="commenter-name">john doe</h6>

                                                                <!-- Comment Info -->
                                                                <div class="comment-info">
                                                                    <span>Nov 11, 2016 at 7:51 am</span>
                                                                </div>

                                                                <!-- Comment -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                            </div>
                                                        </div>
                                                        <!-- End of Comment Wrapper -->
                                                    </div>
                                                </li>
                                                <!-- End of Comment Reply 1 -->

                                                <!-- Start of Comment Reply 2 -->
                                                <li class="comment-replied">
                                                    <!-- Commenter Image -->
                                                    <a class="pull-left commenter" href="#">
                                                        <img src="{{ asset('assets/images/clients/client3.jpg') }}" alt="" class="img-responsive">
                                                    </a>

                                                    <div class="media-body comment-body">
                                                        <!-- Comment Wrapper -->
                                                        <div class="comment-content-wrapper">
                                                            <div class="media-heading clearfix">

                                                                <!-- Commenters Name -->
                                                                <h6 class="commenter-name">john doe</h6>

                                                                <!-- Comment Info -->
                                                                <div class="comment-info">
                                                                    <span>Nov 11, 2016 at 7:52 am</span>
                                                                </div>

                                                                <!-- Comment -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                            </div>
                                                        </div>
                                                        <!-- End of Comment Wrapper -->
                                                    </div>
                                                </li>
                                                <!-- End of Comment Reply 2 -->

                                            </ul>
                                            <!-- ==== End of Comment Replies ==== -->
                                        </div>
                                        <!-- End of Comment Wrapper -->
                                    </div>
                                </li>
                                <!-- End of Comment 1 -->


                                <!-- Start of Comment 2 -->
                                <li class="comment">
                                    <!-- Commenter Image -->
                                    <a class="pull-left commenter" href="#">
                                        <img src="{{ asset('assets/images/clients/client1.jpg') }}" alt="" class="img-responsive">
                                    </a>

                                    <div class="media-body comment-body">
                                        <!-- Comment Wrapper -->
                                        <div class="comment-content-wrapper">
                                            <div class="media-heading clearfix">

                                                <!-- Commenters Name -->
                                                <h6 class="commenter-name">john doe</h6>

                                                <div class="comment-reply pull-right">
                                                    <a href="javascript:void(0)" class="btn btn-blue btn-small btn-effect">reply</a>
                                                </div>

                                                <!-- Comment Info -->
                                                <div class="comment-info">
                                                    <span>Nov 11, 2016 at 8:51 am</span>
                                                </div>

                                                <!-- Comment -->
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                        <!-- End of Comment Wrapper -->
                                    </div>
                                </li>
                                <!-- End of Comment 2 -->


                                <!-- Start of Comment 3 -->
                                <li class="comment">
                                    <!-- Commenter Image -->
                                    <a class="pull-left commenter" href="#">
                                        <img src="{{ asset('assets/images/clients/client4.jpg') }}" alt="" class="img-responsive">
                                    </a>

                                    <div class="media-body comment-body">
                                        <!-- Comment Wrapper -->
                                        <div class="comment-content-wrapper">
                                            <div class="media-heading clearfix">

                                                <!-- Commenters Name -->
                                                <h6 class="commenter-name">john doe</h6>

                                                <div class="comment-reply pull-right">
                                                    <a href="javascript:void(0)" class="btn btn-blue btn-small btn-effect">reply</a>
                                                </div>

                                                <!-- Comment Info -->
                                                <div class="comment-info">
                                                    <span>Nov 11, 2016 at 8:55 am</span>
                                                </div>

                                                <!-- Comment -->
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                        <!-- End of Comment Wrapper -->
                                    </div>
                                </li>
                                <!-- End of Comment 3 -->

                            </ul>
                            <!-- End of Comment List -->


                            <!-- Start of Comment Submit Form -->
                            <h4 class="pt40">Leave a comment</h4>

                            <form class="row" id="comment-form">
                                <div class="col-md-6 form-group">
                                    <input class="form-control input-box" type="text" name="name" placeholder="Your Name">
                                </div>

                                <div class="col-md-6 form-group">
                                    <input class="form-control input-box" type="email" name="email" placeholder="your@email.com">
                                </div>

                                <div class="col-md-12 form-group mb30">
                                    <textarea class="form-control textarea-box" rows="8" name="message" placeholder="Type your message..."></textarea>
                                </div>
                                <div class="col-md-6 col-xs-6 comment-require">
                                    <p>All fields are required.</p>
                                </div>
                                <div class="col-md-6 col-xs-6 comment-submit">
                                    <button class="btn btn-blue btn-effect pull-right" type="submit">Send message</button>
                                </div>
                            </form>
                            <!-- End of Comment Submit Form -->

                        </div>
                    </div>
                    <!-- Start of Blog Post Comments -->

                </div>
                <!-- End of Post Content -->

            </div>
            <!-- End of Blog Post Content Wrapper -->


            <!-- Start of Blog Sidebar -->
            <div class="col-md-4 col-xs-12 blog-sidebar">

                <!-- Start of Search -->
                <div class="col-md-12">
                    <form action="#" method="get">
                        <input type="text" class="form-control" placeholder="search...">
                    </form>
                </div>
                <!-- End of Search -->

                <!-- Start of Popular Posts -->
                <div class="col-md-12 clearfix mt40">
                    <h4 class="widget-title">popular posts</h4>

                    <!-- Blog Post 1 -->
                    <div class="sidebar-blog-post">
                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">top 10 tips for web developers</a>
                            <span>1 day ago</span>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="sidebar-blog-post">
                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="{{ asset('assets/images/blog/blog2.jpg') }}" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">how to prepare for an interview</a>
                            <span>2 days ago</span>
                        </div>
                    </div>

                    <!-- Blog Post 3 -->
                    <div class="sidebar-blog-post">
                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="{{ asset('assets/images/blog/blog3.jpg') }}" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">freelance vs employment</a>
                            <span>3 days ago</span>
                        </div>
                    </div>

                </div>
                <!-- End of Popular Posts -->


                <!-- Start of Newsletter -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">newsletter</h4>

                    <!-- Start Mailchimp Form -->
                    <form action="#" class="mailchimp" novalidate>
                        <div class="form-group">

                            <!-- Input -->
                            <input type="email" name="EMAIL" class="form-control" id="mc-email2" placeholder="Your Email" autocomplete="off">

                            <!-- Label - Do not delete this -->
                            <label for="mc-email2"></label>

                            <!-- Subscribe Button -->
                            <button type="submit" class="btn btn-blue btn-effect mt20">subscribe</button>
                        </div>
                    </form>
                    <!-- End of Mailchimp Form -->
                </div>
                <!-- End of Newsletter -->


                <!-- Start of Trending Tags -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">trending tags</h4>

                    <!-- Tags Wrapper -->
                    <div class="tag-wrapper">
                        <a href="#" class="tag-link">recruitment</a>
                        <a href="#" class="tag-link">tags</a>
                        <a href="#" class="tag-link">android</a>
                        <a href="#" class="tag-link">cariera template</a>
                        <a href="#" class="tag-link">html5</a>
                        <a href="#" class="tag-link">css3</a>
                        <a href="#" class="tag-link">design</a>
                        <a href="#" class="tag-link">job board</a>
                        <a href="#" class="tag-link">envato</a>
                        <a href="#" class="tag-link">creative</a>
                        <a href="#" class="tag-link">themeforest</a>
                        <a href="#" class="tag-link">web art</a>
                    </div>
                </div>
                <!-- End of Trending Tags -->


                <!-- Start of Social Media -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">share</h4>

                    <ul class="social-btns list-inline">
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
                </div>
                <!-- Start of Social Media -->


                <!-- Start of Categories -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">categories</h4>

                    <ul class="sidebar-list">
                        <li><a href="#">design</a></li>
                        <li><a href="#">tech</a></li>
                        <li><a href="#">strategy</a></li>
                        <li><a href="#">job board</a></li>
                        <li><a href="#">marketing</a></li>
                        <li><a href="#">life</a></li>
                        <li><a href="#">finance</a></li>
                    </ul>
                </div>
                <!-- End of Categories -->

                <!-- Start of Archives -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">archives</h4>

                    <ul class="sidebar-list">
                        <li><a href="#">january</a></li>
                        <li><a href="#">february</a></li>
                        <li><a href="#">march</a></li>
                        <li><a href="#">april</a></li>
                        <li><a href="#">may</a></li>
                    </ul>
                </div>
                <!-- End of Archives -->

            </div>
            <!-- End of Blog Sidebar -->

        </div>
    </section>
    <!-- ===== End of Single Blog Post Section ===== -->


    <!-- ===== Start of Next Post Section ===== -->
    <section class="ptb120" id="next-post">
        <div class="container">
            <div class="col-md-12">
                <span>You may also like</span>

                <!-- Post Title -->
                <h2 class="ptb40">How to prepare for an Interview</h2>

                <!-- Button -->
                <a href="#" class="btn btn-blue btn-effect">read now</a>
            </div>
        </div>
    </section>
    <!-- ===== End of Next Post Section ===== -->
@endsection

@push('js')
@endpush
