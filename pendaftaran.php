<?php  
	//start the session
	session_start();
	
	include 'connect.php';
	if(isset($_POST['submit'])){
			foreach ($_POST as $key => $val) {
			${$key} = $val;
			$_SESSION[''.$key.''] = $val;
		}
	}
	?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">


    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu menu1 cid-slSNyRB0XA" once="menu" id="menu1-18">


        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7"
                            href="https://mobiri.se">CV Bahagia Abadi&nbsp;</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="index.php">
                                Beranda</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="login.php">
                                Login</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="lowongan.php">
                                Daftar Lowongan</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="datapelamar.php">Daftar Pelamar</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </section>

    <form class="mbr-section form1 cid-slDKM5pxWZ" id="form1-1d" action="upload.php" method="POST">
        <div class="container">
            <br>
            <br>
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                Daftarkan Dirimu!
            </h2>

            <h5 class="align-center">
                Ayo daftarkan dirimu dan bergabunglah bersama kami!
            </h5>
            <br>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input v-model="form.nama" type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <input v-model="form.title_karyawan" type="text" name="pendidikan_terakhir" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input v-model="form.title_karyawan" type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat Rumah</label>
                <textarea rows="3" v-model="form.body_karyawan" type="text" name="alamat" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Nomor Telepon</label>
                <input v-model="form.title_karyawan" type="text" name="no_telepon" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label>Foto CV</label>
                <input type="file" id="myFile" name="filename" class="form-control">
            </div> -->
            <div class="col-md-12 input-group-btn align-center">
                <button type="submit" value="upload" class="btn btn-primary btn-form display-4">Daftar</button>
            </div>
            <br>
        </div>
    </form>

    <section class="footer7 cid-slSNVaAO9W" once="footers" id="footer7-1b">

        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © 2021 - CV Bahagia Abadi
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="display: none;"
        style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/b" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/i"
                style="color:#aaa;"></a> web creator</p>
    </section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>