<?php



		//*******METHODE_2//*******
		 try {
		 	$conn = new PDO("mysql:host=localhost;dbname=brief12;port=3306;charset=utf8", 'root', '',);
		 } catch (Exception $e) {
		 	echo 'Erreur de connexion: ' . $e->getMessage();
		 }

		$contenuClient = $conn->query('SELECT * FROM employe');

        if(isset($_POST["submit"])){ //si le button valider cliquer

            if(isset(["nom"], $_POST["prenom"])){
                if($_POST["nom"] != "" && $_POST["prenom"] != ""){
                    //save in BD
                    $insertion = "INSERT INTO employe (nom, prenom) VALUES ($_POST['nom'], $_POST['prenom'])";

                    $execute =  $conn->query('$insertion');
                    if($execute == true){
                        $msgSuccess = "linforamtion est succes";
                    }else{
                        $msgError = "linformayion failed";
                    }
                }
            }
        }
        /*
        echo '<table>';
        echo "<tr>";

        echo '<td>';
        echo "id";
        echo '</td>';

        echo '<td>';
        echo "nom";
        echo '</td>';

        echo '<td>';
        echo "prenom";
        echo '</td>';

        echo '<td>';
        echo "date de naissance";
        echo '</td>';

        echo '<td>';
        echo "departement";
        echo '</td>';

        echo '<td>';
        echo "salaire";
        echo '</td>';

        echo '<td>';
        echo "fonction";
        echo '</td>';

        echo '<td>';
        echo "photo";
        echo '</td>';


        echo "</tr>";
		 		while($ligne = $contenuClient->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['matricule'];
						echo '</td>';

		 				echo '<td>';
						echo $ligne['nom'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['prenom'];
		 				echo '</td>';

                         echo '<td>';
                         echo $ligne['date de naissance'];
                        echo '</td>';

		 				echo '<td>';
		 					echo $ligne['departement'];
						echo '</td>';

                        echo '<td>';
                        echo $ligne['salaire'];
                        echo '</td>';

                        echo '<td>';
                        echo $ligne['fonction'];
                        echo '</td>';

                        echo '<td>';
                        echo $ligne['photo'];
                        echo '</td>';

					echo '</tr>';
  
		 		}

		 		echo '</table>';

        
*/

?>