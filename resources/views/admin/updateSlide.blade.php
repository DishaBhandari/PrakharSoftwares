@extends('admin.layouts.master')
@section('title', 'Update Home Page')
@section('dashboard')
    <div class="content-wrapper">
        <style>
            #edit a:hover {
                text-decoration: none;
            }

            #edit a {
                color: #17b81e !important;
            }

            .bg-info {
                background-color: #17b81e !important;
                /* */
            }
        </style>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Home Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Home Page</li>
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
                <div class="row" id="edit">
                    @foreach ($data as $item)
                        <a class="col-md-3 col-sm-6 col-12" href="{{ url('editslide/').'/' . $item->id }}">
                            <div class="info-box shadow-none">
                                <span class="info-box-icon bg-info"><i class="far fa-edit"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Edit</span>
                                    <span class="info-box-number">Slide {{$item->id}}</span>
                                </div>

                            </div>

                        </a>
                    @endforeach
                </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('scripts')



    </body>

    </html>

@endsection
