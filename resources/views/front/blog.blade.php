@extends('front.layout.main')
@section('container')
    <!-- PAGE TITLE -->
    <div class="eskimo-page-title">
        <h1 class="no-border">{{ $title }}</h1>
    </div>
    <!-- BLOG POSTS -->
    <div class="eskimo-masonry-grid small-masonry">
        <div class="eskimo-four-columns" data-columns>
            <!-- POST -->
            @foreach ($posts as $post)
                <div class="card-masonry card-small">
                    <div class="card">
                        <a href="/blog/{{ $post->slug }}">
                            <img class="card-vertical-img" src="{{ $post->image }}" alt="{{ $post->title }}" />
                        </a>
                        <div class="card-border">
                            <div class="card-body">
                                <div class="card-category">
                                    <a
                                        href="/blog/{{ $post->slug }}">{{ date('M d, Y', strtotime($post->published_at)) }}</a>
                                </div>
                                <h5 class="card-title">
                                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @if ($posts->hasPages())
        <!-- PAGINATION -->
        <div class="eskimo-pager">
            <ul class='pagination flex-wrap'>
                <?php
                $startPage = $posts->currentPage() - 2 < 1 ? 1 : $posts->currentPage() - 2;
                $endPage = $posts->currentPage() + 2 > $posts->lastPage() ? $posts->lastPage() : $posts->currentPage() + 2;
                if ($startPage == 1 && $endPage < 5) {
                    if ($posts->lastPage() > 5) {
                        $endPage = 5;
                    } else {
                        $endPage = $posts->lastPage();
                    }
                }
                if ($endPage - $startPage + 1 < 5) {
                    if ($posts->lastPage() > 5) {
                        $startPage = $endPage - 4;
                    } else {
                        $startPage = $endPage - $posts->lastPage() + 1;
                    }
                }
                ?>
                {!! $startPage == 1 ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url(1) . '"><i class="fa fa-angle-double-left"></i></a></li>' !!}
                {!! $posts->onFirstPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->previousPageUrl() . '"><i class="fa fa-angle-left"></i></a></li>' !!}
                @foreach ($posts->getUrlRange($startPage, $endPage) as $key => $val)
                    <li class='page-item {{ $posts->currentPage() == $key ? 'active' : '' }}'><a class='page-link'
                            href='{{ $val }}'>{{ $key }}</a></li>
                @endforeach
                {!! $posts->currentPage() == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->nextPageUrl() . '"><i class="fa fa-angle-right"></i></a></li>' !!}
                {!! $endPage == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url($posts->lastPage()) . '"><i class="fa fa-angle-double-right"></i></a></li>' !!}
            </ul>
        </div>
    @endif
    <div class="clearfix"></div>
@endsection
