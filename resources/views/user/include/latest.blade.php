<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp" style="font-size: 2.5em !important">Latest News</h1>
        <div class="row mt-5">
            @foreach ($blogs as $blog)

                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">{{ $blog->category }}</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="blogimage/{{ $blog->image }}" alt="Blog Image">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">{{ $blog->title }}</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>{{ $blog->authorname }}</span>
                                </div>
                                <span class="mai-time"></span> {{ $blog->created_at = date("Y-m-d") }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="{{ url('blog') }}" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
</div> <!-- .page-section -->
