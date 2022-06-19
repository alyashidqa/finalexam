<?php
include('koneksi.php');

$sql = "SELECT * FROM movies ORDER BY release_year DESC LIMIT 10;";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

?>
<!DOCTYPE html>
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
    <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/a-wrinkle-in-time.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>A Wrinkle In Time</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>After the disappearance of her scientist father, Meg, with her brother and her friend are sent to space to find him.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/artemis-fowl.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ad Astra</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Artemis Fowl, a 12-year-old genius and descendant of a long line of criminal masterminds, soon finds himself in an epic battle against the powerful underground fairies who may be behind his father's disappearance.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/aladdin.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Aladdin</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>In this live-action retelling of 1992 classic, Aladdin, a kind-hearted street urchin, and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/beauty-and-the-beast.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Beauty and The Beast</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Belle, a young woman is taken prisoner by a beast in his castle. Despite her fears, she learns to look beyond the Beast's hideous exterior to realize the kind heart and soul of the true Prince within.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/berhenti-di-kamu.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Berhenti Di Kamu</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Doctor Gia searches for the meaning in life through extraordinary events in the ER where he works.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/broken-hearts.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Broken Hearts</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Olivia's life feels empty after her boyfriend, Jamie disappears. She has a hard time trusting anyone, even when she meets Aryo, Jamie's friend. Problems arise when Jamie finds out Aryo is truly in love with her.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/can-you-ever-forgive-me.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Can You Ever Forgive Me?</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Lee Israel, a best-selling celebrity biographer who finds herself unable to get published because she had fallen out of step with the marketplace, turns her art form to deception, abetted by her loyal friend Jack.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/epic.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Epic</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Mary is transported to a deep forest that is amidst a war between the forces of good and evil. She bands together with a rag-tag group of characters to save both their and her world.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/gifted.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Gifted</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Frank's plans for a normal school life for Mary are foiled when the seven-year-old's mathematical abilities are discovered by Frank's formidable mother Evelyn, whose plans for her granddaughter threaten to separate Frank and Mary.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/gnomeo-juliet.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Gnomeo & Juliet</h5>
                      <div class="container">
                        <button type="button" class="btn btn-warning">Play Now</button>
                      </div>
                      <p>Two garden gnomes, Gnomeo and Juliet, try to find a happy ending to their star-crossed love affair when they are caught up in a feud between neighbours.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    <!-- End of Carousel -->
    </div>

    <?php

    $drama = "SELECT * FROM movies WHERE genre LIKE 'Drama' LIMIT 10;;";
    $hasil = mysqli_query($koneksi, $drama);


    ?>
    <div class="container my-5">
        <h1 class="my-3">Drama</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {

                ?>
                    <div class="swiper-slide">
                        <a href="detail.php?id=<?php echo $data['id']; ?>">
                            <div class="poster" style="background-image:url('<?php echo $data['img']; ?>');">
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php

    $comedy = "SELECT * FROM movies WHERE genre LIKE 'Comedy' LIMIT 10;";
    $hasil = mysqli_query($koneksi, $comedy);


?>
    <div class="container my-5">
        <h1 class="my-3">Comedy</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {

                ?>
                    <div class="swiper-slide">
                        <a href="detail.php?id=<?php echo $data['id']; ?>">
                            <div class="poster" style="background-image:url('<?php echo $data['img']; ?>');">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

  
    <?php

    $action = "SELECT * FROM movies WHERE genre LIKE 'Action' LIMIT 10;";
    $hasil = mysqli_query($koneksi, $action);


?>
    <div class="container my-5">
        <h1 class="my-3">Action</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {

                ?>
                    <div class="swiper-slide">
                        <a href="detail.php?id=<?php echo $data['id']; ?>">
                            <div class="poster" style="background-image:url('<?php echo $data['img']; ?>');">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php

    $family = "SELECT * FROM movies WHERE genre LIKE 'Family' LIMIT 10;";
    $hasil = mysqli_query($koneksi, $family);


?>    <div class="container my-5">
        <h1 class="my-3">Family</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {

                ?>
                    <div class="swiper-slide">
                        <a href="detail.php?id=<?php echo $data['id']; ?>">
                            <div class="poster" style="background-image:url('<?php echo $data['img']; ?>');">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php

$romance = "SELECT * FROM movies WHERE genre LIKE 'Romance' LIMIT 10;";
$hasil = mysqli_query($koneksi, $romance);


?>    <div class="container my-5">
        <h1 class="my-3">Romance</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {

                ?>
                    <div class="swiper-slide">
                        <a href="detail.php?id=<?php echo $data['id']; ?>">
                            <div class="poster" style="background-image:url('<?php echo $data['img']; ?>');">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>