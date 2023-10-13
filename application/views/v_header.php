<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url(); ?>web">Home</a></li>
                    <li><a href="<?= base_url(); ?>web/about">About</a></li>
                    <li><a href="<?= base_url(); ?>web/news">News</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>