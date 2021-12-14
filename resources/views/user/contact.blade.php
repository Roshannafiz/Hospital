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
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

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
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Contact</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Get in Touch</h1>

            <form class="contact-form mt-5">
                <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft">
                        <label for="fullName">Name</label>
                        <input type="text" id="fullName" class="form-control" placeholder="Full name..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInRight">
                        <label for="emailAddress">Email</label>
                        <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
            </form>
        </div>
    </div>

    <div class="maps-container wow fadeInUp">
        <div id="google-maps"></div>
    </div>


    <!------------------ Include footer ------------------->
    @include('user.include.footer')
    <!------------------ Include footer ------------------->

    <!------------------ Include script ------------------->
    @include('user.include.script')
    <!------------------ Include script ------------------->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>
