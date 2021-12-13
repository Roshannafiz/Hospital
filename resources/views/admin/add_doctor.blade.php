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
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">Doctor Name</label>
                        <input required style="color: black" type="text" name="name" placeholder="Write the name">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input required style="color: black" type="number" name="number" placeholder="Write the phone">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Speciality</label>
                        <select name="speciality" style="color: black; width: 212px">
                            <option>-- Select --</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eye">Eye</option>
                            <option value="Nose">Nose</option>
                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label for="">Room No</label>
                        <input required style="color: black" type="text" name="room" placeholder="Write the room number">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Doctor Image</label>
                        <input required type="file" name="file">
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
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
