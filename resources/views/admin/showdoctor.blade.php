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
        <!-------- Include Navbar --------->>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="text-align: left; padding-top: 100px">
                <table class="table table-dark table-bordered">
                    <tr>
                        <th style="background: black; font-size: 17px; color: white">Doctor Name</th>
                        <th style="background: black; font-size: 17px; color: white">Phone</th>
                        <th style="background: black; font-size: 17px; color: white">Specility</th>
                        <th style="background: black; font-size: 17px; color: white">Room No</th>
                        <th style="background: black; font-size: 17px; color: white">Image</th>
                        <th style="background: black; font-size: 17px; color: white">Delete</th>
                        <th style="background: black; font-size: 17px; color: white">Update</th>
                    </tr>
                    @foreach ($data as $doctor)
                        <tr>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->speciality }}</td>
                            <td>{{ $doctor->room }}</td>
                            <td>
                                <img style="height: 50px; width: 70px; border-radius: 0px"
                                    src="doctorimage/{{ $doctor->image }}" alt="Doctor Image">
                            </td>
                            <td>
                                <a href="{{ url('deletedoctor', $doctor->id) }}"
                                    onclick="return confirm('Are You Sure To Delete This Doctor?')"
                                    class="btn" style="background: red">Delete</a>
                            </td>

                            <td>
                                <a href="{{ url('updatedoctor', $doctor->id) }}" class="btn btn-primary">Update</a>
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
