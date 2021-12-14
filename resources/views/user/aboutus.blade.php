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
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">About Us</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Chat</span> with a doctors</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>One</span>-Health Protection</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>One</span>-Health Pharmacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3" style="font-size: 2.5em !important">Welcome to Your Health Center</h1>
                    <div class="text-lg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero
                            nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure
                            explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut
                            maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
                        <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo,
                            incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus
                            deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste
                            maxime, nobis odio molestias!</p>
                    </div>
                </div>
                <div class="col-lg-10 mt-5">
                    <h1 class="text-center mb-5 wow fadeInUp" style="font-size: 2.5em !important">Our Doctors</h1>
                    <div class="row justify-content-center">
                        @foreach ($doctor as $doctors)
                            <div class="col-md-6 col-lg-4 wow zoomIn">
                                <div class="card-doctor">
                                    <div class="header">
                                        <img style="height: 230px !important; width: 260px !important"
                                            src="doctorimage/{{ $doctors->image }}" alt="">
                                        <div class="meta">
                                            <a href="#"><span class="mai-call"></span></a>
                                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="text-xl mb-0">{{ $doctors->name }}</p>
                                        <span class="text-sm text-grey">{{ $doctors->speciality }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------------ Include footer ------------------->
    @include('user.include.footer')
    <!------------------ Include footer ------------------->


    <!------------------ Include script ------------------->
    @include('user.include.script')
    <!------------------ Include script ------------------->

</body>

</html>
