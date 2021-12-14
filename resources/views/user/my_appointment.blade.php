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
