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
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Hero Image</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th>Created @</th>
                                            <th>Updated @</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, rem dolorem
                                                quas sunt nostrum ipsam inventore sint vitae repudiandae! Architecto...</td>
                                            <td><img src="/back/dist/img/photo4.jpg" class="img-thumbnail"
                                                    alt="Hero Image"></td>
                                            <td><a href="#"><span class="badge badge-warning">Category</span></a></td>
                                            <td>
                                                <a href="#"><span class="badge badge-pill badge-success">Tags1</span></a>
                                                <a href="#"><span class="badge badge-pill badge-primary">Tags2</span></a>
                                                <a href="#"><span class="badge badge-pill badge-secondary">Tags3</span></a>
                                                <a href="#"><span class="badge badge-pill badge-danger">Tags4</span></a>
                                            </td>
                                            <td>Yayan Maulana</td>
                                            <td>2022 Jan 01 08:15</td>
                                            <td>2022 Jan 03 08:15</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-xs"><i
                                                        class="fas fa-edit"></i> Edit</button>
                                                <button type="button" class="btn btn-danger btn-xs"><i
                                                        class="fas fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody> --}}
                                    {{-- <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Hero Image</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th>Created @</th>
                                            <th>Updated @</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                            <!-- /.card-body -->
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
            $("#example1").DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('posts.json') !!}', // memanggil route yang menampilkan data json
                columns: [{ // mengambil & menampilkan kolom sesuai tabel database
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'body',
                        name: 'body'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'category_link',
                        name: 'category_link'
                    },
                    {
                        data: 'tag',
                        name: 'tag'
                    },
                    {
                        data: 'author_link',
                        name: 'author_link'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     // "info": true,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>
@endsection
