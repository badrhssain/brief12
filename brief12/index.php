<?php

$db= new mysqli("localhost", 'root', '',"brief12");

        if(isset($_POST['submit'])){
           
                $matricule = $_POST["matricule"];
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $datedenaissance = $_POST["date"];
                $departement = $_POST["departement"];
                $salaire = $_POST["salaire"];
                $fonction = $_POST["fonction"];
                $photo = $_POST["photo"];
                $sql = "INSERT INTO employe VALUES ('$matricule','$nom','$prenom','$datedenaissance','$departement','$salaire','$fonction','$photo')";



                $insert = mysqli_query($db,$sql);
                if($insert){
                    echo"inserted";
                }
                else{
                    echo "not inserted";
                }
            }
  
        $select_data = "SELECT * FROM employe";
        $result = mysqli_query($db,$select_data);
        if($result){
            while($res = mysqli_fetch_assoc($result)){
                echo '<table class="table table-striped table-hover">';

            echo "<tr>
             <td>" .$res['matricule']."</td>
             <td>" .$res['nom']."</td>
             <td>" .$res['prenom']."</td>
             <td>" .$res['date de naissance']."</td>
             <td>" .$res['departement']."</td>
             <td>" .$res['salaire']."</td>
             <td>" .$res['fonction']."</td>
             </tr>";
             echo "</table>";
            } }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<div class="input-group">

</div>

        <form class="input-group" action="employe.php" method="POST">

            <input type="text" aria-label="matricule" class="form-control" name="matricule" placeholder="Entrer votre matricola">
            <input  type="text" aria-label="matricule" class="form-control" name="prenom" placeholder="Entrer votre prenom">
            <input type="text" aria-label="matricule" class="form-control" name="nom" placeholder="Entrer votre nom">
            <input  type="date" aria-label="matricule" class="form-control" name="date" placeholder="date">
            <input  type="text" aria-label="matricule" class="form-control" name="departement" placeholder="departement">
            <input  type="number" aria-label="matricule" class="form-control" name="salaire" placeholder="salaire">
            <input  type="text" aria-label="matricule" class="form-control" name="fonction" placeholder="fonction">
            <input  type="file" aria-label="matricule" class="form-control" name="photo" placeholder="photo">

            <button type="submit" name="submit" id="submit">valider</button>
        </form>
</body>
</html>