<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/fontawesome/css/all.css" rel="stylesheet">
    <link href="style.css">
    <script src='main.js'></script>
</head>
<?php
    include('database.php');
?>
<body>
<div class="card-header">
    <h1>Edit Jadwal</h1>
        </div>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-body">
                        <?php
                        include('database.php');
                        if(isset($_GET['id'])){
                            $perjalanan = $_GET['id'];

                            $edit = 'SELECT * FROM jadwal WHERE id=:jadwal_id';
                            $state=$database->prepare($edit);
                            $data=[':jadwal_id' => $perjalanan];
                            $state->execute($data);
                            $hasil = $state->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                        <form action="update.php" method="POST">
                            <div class="form-group mb-3"> 
                                <label>Maskapai</label>
                                <input type="text" name="maskapai" value="<?=$hasil['maskapai']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Asal</label>
                                <input type="text" name="asal" value="<?=$hasil['asal']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Waktu & Tanggal Keberangkatan</label>
                                <input type="date" name="tgl_berangkat" value="<?=$hasil['tgl_berangkat']?>" class="form-control">
                                <input type="time" name="jam_berangkat" value="<?=$hasil['jam_berangkat']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Tujuan</label>
                                <input type="text" name="tujuan" value="<?=$hasil['tujuan']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Waktu & Tanggal Kedatangan</label>
                                <input type="date" name="tgl_datang" value="<?=$hasil['tgl_datang']?>" class="form-control">
                                <input type="time" name="jam_datang" value="<?=$hasil['jam_datang']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Harga</label>
                                <input type="text" name="harga" value="<?=$hasil['harga']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Kursi</label>
                                <input type="text" name="kursi" value="<?=$hasil['kursi']?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save" value="save" class="btn btn-primary">Simpan</button>
                                <input type="hidden" name="id" value="<?$hasil['id']?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>