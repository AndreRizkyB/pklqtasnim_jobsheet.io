<?php
    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi/koneksi.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM tb_lowongan WHERE id='$id'");
    $result    =mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Qtasnim | Home</title>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <a href="index.php"><img class="logo" src="asset/img/logowo.png"></a>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php"><button class="btn btn-outline-dark me-md-2" style="margin-right:15px;"
                                type="button">HOME</button></a>
                        <a href="jobsheet.php"><button class="btn btn-outline-dark bg-dark"
                                style="margin-right:15px;color:white" type="button">JOBSHEET</button></a>
                        <a href="login/login.php"><button class="btn btn-outline-dark" style="margin-right:15px"
                                type="button">SIGN IN</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- detail pekerjaan -->
    <div class="judul">
        <h4><?php echo $result['pekerjaan']?></h4>
        <p><?php echo $result['jeniskontrak']?></p>
    </div>
    <hr style="margin-left:15px">
    <div class="judul">
        <h4>PERSYARATAN</h4>
        <p><?php echo $result['persyaratanpekerjaan']?></p>
    </div>
    <div class="judul">
        <h4>DESKRIPSI PEKERJAAN</h4>
        <p><?php echo $result['deskripsipekerjaan']?></p>
        <h4>TUNJANGAN DAN LAIN LAIN</h4>
        <ul class="kompensasi">
            <li><?php echo $result['kompensasi']?></li>
        </ul>
        <h4 class="waktu">WAKTU PEREKRUTAN</h4>
        <p class="tanggal">Tanggal Dibuka :<?php echo $result['tanggal_post']?></p>
        <p class="tanggal">Tanggal Ditutup :<?php echo $result['deadline']?></p>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: gray">
                    <h5 class="modal-title" id="exampleModalLongTitle" align="center">Apakah Anda Yakin Untuk Melamar
                        Lowongan Ini?</h5>
                </div>
                <div class="modal-body" align="center">
                    Jika Anda Ingin Melamar,Silahkan Registrasi Atau Login Terlebih Dahulu!
                </div>
                <div class="modal-footer">
                    <form action="login/login.php">
                        <button type="button" class="btn btn-outline-dark bg-secondary float-start" style="margin-right:285px"data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-outline-dark bg-secondary"
                            style="float:right;margin-right:15px;">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-dark"
        style="float:right;margin-right:55px;background-color:gray;color:black;font-weight:bold" data-toggle="modal"
        data-target="#exampleModalLong">lamar</button>
    <a class="btn btn-secondary" style="float:left;margin-left:55px;background-color:gray;color:black;font-weight:bold"
        href="index.php">Kembali</a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>