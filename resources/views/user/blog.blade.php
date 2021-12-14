<!DOCTYPE html>
<html lang="en">

<head>
    <!------------------ Include css ------------------->
    @include('user.include.css')
    <!------------------ Include css ------------------->
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <!-------- Include topbar ------------->
        @include('user.include.topbar')
        <!-------- Include topbar ------------->


        <!----------- Include navbar ------------>
        @include('user.include.navbar')
        <!----------- Include navbar ------------>

    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">News</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($blogs as $blog)

                            <div class="col-sm-6 py-3">
                                <div class="card-blog">
                                    <div class="header">
                                        <div class="post-category">
                                            <a href="#">{{ $blog->category }}</a>
                                        </div>
                                        <a href="blog-details" class="post-thumb">
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

                        <div class="col-12 my-5">
                            <nav aria-label="Page Navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"
                                            aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> <!-- .row -->
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                        placeholder="Type a keyword and hit enter">
                                    <button type="submit" class="btn"><span
                                            class="icon mai-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Food <span>12</span></a></li>
                                <li><a href="#">Dish <span>22</span></a></li>
                                <li><a href="#">Desserts <span>37</span></a></li>
                                <li><a href="#">Drinks <span>42</span></a></li>
                                <li><a href="#">Ocassion <span>14</span></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Recent Blog</h3>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no
                                            control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_2.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no
                                            control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_3.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no
                                            control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Tag Cloud</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">dish</a>
                                <a href="#" class="tag-cloud-link">menu</a>
                                <a href="#" class="tag-cloud-link">food</a>
                                <a href="#" class="tag-cloud-link">sweet</a>
                                <a href="#" class="tag-cloud-link">tasty</a>
                                <a href="#" class="tag-cloud-link">delicious</a>
                                <a href="#" class="tag-cloud-link">desserts</a>
                                <a href="#" class="tag-cloud-link">drinks</a>
                            </div>
                        </div>

                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Paragraph</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa
                                sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!------------------ Include footer ------------------->
    @include('user.include.footer')
    <!------------------ Include footer ------------------->

    <!------------------ Include script ------------------->
    @include('user.include.script')
    <!------------------ Include script ------------------->
</body>

</html>
