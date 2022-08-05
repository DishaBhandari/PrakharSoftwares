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
                    <div class="card  col-11 m-auto">
                        <div class="card-header">
                            <h3 class="card-title">Add Service</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" id="addServiceform">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="menu_name">
                                                Sub Menu Name</label>
                                            <select name="menu_id" class="form-control" required>
                                                @php
                                                    echo $data;
                                                @endphp
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Menu Url</label>
                                            <input type="text" class="form-control" name="page_slug" id="slug"
                                                required placeholder="Enter Url ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="menu_name">Page Name</label>
                                            <input type="text" class="form-control" name="menu_name" id="menu_name"
                                                required placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sort">Page Sort</label>
                                            <input type="number" class="form-control" name="sort" id="sort"
                                                required placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta Title</label>
                                            <input type="text" class="form-control" name="meta_title" id="meta_title"
                                                required placeholder="Enter Meta Title ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta keyword</label>
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword"
                                                required placeholder="Enter Meta Keyword ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Meta Description</label>
                                            <input type="text" class="form-control" name="meta_description"
                                                id="meta_description" required placeholder="Enter Meta Description ">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Page Name/Main Heading</label>
                                            <input type="text" class="form-control" name="page_name" id="page_name"
                                                required placeholder="Enter Page Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="link">Banner Image</label>
                                            <input type="file" class="form-control" accept="image/*" name="banner"
                                                id="banner" required placeholder="Enter ">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="link">Page Content</label>
                                            <textarea class="form-control summernote" id="summernote" name="content" id="content" required cols="4"
                                                rows="3"></textarea>
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
        $('.summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear', 'fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
            height: 220,
            callbacks: {
                onImageUpload: function(image, editor, welEditable) {
                    uploadImage(image, editor, welEditable)
                },
                onMediaDelete: function(target) {
                    deleteimg(target[0].src);
                }
            }

        });
        $('.summernote').summernote('fontSizeUnit', 'px');
        $('.summernote').summernote('removeFormat');

        function uploadImage(image, editor, welEditable) {
            var data = new FormData($('#addnavform')['0']);

            $.ajax({
                url: "{{ url('/services/saveimage') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",
                success: function(url) {
                    if (url) {
                        console.log(url);
                        var image = $('<img>').attr('src', url);
                        $('#summernote').summernote("insertNode", image[0]);


                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

        function deleteimg(file) {
            var data = new FormData();
            data.append('deleteurl', file);
            $.ajax({
                url: "{{ url('/services/delete') }}",
                data: {
                    data: file
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",
                success: function(url) {
                    console.log(url);
                }
            });
        }

        $('#addServiceform').submit(function(e) {
            e.preventDefault();
            data = new FormData(this);
            $.ajax({
                data: data,
                type: "POST",
                url: "{{ route('addServiceform') }}",
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
                    $('#addServiceform')[0].reset();
                    $('#alertsuccess').text(data);
                    $('#alertsuccess').fadeIn();
                    $('#alertsuccess').delay(700).fadeOut();
                    // console.log(data);
                    setTimeout(() => {

                        location.reload();
                    }, 1000);
                }
            });
        })
    </script>
    </body>

    </html>

@endsection
