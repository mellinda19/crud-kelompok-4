<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        table thead th {
            background-color: #3D2314 !important;
            color: #ffffff !important;
            text-align: center !important;
            padding: 12px !important;
        }

        table tbody td {
            background-color: #E8F5E9 !important;
            color: #2D402D !important;
            text-align: center !important;
            padding: 10px !important;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Siswa</h2>
            <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm">+ Tambah Siswa</a>
        </div>

        <div class="card shadow-sm border-0 rounded-3 p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tanggal Lahir</th>
                            <th>Keterangan</th>
                            <th>Alamat</th>
                            <th>Dibuat Pada</th>
                            <th>Diubah Pada</th>
                            <th style="white-space: nowrap;">Kelola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $index => $siswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->jurusan }}</td>
                                <td>{{ $siswa->tanggal_lahir }}</td>
                                <td>
                                    <span class="badge bg-success">{{ $siswa->keterangan }}</span>
                                </td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $siswa->updated_at->format('d-m-Y H:i') }}</td>
                                <td style="white-space: nowrap;">
                                    <a href="{{ route('siswa.show', $siswa->id) }}"
                                        class="btn btn-info btn-sm text-white">Detail</a>
                                    <a href="{{ route('siswa.edit', $siswa->id) }}"
                                        class="btn btn-warning btn-sm text-white">Edit</a>
                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>
