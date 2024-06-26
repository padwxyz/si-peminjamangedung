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
                <h1 class="heading1">Gedung Dekanat FMIPA</h1>
                <h4 class="heading4">Fasilitas yang tersedia</h4>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                        <h4 class="heading4" style="color: #FF7A00; margin: 0;">20 Ruangan</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                        <h4 class="heading4" style="color: #FF7A00; margin: 0;">4 <br> Lantai</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                        <h4 class="heading4" style="color: #FF7A00; margin: 0;">100 Kapasitas</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome End -->

    <!-- List Ruangan -->
    <section>
        <div class="container mt-5">
            <div class="card mb-3 shadow-sm" style="height: 110px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="body-text">Ruangan AA</div>
                    </div>
                    <button class="button-primary" style="width: 170px;"><a href="{{ route('detail_ruangan') }}">Lihat Detail</a></button>
                </div>
            </div>
            <div class="card mb-3 shadow-sm" style="height: 110px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="body-text">Ruangan AB</div>
                    </div>
                    <button class="button-primary" style="width: 170px;"><a href="{{ route('detail_ruangan') }}">Lihat Detail</a></button>
                </div>
            </div>
            <div class="card mb-3 shadow-sm" style="height: 110px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="body-text">Ruangan AC</div>
                    </div>
                    <button class="button-primary" style="width: 170px;"><a href="{{ route('detail_ruangan') }}">Lihat Detail</a></button>
                </div>
            </div>
            <div class="card mb-3 shadow-sm" style="height: 110px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="body-text">Ruangan AD</div>
                    </div>
                    <button class="button-primary" style="width: 170px;"><a href="{{ route('detail_ruangan') }}">Lihat Detail</a></button>
                </div>
            </div>
            <div class="card mb-3 shadow-sm" style="height: 110px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="body-text">Ruangan AE</div>
                    </div>
                    <button class="button-primary" style="width: 170px;"><a href="{{ route('detail_ruangan') }}">Lihat Detail</a></button>
                </div>
            </div>
    </section>
    <!-- List Ruangan End -->

    <!-- Booking Shortcut Start -->
     <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/detail-gedung1.png') }}" alt="" class="img-fluid img-style">
                </div>
                <div class="col-3">
                    <img src="{{ asset('img/detail-gedung2.png') }}" alt="" class="img-fluid img-style">
                </div>
                <div class="col-6 d-flex flex-column justify-content-center">
                    <h3 class="heading2">Persyaratan Booking</h3>
                    <p class="body-text">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <button class="button-primary mt-4" style="width: 200px; height: 50px;"><a href="{{ route('peminjaman') }}">Book Now</a></button>
                </div>
            </div>
        </div>
     </section>
    <!-- Booking Shortcut End -->

    <!-- Footer -->
    @include('components.layouts.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>