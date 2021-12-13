<!DOCTYPE html>
<html lang="en">

<head>
    <!-------- Include Css --------->
    @include('admin.css')
    <!-------- Include Css --------->
</head>

<body>
    <div class="container-scroller">

        <!-------- Include Sidebar --------->
        @include('admin.sidebar')
        <!-------- Include Sidebar --------->


        <!-------- Include Navbar --------->
        @include('admin.navbar')
        <!-------- Include Navbar --------->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="text-align: center; padding-top: 100px">
                <table class="table table-dark table-bordered">
                    <tr>
                        <th style="background: black; font-size: 17px; color: white">Customar Name</th>
                        <th style="background: black; font-size: 17px; color: white">Email</th>
                        <th style="background: black; font-size: 17px; color: white">Phone</th>
                        <th style="background: black; font-size: 17px; color: white">Doctor Name</th>
                        <th style="background: black; font-size: 17px; color: white">Date</th>
                        <th style="background: black; font-size: 17px; color: white">Message</th>
                        <th style="background: black; font-size: 17px; color: white">Status</th>
                        <th style="background: black; font-size: 17px; color: white">Approved</th>
                        <th style="background: black; font-size: 17px; color: white">Cancel</th>
                        <th style="background: black; font-size: 17px; color: white">Send Mail</th>
                    </tr>
                    @foreach ($data as $appoint)
                        <tr>
                            <td>{{ $appoint->name }}</td>
                            <td>{{ $appoint->email }}</td>
                            <td>{{ $appoint->phone }}</td>
                            <td>{{ $appoint->doctor }}</td>
                            <td>{{ $appoint->date }}</td>
                            <td>{{ $appoint->message }}</td>
                            <td>{{ $appoint->status }}</td>
                            <td>
                                <a href="{{ url('approved',$appoint->id) }}" class="btn btn-success">Approved</a>
                            </td>
                            <td>
                                <a href="{{ url('cancel',$appoint->id) }}" class="btn btn-danger">Cancel</a>
                            </td>

                            <td>
                                <a href="{{ url('emailview',$appoint->id) }}" class="btn btn-primary">Send Mail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-------- Include Script --------->
    @include('admin.script')
    <!-------- Include Script --------->

</body>

</html>
