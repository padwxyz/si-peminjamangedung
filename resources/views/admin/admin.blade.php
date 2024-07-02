<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | URB</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Jersey+15&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

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
    <section>
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar">
                    <div>
                        <h2 class="heading2 mb-5">URB</h2>
                        <a href="#beranda" class="mb-2"><i class="fas fa-home"></i> Beranda</a>
                        <button class="dropdown-btn mb-2"><i class="fas fa-user"></i> Auth
                            <span class="dropdown-icon">▾</span>
                        </button>
                        <div class="dropdown-container">
                            <a href="#login">Login</a>
                            <a href="#register">Register</a>
                        </div>
                        <button class="dropdown-btn mb-3"><i class="fas fa-user-cog"></i> Profile Admin
                            <span class="dropdown-icon">▾</span>
                        </button>
                        <div class="dropdown-container">
                            <a href="#prodi">Prodi</a>
                            <a href="#fakultas">Fakultas</a>
                            <a href="#sarpras">Sarpras</a>
                        </div>
                        <a href="#data-user" class="mb-2"><i class="fas fa-users"></i> Data User</a>
                        <a href="#riwayat-peminjaman" class="mb-2"><i class="fas fa-history"></i> Data Riwayat Peminjaman</a>
                        <a href="#data-gedung" class="mb-2"><i class="fas fa-building"></i> Data Gedung</a>
                        <a href="#mengelola-jadwal" class="mb-2"><i class="fas fa-calendar-alt"></i> Jadwal Peminjaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                
            </div>
        </div>
        
    </section>
    
    <section>
        <div class="container">
            <div class="ms-5 p-5">
                <h1 class="heading2">Selamat Datang Admin 1 👋</h1>
            </div>
            <div class="row ms-5 ps-5">
                <div class="col-6 bg-primary">
                    test test <br><br><br><br><br><br>
                </div>
                <div class="col-6 bg-warning">
                    test test <br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var dropdownButtons = document.querySelectorAll('.dropdown-btn');

    dropdownButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            this.classList.toggle('active');
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    });
});
</script>

<script src="{{ asset('js/script.js') }}"></script>

</html>