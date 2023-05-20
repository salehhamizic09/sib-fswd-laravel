<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1babd9929f.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Data Pengguna</h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <!-- Place your HTML code for data here -->
            @foreach($data_pengguna as $pengguna)
                <tr>
                    <td>{{ $pengguna['id'] }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Detail</button>
                        <a href="{{ route('arkatama.edit', $pengguna['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                    <td>
                        <img src="{{ file_exists(public_path('foto/foto'.$pengguna['id'].'.jpg')) ? asset('foto/foto'.$pengguna['id'].'.jpg') : asset('foto/foto'.$pengguna['id'].'.png') }}" alt="Avatar" class="img-thumbnail" style="width: 50px;">
                    </td>
                    <td>{{ $pengguna['name'] }}</td>
                    <td>{{ $pengguna['email'] }}</td>
                    <td>{{ $pengguna['phone'] }}</td>
                    <td>{{ $pengguna['role'] }}</td>
                </tr>
            @endforeach                
                <!-- Repeat the above HTML code for each row of data -->
            </tbody>
        </table>
        <a href="{{ route('arkatama.create') }}" class="btn btn-primary">Tambah Pengguna</a>
        <a href="" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
