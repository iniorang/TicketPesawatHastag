<?php
    include ('database.php');
    $id=@$_POST['id'];
    $maskapai=@$_POST['maskapai'];
    $tglberangkat=@$_POST['tgl_berangkat'];
    $jamberangkat=@$_POST['jam_berangkat'];
    $tgldatang=@$_POST['tgl_datang'];
    $jamdatang=@$_POST['jam_datang'];
    $harga=@$_POST['harga'];
    $tujuan=@$_POST['tujuan'];
    $asal=@$_POST['asal'];
    $kursi=@$_POST['kursi'];
    $save=@$_POST['save'];

    $id=filter_var($id,FILTER_SANITIZE_STRIPPED);
    $maskapai=filter_var($maskapai,FILTER_SANITIZE_STRIPPED);
    $tglberangkat=filter_var($tglberangkat,FILTER_SANITIZE_STRIPPED);
    $jamberangkat=filter_var($jamberangkat,FILTER_SANITIZE_STRIPPED);
    $tgldatang=filter_var($tgldatang,FILTER_SANITIZE_STRIPPED);
    $jamdatang=filter_var($jamdatang,FILTER_SANITIZE_STRIPPED);
    $harga=filter_var($harga,FILTER_SANITIZE_STRIPPED);
    $asal=filter_var($asal,FILTER_SANITIZE_STRIPPED);
    $tujuan=filter_var($tujuan,FILTER_SANITIZE_STRIPPED);
    $kursi=filter_var($kursi,FILTER_SANITIZE_STRIPPED);
    $save=filter_var($save,FILTER_SANITIZE_STRIPPED);

    $date1=strtotime($tglberangkat);
    $date2=strtotime($tgldatang);

    if($save=="save"){
        $edit=$database->prepare('UPDATE jadwal SET maskapai=:maskapai, asal=:asal, tgl_berangkat=:tglberangkat, jam_berangkat=:waktuberangkat, tujuan=:tujuan, tgl_datang=:tgldatang, jam_datang=:waktudatang, harga=:harga, kursi=:kursi WHERE id=:id');

        $edit->bindValue(':id',$id,PDO::PARAM_INT);
        $edit->bindValue(':maskapai',$maskapai,PDO::PARAM_STR);
        $edit->bindValue(':waktuberangkat',$jamberangkat,PDO::PARAM_STR);
        $edit->bindValue(':tglberangkat',$tglberangkat,PDO::PARAM_STR);
        $edit->bindValue(':waktudatang',$jamdatang,PDO::PARAM_STR);
        $edit->bindValue(':tgldatang',$tgldatang,PDO::PARAM_STR);
        $edit->bindValue(':asal',$asal,PDO::PARAM_STR);
        $edit->bindValue(':tujuan',$tujuan,PDO::PARAM_STR);
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