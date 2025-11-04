<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: 700;
            font-size: 18px;
        }
        .custom-toggler {
            border: 1.5px solid #ccc;
            border-radius: 6px;
            padding: 6px 8px;
            background-color: white;
        }
        .custom-toggler-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 18px;
            height: 14px;
        }
        .custom-toggler-icon span {
            display: block;
            height: 2.5px;
            background-color: #000;
            border-radius: 2px;
        }
        h2 {
            font-weight: 700;
            font-size: 38px;
            margin-top: 15px;
            margin-left: 130px;
        }
        .table {
            width: 80%;
            margin: 20px auto;
        }
        .btn-primary {
            margin-right: 130px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3">
            <a class="navbar-brand" href="#">UTS Laravel</a>

            <button class="custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
                <div class="custom-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>

    <!-- Isi Halaman -->
    <div class="d-flex justify-content-between align-items-center">
        <h2>Halaman Produk</h2>
        <button class="btn btn-primary fw-semibold">Tambah Produk</button>
    </div>

    <table class="table table-bordered table-striped table-hover mt-3 text-center align-middle table-sm">
        <thead class="table-primary">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BRG001</td>
                <td>Pena</td>
                <td>Alat tulis</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>BRG002</td>
                <td>Buku</td>
                <td>Alat tulis</td>
                <td>15000</td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>