<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dompet Salman</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/css/quill/quill.snow.css" rel="stylesheet">
    <link href="/css/quill/quill.bubble.css" rel="stylesheet">
    <link href="/css/remixicon/remixicon.css" rel="stylesheet">
    <link href="/css/simple-datatables/style.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    @include('partials.header')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Dompet Salman</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/css/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/css/quill/quill.snow.css" rel="stylesheet">
        <link href="/css/quill/quill.bubble.css" rel="stylesheet">
        <link href="/css/remixicon/remixicon.css" rel="stylesheet">
        <link href="/css/simple-datatables/style.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

    </head>

    <body>

        @extends('partials.header')
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Master</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="dompet">
                                <i class="bi bi-circle"></i><span>Dompet</span>
                            </a>
                        </li>
                        <li>
                            <a href="kategori">
                                <i class="bi bi-circle"></i><span>Kategori</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Components Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Transaksi</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="dompetmasuk">
                                <i class="bi bi-circle"></i><span>Dompet Masuk</span>
                            </a>
                        </li>
                        <li>
                            <a href="dompetkeluar">
                                <i class="bi bi-circle"></i><span>Dompet Keluar</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="laporantransaksi">
                                <i class="bi bi-circle"></i><span>Laporan Transaksi</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Tables Nav -->
            </ul>
        </aside><!-- End Sidebar-->

        <main id="main" class="main">
            <div class="pagetitle">
                <div class="d-flex">
                    <h1 class="me-auto p-2 bd-highlight">Laporan Transaksi</h1>
                </div>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">laporan transaksi</h5>
                                <!-- Table with stripped rows -->
                                <div class="d-flex">
                                    <div class="col-3">
                                        <label>Tanggal Awal</label>
                                        <input style="width:300px" for="inputdate" type="date" class="form-control"
                                            placeholder="27-05-1999" aria-label="Tanggal" id="disabledInput">
                                    </div>
                                    <div class="col-3">
                                        <label>Tanggal Akhir</label>
                                        <input style="width:300px" for="inputdate" type="date" class="form-control"
                                            placeholder="27-05-1999" aria-label="Tanggal" id="disabledInput">
                                    </div>
                                    <div>
                                        <label>Status:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Tampilkan Uang Masuk
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Tampilkan Uang Keluar
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End Table with stripped rows -->

                                </div>
                                <div class="d-flex">
                                    <div class="row mb-2">
                                        <label class="mb-2">Kategori</label>
                                        <div class="col-sm-2">
                                            <select style="width:300px" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Semua</option>
                                                <option value="1">Aktif</option>
                                                <option value="2">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="mb-2">Dompet</label>
                                        <div class="col-sm-3">
                                            <select style="width:300px" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Semua</option>
                                                <option value="1">Aktif</option>
                                                <option value="2">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a href="result"><button type="button" class="btn btn-primary mt-3">Buat
                                        Laporan</button></a>
                                <button type="button" class="btn btn-primary mt-3">Buat ke Excel</button>
                            </div>

                        </div>
                    </div>
            </section>
        </main>
        @include('partials.footer')




        <script src="/css/apexcharts/apexcharts.min.js"></script>
        <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/css/chart.js/chart.min.js"></script>
        <script src="/css/echarts/echarts.min.js"></script>
        <script src="/css/quill/quill.min.js"></script>
        <script src="/css/simple-datatables/simple-datatables.js"></script>
        <script src="/css/tinymce/tinymce.min.js"></script>
        <script src="/css/php-email-form/validate.js"></script>
        <script src="/js/main.js"></script>

    </body>

    </html>
