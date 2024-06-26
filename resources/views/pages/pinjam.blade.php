<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URB</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Jersey+15&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

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
                <h1 class="heading1">Form Peminjaman Gedung dan Ruangan</h1>
                <p></p>
            </div>
        </div>
    </section>

    <!-- Form Peminjaman Start -->
    <section>
        <div class="container mt-5">
            <div class="card p-4 shadow-sm">
                <form action="">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control shadow-sm" id="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telepon">Nomor Telepon</label>
                        <input type="text" class="form-control shadow-sm" id="telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="" class="form-label">Gedung</label>
                            <select name="" class="form-select shadow-sm" id="">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Ruangan</label>
                            <select name="" class="form-select shadow-sm" id="">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal-mulai">Tanggal Mulai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal-mulai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam-mulai">Jam Awal Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam-mulai" required>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal-selesai">Tanggal Selesai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal-selesai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam-selesai">Jam Akhir Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam-selesai" required>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="surat-izin-kegiatan">Surat Izin Kegiatan</label>
                            <input type="file" class="form-control shadow-sm" id="surat-izin-kegiatan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="surat-izin-keramaian">Surat Izin Keramaian</label>
                            <input type="file" class="form-control shadow-sm" id="surat-izin-keramaian" required>
                        </div>
                    </div>
    
                    <div class="mb-3 form-check">
                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="persyaratan" required>
                        <label class="form-check-label" for="persyaratan">
                            Saya menerima persyaratan dan ketentuan yang berlaku
                        </label>
                    </div>
    
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    
    <!-- Form Peminjaman End -->

    <!-- Footer -->
    @include('components.layouts.footer')

</body>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>