<?php require('header.php') ?>
    <div id="banner">
       <video src="assets/video/Wonderful Of Indonesia (WOI) - Gorontalo.mp4" autoplay loop></video>
    </div>
 
    <div class="jumbotron flex-column d-flex align-items-center justify-content-center">
      <img src="assets/image/LOGO PROPINSI GORONTALO.png">
  <h4 class="text-center">Gorontalo Paradise adalah website yang berisi informasi tentang daftar tempat Pariwisata yang ada di provinsi Gorontalo. Website ini dibuat untuk membantu agar para wisatawan bisa mengetahui pariwsata apa saja dan traking historis dari tempat wisata tersebut.</h4>
    </div>
  
 <div class="article-home">
   <div class="flex-md-row flex-sm-column flex-column d-flex align-items-center justify-content-center">
    
    <h2 class="text-center">destinasi wisata</h2>
    <a class="btn btn btn-primary btn-lg" style="color: white" href="destinasi.php" role="button">SELENGKAPNYA</a>  
    
   </div>
   
   <div class="flex-md-row flex-sm-column flex-column d-flex align-items-center justify-content-center">
   <div class="flex-md-row flex-sm-column flex-column d-flex align-items-center justify-content-center flex-wrap">
      
      <?php
            $result = $conn->query("select * from wisata inner join user on user.id_user = wisata.id_user where validasi = 'ya' order by waktu desc limit 10");
            while($data = $result->fetch_object()):
      ?>
      <a href="detail-destinasi.php?d=<?= $data->id_wisata ?>">
        <div class="article-content article-content-article text-center">
            <figure class="figure">
              <img src="assets/image/<?= $data->gambar ?>" class="figure-img img-fluid rounded">
            </figure>
            <h3 class="text-center"><?= $data->judul ?></h3>
            <h6><small><?= $data->waktu ?></small> | <small><?= $data->tampil ?>x Dilihat</small> | <small><?= $data->nama ?></small></h6>
            <p>
              <?= substr($data->deskripsi, null, 255)." <br><strong>Read More...</strong>" ?>
            </p>
          </div>
        </a>
      <?php
            endwhile;
            $result->free_result();
      ?>
    </div>
   </div>
 </div>
 <?php require('footer.php') ?>