<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }

    </style>
    <!-------- Include Css --------->
    <base href="/public">
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
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">Doctor Name</label>
                        <input style="color: black" type="text" name="name" value="{{ $data->name }}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input style="color: black" type="number" name="phone" value="{{ $data->phone }}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Speciality</label>
                        <input style="color: black" type="text" name="speciality" value="{{ $data->speciality }}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Room</label>
                        <input style="color: black" type="text" name="room" value="{{ $data->room }}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Old Image</label>
                        <img style="width: 100px; height: 100px; display: inline-block"
                            src="doctorimage/{{ $data->image }}" alt="Old Doctor Image">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>


                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-------- Include Script --------->
    @include('admin.script')
    <!-------- Include Script --------->

</body>

</html>
