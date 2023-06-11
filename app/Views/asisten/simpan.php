<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
    <h1 align="center">PENDAFTARAN ASISTEN PRAKTIKUM</h1>
    <br>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="praktikum" class="form-label">PRAKTIKUM:</label>
            <input type="text" name="praktikum" id="praktikum" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ipk" class="form-label">IPK:</label>
            <input type="text" name="ipk" id="ipk" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
    </form>
</body>

</html>