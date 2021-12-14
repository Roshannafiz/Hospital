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

    @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif


    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Our Doctors</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="row">
                        @foreach ($doctor as $doctors)

                            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
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
                                        <p class="text-xl mb-0">Dr. {{ $doctors->name }}</p>
                                        <span class="text-sm text-grey">{{ $doctors->speciality }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!--------------- Include appointmen --------------->
    @include('user.include.appointment')
    <!--------------- Include appointmen --------------->

    <!------------------ Include footer ------------------->
    @include('user.include.footer')
    <!------------------ Include footer ------------------->

    <!------------------ Include script ------------------->
    @include('user.include.script')
    <!------------------ Include script ------------------->


</body>

</html>
