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
                    <i class="bi bi-menu-button-wide"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dompet">
                            <i class="bi bi-circle"></i><span>Dompet</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kategori">
                            <i class="bi bi-circle"></i><span>Kategori</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dompetmasuk">
                            <i class="bi bi-circle"></i><span>Dompet Masuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dompetkeluar">
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
                        <a href="/laporantransaksi">
                            <i class="bi bi-circle"></i><span>Laporan Transaksi</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Tables Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="d-flex ">
                <h1 class="me-auto">Kategori <p style="font-size: 18px">-buat baru</p>
                </h1>
                <a href="kategori"><button type="button" class="btn btn-primary">Kelola Kategori</button></a>
            </div>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-max">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">General Form Elements</h5>

                            <!-- General Form Elements -->
                            <form>
                                @foreach ($datas as $data)
                                    <div class="row">
                                        <div class="col">
                                            <label class="mb-2">Nama</label>
                                            <input type="text" class="form-control" value="{{ $data->Nama }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="mb-2 mt-2">Referensi</label>
                                            <input type="text" class="form-control" value="{{ $data->Referensi }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="mb-2 mt-2">Deskripsi</label>
                                            <input type="text" class="form-control" value="{{ $data->Deskripsi }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="mb-2 mt-2">Status</label>
                                            @foreach ($datas2 as $data2)
                                                @if ($data->Status_ID == $data2->ID)
                                                    @if ($data2->Data_default == 1)
                                                        <input type="text" class="form-control" value="Aktif"
                                                            disabled>
                                                    @elseif($data2->Data_default == 2)
                                                        <input type="text" class="form-control" value="Tidak Aktif"
                                                            disabled>
                                                    @endif
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                @endforeach
                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


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
