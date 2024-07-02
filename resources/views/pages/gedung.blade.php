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
                <h1 class="heading1">Gedung dan Fasilitas <br>
                    yang Kami Miliki</h1>
                <p></p>
            </div>
            <div class="container d-flex justify-content-center mt-3">
                <div class="row">
                    <div class="col-6">
                        <form action="#" class="d-flex form-inline" style="width: 500px;" id="formSelector">
                            <select name="search" class="form-select shadow-sm"
                                style="border-radius: 0.25rem 0 0 0.25rem; border-right: none;" id="formType">
                                <option value="#">Cari sesuai Fakultas</option>
                                <option value="fakultasA">Fakultas A</option>
                                <option value="fakultasB">FakultasB</option>
                                <option value="fakultasC">Fakultas C</option>
                                <option value="fakultasD">Fakultas D</option>
                                <option value="fakultasE">Fakultas E</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="#" class="d-flex form-inline" style="width: 500px;" id="formSelector">
                            <select name="search" class="form-select shadow-sm"
                                style="border-radius: 0.25rem 0 0 0.25rem; border-right: none;" id="formType">
                                <option value="#">Cari sesuai Prodi</option>
                                <option value="prodiA">Prodi A</option>
                                <option value="prodiB">ProdiB</option>
                                <option value="prodiC">Prodi C</option>
                                <option value="prodiD">Prodi D</option>
                                <option value="prodiE">Prodi E</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center mt-4">
                <button class="button-secondary" style="width: 1024px">Cari Gedung</button>
            </div>
        </div>
    </section>
    
    {{-- <button type="button" class="button-secondary" style="border-radius: 0 0.25rem 0.25rem 0; border-left: none; "onclick="selectForm()">Go</button> --}}
    <!-- Welcome End -->

    <!-- Card List Gedung Start -->
    <section>
        <div class="container mt-5">
            <div class="text-center">
                <h1 class="heading2" style="font-weight: 600;">List Gedung <span style="color: #FF7A00">Universtas Udayana</span></h1>
            </div>
            <div class="mt-5 d-flex flex-wrap justify-content-between gap-4">
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 415px;">
                    <img src="{{ asset('img/bg-fmipa.png') }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="body-text" style="font-weight: 500;">Gedung Dekanat FMIPA</h5>
                        <p class="body-text-small">Lokasi: Gedung A</p>
                        <button class="button-primary" style="width: 130px;"><a href="{{ route('detail_gedung') }}">Lihat Detail</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card List Gedung End -->

    <!-- Footer -->
    @include('components.layouts.footer')
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>