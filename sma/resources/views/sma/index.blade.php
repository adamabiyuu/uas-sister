<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body class="bg-light">
    <main class="container">
        <h1 class="mt-5">Data Sma</h1>
        @csrf
        <!-- Formulir untuk menambah video -->
        <form method="post" action="{{ route('sma.create') }}">
            @csrf
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-3">Nama</th>
                        <th class="col-md-2">Alamat</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1; // Inisialisasi variabel hitung
                    @endphp
                    @foreach($sma as $smas)
                    <tr>
                        <td>{{ $count }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $smas->id }}</td>
                        <td>{{ $smas->nama }}</td>
                        <td>{{ $smas->alamat }}</td>
                        <td>
                            <a href='{{ url("/sma/{$smas->id}/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url("/sma/{$smas->id}") }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @php
                    $count++; // Tingkatkan nilai hitung setiap iterasi
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @if(session('success'))
        <script>
            alert("{{session('success')}}");
        </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>