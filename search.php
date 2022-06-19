<?php
include('koneksi.php');

$keyword = $_GET['keyword'];
if ($_GET['keyword'] == 'drama') {
    $sql = "SELECT * FROM `movies` WHERE `age` = '13+'  ;";
} else {
    $sql = "SELECT * FROM `movies` WHERE genres LIKE '%$keyword%' OR `age` = '$keyword' OR `type`= '$keyword' OR title LIKE '%$keyword%' OR `cast` LIKE '%$keyword%'   ;";
}

$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nonton.com</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
            <img src="img/logo.png" width="200" height="60">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Drama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comedy</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Family</a></li>
                  <li><a class="dropdown-item" href="#">Romance</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- End of Navigation bar -->

    <div class="container ">
        <br><br><br><br><br><br><br>
        <h3>Hasil Pencarian : <span class="badge badge-danger"><?= $_GET['keyword'] ?></span> <br>
            <?php
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {

            ?>
                <a href="detail.php?id=<?php echo $data['id']; ?>" class="text-dark">
                    <div class="row mt-3 movie">
                        <div class="col-lg-2">
                            <img src="<?= $data['img']; ?>" class="poster" alt="" srcset="">
                        </div>
                        <div class="col-lg-10">
                            <h1><?= $data['title']; ?></h1>
                            <h6><?= $data['synopsis']; ?><br>
                                <span class="mt-3 badge badge-danger"><?php echo $data['genre']; ?></span>
                            </h6>
                        </div>
                    </div>
                </a>

            <?php } ?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>

</html>