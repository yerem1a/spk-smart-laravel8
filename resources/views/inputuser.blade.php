<!DOCTYPE html>
<html>

<head>
    <title>Input Data Penyederhanaan Alternatif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Input Data Penyederhanaan Alternatif</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('inputuser.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="alternatif">Alternatif:</label>
                <input type="text" class="form-control" id="alternatif" name="alternatif" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="jumlah_tanggungan">Jumlah Tanggungan:</label>
                <input type="number" class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            </div>
            <div class="form-group">
                <label for="penghasilan">Penghasilan:</label>
                <input type="number" class="form-control" id="penghasilan" name="penghasilan" required>
            </div>
            <div class="form-group">
                <label for="pengeluaran">Pengeluaran:</label>
                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
