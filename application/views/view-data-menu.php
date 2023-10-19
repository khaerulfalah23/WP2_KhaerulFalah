<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Menu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Menu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Menu</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <th>Nama Menu</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <th>Gambar</th>
                <th>:</th>
                <td>
                    <img width="100" src="<?= base_url('assets/img/' . $gambar); ?>"  alt="">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('menu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>