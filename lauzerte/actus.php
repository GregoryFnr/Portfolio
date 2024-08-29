<?php 
require_once('connect/connexion.php');
?>
<?php $req_lauzerte = $connexion->prepare('SELECT * FROM lauzerte_actus') or die(print_r($connexion->errorInfo()));
$req_lauzerte->execute(array());

// Récupérez les résultats de la requête dans un tableau associatif
$resultats = $req_lauzerte->fetchAll(PDO::FETCH_ASSOC);

// Parcourez les résultats pour afficher chaque élément dans votre HTML
foreach ($resultats as $lauzerte) {

?>

            <li class="col-10 mx-5">
                <div class="card shadow h-100">
                    <div class="ratio ratio-16x9">
                        <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                    </div>
                    <div class="card-body p-3 p-xl-5">
                        <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                        <p class="card-text"><?php echo $lauzerte ['date_actus'];?></p>
                        <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                        <div><a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php
            }
            ?>
        
  

   