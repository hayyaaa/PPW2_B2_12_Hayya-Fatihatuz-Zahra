<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>id_supplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_supplier }}</td>
            </tr>
        @endforeach
    </tbody>

    </table>

</body>
</html>