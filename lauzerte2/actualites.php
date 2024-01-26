


<?php 
require_once('connect/connexion.php');
?>
<?php $req_activites = $connexion->prepare('SELECT * FROM lauzerte_actus') or die(print_r($connexion->errorInfo()));
$req_activites->execute(array());
?>




<!--(
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OUI.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/Rockstar_Games_Logo.png">
  </head>
  )-->




  <body>
    <h1>ACTIVITES</h1>
    <div class="card-group">

    <?php
        while($activites = $req_activites->fetch())
        {
            ?>
        
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $activites ['img1_activites'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $activites ['nom_activites'];?></h5>
    <p class="card-text"><?php echo $activites ['description_activites'];?></p>
    <a href="details_activites.php?id=<?php echo $activites['id_activites'];?>" class="btn btn-primary">Détails Activité</a>
  </div>
</div>
<?php
}
?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
