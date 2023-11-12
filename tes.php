<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Praktikum 23/05/29</title>

  <style>
    tr>th>a {
      color: black !important;
      text-decoration: none !important;
    }

    .logOut {
      text-decoration: none !important;
      color: green !important;
    }

    .logOut:hover {
      color: white !important;
    }
  </style>
</head>

<body>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../admin/home_admin.php">PcrClean</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../admin/home_admin.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/laporan.php">Laporan</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><a href="../Login.php" class="logOut">Logout</a></button>

          </form>
        </div>
      </div>
    </nav>
    <div class="container-md p-2">
      <div class="d-flex justify-content-end">
        <a href="forminsert.php"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah Data</button></a>
      </div>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>Nama Penjual</th>
            <th>Tanggal Transaksi</th>
            <th>Jenis Sampah/harga @ KG</th>
            <th>Berat</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <tr>

                <td>der</td>
                <td>" . $row["tanggal"] . "</td>
                <td>" . $row["jenis"] . " / Rp." . $row["harga"] . "</td>
                <td>" . $row["berat"] . "</td>
                <td> Rp." . $row["total"] . " </td>
                <td>
                <a ><button type='button'class='btn btn-secondary'>ubah</button></a>
            <a >
            <button type='button' class='btn btn-warning'>Hapus</button>
            </a>
                </td>
                </tr>
        <tfoot>
          <tr>
            <th>Nama Penjual</th>
            <th>Tanggal Transaksi</th>
            <th>Jenis Sampah/harga @ KG</th>
            <th>Berat</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        </tbody>
      </table>
      <div class="container-md p-2"></div>
      
      <?php include "format/tutup.php" ?>