<?php include 'koneksi/koneksi.php'; ?>
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
                        <a href="index.php"><button class="btn btn-outline-dark me-md-2" style="margin-right:15px"
                                type="button">HOME</button></a>
                        <a href="jobsheet.php"><button class="btn btn-outline-dark bg-dark"
                                style="margin-right:15px;color:white;" type="button">JOBSHEET</button></a>
                        <a href="login/login.php"><button class="btn btn-outline-dark" style="margin-right:15px"
                                type="button">SIGN IN</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            <h4 align="center">JOBSHEET</h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- paging -->
                    <?php 
				$batas = 5;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
			
				$data = mysqli_query($koneksi,"SELECT * from tb_lowongan");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data = mysqli_query($koneksi,"SELECT * from tb_lowongan limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data)){
					?>
                    <tr>
                        <td>
                            <h4 align="left" style="margin-left:10px;" class="nama_lowongan"> <a style="color:black;"
                                    href="details.php?id=<?=$d['id']?>"><?php echo $d['pekerjaan'];?></a></h4>
                            <h6 align="left" style="margin-left:10px"><?php echo $d['jeniskontrak'];?></h6>
                            <h6 class="deadline" align="left" style="color:red;margin-left:10px">Deadline
                                :&nbsp;<?php echo $d['deadline'];?></h6>
                            <a style="color:gray;" href="details.php?id=<?=$d['id']?>">
                                <h7 style="float:right;margin-right:45px">details</h7>
                            </a>
                        </td>
                    </tr>
                    <?php
				}
				?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                    </li>
                    <?php
				}
				?>
                    <li class="page-item">
                        <a class="page-link"
                            <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer">
            <img class="lgfooter" src="asset/img/logo.png">
            <a href="https://g.page/qtasnim?share"><i class="fal fa-map-marker-alt fa-lg pull-left"
                    style="color:white;margin-top:25px"></i>
                <p class="alamat">Padasuka Ideal Residence <br> Blok.A5 No.11 Bandung. </p><br>
            </a>
            <p class="telpon"><i class="fa fa-phone fa-rotate-90" style="color:white;margin-top:25px"></i> &nbsp +62
                2220529499</p>
            <p class="email"><i class="fa fa-envelope" style="color:white;margin-top:25px"></i> &nbsp +62 2220529499</p>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>