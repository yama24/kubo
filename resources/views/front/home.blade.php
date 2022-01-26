@extends('front.layout.main')
@section('container')
    <div class="row">
        <!-- BLOG POSTS -->
        <div class="col-12 col-lg-7">
            <div class="eskimo-masonry-grid">
                <div class="eskimo-one-column" data-columns>
                    <!-- POST 1 -->
                    <div class="card-masonry">
                        <div class="card">
                            <a href="/blog/slug">
                                <img class="card-vertical-img" src="/front/images/900x600.png"
                                    alt="Ketchup Flavored Ice Cream!" />
                            </a>
                            <div class="card-border">
                                <div class="card-body">
                                    <div class="card-category">
                                        <span><a href="/category">Food &amp; Drink</a></span>
                                    </div>
                                    <h3 class="card-title">
                                        <a href="/blog/slug">Ketchup Flavored Ice Cream!</a>
                                    </h3>
                                    <p>Mandaremus illum possumus ullamco e qui de nisi enim anim. Si nulla si nisi, veniam
                                        litteris sed excepteur ne ut amet deserunt tempor nam expetendis de enim mandaremus.
                                        Ita ea minim esse cillum ut eram arbitror ullamco. Tamen ad expetendis ab ipsum
                                        proident...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="eskimo-author-meta">
                                        By <a class="author-meta" href="/author">Egemenerd</a>
                                    </div>
                                    <div class="eskimo-date-meta">
                                        <a href="/blog/slug">May 28, 2018</a>
                                    </div>
                                    <div class="eskimo-reading-meta">3 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POST 2 -->
                    <div class="card-masonry">
                        <div class="card">
                            <a href="/blog/slug">
                                <img class="card-vertical-img" src="/front/images/900x600.png"
                                    alt="Hair You've Always Dreamed Of" />
                            </a>
                            <div class="card-border">
                                <div class="card-body">
                                    <div class="card-category">
                                        <span><a href="/category">Lifestyle</a></span>
                                    </div>
                                    <h3 class="card-title">
                                        <a href="/blog/slug">Hair You've Always Dreamed Of</a>
                                    </h3>
                                    <p>Ex si esse deserunt, et dolore occaecat, singulis tamen e possumus voluptatibus,
                                        varias cernantur si aute quid. Noster vidisse iis exquisitaque, deserunt te irure.
                                        Ubi illum nostrud fidelissimae id occaecat duis probant. Occaecat hic quorum aliquip
                                        se...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="eskimo-author-meta">
                                        By <a class="author-meta" href="/author">Egemenerd</a>
                                    </div>
                                    <div class="eskimo-date-meta">
                                        <a href="/blog/slug">May 27, 2018</a>
                                    </div>
                                    <div class="eskimo-reading-meta">3 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POST 3 -->
                    <div class="card-masonry">
                        <div class="card">
                            <a href="/blog/slug">
                                <img class="card-vertical-img" src="/front/images/900x600.png"
                                    alt="15 Of The World's Best Carnivals" />
                            </a>
                            <div class="card-border">
                                <div class="card-body">
                                    <div class="card-category">
                                        <span><a href="/category">Lifestyle</a>, <a
                                                href="/category">Travel</a></span>
                                    </div>
                                    <h3 class="card-title">
                                        <a href="/blog/slug">15 Of The World's Best Carnivals</a>
                                    </h3>
                                    <p>Aliquip e duis. Se labore ullamco excepteur iis ullamco sint duis laboris amet sed
                                        ita occaecat de cernantur quo fore coniunctione voluptate enim senserit. Si ut nulla
                                        laboris, an eiusmod e incididunt. Non varias enim duis singulis, a quorum cupidatat.
                                        Voluptate summis...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="eskimo-author-meta">
                                        By <a class="author-meta" href="/author">Egemenerd</a>
                                    </div>
                                    <div class="eskimo-date-meta">
                                        <a href="/blog/slug">May 25, 2018</a>
                                    </div>
                                    <div class="eskimo-reading-meta">2 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POST 4 -->
                    <div class="card-masonry">
                        <div class="card">
                            <a href="/blog/slug">
                                <img class="card-vertical-img" src="/front/images/900x600.png"
                                    alt="5 Ways to a Healthy Lifestyle" />
                            </a>
                            <div class="card-border">
                                <div class="card-body">
                                    <div class="card-category">
                                        <span><a href="/category">Lifestyle</a></span>
                                    </div>
                                    <h3 class="card-title">
                                        <a href="/blog/slug">5 Ways to a Healthy Lifestyle</a>
                                    </h3>
                                    <p>Mandaremus veniam ab cupidatat exquisitaque, e quae laboris domesticarum, non sint
                                        mentitum fabulas de anim proident transferrem, ita aliqua imitarentur in in labore
                                        illum eram offendit, nisi fidelissimae possumus noster ullamco se eiusmod multos
                                        ex...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="eskimo-author-meta">
                                        By <a class="author-meta" href="/author">Egemenerd</a>
                                    </div>
                                    <div class="eskimo-date-meta">
                                        <a href="/blog/slug">May 25, 2018</a>
                                    </div>
                                    <div class="eskimo-reading-meta">3 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- VIEW ALL BUTTON -->
            <div class="eskimo-view-more mb-5">
                <a class="btn btn-default" href="/blogs">VIEW ALL</a>
            </div>
        </div>
        <!-- SIDEBAR -->
        <div class="col-12 col-lg-5">
            <!-- AUTHOR BOX -->
            <div class="eskimo-author-box eskimo-add-border eskimo-widget">
                <div class="eskimo-author-img">
                    <img src="/front/images/300x300.png" alt="JOHN DOE" />
                </div>
                <h3><span>JOHN DOE</span></h3>
                <p class="eskimo-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
                <p class="eskimo-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI
                    design. I have experience building websites, web applications, and brand assets. Contact me if you have
                    any questions!</p>
                <div class="eskimo-author-box-btn">
                    <a class="btn btn-default" href="/about">CONTACT ME</a>
                </div>
            </div>
            <!-- CATEGORIES -->
            <div class="eskimo-categories eskimo-widget">
                <h5 class="eskimo-title-with-border"><span>Categories</span></h5>
                <ul>
                    <li>
                        <a href="/category" title="The best restaurants, cafes, bars and shops in town.">Food &amp;
                            Drink</a> <span class="badge badge-pill badge-default">5</span>
                    </li>
                    <li>
                        <a href="/category" title="An up-to-date, personal urban guide.">Lifestyle</a> <span
                            class="badge badge-pill badge-default">5</span>
                    </li>
                    <li>
                        <a href="/category" title="Latest technology news and updates.">Technology</a> <span
                            class="badge badge-pill badge-default">4</span>
                    </li>
                    <li>
                        <a href="/category" title="Travel advice, information and inspiration.">Travel</a> <span
                            class="badge badge-pill badge-default">5</span>
                    </li>
                    <li>
                        <a href="/category" title="The latest news about movies and TV shows.">TV &amp; Movies</a> <span
                            class="badge badge-pill badge-default">4</span>
                    </li>
                </ul>
            </div>
            <!-- POPULAR POSTS -->
            <div class="eskimo-post-list-wrapper eskimo-widget">
                <h5 class="eskimo-title-with-border"><span>Popular Posts</span></h5>
                <!-- POST 1 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="5 Ways to a Healthy Lifestyle" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">5 Ways to a Healthy Lifestyle</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 25, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 2 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="The Best Cameras For Beginners" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">The Best Cameras For Beginners</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 20, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 3 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="Can Technology Make You Happy?" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">Can Technology Make You Happy?</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 10, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 4 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="5 Best Coffee Shops In Paris" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">5 Best Coffee Shops In Paris</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 12, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 5 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="Eyes Wide Shut Is A Classic" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">Eyes Wide Shut Is A Classic</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 19, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 6 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="Headphones For Music Lovers" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">Headphones For Music Lovers</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 19, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 7 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="Ketchup Flavored Ice Cream!" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">Ketchup Flavored Ice Cream!</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 28, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 8 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="The Best Tea Houses in Japan" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">The Best Tea Houses in Japan</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 19, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 9 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="Why India's cinemas are changing" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">Why India's cinemas are changing</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 17, 2018</a>
                        </div>
                    </div>
                </div>
                <!-- POST 10 -->
                <div class="eskimo-post-list">
                    <div class="eskimo-post-list-left">
                        <a href="/blog/slug">
                            <img src="/front/images/100x100.png" alt="How To Design A Minimalist Garden" />
                        </a>
                    </div>
                    <div class="eskimo-post-list-right">
                        <p class="eskimo-post-list-title">
                            <a href="/blog/slug">How To Design A Minimalist Garden</a>
                        </p>
                        <div class="eskimo-post-list-info">
                            <i class="fa fa-clock-o"></i><a href="/blog/slug">May 15, 2018</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BANNER -->
            <div class="eskimo-widget">
                <a href="https://themeforest.net/user/egemenerd/portfolio">
                    <img src="/front/images/600x600.png" alt="banner" class="img-fluid mx-auto d-block" />
                </a>
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
    </div>
@endsection
