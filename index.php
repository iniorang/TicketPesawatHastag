
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' href="plugin/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel='stylesheet' href="style.css">
    <script src='main.js'></script>
    <!--Perlu internet biar tampilanya benar (Ini pake bootstrap)-->
</head>
<body>
<!--Navbar-->
<nav class="navbar" style="background-color:#0f7fff;">
    <div class="container">
        <h2>Hi</h2>
    </div>
</nav>
<!--Slideshow/Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="asset/example.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/example.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/example.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <h1 class="mt-4 display-4">List Perjalanan</h1>
    <hr id="divider py-1 bg-dark">
</div>
<?php
    include('database.php');
    $show=$database->prepare('SELECT * FROM jadwal');
    $show->execute();
    $data=$show->fetchAll(PDO::FETCH_ASSOC);
?>
<?php 
foreach($data as $jadwal):
?>
<div class="container">
    <div class="row d-flex py-lg-1">
        <div class="card1">
            <h2 id="nama-maskapai"><?=$jadwal['maskapai']?></h2>
            <div class="container" id="bar">
                <div class="row">
                    <table>
                        <tr>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Waktu & Tanggal Berangkat</th>
                            <th>Waktu & Tanggal Datang</th>
                        </tr>
                        <tbody>
                            <td><?=$jadwal['asal']?></td>
                            <td><?=$jadwal['tujuan']?></td>
                            <td><?=$jadwal['berangkat']?><br><?=$jadwal['jberangkat']?></td>
                            <td><?=$jadwal['datang']?><br><?=$jadwal['jdatang']?></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
</body>
<!--Footer-->
<footer class="footer mt-5" style="background-color:#0f7fff; height: 100px;">
      <div class="container">

      </div>
</footer>
</html>