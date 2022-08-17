@extends('admin.layouts.master')
@section('title', 'Add Testimonial')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Testimonial</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Testimonial</li>
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
                            <h4 class="title">Add Testimonial</h4>
                        </div>

                        <div class="card-body">
                            @foreach ($data as $item)
                                <form method="POST" id="addSlide">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    required placeholder="Enter Name " value="{{ $item->name }}">
                                                <input type="hidden" class="form-control" value="{{ $item->id }}"
                                                    name="id" id="id" required placeholder="Enter Name ">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="info">Persnol Info</label>
                                                <input type="text" class="form-control" name="info" id="info"
                                                    required placeholder="Enter Persnol Info" value="{{ $item->info }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="image">Profile</label>
                                                <input type="file" class="form-control" accept="image/*" name="image"
                                                    id="image" placeholder="Enter ">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="desc">Discription</label>
                                                <textarea type="text" rows="7" class="form-control" name="desc" id="desc" required
                                                    placeholder="Enter Discription ">{{ $item->desc }}</textarea>
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
                            @endforeach
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
                url: "{{ route('updateTestimonialForm') }}",
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

                        location.href = '{{ url('upadetHomeTestimonial') }}';
                    }, 1000);
                }
            });
        })
    </script>
    </body>

    </html>

@endsection
