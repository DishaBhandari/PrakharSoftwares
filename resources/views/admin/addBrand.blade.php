@extends('admin.layouts.master')
@section('title', 'Add Testimonial')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Brand</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Brand</li>
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
                            <h4 class="title">Add Brand</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" id="addSlide">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="image">Brand Image</label>
                                            <input type="file" class="form-control" accept="image/*" name="image"
                                                id="image" required placeholder="Enter ">
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
                url: "{{ route('addbrandForm') }}",
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
                    $('#addSlide')[0].reset();
                    $('#alertsuccess').text(data);
                    $('#alertsuccess').fadeIn();
                    $('#alertsuccess').delay(700).fadeOut();
                    console.log(data);
                    setTimeout(() => {

                        location.href = '{{ url('updateHomeBrand') }}';
                    }, 1000);
                }
            });
        })
    </script>
    </body>

    </html>

@endsection
