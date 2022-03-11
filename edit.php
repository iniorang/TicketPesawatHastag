<?php
    include ('database.php');
    $maskapai=@$_POST['maskapai'];
    $berangkat=@$_POST['berangkat'];
    $jamnbrk=@$_POST['waktuberangkat'];
    $datang=@$_POST['datang'];
    $jamdtn=@$_POST['waktudatang'];
    $harga=@$_POST['harga'];
    $tujuan=@$_POST['tujuan'];
    $asal=@$_POST['asal'];
    $kursi=@$_POST['kursi'];
    $save=@$_POST['save'];
    $id=@$_POST['id'];

    $maskapai=filter_var($maskapai,FILTER_SANITIZE_STRIPPED);
    $berangkat=filter_var($berangkat,FILTER_SANITIZE_STRIPPED);
    $jamnbrk=filter_var($jamnbrk,FILTER_SANITIZE_STRIPPED);
    $datang=filter_var($datang,FILTER_SANITIZE_STRIPPED);
    $jamdtn=filter_var($jamdtn,FILTER_SANITIZE_STRIPPED);
    $harga=filter_var($harga,FILTER_SANITIZE_STRIPPED);
    $asal=filter_var($asal,FILTER_SANITIZE_STRIPPED);
    $tujuan=filter_var($tujuan,FILTER_SANITIZE_STRIPPED);
    $kursi=filter_var($kursi,FILTER_SANITIZE_STRIPPED);
    $save=filter_var($save,FILTER_SANITIZE_STRIPPED);

    $date1=strtotime($berangkat);
    $date2=strtotime($datang);

    if($save=="save"){
        $edit=$database->prepare('UPDATE jadwal SET asal=:asal, tujuan=:tujuan, maskapai=:maskapai, berangkat=:berangkat, jberangkat=:waktuberangkat, datang=:datang, jdatang=:waktudatang, harga=:harga, kursi=:kursi WHERE id=:id');

        $edit->bindValue(':id',$id,PDO::PARAM_INT);
        $edit->bindValue(':maskapai',$maskapai,PDO::PARAM_STR);
        $edit->bindValue(':waktuberangkat',$jamnbrk,PDO::PARAM_STR);
        $edit->bindValue(':berangkat',$berangkat,PDO::PARAM_STR);
        $edit->bindValue(':asal',$asal,PDO::PARAM_STR);
        $edit->bindValue(':tujuan',$tujuan,PDO::PARAM_STR);
        $edit->bindValue(':waktudatang',$jamdtn,PDO::PARAM_STR);
        $edit->bindValue(':datang',$datang,PDO::PARAM_STR);
        $edit->bindValue(':harga',$harga,PDO::PARAM_INT);
        $edit->bindValue(':kursi',$kursi,PDO::PARAM_INT);
        try{
            $edit->execute();
            header("Location:dashboard.php");
        }catch(Exception $error){
            if($error){
                die('Gagal :'.$error->getMessage());
            }
        }
    }else{
        echo('Help');
    }
?>