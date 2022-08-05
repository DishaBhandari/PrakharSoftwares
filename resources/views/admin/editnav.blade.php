@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                            <h3 class="card-title">General Elements</h3>
                        </div>

                        <div class="card-body">
                            @foreach ($data as $item)
                                <form method="POST" id="addnavform">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="menu_name">
                                                    Menu Name</label>
                                                <input type="text" name="menu_name" value="{{ $item->menu_name }}"
                                                    class="form-control" id="menu_name" placeholder="Enter ..." disabled>
                                                <input type="hidden" name="menu_id" value="{{ $item->menu_id }}"
                                                    class="form-control" id="menu_id" placeholder="Enter ...">
                                            </div>

                                        </div>
                                        <div class="col-sm-6" id="linkdiv">

                                            <div class="form-group">
                                                <label for="link">Menu Url</label>
                                                <input type="text" class="form-control" value="{{ $item->link }}"
                                                    name="link" id="link" placeholder="Enter ...">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="parent_id" id="parent_id">Add Under Menu</label>
                                                <select name="parent_id" class="form-control">
                                                    <option value="0">None</option>
                                                    @foreach ($data2 as $item2)
                                                        <option value="{{ $item2->menu_id }}"
                                                            {{ $item2->menu_id == $item->parent_id ? 'Selected' : '' }}>
                                                            {{ $item2->menu_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="submenu_count">Menu Type</label>
                                                <select name="submenu_count" id="submenu_count" class="form-control">
                                                    <option value="0"
                                                        {{ $item->submenu_count == 0 ? 'Selected' : '' }}>
                                                        Link Menu</option>
                                                    <option value="1"
                                                        {{ $item->submenu_count == 1 ? 'Selected' : '' }}>
                                                        Dropdown menu</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="sort">
                                                    Sort By</label>
                                                <input type="number" value="{{ $item->sort }}" class="form-control"
                                                    name="sort" id="sort" placeholder="Enter ...">
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
        $('#submenu_count').change(function() {
            let valu = $(this).val();

            if (valu == 1) {
                // $('#link').reset();
                $('#link').val('javascript:void(0)');
                $('#linkdiv').hide();
            } else {
                $('#link').val('');
                $('#linkdiv').show();
            }
        })
        $('#addnavform').submit(function(e) {
            e.preventDefault();
            data = new FormData(this);
            $.ajax({
                data: data,
                type: "POST",
                url: "{{ route('update') }}",
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
                    $('#addnavform')[0].reset();
                    $('#alertsuccess').text(data);
                    $('#alertsuccess').fadeIn();
                    $('#alertsuccess').delay(500).fadeOut();
                    // console.log(data);
                    setTimeout(() => {

                        location.reload();
                    }, 700);
                }
            });
        })
        @foreach ($data as $item)
            if ({{ $item->submenu_count == 1 ? true : 0 }}>0) {
                $('#linkdiv').hide();
            };
        @endforeach
    </script>
    </body>

    </html>

@endsection
