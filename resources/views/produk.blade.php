<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 18px;
            color: #000;
        }
        .custom-toggler {
            border: 1.5px solid #ddd;
            border-radius: 4px;
            padding: 6px 10px;
            background-color: white;
            cursor: pointer;
        }
        .custom-toggler-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 20px;
            height: 16px;
        }
        .custom-toggler-icon span {
            display: block;
            height: 2px;
            background-color: #000;
            border-radius: 2px;
        }
        .page-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px 40px;
        }
        h2 {
            font-weight: 700;
            font-size: 36px;
            margin-bottom: 20px;
            color: #000;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 8px 20px;
            font-weight: 600;
            border-radius: 6px;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
        .table-container {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background-color: #cfe2ff;
            color: #000;
            font-weight: 600;
            padding: 12px;
            border: 1px solid #b6d4fe;
        }
        .table tbody td {
            padding: 12px;
            background-color: #e7f1ff;
            border: 1px solid #b6d4fe;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center px-4">
            <a class="navbar-brand" href="#">UTS Laravel</a>

            <button class="custom-toggler" type="button">
                <div class="custom-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>

    <!-- Halaman Produk -->
    <div class="page-container">
        <div class="header-section">
            <h2>Halaman Produk</h2>
            <a href="/tambahproduk" class="btn btn-primary">Tambah Produk</a>
        </div>

        <div class="table-container">
            <table class="table table-bordered text-center align-middle">
                <thead>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>