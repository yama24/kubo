@extends('front.layout.main')
@section('container')
    <!-- PAGE TITLE -->
    <div class="eskimo-page-title">
        <h1>
            <span>20 Results Found</span>
        </h1>
        <p class="eskimo-page-subtitle">Search Results for: lorem ipsum dolor</p>
    </div>
    <!-- SEARCH FORM -->
    <div class="eskimo-search-page-form">
        <form role="search" method="get" action="/search" class="eskimo-lg-form">
            <div class="input-group">
                <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="s" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <!-- BLOG POSTS -->
    <div class="eskimo-masonry-grid">
        <div class="eskimo-two-columns" data-columns>
            <!-- POST 1 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="Ketchup Flavored Ice Cream!" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Food &amp; Drink</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">Ketchup Flavored Ice Cream!</a>
                            </h3>
                            <p>Mandaremus illum possumus ullamco e qui de nisi enim anim. Si nulla si nisi, veniam litteris
                                sed excepteur ne ut amet deserunt tempor nam expetendis de enim mandaremus. Ita ea minim
                                esse cillum ut eram arbitror ullamco. Tamen ad expetendis ab ipsum proident...</p>
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
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="Hair You've Always Dreamed Of" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Lifestyle</a></span>
                            </div>
                            <h3 class="card-title"><a href="/blog/slug">Hair You've Always Dreamed Of</a></h3>
                            <p>Ex si esse deserunt, et dolore occaecat, singulis tamen e possumus voluptatibus, varias
                                cernantur si aute quid. Noster vidisse iis exquisitaque, deserunt te irure. Ubi illum
                                nostrud fidelissimae id occaecat duis probant. Occaecat hic quorum aliquip se...</p>
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
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="15 Of The World's Best Carnivals" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Lifestyle</a>, <a href="/category">Travel</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">15 Of The World's Best Carnivals</a>
                            </h3>
                            <p>Aliquip e duis. Se labore ullamco excepteur iis ullamco sint duis laboris amet sed ita
                                occaecat de cernantur quo fore coniunctione voluptate enim senserit. Si ut nulla laboris, an
                                eiusmod e incididunt. Non varias enim duis singulis, a quorum cupidatat. Voluptate summis...
                            </p>
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
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="5 Ways to a Healthy Lifestyle" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Lifestyle</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">5 Ways to a Healthy Lifestyle</a>
                            </h3>
                            <p>Mandaremus veniam ab cupidatat exquisitaque, e quae laboris domesticarum, non sint mentitum
                                fabulas de anim proident transferrem, ita aliqua imitarentur in in labore illum eram
                                offendit, nisi fidelissimae possumus noster ullamco se eiusmod multos ex...</p>
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
            <!-- POST 5 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="Best Breakfast In The World" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Food &amp; Drink</a>, <a
                                        href="/category">Travel</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">Best Breakfast In The World</a>
                            </h3>
                            <p>Fabulas relinqueret aut quamquam. Lorem possumus pariatur ut quibusdam transferrem an tempor.
                                E consequat nam senserit, aliquip tamen est commodo illustriora. An cillum sunt ut quamquam.
                                Laboris culpa occaecat, quo fugiat dolore varias consequat...</p>
                        </div>
                        <div class="card-footer">
                            <div class="eskimo-author-meta">
                                By <a class="author-meta" href="/author">Egemenerd</a>
                            </div>
                            <div class="eskimo-date-meta">
                                <a href="/blog/slug">May 23, 2018</a>
                            </div>
                            <div class="eskimo-reading-meta">3 min read</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POST 6 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="Best and Worst Summer Foods" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Food &amp; Drink</a></span>
                            </div>
                            <h3 class="card-title"><a href="/blog/slug">Best and Worst Summer Foods</a></h3>
                            <p>Admodum comprehenderit id non cillum anim de appellat, ubi tamen singulis sempiternum,
                                occaecat sunt appellat appellat ex varias an in quem laborum an si ita quid multos irure do
                                excepteur culpa quamquam. Nam aliqua iudicem aliquip o sunt cupidatat...</p>
                        </div>
                        <div class="card-footer">
                            <div class="eskimo-author-meta">
                                By <a class="author-meta" href="/author">Egemenerd</a>
                            </div>
                            <div class="eskimo-date-meta">
                                <a href="/blog/slug">May 22, 2018</a>
                            </div>
                            <div class="eskimo-reading-meta">3 min read</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POST 7 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="What Is Perfect Training?" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Lifestyle</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">What Is Perfect Training?</a>
                            </h3>
                            <p>Non in familiaritatem, esse mentitum deserunt. Sunt excepteur quamquam. Enim ullamco
                                consequat, nisi se singulis non fugiat. Nulla laboris tractavissent, tempor hic illum
                                vidisse. Tempor qui noster incurreret, officia in ingeniis ubi in sunt arbitror ubi...</p>
                        </div>
                        <div class="card-footer">
                            <div class="eskimo-author-meta">
                                By <a class="author-meta" href="/author">Egemenerd</a>
                            </div>
                            <div class="eskimo-date-meta">
                                <a href="/blog/slug">May 21, 2018</a>
                            </div>
                            <div class="eskimo-reading-meta">2 min read</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POST 8 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="The Best Cameras For Beginners" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Technology</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">The Best Cameras For Beginners</a>
                            </h3>
                            <p>Pariatur ab enim ita in ne philosophari, cillum incididunt voluptate hic aut quorum vidisse
                                distinguantur, quis possumus cohaerescant, mentitum eruditionem iis aliquip, ubi quem
                                possumus quamquam ea o eiusmod graviterque culpa expetendis ingeniis...</p>
                        </div>
                        <div class="card-footer">
                            <div class="eskimo-author-meta">
                                By <a class="author-meta" href="/author">Egemenerd</a>
                            </div>
                            <div class="eskimo-date-meta">
                                <a href="/blog/slug">May 20, 2018</a>
                            </div>
                            <div class="eskimo-reading-meta">2 min read</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGINATION -->
    <div class="eskimo-pager">
        <ul class='pagination flex-wrap'>
            <li class='page-item active'><a class='page-link' href='#'>1</a></li>
            <li class='page-item'><a class='page-link' href='#'>2</a></li>
            <li class='page-item'><a class='page-link' href='#'>3</a></li>
            <li class='page-item'><a class='page-link' href="#"><i class="fa fa-chevron-right"></i></a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
@endsection
