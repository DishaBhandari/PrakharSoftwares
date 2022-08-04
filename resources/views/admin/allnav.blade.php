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
                    <table class="table table-striped table-hover table-success bg-success">
                        <thead style="background-color: rgb(13, 66, 13)">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu Name</th>
                                <th scope="col">Menu Link</th>
                                <th scope="col">Parent Name</th>
                                <th scope="col">Postion</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>{{ $item->menu_name }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        @foreach ($data as $item2)
                                            @if ($item->parent_id == $item2->menu_id)
                                                {{ $item2->menu_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $item->sort }}</td>
                                    <td> <a onclick="return confirm('Are you sure?')"
                                        href="../delete/nav/{{ $item->menu_id }}" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a>
                                        <a href="../edit/page/{{ $item->url }}" class="btn btn-success bg-black"><i
                                                class="fa-solid fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('scripts')
   

@endsection
