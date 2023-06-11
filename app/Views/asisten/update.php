<!DOCTYPE html>
<html>

<head>
    <title>Update Asisten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= csrf_meta() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1 align="center">Update Asisten</h1>
    <form method="POST" action="<?= site_url('asisten/update/' . $asisten['id']) ?>">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control" value="<?= $asisten['nim'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?= $asisten['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="praktikum" class="form-label">Praktikum:</label>
            <input type="text" id="praktikum" name="praktikum" class="form-control" value="<?= $asisten['praktikum'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="ipk" class="form-label">IPK:</label>
            <input type="text" id="ipk" name="ipk" class="form-control" value="<?= $asisten['ipk'] ?>" required>
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</body>

</html>