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
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Company Product</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto text-end">
                            <button class="btn btn-primary me-md-2" type="button"><a href="/dashboard/product/create" class="text-decoration-none text-white"><i class="bi bi-plus-lg"></i></a></button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($products as $item)
                            <!-- Column -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card border border-dark">
                                    <img class="card-img-top img-responsive" src="{{ asset('storage/' . $item->image) }}" alt="Card">
                                    <div class="card-body">
                                        <ul class="list-inline d-flex align-items-center">
                                            <li class="ps-0 fw-bold fs-5">{{ $item->name }}</li>
                                            <li class="ms-auto">
                                                <a href="/dashboard/product/{{ $item->id }}/edit" class="btn btn-warning text-decoration-none text-white"><i class="bi bi-pencil-square"></i></a>&nbsp;
                                                <form action="/dashboard/product/{{ $item->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger text-white" onclick="return confirm('Data ini akan dihapus! Anda yakin untuk menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                        <h3 class="font-normal">{{ \Illuminate\Support\Str::words($item->desc, 7) }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection