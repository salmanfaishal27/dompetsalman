<!DOCTYPE html>
<html lang="en">
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Transaksi</title>
</head>

<body>
    <a href="result"><button type="button" class="btn btn-primary mt-3">Print</button></a>
    <a href="laporantransaksi"><button type="button" class="btn btn-primary mt-3">Close</button></a>

    <div class="d-flex align-items-center flex-column bd-highlight mb-3">
        <h2 style="align-content: center">RIWAYAT TRANSAKSI</h2>
        <h5>2013-03-01 - 2019-03-08</h5>
    </div>
    <div style="background-color: white">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">KODE</th>
                    <th scope="col">DESKRIPSI</th>
                    <th scope="col">DOMPET</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">NILAI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2019-03-08</td>
                    <td>WIN000000002</td>
                    <td>Gaji Bulan Januari</td>
                    <td>Dompet Utama</td>
                    <td>Pemasukan</td>
                    <td>(+)3.500.000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>2019-04-19</td>
                    <td>WOUT000000002</td>
                    <td>Pinjaman</td>
                    <td>Dompet Utama</td>
                    <td>Pengeluaran</td>
                    <td>(-)500.000</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">TANGGAL</th>
                                    <th scope="col">KODE</th>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col">DOMPET</th>
                                    <th scope="col">KATEGORI</th>
                                    <th scope="col">NILAI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2019-03-08</td>
                                    <td>WIN000000002</td>
                                    <td>Gaji Bulan Januari</td>
                                    <td>Dompet Utama</td>
                                    <td>Pemasukan</td>
                                    <td>(+)3.500.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section> --}}
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
