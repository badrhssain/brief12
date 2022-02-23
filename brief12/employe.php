<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand " href="#">GESTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">

    </form>
  </div>
</nav>
        </body>
</html>
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