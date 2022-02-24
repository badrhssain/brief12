<?php
$db= new mysqli("localhost", 'root', '',"brief12");
$matricule = $_GET['matricule'];
            $a = "SELECT * FROM employe WHERE matricule='$matricule'";
            $result = mysqli_query($db, $a);


            $res = mysqli_fetch_assoc($result);
            if(isset($_POST['submit'])){
               
              $nom = $_POST['nom'];
              $prenom = $_POST['prenom'];
              $date = $_POST['date'];
              $département = $_POST['departement'];
              $salaire = $_POST['salaire'];
              $fonction = $_POST['fonction'];

              
              $query = "UPDATE employe SET nom='$nom',prenom='$prenom',
              'date de naissance'='$date',departement='$département',salaire='$salaire',fonction='$fonction'
              WHERE matricule='$matricule'";
            

            if($result){
                header('location:index.php');
            }
            }
          ?>
          <form method="POST">
       

                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value=<?php 
                        echo $res['nom'];?>>
                    </div>

                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom"
                        value=<?php echo $res['prenom'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="DateNaissance" class="form-label">Date Naissance</label>
                        <input type="date" class="form-control" id="datenaissance" name="date" 
                        value=<?php 
                        echo $res['date de naissance'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="Departement" class="form-label">Departement</label>
                        <input type="text" class="form-control" id="departement" name="departement"
                        value=<?php 
                        echo $res['departement'];?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="Salaire" class="form-label">Salaire</label>
                        <input type="number" class="form-control" id="salaire" name="salaire"
                        value=<?php 
                        echo $res['salaire'];?>>
                    </div>

                    <div class="mb-3">
                        <label for="Fonction" class="form-label">Fonction</label>
                        <input type="text" class="form-control" id="fonction" name="fonction"
                        value=<?php 
                        echo $res['fonction'];?>>
                    </div>


                            <div class="mb-3">
                                <label for="Photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
            

                    <button type="submit" name="submit" class="btn btn-primary" style="margin=10px">Submit</button>
    </form>