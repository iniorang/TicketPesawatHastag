<?php
    include ('database.php');
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

    if($maskapai!=''&&$tglberangkat!=''&&$asal!=''&&$tujuan!=''&&$jamberangkat!=''&&$tgldatang!=''&&$jamdatang!=''&&$harga!=''&&$kursi!=''&&$save="save"){
        $tambah=$database->prepare('INSERT INTO jadwal(`maskapai`,`asal`,`tgl_berangkat`,`jam_berangkat`,`tujuan`,`tgl_datang`,`jam_datang`,`harga`,`kursi`) VALUES (:maskapai,:asal,:tglberangkat,:waktuberangkat,:tujuan,:tgldatang,:waktudatang,:harga,:kursi)');

        $tambah->bindValue(':maskapai',$maskapai,PDO::PARAM_STR);
        $tambah->bindValue(':waktuberangkat',$jamberangkat,PDO::PARAM_STR);
        $tambah->bindValue(':tglberangkat',$tglberangkat,PDO::PARAM_STR);
        $tambah->bindValue(':waktudatang',$jamdatang,PDO::PARAM_STR);
        $tambah->bindValue(':tgldatang',$tgldatang,PDO::PARAM_STR);
        $tambah->bindValue(':asal',$asal,PDO::PARAM_STR);
        $tambah->bindValue(':tujuan',$tujuan,PDO::PARAM_STR);
        $tambah->bindValue(':harga',$harga,PDO::PARAM_INT);
        $tambah->bindValue(':kursi',$kursi,PDO::PARAM_INT);
        try{
            $tambah->execute();
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