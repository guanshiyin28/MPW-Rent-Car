<!-- Memulai elemen navigasi dengan kelas dan ID tertentu -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Logo dan nama brand -->
    <a class="navbar-brand" href="index.php">MPW <span>RENT CAR</span></a>
    <!-- Tombol untuk toggle navigasi pada tampilan mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>

    <!-- Daftar link navigasi -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <!-- Link ke halaman Beranda -->
        <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
        <!-- Link ke halaman Tentang -->
        <li class="nav-item"><a href="about.php" class="nav-link">Tentang</a></li>
        <!-- Link ke halaman Layanan -->
        <li class="nav-item"><a href="services.php" class="nav-link">Layanan</a></li>
        <!-- Link ke halaman Mobil -->
        <li class="nav-item"><a href="car.php" class="nav-link">Mobil</a></li>
        <!-- Link ke halaman Blog -->
        <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
        <!-- Link ke halaman Kontak -->
        <li class="nav-item"><a href="contact.php" class="nav-link">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Animasi GSAP untuk navbar -->
<script>
  gsap.from(".navbar", { duration: 1, y: -100, opacity: 0, ease: "bounce" });
</script>