@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('dashboard')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Service Pages</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Service Pages v1</li>
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
                    <table class="table  table-hover  bg-success">
                        <thead style="background-color: rgb(13, 66, 13)">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu Name</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Meta Keyword</th>
                                <th scope="col">Meta Description</th>
                                <th scope="col">Page Name/Heading</th>
                                <th scope="col">Page Content</th>
                                <th scope="col">Banner Image</th>
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
                                    <td>{{ $item->meta_title }}</td>
                                    <td>{{ $item->meta_keyword }}</td>
                                    <td>{{ $item->meta_description }}</td>
                                    <td>{{ $item->page_name }}</td>
                                    <td>{!! $item->page_data !!}</td>
                                    <td><img src="{{ asset('main-documents/service/'.$item->banner_image) }}" style="width:100px; height:50px;"></td>
                                
                                   
                                    <td> <a onclick="return confirm('Are you sure?')"
                                            href="{{ $item->id }}" class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></a>
                                        <a href="{{ $item->id }}" class="btn btn-success bg-black"><i
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
