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
                            <img class="card-vertical-img" src="/img/{{ $post->image }}" alt="{{ $post->title }}" />
                        </a>
                        <div class="card-border">
                            <div class="card-body">
                                <div class="card-category">
                                    <a href="/blog/{{ $post->slug }}">{{ date('M d, Y', strtotime($post->published_at)) }}</a>
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
