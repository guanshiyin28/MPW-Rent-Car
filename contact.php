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
    // Menyertakan file navbar_contact.php yang berisi navigasi khusus halaman kontak
    include 'components/navbar_contact.php'; 
    // Menyertakan file content_contact.php yang berisi konten utama halaman kontak
    include 'components/content_contact.php'; 
    // Menyertakan file footer.php yang berisi elemen footer
    include 'components/footer.php'; 
    // Menyertakan file script.php yang berisi script JavaScript
    include 'components/script.php'; 
    ?>
  </body>
</html>