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
                <div class="row">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <table class="table table-dark table-bordered">
                        <tr>
                            <th style="background: black; font-size: 17px; color: white">Category</th>
                            <th style="background: black; font-size: 17px; color: white">Title</th>
                            <th style="background: black; font-size: 17px; color: white">Author</th>
                            <th style="background: black; font-size: 17px; color: white">Image</th>
                            <th style="background: black; font-size: 17px; color: white">Date</th>
                            <th style="background: black; font-size: 17px; color: white">Status</th>
                            <th style="background: black; font-size: 17px; color: white">Active</th>
                            <th style="background: black; font-size: 17px; color: white">InActive</th>
                            <th style="background: black; font-size: 17px; color: white">Delete</th>
                            <th style="background: black; font-size: 17px; color: white">Update</th>
                        </tr>
                        @foreach ($blog_datas as $blog_data)
                            <tr>
                                <td>{{ $blog_data->category }}</td>
                                <td>{{ $blog_data->title }}</td>
                                <td>{{ $blog_data->authorname }}</td>
                                <td>
                                    <img style="height: 50px; width: 70px; border-radius: 0px"
                                        src="blogimage/{{ $blog_data->image }}" alt="Blog Image">
                                </td>
                                <td>{{ $blog_data->created_at }}</td>
                                <td>{{ $blog_data->status }}</td>
                                <td>
                                    <a href="{{ url('active', $blog_data->id) }}" class="btn btn-success">Active</a>
                                </td>
                                <td>
                                    <a href="{{ url('inactive', $blog_data->id) }}" class="btn btn-danger">InActive</a>
                                </td>
                                <td>
                                    <a href="{{ url('deleteblog', $blog_data->id) }}"
                                        onclick="return confirm('Are You Sure To Delete This Blog?')"
                                        class="btn" style="background: red">Delete</a>
                                </td>

                                <td>
                                    <a href="{{ url('updateblog', $blog_data->id) }}"
                                        class="btn btn-primary">Update</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>

            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-------- Include Script --------->
    @include('admin.script')
    <!-------- Include Script --------->

</body>

</html>
