@extends('front.layout.main')
@section('container')
    <!-- PAGE TITLE -->
    <div class="eskimo-page-title">
        <h1><span>A Category</span></h1>
        <p class="eskimo-page-subtitle">The best restaurants, cafes, bars and shops in town.</p>
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
            <!-- POST 3 -->
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
            <!-- POST 8 -->
            <div class="card-masonry">
                <div class="card">
                    <a href="/blog/slug">
                        <img class="card-vertical-img" src="/front/images/900x600.png" alt="5 Best Coffee Shops In Paris" />
                    </a>
                    <div class="card-border">
                        <div class="card-body">
                            <div class="card-category">
                                <span><a href="/category">Food &amp; Drink</a>, <a
                                        href="/category">Travel</a></span>
                            </div>
                            <h3 class="card-title">
                                <a href="/blog/slug">5 Best Coffee Shops In Paris</a>
                            </h3>
                            <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla
                                possumus, magna do nostrud non quid qui cernantur eram aliqua e illum, ingeniis sunt
                                mentitum consequat. Occaecat ita voluptate ea vidisse adipisicing ubi quamquam ad qui ex...
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="eskimo-author-meta">
                                By <a class="author-meta" href="/author">Egemenerd</a>
                            </div>
                            <div class="eskimo-date-meta">
                                <a href="/blog/slug">May 12, 2018</a>
                            </div>
                            <div class="eskimo-reading-meta">3 min read</div>
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
