<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "icon" href ="logo.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">date de naissance</th>
      <th scope="col">departement</th>
      <th scope="col">salaire</th>
      <th scope="col">fonction</th>
      <th scope="col">photo</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
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
                
            }
  
        $select_data = "SELECT * FROM employe";
        $result = mysqli_query($db,$select_data);
        if($result){
            while($res = mysqli_fetch_assoc($result)){
                
            echo "<tr>
             <td >" .$res['matricule']."</td>
             <td>" .$res['nom']."</td>
             <td>" .$res['prenom']."</td>
             <td>" .$res['date de naissance']."</td>
             <td>" .$res['departement']."</td>
             <td>" .$res['salaire']."</td>
             <td>" .$res['fonction']."</td>
             <td>" .$res['photo']."</td>
             <td><a class='btn btn-primary' href='edit.php?matricule=".$res['matricule']."'>edit</a><a class='btn btn-danger' href='delete.php?matricule=".$res['matricule']."'>delete</a></td>

             
             </tr>";

            } }?>
  </tbody>
</table>
        </body>
</html>
