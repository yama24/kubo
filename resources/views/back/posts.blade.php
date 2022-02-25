@extends('back.layout.main')
@section('dashboardContainer')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Posts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Fixed Header Table</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 55vh;">
                                <div class="row mt-3 px-3 mx-0">
                                    <div class="col-6">
                                        <form action="">
                                            <div class="form-group">
                                                <label class="d-inline-block"><small>Show</small></label>
                                                <select class="form-control form-control-sm d-inline-block" name="length"
                                                    style="width: auto;" onchange="this.form.submit()">
                                                    <option value="10" {{ $length == 10 ? 'selected' : '' }}>10</option>
                                                    <option value="25" {{ $length == 25 ? 'selected' : '' }}>25</option>
                                                    <option value="50" {{ $length == 50 ? 'selected' : '' }}>50</option>
                                                    <option value="100" {{ $length == 100 ? 'selected' : '' }}>100</option>
                                                </select>
                                                <label class="d-inline-block"><small>entries</small></label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <div class="float-right">
                                            <form action="">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" name="search" class="form-control float-right"
                                                        placeholder="Search" value="{{ $search }}">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Hero Image</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ Str::limit($item->body, 50, '...') }}</td>
                                                <td><img src="{{ $item->image }}" class="img-thumbnail" alt="Hero Image">
                                                </td>
                                                <td><a href="#"><span
                                                            class="badge badge-warning">{{ $item->category->name }}</span></a>
                                                </td>
                                                <td>
                                                    <a href="#"><span
                                                            class="badge badge-pill badge-success">Tags1</span></a>
                                                    <a href="#"><span
                                                            class="badge badge-pill badge-primary">Tags2</span></a>
                                                    <a href="#"><span
                                                            class="badge badge-pill badge-secondary">Tags3</span></a>
                                                    <a href="#"><span class="badge badge-pill badge-danger">Tags4</span></a>
                                                </td>
                                                <td>{{ $item->author->name }}</td>
                                                <td>
                                                    <small>
                                                        Create : {{ $item->created_at->format('d/M/y') }}
                                                        Update : {{ $item->updated_at->format('d/M/y') }}
                                                    </small>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-warning btn-sm"><i
                                                                class="fas fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <span class="float-left">Showing {{ $posts->firstItem() }} to
                                    {{ $posts->lastItem() }} of {{ $posts->total() }} entries</span>
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <?php
                                    $startPage = $posts->currentPage() - 2 < 1 ? 1 : $posts->currentPage() - 2;
                                    $endPage = $posts->currentPage() + 2 > $posts->lastPage() ? $posts->lastPage() : $posts->currentPage() + 2;
                                    if ($startPage == 1 && $endPage < 5) {
                                        if ($posts->lastPage() > 5) {
                                            $endPage = 5;
                                        } else {
                                            $endPage = $posts->lastPage();
                                        }
                                    }
                                    if ($endPage - $startPage + 1 < 5) {
                                        if ($posts->lastPage() > 5) {
                                            $startPage = $endPage - 4;
                                        } else {
                                            $startPage = $endPage - $posts->lastPage() + 1;
                                        }
                                    }
                                    ?>
                                    {!! $startPage == 1 ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url(1) . '"><i class="fa fa-angle-double-left"></i></a></li>' !!}
                                    {!! $posts->onFirstPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->previousPageUrl() . '"><i class="fa fa-angle-left"></i></a></li>' !!}
                                    @foreach ($posts->getUrlRange($startPage, $endPage) as $key => $val)
                                        <li class="page-item {{ $posts->currentPage() == $key ? 'active' : '' }}"><a
                                                class="page-link" href="{{ $val . $link }}">{{ $key }}</a>
                                        </li>
                                    @endforeach
                                    {!! $posts->currentPage() == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->nextPageUrl() . '"><i class="fa fa-angle-right"></i></a></li>' !!}
                                    {!! $endPage == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url($posts->lastPage()) . '"><i class="fa fa-angle-double-right"></i></a></li>' !!}
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('footerContainer')
    <script>
        $(function() {
            $('#postsTable').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
