<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugin/fontawesome/css/all.css" rel="stylesheet">
    <link href="style.css">
    <script src='main.js'></script>
</head>
<body>
<?php
    include('database.php');
    $show=$database->prepare('SELECT * FROM jadwal');
    $show->execute();
    $data=$show->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="card-header">
    <h1>Tambah Jadwal</h1>
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="buat.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Maskapai</label>
                                <input type="text" name="maskapai" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Waktu Keberangkatan</label>
                                <input type="time" name="waktuberangkat" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal Keberangkatan</label>
                                <input type="date" name="berangkat" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Asal Tempat</label>
                                <input type="text" name="asal" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Waktu datang</label>
                                <input type="time" name="waktudatang" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal datang</label>
                                <input type="date" name="datang" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tempat Tujuan</label>
                                <input type="text" name="tujuan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kursi Tersedia</label>
                                <input type="text" name="kursi" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save" value="save" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
    <div class="container ">
    <caption>
    <h2>List Perjalanan</h2>
    </caption>
        <div class="row justify-content-center">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col-1">No</th>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Tgl\Tpt Keberangkatan</th>
                        <th scope="col">Jam berangkat</th>
                        <th scope="col">Tgl\Tjn Kedatangan</th>
                        <th scope="col">Jam Datang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kursi</th>
                        <th scope="col">Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($data as $list):
                    ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['maskapai']?></td>
                        <td><?=$list['berangkat']?><br>(<?=$list['asal']?>)</td>
                        <td><?=$list['jberangkat']?></td>
                        <td><?=$list['datang']?><br>(<?=$list['tujuan']?>)</td>
                        <td><?=$list['jdatang']?></td>
                        <td>Rp<?=$list['harga']?></td>
                        <td><?=$list['kursi']?></td>
                        <td>
                        <a href="delet.php?id=<?=$list['id']?>" class="trash"> <i class="fas fa-trash-alt" style="padding:8px;"></i></a>
                        </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>