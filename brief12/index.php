<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARAN</title>
    <link rel = "icon" href ="logo.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <link href="style.css" rel="stylesheet">
<body>
<header>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
<h1>WELCOME TO OUR COMPANY </h1>
</header>
<main>
    <div class="espace"></div>
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
</main>
</body>
</html>