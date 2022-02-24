<?php
$db= new mysqli("localhost", 'root', '',"brief12");
    $m = $_GET['matricule'];
if(isset($m)){
    $q = "DELETE FROM employe WHERE matricule='$m'";
    $result = mysqli_query($db, $q);
    
    if($result){
        header('location:employe.php');
    }
}
?>