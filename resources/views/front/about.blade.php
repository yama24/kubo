@extends('front.layout.main')
@section('container')
    <!-- PAGE TITLE -->
    <div class="eskimo-page-title">
        <h1><span>John Doe</span></h1>
        <p class="eskimo-page-subtitle">Web Designer &amp; Developer</p>
    </div>
    <!-- ABOUT ME -->
    <div class="row">
        <div class="col-12 col-lg-7 order-2 order-lg-1">
            <p>Laborum varias in possumus philosophari nam mandaremus ad malis. Sint fidelissimae tempor fugiat expetendis.
                Est nisi quibusdam admodum ut noster laborum se tamen culpa aut labore. Senserit sed commodo. Ubi nescius a
                iudicem, non veniam si amet a tempor ad fabulas id.</p>
            <p>Est nisi quibusdam admodum ut noster. Quamquam malis illum ex elit, anim arbitrantur cupidatat aute admodum,
                cernantur noster mentitum cupidatat.</p>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"><span>PHP</span> 100%</div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-info" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100"><span>WordPress</span> 85%</div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="65"
                    aria-valuemin="0" aria-valuemax="100"><span>Javascript</span> 65%</div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"><span>ASP</span> 50%</div>
            </div>
        </div>
        <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
            <img src="/front/images/600x600.png" alt="Jane Doe" class="img-fluid mx-auto d-block eskimo-img-shadow" />
        </div>
    </div>
    <!-- DIVIDER -->
    <hr />
    <!-- TABS -->
    <h2>EXPERIENCE &amp; EDUCATION</h2>
    <!-- ACCORDION -->
    <div id="mp-accordion-1" data-children=".mp-accordion-item" class="mp-accordion">
        <!-- ACCORDION ITEM 1 -->
        <div class="mp-accordion-item">
            <a class="mp-accordion-title" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-1"
                aria-expanded="false" aria-controls="mp-accordion-item-1">2014 to Present</a>
            <div id="mp-accordion-item-1" class="collapse show" role="tabpanel">
                <div class="mp-accordion-content">
                    <h5>Senior Developer - Google Inc</h5>
                    Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur
                    relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor
                    probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem
                    proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident
                    consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid
                    proident sed nostrud.
                </div>
            </div>
        </div>
        <!-- ACCORDION ITEM 2 -->
        <div class="mp-accordion-item">
            <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1"
                href="#mp-accordion-item-2" aria-expanded="false" aria-controls="mp-accordion-item-2">2014 - 2010</a>
            <div id="mp-accordion-item-2" class="collapse" role="tabpanel">
                <div class="mp-accordion-content">
                    <h5>Art Director - Designs Ltd</h5>
                    Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur
                    relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor
                    probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem
                    proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident
                    consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid
                    proident sed nostrud.
                </div>
            </div>
        </div>
        <!-- ACCORDION ITEM 3 -->
        <div class="mp-accordion-item">
            <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1"
                href="#mp-accordion-item-3" aria-expanded="false" aria-controls="mp-accordion-item-3">2010 - 2008</a>
            <div id="mp-accordion-item-3" class="collapse" role="tabpanel">
                <div class="mp-accordion-content">
                    <h5>Web Designer - Freelance</h5>
                    Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur
                    relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor
                    probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem
                    proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident
                    consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid
                    proident sed nostrud.
                </div>
            </div>
        </div>
        <!-- ACCORDION ITEM 4 -->
        <div class="mp-accordion-item">
            <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1"
                href="#mp-accordion-item-4" aria-expanded="false" aria-controls="mp-accordion-item-4">2008 - 2004</a>
            <div id="mp-accordion-item-4" class="collapse" role="tabpanel">
                <div class="mp-accordion-content">
                    <h5>University - Cambridge</h5>
                    Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur
                    relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor
                    probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem
                    proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident
                    consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid
                    proident sed nostrud.
                </div>
            </div>
        </div>
    </div>
    <!-- DIVIDER -->
    <hr />
    <h2>PORTFOLIO</h2>
    <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do
        nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
    <!-- IMAGE GALLERY -->
    <div class="eskimo-masonry-grid eskimo-gallery">
        <div class="eskimo-three-columns" data-columns>
            <!-- GALLERY ITEM 1 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
            <!-- GALLERY ITEM 2 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
            <!-- GALLERY ITEM 3 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
            <!-- GALLERY ITEM 4 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
            <!-- GALLERY ITEM 5 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
            <!-- GALLERY ITEM 6 -->
            <div class="eskimo-gallery-item">
                <a href="#" data-featherlight="/front/images/1400x1000.png" class="eskimo-lightbox">
                    <img src="/front/images/900x600.png" alt="" />
                </a>
            </div>
        </div>
    </div>
    <!-- DIVIDER -->
    <hr />
    <h2>CONTACT ME</h2>
    <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do
        nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
    <!-- CONTACT FORM -->
    <form id="ajax-form" action="mailer.php" method="post">
        <div class="row">
            <div class="col-12 col-lg-6">
                <p>
                    <label>Your Name</label><br />
                    <input type="text" name="sendername" id="sendername" class="form-control" required="required"
                        maxlength="50" />
                </p>
                <p>
                    <label>Your Email</label><br />
                    <input type="email" name="senderemail" id="senderemail" class="form-control" required="required"
                        maxlength="50" />
                </p>
                <p>
                    <label>Phone Number</label><br />
                    <input type="text" name="senderphone" id="senderphone" class="form-control" maxlength="50" />
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <p>
                    <label>Your Message</label><br />
                    <textarea name="sendermessage" id="sendermessage" required="required"
                        class="form-control form-fixed-height"></textarea>
                </p>
                <button id="sendbutton" type="submit" class="btn btn-lg w-100">Send Message</button>
            </div>
        </div>
    </form>
    <div id="form-messages"></div>
@endsection
