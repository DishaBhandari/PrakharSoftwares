@extends('admin.layouts.master')
@section('title', 'Add Slide')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Slide</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Slide</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="card  col-11 m-auto">
                        <div class="card-header">
                            <h3 class="card-title">Add Slide</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" id="addSlide">
                                @csrf
                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="heading">Banner Heading</label>
                                            <input type="text" class="form-control" name="heading" id="heading"
                                                required placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="desc">Banner Discription</label>
                                            <input type="text" class="form-control" name="desc" id="desc"
                                                required placeholder="Enter Meta Keyword ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link1">Button 1 Link</label>
                                            <input type="text" class="form-control" name="link1" id="link1"
                                                required placeholder="Enter Meta Description ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="linktext1">Button 1 Text</label>
                                            <input type="text" class="form-control" name="linktext1" id="linktext1"
                                                required placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link2">Button 2 Link</label>
                                            <input type="text" class="form-control" name="link2" id="link2"
                                                required placeholder="Enter Meta Keyword ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="linktext2">Button 2 Text</label>
                                            <input type="text" class="form-control" name="linktext2" id="linktext2"
                                                required placeholder="Enter Meta Description ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="bannerimg">Banner Image</label>
                                            <input type="file" class="form-control" accept="image/*" name="bannerimg"
                                                id="bannerimg" required placeholder="Enter ">
                                        </div>
                                    </div>
                                </div>
                                <div id="alertsuccess"
                                    style="position: fixed ; top:20%; text-align: left !important; z-index:99999;display: none;"
                                    class="alert alert-success" role="alert">
                                    Blog Created Successfully.
                                </div>
                                <div id="alerterr"
                                    style="position: fixed ; top:20%; text-align: center !important; z-index:99999;display: none;"
                                    class="alert alert-danger" role="alert">
                                    A simple success alert with. Give it a click if you like.
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary col-4" id="addServiceSubmit"
                                            value="Submit">
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('scripts')


    <script>
        $('#addSlide').submit(function(e) {
            e.preventDefault();
            data = new FormData(this);
            $.ajax({
                data: data,
                type: "POST",
                url: "{{ route('addSlideform') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                contentType: false,
                processData: false,
                error: function(request, status, error) {
                    data = $.parseJSON(request.responseText);
                    $('#alerterr').text(data.message.split('.')['0']);
                    $('#alerterr').fadeIn();
                    $('#alerterr').delay(4000).fadeOut();
                },
                success: function(data) {
                    console.log(data);
                    // $('#addServiceform')[0].reset();
                    // $('#alertsuccess').text(data);
                    // $('#alertsuccess').fadeIn();
                    // $('#alertsuccess').delay(700).fadeOut();
                    // console.log(data);
                    // setTimeout(() => {

                    //     location.reload();
                    // }, 1000);
                }
            });
        })
    </script>
    </body>

    </html>

@endsection
