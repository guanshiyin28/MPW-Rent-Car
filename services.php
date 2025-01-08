<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    // Menyertakan file header.php yang berisi elemen-elemen <head> seperti meta tag, link CSS, dll.
    include 'components/header.php'; 
    ?>
  </head>
  <body>
    <?php 
    // Menyertakan file navbar.php yang berisi navigasi utama
    include 'components/navbar.php'; 
    // Menyertakan file navbar_services.php yang berisi navigasi khusus halaman layanan
    include 'components/navbar_services.php'; 
    // Menyertakan file content_services.php yang berisi konten utama halaman layanan
    include 'components/content_services.php'; 
    // Menyertakan file footer.php yang berisi elemen footer
    include 'components/footer.php'; 
    // Menyertakan file script.php yang berisi script JavaScript
    include 'components/script.php'; 
    ?>
  </body>
</html>
