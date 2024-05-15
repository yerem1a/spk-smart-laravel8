<!DOCTYPE html>
<html>

<head>
    <title>Data Penyederhanaan Alternatif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Penyederhanaan Alternatif</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>Jumlah Tanggungan</th>
                    <th>Status</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Penghasilan</th>
                    <th>Pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->alternatif }}</td>
                        <td>{{ $item->jumlah_tanggungan }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->pendidikan_terakhir }}</td>
                        <td>{{ $item->penghasilan }}</td>
                        <td>{{ $item->pengeluaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
