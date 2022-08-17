@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Brand</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Brand</li>
                        </ol>
                        <a href="{{ url('addBrand') }}" class="btn col-2 mb-1 ml-auto mt-5 btn-block btn-success">Add
                            New</a>
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
                    <table class="table  table-hover  bg-success">
                        <thead style="background-color: rgb(13, 66, 13)">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Added At</th>
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
                                    <td><img src="{{ asset('brand/' . $item->image) }}" style="width:100px; height:50px;">
                                    </td>
                                    <td>{{ $item->updated_at->diffForHumans() }}</td>


                                    <td> <a onclick="return confirm('Are you sure?')"
                                            href="{{ url('deletebrand') . '/' . $item->id }}"
                                            class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                       
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
