<title>MPW Rent Car</title> <!-- Judul halaman -->
<link rel="icon" href="./assets/images/favicon.png" type="image/png"> <!-- Ikon halaman -->
<meta charset="utf-8" /> <!-- Pengaturan karakter encoding -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <!-- Pengaturan viewport untuk responsivitas -->

<!-- Menghubungkan font dari Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" />

<!-- Menghubungkan berbagai file CSS -->
<link rel="stylesheet" href="./assets/css/open-iconic-bootstrap.min.css" />
<link rel="stylesheet" href="./assets/css/animate.css" />
<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
<link rel="stylesheet" href="./assets/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="./assets/css/magnific-popup.css" />
<link rel="stylesheet" href="./assets/css/aos.css" />
<link rel="stylesheet" href="./assets/css/ionicons.min.css" />
<link rel="stylesheet" href="./assets/css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="./assets/css/jquery.timepicker.css" />
<link rel="stylesheet" href="./assets/css/flaticon.css" />
<link rel="stylesheet" href="./assets/css/icomoon.css" />
<link rel="stylesheet" href="./assets/css/style.css" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Menghubungkan file JavaScript dari CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

<!-- Script untuk mengatur tema -->
<script>
  function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme); // Mengatur atribut tema pada elemen HTML
    localStorage.setItem('theme', theme); // Menyimpan tema yang dipilih di localStorage
  }

  function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'system'; // Mengambil tema yang disimpan atau menggunakan tema sistem
    setTheme(savedTheme); // Mengatur tema yang diambil
  }

  document.addEventListener('DOMContentLoaded', initTheme); // Memanggil fungsi initTheme saat DOM selesai dimuat
</script>