<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $title = 'Home';
    @endphp
    @include('admin.common.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/dist/img/prakhar.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        @include('admin.common.nav')

        @include('admin.common.sideBar')
        <!-- Content Wrapper. Contains page content -->
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
                                <li class="breadcrumb-item active">Dashboard</li>
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
                                <form method="POST" id="addnavform">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="menu_name">
                                                    Menu Name</label>
                                                <input type="text" name="menu_name" class="form-control"
                                                    id="menu_name" placeholder="Enter ...">
                                            </div>

                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="link">Menu Url</label>
                                                <input type="text" class="form-control" name="link" id="link"
                                                    placeholder="Enter ...">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="parent_id" id="parent_id">Add Under Menu</label>
                                                <select name="parent_id" class="form-control">
                                                    <option value="0">None</option>
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->menu_id }}">{{ $item->menu_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="#">Prakhar Softwaire</a>.</strong>
            All rights reserved.
        </footer>


    </div>

</html>
