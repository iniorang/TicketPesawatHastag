<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css">
    <script src='main.js'></script>
</head>
<body>
<div class="card-header">
    <h1>Tambah Jadwal</h1>
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                                <label for="">Waktu datang</label>
                                <input type="time" name="waktudatang" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal datang</label>
                                <input type="date" name="datang" class="form-control">
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
                            <div class="form-group mb-3">
                                <button type="submit" name="save" value="save" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('database.php');
    $show=$database->prepare('SELECT * FROM jadwal');
    $show->execute();
    $data=$show->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="mt-5">
    <div class="container ">
    <caption>List Perjalanan</caption>
        <div class="row justify-content-center">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col-1">No</th>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Tgl Keberangkatan</th>
                        <th scope="col">Jam berangkat</th>
                        <th scope="col">Tgl Kedatangan</th>
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
                        <td><?=$list['berangkat']?></td>
                        <td><?=$list['jberangkat']?></td>
                        <td><?=$list['datang']?></td>
                        <td><?=$list['jdatang']?></td>
                        <td>Rp<?=$list['harga']?></td>
                        <td><?=$list['kursi']?></td>
                        <td><button></button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>