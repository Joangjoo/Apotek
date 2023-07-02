<?php


include_once("db/db.php");
$result = mysqli_query($conn, "SELECT * FROM obat");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700&display=swap" rel="stylesheet" />
  <!-- Style -->
  <link rel="stylesheet" href="style2.css" />
  <title>Apotek</title>
</head>

<body>
  <!-- Navbar start -->
  <nav class="nav">
    <a href="#" class="kiri"><span>ORA<span class="text">KIT</span></span></a>

    <div class="navbar">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#profil">Profil</a></li>
        <li><a href="#obat">Obat</a></li>
        <li><a href="#">Log out</a></li>
      </ul>
    </div>

    <div class="navbar-kiri">
      <a href="#" id="menu"><i class="ri-menu-line"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Main -->
  <div class="main" id="home">
    <img src="tameng-removebg-preview.png" alt="" />
    <div class="main-content">
      <h1>
        <span>ORA<span class="text">KIT</span></span>
      </h1>
      <p>
        Selamat Datang Di Orakit ( Obat Orang Sakit ) Di sini kalian Bisa
        Belanja obat sepuasnya
      </p>
      <p>dan di orakit adalah tempat obat terlengkap di dunia</p>
      <p>
        Kami memberikan jaminan kualitas terhadap setiap obat yang tersedia di
        Orakit,
      </p>
      <p>dengan mengedepankan standar keamanan dan keefektifan yang tinggi</p>
      <p>
        Kami juga menyediakan obat-obatan yang menggunakan bahan alami sebagai
        alternatif
      </p>
      <p>
        bagi mereka yang mencari pendekatan pengobatan yang lebih organik dan
        alami.
      </p>
    </div>
  </div>
  <!-- Main End-->

  <!-- Main profil -->
  <section id="profil" class="profil">
    <h2>
      <span>ORA<span class="text">KIT</span></span>
    </h2>

    <div class="profil-content">
      <div class="logo-img">
        <img src="pil.png" alt="" />
      </div>
      <div class="content">
        <h3>Apa itu ORAKIT?</h3>
        <p>
          Orakit adalah sebuah perusahaan farmasi inovatif yang bertujuan
          untuk memberikan solusi kesehatan yang terbaik bagi mereka yang
          sedang mengalami kondisi penyakit dan kesakitan. Dengan
          menggabungkan penelitian ilmiah terkini dan teknologi canggih,
          Orakit menghasilkan obat-obatan berkualitas tinggi yang efektif
          dalam merawat berbagai macam keluhan kesehatan Orakit didirikan pada
          tahun 2004 dengan visi menjadi pemimpin dalam industri farmasi,
          mewujudkan misi menyediakan obat-obatan yang inovatif, aman, dan
          terjangkau bagi masyarakat. Dalam perjalanan panjangnya, Orakit
          telah membangun reputasi yang kuat dalam menyediakan solusi
          kesehatan yang dapat diandalkan dan berkualitas tinggi.
        </p>
        <p>
          Melalui upaya penelitian yang berkelanjutan dan kolaborasi dengan
          para ahli kesehatan, Orakit terus mengembangkan portofolio produknya
          untuk mencakup berbagai jenis kondisi medis. Dengan fokus pada
          kualitas, keamanan, dan efektivitas, Orakit berkomitmen untuk
          memberikan perawatan yang terbaik bagi pasien di seluruh dunia
        </p>
      </div>
    </div>
  </section>
  <!-- Main profil end-->

  <!-- Menu -->
  <section id="obat" class="menu">
    <h2>Obat</h2>
    <p>Obat Terlengkap Hanya Ada di Orakit</p>


    <div class="row">

      <?php
      while ($data = mysqli_fetch_assoc($result)) {
        ?>

        <div class="menu-card">
          <img src="<?php echo $data['gambar']; ?>" alt="">
          <h3 class="menu-card-title">
            <?php echo $data['nama']; ?>
          </h3>
          <p class="menu-card-price">
            <?php echo $data['harga']; ?>
          </p>

          <button class="menu-card-button" data-modal-target="myModal<?php echo $data['id']; ?>">Beli Sekarang</button>
        </div>

        <div id="myModal<?php echo $data['id']; ?>" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <form action="action/action_beli.php" method="POST">
              <input type="hidden" name="id_obat" value="<?php echo $data['id']; ?>" />
              <input type="hidden" name="id_pembeli" value="1" />
              <p>
                <?php echo $data['nama']; ?>
              </p>
              <p>
                <?php echo $data['harga']; ?>
              </p>
              <center>Jumlah : <input type="text" name="jumlah" />
                <button type="submit">Beli</button>
              </center>
            </form>
          </div>

        </div>
        <?php
      }
      ?>

    </div>
  </section>
  <!-- Menu end-->

  <!-- Footer -->
  <div class="foot">
    <div class="socialitems">
      <a href=""><i class="ri-facebook-fill"></i></a>
      <a href=""><i class="ri-instagram-line"></i></a>
      <a href=""><i class="ri-twitter-fill"></i></a>
      <a href=""><i class="ri-github-fill"></i></a>
      <a href=""><i class="ri-youtube-fill"></i></a>
    </div>
  </div>



  <!-- The Modal -->

  <!-- Footer End-->
  <script src="script.js"></script>
</body>

</html>