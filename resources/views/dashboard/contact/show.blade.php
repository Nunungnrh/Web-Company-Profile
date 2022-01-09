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
                @if (session()->has('destroy'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('destroy') }}
                    </div>
                @endif
                @if (session()->has('success-edit'))
                <div class="alert alert-success" role="alert">
                    {{ session('success-edit') }}
                </div>
                @endif
                <div class="white-box">
                    <div class="d-md-flex mb-4">
                        <h3 class="box-title mb-0">Contact</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto text-end">
                            <button class="btn btn-danger me-md-2" type="button"><a href="/dashboard/contact" class="text-decoration-none text-white">Go Back</a></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Name</h3>
                            <p class="fs-5">{{ $contact->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-bold">Email/Phone Number</h3>
                            <p class="fs-5">{{ $contact->email }}/{{ $contact->phone_number }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="fs-5">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection