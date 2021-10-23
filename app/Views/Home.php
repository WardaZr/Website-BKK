<?php
include "master/navbar.php";
?>
<br><br>
<section id="header-carousel" class="mt-5 container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner bg-primary">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>/assets/foto1.jpg" class="d-block w-100" height="500" alt="1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>/assets/foto2.jpg" class="d-block w-100" height="500" alt="2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>/assets/foto1.jpg" class="d-block w-100" height="500" alt="3">
            </div>
        </div>
        <div class="text-white text-center position-absolute top-50 start-50 translate-middle w-100" style="text-shadow: 2px 2px 10px black">
            <p class="fs-4" style="letter-spacing: 10px;">Selamat Datang di Website BKK</p>
            <p class="fw-bold" style="font-size: 70px">SMKN 1 Cilimus</p>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="news" class="container margin-main">
    <h3 class="mb-3">Berita dan Pengumuman</h3>
    <div class="row mb-4">
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
    </div>
    <div class="row mb-4">
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
        <div class="shadow-sm col mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/foto2.jpg" alt="image artikel" class="img-thumbnail w-100">
            <p>Ringkasan Berita bla bla bla bla blaa bla bla blaa</p>
            <a href="">read more...</a>
        </div>
    </div>
</section>

<section id="company" class="container margin-main">
    <h3 class="mb-3">Telah dipercaya oleh</h3>
    <div class="container-fluid p-3 shadow-sm bg-primary">
        <div class="text-center">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" height="80" class="ratio ratio-1x1 w-auto mx-2">
        </div>
    </div>
</section>

<section id="lokerlist" class="container margin-main">
    <h3 class="mb-3">Daftar Lowongan Kerja</h3>
    <div class="row gy-5 mb-4">
        <?php for ($i=0; $i < 3; $i++) { ?>
        <div class="col shadow-sm mx-3 p-3 bg-primary container">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder"><?= $loker[$i]['nama_pt'] ?></span>
            <p class="border-top mt-2 h-25"><?php echo $loker[$i]['deskripsi_job'] ?></p>
            <div class="row align-items-end">
                <a href="" class="col">read more...</a>
                <span class="col"><i class="fas fa-arrow-circle-right float-end"></i></span>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="row mb-4">
        <?php for ($i=3; $i < 6; $i++) { ?>
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder"><?= $loker[$i]['nama_pt'] ?></span>
            <p class="border-top mt-2 h-25"><?php echo $loker[$i]['deskripsi_job'] ?></p>
            <div class="row align-items-end">
                <a href="" class="col">read more...</a>
                <span class="col"><i class="fas fa-arrow-circle-right float-end"></i></span>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- <div class="row mb-4">
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo"class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
        <div class="col shadow-sm mx-3 p-3 bg-primary">
            <img src="<?php echo base_url(); ?>/assets/logo.png" alt="logo" class="img-thumbnail w-25"> 
            <span class="fs-5 fw-bolder">Nama Perusahaan</span>
            <div class="border-top mt-2">
                <p>Deskripsi Singkat Pekerjaan............... bla bla bla bla</p>
                <a href="">read more...</a>
            </div>
        </div>
    </div> -->
    <div class="d-grid gap-2 col-3 mx-auto">
        <button class="btn btn-primary" type="button">Read More</button>
    </div>
</section>

<section id="statistik" class="container margin-main">
    <h3 class="mb-3">Data Sebaran Siswa</h3>
    <div class="shadow-sm p-3 border">
        <h5 class="text-center text-muted mb-3 pb-3 border-bottom">Jumlah siswa yang diterima kerja setiap tahun</h5>
        <table class="w-100 mx-auto">
            <tr class="align-bottom">
                <td id="max-height-bar">
                    <div style="height: 300px"></div>
                </td>
                <td>
                    <div class="bg-success mx-2 p-1 text-end text-center" style="height: <?= 100 ?>px">100</div>
                </td>
                <td>
                    <div class="bg-warning mx-2 p-1 text-end text-center" style="height: <?= 200 ?>px">200</div>
                </td>
                <td>
                    <div class="bg-danger mx-2 p-1 text-end text-center" style="height: <?= 150 ?>px">150</div>
                </td>
                <td>
                    <div class="bg-info mx-2 p-1 text-end text-center" style="height: <?= 250 ?>px">250</div>
                </td>
                <td>
                    <div class="bg-success mx-2 p-1 text-end text-center" style="height: <?= 100 ?>px">100</div>
                </td>
                <td>
                    <div class="bg-warning mx-2 p-1 text-end text-center" style="height: <?= 150 ?>px">100</div>
                </td>
                <td>
                    <div class="bg-danger mx-2 p-1 text-end text-center" style="height: <?= 250 ?>px">250</div>
                </td>
                <td>
                    <div class="bg-info mx-2 p-1 text-end text-center" style="height: <?= 200 ?>px">200</div>
                </td>
                <td>
                    <div class="bg-success mx-2 p-1 text-end text-center" style="height: <?= 150 ?>px">150</div>
                </td>
            </tr>
            <tr class="text-center">
                <th class="text-muted">Tahun</th>
                <td>2020</td>
                <td>2019</td>
                <td>2018</td>
                <td>2017</td>
                <td>2016</td>
                <td>2015</td>
                <td>2014</td>
                <td>2013</td>
                <td>2012</td>
            </tr>
        </table>
    </div>
</section>
<?php
include "master/footer.php"
?>