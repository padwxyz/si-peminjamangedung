<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URB</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    @include('components.layouts.navbar-main')

    <!-- Welcome Start -->
    <section>
        <div id="beranda" class="container-fluid banner2">
            <div class="container text-center text-white">
                <h1 class="heading1">Daftar Riwayat Peminjaman</h1>
                <p></p>
            </div>
        </div>
    </section>
    <!-- Welcome End -->

    <section>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-center fs-5">
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Gedung</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal Mulai</th>
                            <th scope="col">Tanggal Selesai</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Jam Selesai</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol aksi -->
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>Saya</td>
                            <td>Gedung A</td>
                            <td>Ruangan AA</td>
                            <td>Kepanitiaan</td>
                            <td>2024-06-23</td>
                            <td>2024-06-23</td>
                            <td>10:00</td>
                            <td>18:00</td>
                            <td><span class="status-circle bg-secondary"></span> Tersedia</td>
                            <td>
                                <!-- Tombol untuk membatalkan peminjaman -->
                                <button class="btn btn-sm btn-outline-danger">Batalkan</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>Saya</td>
                            <td>Gedung A</td>
                            <td>Ruangan AA</td>
                            <td>Kepanitiaan</td>
                            <td>2024-06-23</td>
                            <td>2024-06-23</td>
                            <td>10:00</td>
                            <td>18:00</td>
                            <td><span class="status-circle bg-warning"></span> Pending</td>
                            <td>
                                <!-- Tombol untuk membatalkan peminjaman -->
                                <button class="btn btn-sm btn-outline-danger">Batalkan</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>Saya</td>
                            <td>Gedung A</td>
                            <td>Ruangan AA</td>
                            <td>Kepanitiaan</td>
                            <td>2024-06-23</td>
                            <td>2024-06-23</td>
                            <td>10:00</td>
                            <td>18:00</td>
                            <td><span class="status-circle bg-danger"></span> Ditolak</td>
                            <td>
                                <!-- Tombol untuk membatalkan peminjaman -->
                                <button class="btn btn-sm btn-outline-danger">Batalkan</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>Saya</td>
                            <td>Gedung A</td>
                            <td>Ruangan AA</td>
                            <td>Kepanitiaan</td>
                            <td>2024-06-23</td>
                            <td>2024-06-23</td>
                            <td>10:00</td>
                            <td>18:00</td>
                            <td><span class="status-circle bg-success"></span> Diterima</td>
                            <td>
                                <!-- Tombol untuk membatalkan peminjaman -->
                                <button class="btn btn-sm btn-outline-danger">Batalkan</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.layouts.footer')
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>