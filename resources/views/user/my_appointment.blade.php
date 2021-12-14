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

    <div class="container" style="text-align: center; padding: 70px">
        <table class="table table-bordered table-dark">
            <tr>
                <th style="font-size: 20px">Doctor Name</th>
                <th style="font-size: 20px">Date</th>
                <th style="font-size: 20px">Message</th>
                <th style="font-size: 20px">Status</th>
                <th style="font-size: 20px">Cancel Appointment</th>
            </tr>
            @foreach ($appoint as $appoints)
                <tr>
                    <td>{{ $appoints->name }}</td>
                    <td>{{ $appoints->date }}</td>
                    <td>{{ $appoints->message }}</td>
                    <td>{{ $appoints->status }}</td>
                    <td>
                        <a onclick="return confirm('Are You Sure To Cancel This Appointment?')"
                            href="{{ url('cancel_appoint', $appoints->id) }}" class="btn btn-danger">Calcel</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

    <!------------------ Include script ------------------->
    @include('user.include.script')
    <!------------------ Include script ------------------->

</body>

</html>
