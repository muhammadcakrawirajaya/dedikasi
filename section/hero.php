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
    </section>