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

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-------- Include Navbar --------->
            @include('admin.navbar')
            <!-------- Include Navbar --------->


            <!-------- Include Body --------->
            @include('admin.body')
            <!-------- Include Body --------->

        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-------- Include Script --------->
    @include('admin.script')
    <!-------- Include Script --------->

</body>

</html>
