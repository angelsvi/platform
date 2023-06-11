<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Pesan</title>
    <style>
        body {
            background-color: #2A2F4F;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #C9A7EB;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #9384D1;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #ECC9EE;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Input Pesan</h2>
        <form method="post" action="pesanController\tampil">
            <input type="text" name="pesan" placeholder="Masukkan Pesan">
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>