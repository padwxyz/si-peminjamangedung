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
        <div id="beranda" class="container-fluid banner1">
            <div class="container text-center text-white">
                <h4 class="heading4">Welcome to</h4>
                <h1 class="heading1">Udayana Room Book</h1>
            </div>
            <div class="search-container mt-3">
                <a href=""><i class="fas fa-search"></i></a>
                <input type="text" id="search-input" placeholder="Cari gedung">
                <button id="dropdown-button">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- Welcome End -->

    <!-- Status Start -->
    <section>
        <div class="container mt-5">
            <form action="">
                <div class="row">
                    <div class="col-3">
                        <label for="" class="form-label body-text">Tanggal Awal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label body-text">Tanggal Akhir</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label body-text">Gedung</label>
                        <select name="" class="form-select" id="">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <option value="option4">Option 4</option>
                        </select>
                    </div>
                    <div class="col-2 d-flex align-items-end">
                        <button type="submit" class="button-secondary btn-outline-light">Submit</button>
                    </div>
                </div>
            </form>

            <div class="row mt-3">
                <div class="row mt-5">
                    <div class="col-6">
                        <div id="calendar" class="shadow-sm" style="background-color: #f9f9f9; border-radius: 10px; padding: 20px;">
                            <div id="calendar-header" class="d-flex justify-content-between align-items-center mb-3">
                                <button id="prev-month" style="background: none; border: none; font-size: 1.2rem;">&#10094;</button>
                                <div id="current-month"></div>
                                <button id="next-month" style="background: none; border: none; font-size: 1.2rem;">&#10095;</button>
                            </div>
                            <div id="calendar-days" class="text-center justify-content-between">
                                <div class="d-inline-block" style="width: 13.7%;">Sun</div>
                                <div class="d-inline-block" style="width: 13.7%;">Mon</div>
                                <div class="d-inline-block" style="width: 13.7%;">Tue</div>
                                <div class="d-inline-block" style="width: 13.7%;">Wed</div>
                                <div class="d-inline-block" style="width: 13.7%;">Thu</div>
                                <div class="d-inline-block" style="width: 13.7%;">Fri</div>
                                <div class="d-inline-block" style="width: 13.7%;">Sat</div>
                            </div>
                            <div id="calendar-dates" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px;">
                                <!-- Dates will be generated by JavaScript -->
                            </div>
                            <div id="calendar-footer" class="d-flex justify-content-between" style="padding-top: 10px;">
                                <button id="calendar-back" style="width: 48%; padding: 10px; border: none; border-radius: 5px; background-color: #d1d1d1;">Back</button>
                                <button id="calendar-apply" style="width: 48%; padding: 10px; border: none; border-radius: 5px; background-color: #007bff; color: #fff;">Apply</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <h1 class="heading2" style="font-weight: 600;">Status Gedung</h1>
                        <p class="body-text-small mt-3">Gedung UdayanaRoomBook menggunakan kode warna untuk memberitahu status peminjaman. Jika warnanya hijau, itu artinya peminjaman sudah disetujui dan gedung bisa digunakan. Sedangkan jika warnanya kuning, berarti permintaan peminjaman masih diproses atau sedang dalam tahap pertimbangan. Semoga penjelasan ini membantu!
                            <br><br>
                            Terima kasih atas pengertiannya.</p>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center fs-5">
                            <th scope="col">No</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Gedung</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fs-6">
                            <th scope="row" class="text-center">1</th>
                            <td>John Doe</td>
                            <td>Gedung A</td>
                            <td>Ruangan 101</td>
                            <td>Rapat Proyek</td>
                            <td>2024-06-23</td>
                            <td><span class="status-circle bg-secondary"></span> Tersedia</td>
                        </tr>
                        <tr class="fs-6">
                            <th scope="row" class="text-center">1</th>
                            <td>John Doe</td>
                            <td>Gedung A</td>
                            <td>Ruangan 101</td>
                            <td>Rapat Proyek</td>
                            <td>2024-06-23</td>
                            <td><span class="status-circle bg-warning"></span> Pending</td>
                        </tr>
                        <tr class="fs-6">
                            <th scope="row" class="text-center">1</th>
                            <td>John Doe</td>
                            <td>Gedung A</td>
                            <td>Ruangan 101</td>
                            <td>Rapat Proyek</td>
                            <td>2024-06-23</td>
                            <td><span class="status-circle bg-danger"></span> Ditolak</td>
                        </tr>
                        <tr class="fs-6">
                            <th scope="row" class="text-center">1</th>
                            <td>John Doe</td>
                            <td>Gedung A</td>
                            <td>Ruangan 101</td>
                            <td>Rapat Proyek</td>
                            <td>2024-06-23</td>
                            <td><span class="status-circle bg-success"></span> Diterima</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Status End -->

    <!-- Footer -->
    @include('components.layouts.footer')
    <!-- Footer End -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>