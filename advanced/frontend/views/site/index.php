<?php

/* @var $this yii\web\View */


$this->title = 'My Yii Application';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/logo_new_v02.png" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="img/logo_new_v02.png" alt="Chicago">
        </div>

        <div class="item">
            <img src="img/logo_new_v02.png" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br/>
<br/>


<!-- Slider End -->
<!-- Page Content -->
<!-- <section class="py-5">
  <div class="container">
    <h1>Half Slider by Start Bootstrap</h1>
    <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the
      <code>half-slider.css</code>file.</p>
  </div>
</section> -->

<div class="container-fluid">

    <div class="col-md-4">
        <div class="box box-default">
            <div class="box-heading">Program Studi</div>
            <div class="box-body" style="min-height:300px ;max-height: 300px;overflow-y: scroll;">
                <ul>
                    <li><a href="#">D3 Teknik Informatika</a></li>
                    <li><a href="#">D3 Teknik Komputer</a></li>
                    <li><a href="#">D4 Teknik Informatika</a></li>
                    <li><a href="#">S1 Teknik Informatika</a></li>
                    <li><a href="#">S1 Sistem Informasi</a></li>
                    <li><a href="#">S1 Teknik Elektro</a></li>
                    <li><a href="#">S1 Teknik Bioproses</a></li>
                    <li><a href="#">S1 Manajemen Rekayasa</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box box-default">
            <div class="box-heading">Berita Mahasiswa</div>
            <div class="box-body" style="min-height:300px ;max-height: 300px;overflow-y: scroll;">
                <ul>
                    <li><a href="#">Berita Mahasiswa 1</a></li>
                    <li><a href="#">Berita Mahasiswa 2</a></li>
                    <li><a href="#">Berita Mahasiswa 3</a></li>
                    <li><a href="#">Berita Mahasiswa 4</a></li>
                    <li><a href="#">Berita Mahasiswa 5</a></li>
                    <li><a href="#">Berita Mahasiswa 6</a></li>
                    <li><a href="#">Berita Mahasiswa 7</a></li>
                    <li><a href="#">Berita Mahasiswa 8</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box box-default">
            <div class="box-heading">Pengumuman</div>
            <div class="box-body" style="min-height:300px ;max-height: 300px;overflow-y: scroll;">
                <ul>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                    <li><a href="#">Pengumuman xxx</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
