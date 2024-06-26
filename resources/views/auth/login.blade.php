<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Jersey+15&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6 d-flex align-items-center justify-content-center bg-image">
                    <div class="text-white text-center p-5">
                        <h1 class="heading1">URB</h1>
                        <h2 class="heading4">Masuk untuk menggunakan layanan kami!</h2>
                        <p class="body-text-small">Kamu cukup memasukkan nomor ponsel atau email aja, kok.</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="px-5">
                        <h3 class="heading3 fw-bold mb-3 pb-3">Masuk</h3>
                        <form style="width: 27rem;">
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="body-text-small form-control form-control-lg" placeholder="Nomor Ponsel atau Email"/>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="body-text-small form-control form-control-lg" placeholder="Password"/>
                            </div>
                            <div class="pt-1 mb-4">
                                <button class="button-primary" type="button"><a href="{{ route('urb') }}">Masuk</a></button>
                            </div>
                            <div class="text-center mb-4">
                                <span class="text-muted">Atau masuk dengan</span>
                                <div class="d-flex justify-content-center mt-4">
                                    <i class="fab fa-facebook-square fa-2x mx-2"></i>
                                    <i class="fab fa-google fa-2x mx-2"></i>
                                    <i class="fab fa-apple fa-2x mx-2"></i>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <p>Dengan masuk, kamu menyetujui <a href="#" class="text-orange fw-semibold">Syarat & Ketentuan</a> dan <a href="#" class="text-orange fw-semibold">Kebijakan Privasi URB</a>.</p>
                            </div>
                            <div class="text-center mt-5">
                                <p>Belum punya akun? <a href="{{ route('daftar') }}" class="text-orange fw-semibold">Daftar</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</html>
