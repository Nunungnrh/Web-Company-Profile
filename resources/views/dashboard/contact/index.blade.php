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
                        <h3 class="box-title mb-0">Contact</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Message</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Illuminate\Support\Str::words($item->message, 15) }}</td>
                                    <td>
                                        <a href="/dashboard/contact/{{ $item->id }}" class="btn btn-info text-decoration-none text-white"><i class="bi bi-eye"></i></a>
                                        <form action="/dashboard/contact/{{ $item->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger text-white" onclick="return confirm('Data ini akan dihapus! Anda yakin untuk menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection