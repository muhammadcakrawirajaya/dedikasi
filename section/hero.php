<?php
    // Menghubungkan ke file koneksi
    // Query untuk mengambil teks dari database
    $query = "SELECT * FROM hero WHERE id=1";
    $result = mysqli_query($connection, $query);

    // Periksa apakah query berhasil dieksekusi
    if (!$result) {
        die("Query gagal: " . mysqli_error($connection));
    }

    // Lakukan iterasi pada hasil query dan tampilkan di dalam elemen h1
    $row = mysqli_fetch_assoc($result);
    $date = $row['date'];
    $title = $row['title'];
    $subtitle = $row['subtitle'];
    $descripton = $row['description'];
    $guide_link = $row['link_panduan'];
    $sign_link = $row['link_daftar'];
    $video_url = $row['link_video'];

    // Bebaskan hasil query
    mysqli_free_result($result);

    // Tutup koneksi
    mysqli_close($connection);
    ?>

<section class="hero">
      <div class="hero-container">
        <div class="content">
          <p class="date"><?php echo $date;?></p>
          <h1 class="title"><?php echo $title;?></h1>
          <h2 class="subtitle"><?php echo $subtitle;?></h2>
          <p class="description"><?php echo $descripton;?></p>
          <div class="action__btns">
            <a href="<?php echo $guide_link;?>" target="blank"><button class="hire__me">Panduan</button></a>
            <a href="<?php echo $sign_link;?>" target="blank"><button class="portfolio">Daftar Sekarang</button></a>
          </div>
        </div>
        <div class="image">
        <?php echo $video_url;?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#233C63" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,256C480,288,600,288,720,277.3C840,267,960,245,1080,245.3C1200,245,1320,267,1380,277.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>