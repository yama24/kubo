<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>{{ $title }} - Kubo</title>
    <link rel="shortcut icon" href="/front/images/square-logo.svg" type="image/x-icon">
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/front/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="/front/css/featherlight.css" rel="stylesheet" type="text/css">
    <link href="/front/css/rrssb.css" rel="stylesheet" type="text/css">
    <link href="/front/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="eskimo-progress-bar">
        <span class="eskimo-progress-container">
            <span class="eskimo-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="eskimo-site-wrapper">
        <!-- MAIN CONTAINER -->
        <main id="eskimo-main-container">
            <div class="container">
                <!-- SIDEBAR -->
                <div id="eskimo-sidebar">
                    <div id="eskimo-sidebar-wrapper" class="d-flex align-items-start flex-column h-100 w-100">
                        <!-- LOGO -->
                        <div id="eskimo-logo-cell" class="w-100">
                            <a class="eskimo-logo-link" href="/">
                                <img src="/front/images/main-logo.svg" class="eskimo-logo" alt="eskimo" />
                            </a>
                        </div>
                        <!-- MENU CONTAINER -->
                        <div id="eskimo-sidebar-cell" class="w-100">
                            <!-- MOBILE MENU BUTTON -->
                            <div id="eskimo-menu-toggle">MENU</div>
                            <!-- MENU -->
                            <nav id="eskimo-main-menu" class="menu-main-menu-container">
                                <ul class="eskimo-menu-ul">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Me</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    {{-- <li><a href="/gallery">Galleries</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                        <!-- SOCIAL MEDIA ICONS -->
                        <div id="eskimo-social-cell" class="mt-auto w-100">
                            <div id="eskimo-social-inner">
                                <ul class="eskimo-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOP ICONS -->
                <ul class="eskimo-top-icons">
                    <li id="eskimo-panel-icon">
                        <a href="#eskimo-panel" class="eskimo-panel-open"><i class="fa fa-bars"></i></a>
                    </li>
                    <li id="eskimo-search-icon">
                        <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                @yield('container')
            </div>
        </main>
        <!-- FOOTER -->
        <footer id="eskimo-footer">
            <div class="container">
                <div class="row eskimo-footer-wrapper">
                    <!-- FOOTER WIDGET 1 -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <h5 class="eskimo-title-with-border"><span>About Me</span></h5>
                        <p>Trusted by thousands of customers, my unique themes and plugins help you make beautiful responsive web sites with ease.</p>
                        <p><a href="/about" class="btn btn-default">Read More</a></p>
                    </div>
                    <!-- FOOTER WIDGET 2 -->
                    <div class="col-12 col-lg-6">
                        <h5 class="eskimo-title-with-border"><span>Newsletter</span></h5>
                        <form method="post" action="/">
                            <label>Subscribe to our mailing list!</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your email address" required />
                                <div class="input-group-append">
                                    <input type="submit" value="Sign up" class="btn btn-default" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDITS -->
                <div class="eskimo-footer-credits">
                    <p>
                        Made with love by <a href="https://themeforest.net/user/egemenerd" target="_blank">Egemenerd</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- SLIDE PANEL OVERLAY -->
    <div id="eskimo-overlay"></div>
    <!-- SLIDE PANEL -->
    <div id="eskimo-panels">
        <aside id="eskimo-panel" class="eskimo-panel">
            <div class="eskimo-panel-inner">
                <!-- CLOSE SLIDE PANEL BUTTON -->
                <a href="#" class="eskimo-panel-close"><i class="fa fa-times"></i></a>
                <!-- AUTHOR BOX -->
                <div class="eskimo-author-box eskimo-widget">
                    <div class="eskimo-author-img">
                        <img src="/front/images/300x300.png" alt="JOHN DOE" />
                    </div>
                    <h3><span>JOHN DOE</span></h3>
                    <p class="eskimo-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
                    <p class="eskimo-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI design. I have experience building websites, web applications, and brand assets. Contact me if you have any questions!</p>
                    <div class="eskimo-author-box-btn">
                        <a class="btn btn-default" href="/about">CONTACT ME</a>
                    </div>
                </div>
                <!-- RECENT POSTS -->
                <div class="eskimo-recent-entries eskimo-widget">
                    <h5 class="eskimo-title-with-border"><span>Recent Posts</span></h5>
                    <ul>
                        <li>
                            <a href="/blog/post">Ketchup Flavored Ice Cream!</a>
                            <span class="post-date">May 28, 2018</span>
                        </li>
                        <li>
                            <a href="/blog/post">Hair You've Always Dreamed Of</a>
                            <span class="post-date">May 27, 2018</span>
                        </li>
                        <li>
                            <a href="/blog/post">15 Of The World's Best Carnivals</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="/blog/post">5 Ways to a Healthy Lifestyle</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="/blog/post">Best Breakfast In The World</a>
                            <span class="post-date">May 23, 2018</span>
                        </li>
                    </ul>
                </div>
                <!-- CATEGORIES -->
                <div class="eskimo-categories eskimo-widget">
                    <h5 class="eskimo-title-with-border"><span>Categories</span></h5>
                    <ul>
                        <li>
                            <a href="/category" title="The best restaurants, cafes, bars and shops in town.">Food &amp; Drink</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="/category" title="An up-to-date, personal urban guide.">Lifestyle</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="/category" title="Latest technology news and updates.">Technology</a> <span class="badge badge-pill badge-default">4</span>
                        </li>
                        <li>
                            <a href="/category" title="Travel advice, information and inspiration.">Travel</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="/category" title="The latest news about movies and TV shows.">TV &amp; Movies</a> <span class="badge badge-pill badge-default">4</span>
                        </li>
                    </ul>
                </div>
                <!-- TAGS -->
                <div class="eskimo-widget">
                    <h5 class="eskimo-title-with-border"><span>Tags</span></h5>
                    <div class="eskimo-tag-cloud">
                        <a href="/category">aute<span>7</span></a>
                        <a href="/category">enim<span>7</span></a>
                        <a href="/category">commodo<span>7</span></a>
                        <a href="/category">voluptatibus<span>7</span></a>
                        <a href="/category">culpa<span>7</span></a>
                        <a href="/category">offendit<span>7</span></a>
                        <a href="/category">magna<span>7</span></a>
                        <a href="/category">quorum<span>7</span></a>
                        <a href="/category">mandaremus<span>7</span></a>
                        <a href="/category">ingeniis<span>7</span></a>
                        <a href="/category">tempor<span>7</span></a>
                        <a href="/category">summis<span>7</span></a>
                        <a href="/category">consequat<span>6</span></a>
                        <a href="/category">iudicem<span>6</span></a>
                        <a href="/category">expetendis<span>6</span></a>
                        <a href="/category">deserunt<span>6</span></a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- FULLSCREEN SEARCH -->
    <div id="eskimo-fullscreen-search">
        <div id="eskimo-fullscreen-search-content">
            <a href="#" id="eskimo-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="get" action="/search" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="s" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- JS FILES -->
    <script src="/front/js/jquery-3.3.1.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/salvattore.min.js"></script>
    <script src="/front/js/panel.js"></script>
    <script src="/front/js/reading-position-indicator.js"></script>
    <script src="/front/js/rrssb.min.js"></script>
    <script src="/front/js/featherlight.js"></script>
    <script src="/front/js/custom.js"></script>
</body>

</html>