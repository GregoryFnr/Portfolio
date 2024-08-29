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


  <body>

    <!--ACTUALITES CAROUSEL-->
    <section class="carousel-container">
        <div class="titre_actu">
            <h2> Actualités </h2>
            <button class="btn_actu">
                <a href="#">Toutes les actus</a>
            </button>
        </div>
        <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein">
            <ul class="slider-container py-4">
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <div><a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body  p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body  p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="col-10 mx-2">
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="images/<?php echo $lauzerte ['img1_actus'];?>" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body  p-3 p-xl-5">
                            <h3 class="card-title h5"><?php echo $lauzerte ['titre_actus'];?></h3>
                            <p class="card-text"><?php echo $lauzerte ['texte_actus'];?></p>
                            <a href="plus_actus.php?id=<?php echo $lauzerte['id_lauzerte'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </li>
            </ul>
        
            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        
            <div class="slider-indicators">
                <button class="" aria-label="Go to slide"></button>
                <button aria-label="Go to slide" class=""></button>
                <button aria-label="Go to slide" class=""></button>
                <button aria-label="Go to slide" class="active"></button>
                <button aria-label="Go to slide"></button>
            </div>
        </div>
    
        <script src="js/bootstrap.bundle.js"></script>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
