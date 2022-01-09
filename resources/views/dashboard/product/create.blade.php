@extends('dashboard.layouts.main')

@section('content')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard Admin</h4>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Basic Table</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto text-end">
                            <button class="btn btn-danger me-md-2" type="button"><a href="/dashboard/product" class="text-decoration-none text-white">Go Back</a></button>
                        </div>
                    </div>
                    <form action="/dashboard/product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bold form-label">Product Description</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-bold">Product Image Preview</label>
                            <img class="img-preview img-fluid">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-bold">Product Image</label>
                            <input class="form-control" type="file" id="image" name="image" id="formFile" onchange="previewImage()">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection