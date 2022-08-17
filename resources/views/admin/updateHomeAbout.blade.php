@extends('admin.layouts.master')
@section('title', 'Add Slide')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Slide</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Slide</li>
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
                            <h3 class="card-title">Update Slide</h3>
                        </div>

                        <div class="card-body">
                            @foreach ($data as $item)
                                <form method="POST" id="addSlide">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="heading">Update Main Heading</label>
                                                <input type="text" class="form-control" name="heading"
                                                    value="{{ $item->heading }}" id="heading" required>
                                                <input type="hidden" class="form-control" name="id"
                                                    value="{{ $item->id }}" id="id" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="desc">Update Main Discription</label>
                                                <input type="text" class="form-control" name="desc"
                                                    value="{{ $item->desc }}" id="desc" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="heading1">Update Column 1 Heading</label>
                                                <input type="text" class="form-control" value="{{ $item->heading1 }}"
                                                    name="heading1" id="heading1" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="desc1">Update Column 1 Description</label>
                                                <input type="text" class="form-control" name="desc1"
                                                    value="{{ $item->desc1 }}" id="desc1" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="heading2">Update Column 2 Heading</label>
                                                <input type="text" class="form-control" value="{{ $item->heading2 }}"
                                                    name="heading2" id="heading2" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="desc2">Update Column 2 Description</label>
                                                <input type="text" class="form-control" name="desc2"
                                                    value="{{ $item->desc2 }}" id="desc2" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="heading3">Update Column 3 Heading</label>
                                                <input type="text" class="form-control" value="{{ $item->heading3 }}"
                                                    name="heading3" id="heading3" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="desc3">Update Column 1 Description</label>
                                                <input type="text" class="form-control" name="desc3"
                                                    value="{{ $item->desc3 }}" id="desc3" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="heading4">Update Column 4 Heading</label>
                                                <input type="text" class="form-control" value="{{ $item->heading4 }}"
                                                    name="heading4" id="heading4" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="desc4">Update Column 4 Description</label>
                                                <input type="text" class="form-control" name="desc4"
                                                    value="{{ $item->desc4 }}" id="desc4" required>
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
                url: "{{ route('updateHomeAboutform') }}",
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

                        location.href = "{{ url('updatehome') }}";
                    }, 1000);
                }
            });
        })
    </script>
    </body>

    </html>

@endsection
