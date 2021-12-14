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
                <form action="{{ url('upload_blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">Blog Category</label>
                        <input required style="color: black" type="text" name="category" placeholder="Write The Category">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Blog Title</label>
                        <input required style="color: black" type="text" name="title" placeholder="Write The Titel">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Author Name</label>
                        <input required style="color: black" type="text" name="authorname" placeholder="Write The Author Name">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Image</label>
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
