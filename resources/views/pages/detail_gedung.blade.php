<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Gedung</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('components.layouts.navbar-main')

    <section class="container mt-5">
        <div class="text-center text-white">
            <h1 class="heading1">{{ $building->building_name }}</h1>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $building->rooms->count() }} Ruangan</h4>
            </div>
            <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $building->floor_quantity }} Lantai</h4>
            </div>
            <div class="text-center p-3" style="width: 170px; height: 100px; border: 2px solid #FF7A00; border-radius: 10px;">
                <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $building->building_capacity }} Kapasitas</h4>
            </div>
        </div>
        <div class="mt-5">
            @foreach ($building->rooms as $room)
                <div class="card shadow-sm mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="body-text" style="font-weight: 500;">{{ $room->room_name }}</h5>
                        <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    @include('components.layouts.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
