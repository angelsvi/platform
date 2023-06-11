<head>

<body>
    <<form action="/asisten/search" method="post">
        <?= csrf_field() ?>
        <label for="search">Search:</label>
        <input type="text" name="key" id="search">
        <input type="submit" name="submit" value="Search">
        </form>
        <?php
        if (!empty($hasil)) {
            echo "<h1>HASIL PENCARIAN</h1>";
            echo "<p>Nama: " . $hasil['nama'] . "</p>";
            echo "<p>Praktikum: " . $hasil['praktikum'] . "</p>";
            echo "<p>IPK: " . $hasil['ipk'] . "</p>";
        }
        ?>

</body>
</head>