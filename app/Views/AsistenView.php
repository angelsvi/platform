<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asisten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= csrf_meta() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Asisten</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/asisten/simpan">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5 bg-primary text-white">
        <h3>PENDAFTARAN ASISTEN PRAKTIKUM</h3>
        <p>Asisten Praktikum mempunyai peran yang sangat penting dalam kegiatan Praktikum di kelas.
            Keberadaannya sangat dibutuhkan oleh dosen pengampu untuk membantu dosen dalam mendampingi
            peserta praktikum dalam melaksanakan percobaan-percobaan yang telah disiapkan oleh dosen
            pengampu. Mahasiswa-mahasiswa sangat didorong untuk dapat menjadi seorang asisten praktikum.
            Selain memberikan pengalaman bekerja bersama dosen, menjadi Asisten Praktikum dapat mengasah
            kepedulian terhadap orang lain yang membutuhkan. Jika Anda terpanggil untuk menjadi Asisten
            Praktikum, silahkan daftarkan diri Anda pada form di bawah ini...</p>
    </div>
    <div class="container mt-3">
        <div class="mb-3">
            <a href="/asisten/simpan" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($List as $l) : ?>
                    <tr>
                        <td><?= $l['nama']; ?></td>
                        <td><?= $l['nim']; ?></td>
                        <td><?= $l['praktikum']; ?></td>
                        <td><?= $l['ipk']; ?></td>
                        <td>
                            <a href="/asisten/update/<?= $l['id']; ?>" class="btn btn-primary">Update</a>
                            <a href="/asisten/delete/<?= $l['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>