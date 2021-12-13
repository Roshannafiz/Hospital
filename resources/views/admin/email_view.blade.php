<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                <form action="{{ url('sendemail',$data->id) }}" method="POST">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">Greeting</label>
                        <input required style="color: black" type="text" name="greeting">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Body</label>
                        <input required style="color: black" type="text" name="body">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Action Text</label>
                        <input required style="color: black" type="text" name="actiontext">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Action Url</label>
                        <input required style="color: black" type="text" name="actionurl">
                    </div>


                    <div style="padding: 15px">
                        <label for="">End Part</label>
                        <input required style="color: black" type="text" name="endpart">
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
