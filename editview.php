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
    $id=@$_GET['id'];
    $id=filter_var($id,FILTER_SANITIZE_STRIPPED);
    if(isset($id)&&$id!=''){
        $edit=$database->prepare('SELECT * FROM ticket WHERE id=:id');
        $edit->bindValue(':id',$id,PDO::PARAM_INT);
        try{
            $edit->execute();
        }catch(Exception $error){
            if($error){

            }
        }
        $isi=$edit->fetch(PDO::FETCH_ASSOC);
    }
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
                        <form action="edit.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Maskapai</label>
                                <input type="text" name="maskapai" class="form-control" value="<?=@$isi['maskapai']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Waktu Keberangkatan</label>
                                <input type="time" name="waktuberangkat" class="form-control" value="<?=@$isi['jberangkat']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal Keberangkatan</label>
                                <input type="date" name="berangkat" class="form-control" value="<?=@$isi['berangkat']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Asal Tempat</label>
                                <input type="text" name="asal" class="form-control" value="<?=@$isi['asal']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Waktu datang</label>
                                <input type="time" name="waktudatang" class="form-control" value="<?=@$isi['jdatang']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal datang</label>
                                <input type="date" name="datang" class="form-control" value="<?=@$isi['datang']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tempat Tujuan</label>
                                <input type="text" name="tujuan" class="form-control" value="<?=@$isi['tujuan']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control" value="<?=@$isi['harga']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kursi Tersedia</label>
                                <input type="text" name="kursi" class="form-control" value="<?=@$isi['kursi']?>">
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
</body>
</html>