<section class="ftco-section bg-light">
      <div class="container">
        <div class="row">

        <?php
        $sql = "SELECT nama_mobil, harga_mobil, gambar_mobil FROM unit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                          <div class="img rounded d-flex align-items-end" style="background-image: url(' . $row["gambar_mobil"] . ')"></div>
                          <div class="text">
                            <h2 class="mb-0"><a href="car-single.php">' . $row["nama_mobil"] . '</a></h2>
                            <div class="d-flex mb-3">
                              <span class="cat">Car Model</span>
                              <p class="price ml-auto">IDR. ' . number_format($row["harga_mobil"]) . ' <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Pesan Sekarang</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
                          </div>
                        </div>
                      </div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>