<?php
include('database.php');
$id=@$_GET['id'];
$id=filter_var($id,FILTER_SANITIZE_STRIPPED);

$delet=$database->prepare('DELETE FROM jadwal WHERE id=:id');
$delet->bindValue(':id',$id,PDO::PARAM_INT);
try{
    $delet->execute();
}catch(Exception $error){
    if($error){
        die('Error'.$error->getMessage());
    }
}
header('Location:dashboard.php')
?>