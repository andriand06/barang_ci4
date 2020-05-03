<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $judul;?></title>
    <link href="http://localhost/ci4/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/ci4/assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><?= $judul; ?></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconify bar-icon" data-icon="fa-solid:bars" data-inline="false"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-active">
            <a class="nav-link" href="<?= base_url('Home');?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item nav-active">
            <a class="nav-link" href="<?= base_url('About');?>">About</a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Barang
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url('Barang/index');?>">Data Barang</a>
            <a class="dropdown-item" href="<?= base_url('Barang/upload');?>">Upload Gambar</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
    </div>
  </div>
</nav>
 