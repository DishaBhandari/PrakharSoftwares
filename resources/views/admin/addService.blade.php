@extends('admin.layouts.master')
@section('title', 'Add Service')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Service</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Service</li>
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
                    <div class="card card-warning col-11 m-auto">
                        <div class="card-header">
                            <h3 class="card-title">Add Service</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" id="addnavform">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="menu_name">
                                                Sub Menu Name</label>
                                                <select name="sub_menu" class="form-control">
                                                    <option value="0">None</option>
                                                   
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Menu Url</label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Enter Url ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta Title</label>
                                            <input type="text" class="form-control" name="meta_title" id="meta_title"
                                                placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta keyword</label>
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword"
                                                placeholder="Enter Meta Keyword ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta Description</label>
                                            <input type="text" class="form-control" name="meta_description" id="meta_description"
                                                placeholder="Enter Meta Description ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Page Name/Main Heading</label>
                                            <input type="text" class="form-control" name="page_name" id="page_name"
                                                placeholder="Enter Page Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Banner Image</label>
                                            <input type="file" class="form-control"  accept="image/*" name="banner" id="banner"
                                                placeholder="Enter ">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="link">Page Content</label>
                                            <textarea class="form-control summernote" name="content" id="content" cols="4" rows="3"></textarea>
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
                                        <input type="submit" class="btn btn-primary col-4" value="Submit">
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
         $(document).ready(function() {
            alert('hello')
          $('.summernote').summernote();
        });

        // $('#addnavform').submit(function(e) {
        //     e.preventDefault();
        //     data = new FormData(this);
        //     $.ajax({
        //         data: data,
        //         type: "POST",
        //         url: "{{ route('addnavform') }}",
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         error: function(request, status, error) {
        //             data = $.parseJSON(request.responseText);
        //             $('#alerterr').text(data.message.split('.')['0']);
        //             $('#alerterr').fadeIn();
        //             $('#alerterr').delay(4000).fadeOut();
        //         },
        //         success: function(data) {
        //             $('#addnavform')[0].reset();
        //             $('#alertsuccess').text(data);
        //             $('#alertsuccess').fadeIn();
        //             $('#alertsuccess').delay(4000).fadeOut();
        //             // console.log(data);
        //             // setTimeout(() => {

        //             //     location.href = "{{ url('/dashboard') }}";
        //             // }, 4000);
        //         }
        //     });
        // })
    </script>
    </body>

    </html>

@endsection
