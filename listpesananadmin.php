<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Daftar Pesanan</title>
    <style type="text/css">
    .jumbotron{
      background-color: #D2B48C;
      text-align: center;
    }
    body{
      background-color: #D2B48C;
    }

     
      </style>
</head>

<body>

<!----------nav------>
<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: white;">
  <div class="container-fluid">
    <a class="navbar-brand font-Dishonorable Mention" href="#">Wedding Organizer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto text-center">
        <li class="nav-item">
          <a class="nav-link" href="halaman_admin.php" >Kembali</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!----------nav------>



    <div class="jumbotron text-white ">
    <div class="container">
    <h1 class="display-6"><center> DATA PEMESANAN</center></h1>
    </div>
    </div>
    <div class="container"  >
    
    <table border ="1">
    <table class="table">
    <table class="table table-striped table-bordered table-light">
    <tr>
      <th scope="col">ID PESANAN</th>
      <th scope="col">NAMA PELANGGAN</th>
      <th scope="col">TEMA</th>
      <th scope="col">JUMLAH TAMU</th>
      <th scope="col">TANGGAL RESEPSI</th>
      <th scope="col">NO TLP</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">HARGA</th>
      <th scope="col">STATUS</th>
      <th scope="col">AKSI</th>

    </tr>
  </thead>
  <tbody>
    <?php
        include 'koneksi.php';
        include "function.php";
        $data=mysqli_query($koneksi, "SELECT * FROM datapesanan INNER JOIN paket on datapesanan.id_paket = paket.id_paket INNER JOIN user on datapesanan.id_user = user.id_user") or die(mysqli_error($koneksi));
        foreach($data as $baris){ ?>
        <tr>
            
                <td style="background-color:#DCDCDC"><?php echo $baris['id_pesanan'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['nama_lengkap'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['keterangan'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['jumlah_tamu'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['tgl_resepsi'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['no_telpon'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['alamat'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo rupiah ($baris['harga'])?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['status'] ?></td>
            

            <td>
                <a href="updatepemesanan.php?id_pesanan=<?php echo $baris['id_pesanan']?>" 
                class="btn btn-info"><i class="bi bi-pencil-square"></i> Update</a><br><br>
                <a href="deletedatapesanan.php?id_pesanan=<?php echo $baris['id_pesanan']?>"
                class="btn btn-info"><i class="bi bi-trash"></i> Delete</a>
            </td>
        </tr>
    <?php } ?>
  </tbody>
  </table>
  </table>
</div>










<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
