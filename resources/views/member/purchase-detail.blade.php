<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-bold">Prisaflag</span>
                </a>

                <!-- Right navbar links -->
                <!-- Right navbar links -->
                <ul class="order-md-3 navbar-nav navbar-no-expand order-1 ml-auto">
                    <!-- Icon Login -->
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-sign-in-alt"></i> <!-- Ikon login -->
                            <span class="ml-1">Login/Join Member</span> <!-- Teks di sebelah kanan ikon -->
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Purchase Detail</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review
                                </h3>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <img src="{{ asset('dist/img/photo2.png') }}" alt="Photo 2" class="img-fluid">
                                        <div class="ribbon-wrapper ribbon-xl">
                                            <div class="ribbon bg-warning text-lg">
                                                Prisaflag
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="my-3">Susu Original</h3>
                                <hr>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fullname</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email" />
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="d-flex justify-content-between align-items-center m-3">
                                        <!-- Kontrol Kuantitas di Sisi Kiri -->
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="btn btn-primary" id="minus-btn">-</button>
                                            <input type="number" class="form-control mx-2" id="quantity"
                                                value="1" min="1" style="width: 60px; text-align: center;">
                                            <button class="btn btn-primary" id="plus-btn">+</button>
                                        </div>

                                        <!-- Harga di Sisi Kanan -->
                                        <div class="bg-warning px-3 py-2">
                                            <h2 class="mb-0">
                                                $80.00
                                            </h2>
                                            <h4 class="mt-0">
                                                <small>Ex Tax: $80.00</small>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="button" class="btn btn-success btn-block" id="order-btn">
                                            Order
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="d-none d-sm-inline float-right">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- custom --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const minusBtn = document.getElementById('minus-btn');
            const plusBtn = document.getElementById('plus-btn');
            const quantityInput = document.getElementById('quantity');

            // Event untuk tombol minus
            minusBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah halaman refresh
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            // Event untuk tombol plus
            plusBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah halaman refresh
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
    </script>

    <script>
        document.getElementById('order-btn').addEventListener('click', function(event) {
            // Menampilkan SweetAlert konfirmasi
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to purchase this item?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, buy it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Purchased!',
                        'Your order has been confirmed.',
                        'success'
                    );
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire(
                        'Cancelled',
                        'Your purchase has been cancelled.',
                        'error'
                    );
                }
            });
        });
    </script>

</body>

</html>
