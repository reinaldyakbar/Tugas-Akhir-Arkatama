<!DOCTYPE html>
<html>

<head>
    <title>Daftar toko</title>
</head>

<body>

    <table border="1px solid black">

        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Alamat</th>
        </tr>

        <?php foreach ($toko as $tk) : ?>

            <tr>
                <td><?php echo $tk['nama']; ?></td>

                <td><?php echo $tk['nim']; ?></td>

                <td><?php echo $tk['alamat']; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>