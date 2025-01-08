<div align=center>

<img src="https://capsule-render.vercel.app/api?type=waving&height=100&color=20:06D001,100:F0F0F0&section=footer&reversal=false&textBg=false&fontAlignY=50&descAlign=48&descAlignY=59"/>

![image](https://github.com/user-attachments/assets/cce2f919-d8f7-4159-94db-fae909ee292d)
<img src="https://capsule-render.vercel.app/api?type=waving&height=100&color=20:06D001,100:F0F0F0&section=header&reversal=false&textBg=false&fontAlignY=50&descAlign=48&descAlignY=59"/>

</div>

# Mpw-Rent-Car Php Website

Repository ini berisi sumber kode dan dokumentasi untuk pengelolaan layanan rental mobil MPW Rent Car. Fitur utama meliputi sistem pemesanan kendaraan, manajemen inventaris mobil, pencatatan transaksi, serta integrasi dengan layanan pembayaran dan lokasi. Cocok untuk mendukung operasional bisnis rental mobil secara efisien dan modern.

<hr><br>

## Purpose of This Repository

Repository ini bertujuan untuk mempermudah pengelolaan layanan rental mobil MPW Rent Car dengan mengelola pemesanan, inventaris, dan transaksi secara efisien. Sistem ini mendukung operasional bisnis dengan mengotomatiskan proses administrasi, sehingga meningkatkan produktivitas. Selain itu, repository ini dirancang untuk memperluas akses pelanggan dengan memberikan kemudahan memesan mobil secara online, serta meningkatkan kualitas layanan melalui pemanfaatan teknologi modern.

<hr><br>

## Demo

<div align=center>


![Untitled-video-Made-with-Clipchamp-_3_](https://github.com/user-attachments/assets/1932ab8b-8624-4e65-9af9-cc27dc59f408)

</div>
<hr><br>

## Steps

1. Install python
2. Install & upgrade pip

```
python -m ensurepip --upgrade
python get-pip.py
python -m pip install --upgrade pip
```

3. Clone this Repository

```
git clone https://github.com/guanshiyin28/E-Commerce-Python-Website.git
```

4. Direct to the directory

```
cd E-Commerce-Python-Website
```

5. Install requirements.txt

```
pip install requirements.txt
```

6. Run with python and see through the localhost

```
python app.py
```

<hr><br>

## Proses Bisnis Proyek

1. **Registrasi Pelanggan**: Pelanggan mendaftar di platform dengan memberikan detail pribadi mereka.
2. **Penelusuran Kendaraan**: Pelanggan menelusuri kendaraan yang tersedia dan memilih yang ingin mereka sewa.
3. **Pemesanan**: Pelanggan memesan kendaraan yang dipilih dengan memberikan tanggal sewa dan melakukan pembayaran.
4. **Pengambilan Kendaraan**: Pelanggan mengambil kendaraan dari lokasi yang ditentukan.
5. **Pengembalian Kendaraan**: Pelanggan mengembalikan kendaraan pada akhir periode sewa.
6. **Pencatatan Transaksi**: Sistem mencatat semua transaksi dan memperbarui inventaris.

<hr><br>

## Langkah-langkah Membuat Form dengan Fungsi CRUD

1. **Buat Formulir**:

   - Desain formulir HTML dengan bidang untuk input data.
   - Contoh:

   ```html
   <form action="submit.php" method="post">
     <label for="name">Nama:</label>
     <input type="text" id="name" name="name" />
     <input type="submit" value="Submit" />
   </form>
   ```

2. **Buat Database**:

   - Siapkan database untuk menyimpan data formulir.
   - Contoh:

   ```sql
   CREATE TABLE customers (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL
   );
   ```

3. **Buat Skrip PHP untuk Operasi CRUD**:

   - Implementasikan operasi Create, Read, Update, dan Delete dalam PHP.
   - Contoh:

   ```php
   // Create
   if(isset($_POST['name'])) {
       $name = $_POST['name'];
       $sql = "INSERT INTO customers (name) VALUES ('$name')";
       // Eksekusi query SQL
   }

   // Read
   $sql = "SELECT * FROM customers";
   // Eksekusi query SQL dan ambil hasilnya

   // Update
   if(isset($_POST['update_name'])) {
       $id = $_POST['id'];
       $name = $_POST['update_name'];
       $sql = "UPDATE customers SET name='$name' WHERE id=$id";
       // Eksekusi query SQL
   }

   // Delete
   if(isset($_POST['delete_id'])) {
       $id = $_POST['delete_id'];
       $sql = "DELETE FROM customers WHERE id=$id";
       // Eksekusi query SQL
   }
   ```

<hr><br>

## Langkah-langkah Membuat Desain Laporan

1. **Tentukan Kebutuhan Laporan**:

   - Identifikasi metrik kunci dan data yang diperlukan untuk laporan.

2. **Desain Tata Letak Laporan**:

   - Buat tata letak untuk laporan menggunakan HTML dan CSS.
   - Contoh:

   ```html
   <div class="report">
     <h1>Laporan Rental</h1>
     <table>
       <tr>
         <th>Nama Pelanggan</th>
         <th>Kendaraan</th>
         <th>Tanggal Sewa</th>
         <th>Tanggal Pengembalian</th>
       </tr>
       <!-- Baris data akan dimasukkan di sini -->
     </table>
   </div>
   ```

3. **Ambil Data dari Database**:

   - Tulis query SQL untuk mengambil data yang diperlukan.
   - Contoh:

   ```php
   $sql = "SELECT customers.name, vehicles.model, rentals.rental_date, rentals.return_date
           FROM rentals
           JOIN customers ON rentals.customer_id = customers.id
           JOIN vehicles ON rentals.vehicle_id = vehicles.id";
   // Eksekusi query SQL dan ambil hasilnya
   ```

4. **Isi Laporan dengan Data**:
   - Gunakan PHP untuk memasukkan data yang diambil ke dalam tata letak laporan.
   - Contoh:
   ```php
   while($row = $result->fetch_assoc()) {
       echo "<tr>
               <td>{$row['name']}</td>
               <td>{$row['model']}</td>
               <td>{$row['rental_date']}</td>
               <td>{$row['return_date']}</td>
             </tr>";
   }
   ```

<hr><br>

<div align="center">
  <a href="https://www.instagram.com/guanshiyin_/">
     <img src="https://capsule-render.vercel.app/api?type=waving&height=200&color=20:06D001,100:F0F0F0&section=footer&reversal=false&textBg=false&fontAlignY=50&descAlign=48&descAlignY=59"/>
  </a>
</div>
