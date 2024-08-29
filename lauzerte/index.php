
<?php 
require_once('connect/connexion.php');
?>
<?php $req_activites = $connexion->prepare('SELECT * FROM lauzerte_actus') or die(print_r($connexion->errorInfo()));
$req_activites->execute(array());
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de Lauzerte</title>

    <!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    

    <!--JS LIBRARY-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>

    
   
</head>


<body>



        <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <img src="images/lauzerte_logo.png" alt="">Mairie de Lauzerte
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>
            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link"><span class="actus">ACTUS</span></a>
                    </li>
                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">                      
                        <div class="nav__link dropdown__button">
                            MA MAIRIE <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-team-line"></i>
                                    </div>

                                    <span class="dropdown__title">Municipalité</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Élus</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Personnel de Mairie</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Résultat élections</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-folder-open-line"></i>
                                    </div>

                                    <span class="dropdown__title">Administratif</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Comptes-rendus conseils municipaux</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Délibérations</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Recrutement</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-folder-open-line"></i>
                                    </div>

                                    <span class="dropdown__title">Économique</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Annuaires des commerces, artisans et professionnels</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Annuaire des producteurs locaux du secteur</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Annonces transmission-reprise d'entreprises 82</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Bourse de l'emploi</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-list-check"></i>
                                    </div>

                                    <span class="dropdown__title">Autres</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Environnement</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Le Petit Lauzertin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            DÉCOUVRIR <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-image-line"></i>
                                    </div>

                                    <span class="dropdown__title">Présentation</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Histoire</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Photos</a>
                                        </li>
                                        <li>
                                            <a href="https://enterview.fr/tarnetgaronne/tour.html?startscene=07" target="_blank" class="dropdown__link">Visite virtuelle</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-map-pin-line"></i>
                                    </div>

                                    <span class="dropdown__title">Tourisme</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Hébergements</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Activités</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Terroir & gastronomie</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Aux alentours</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Office de tourisme, Quercy Sud Ouest</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-open-arm-line"></i>
                                    </div>

                                    <span class="dropdown__title">Animations</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Temps fort de l'année</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Marchés hebdomadaires</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Agenda</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item dropdown__item--highlighted">                        
                        <div class="nav__link dropdown__button">
                            VIVRE ICI <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-health-book-line"></i>
                                    </div>

                                    <span class="dropdown__title">Aide & besoins</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Centre social CAF</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Santé</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Services publics</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-user-5-line"></i>
                                    </div>

                                    <span class="dropdown__title">Enfance jeunesse</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">École maternelle</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Collège</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Centre aéré</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-group-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Vie associative</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Sport</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Loisirs & cultures</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Social & divers</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-list-check"></i>
                                    </div>

                                    <span class="dropdown__title">Autres</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Urbanisme</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Cimetière</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=============== DROPDOWN 4 ===============-->
                    <li class="dropdown__item dropdown__item--highlighted">                        
                        <div class="nav__link dropdown__button">
                            MES DÉMARCHES <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-passport-line"></i>
                                    </div>

                                    <span class="dropdown__title">Documents</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Demander / renouveler un passeport</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Demander / renouveler une carte d'identité</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-user-5-line"></i>
                                    </div>

                                    <span class="dropdown__title">Mon enfant</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Paiement de la cantine</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Inscription en crèche</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-list-check"></i>
                                    </div>

                                    <span class="dropdown__title">Autres</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">S'inscrire sur la liste électorale</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Ramassage des poubelles</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>  
    </header>

    <!--HERO-->
    <section class="hero">
        <div class="img_hero">
            <img src="images/lauzerte_vue_ciel.webp" alt="Image arrière plan hero">
            <div class="text_hero">
                <h1>Lauzerte</h1>
                <p>Parmi les plus beaux villages de France</p>
            </div>
        </div>   
    </section>

<!--LIENS RAPIDES-->
<section class="links">
    <div class="titre_links">
        <h2>Liens Rapides</h2>
    </div>
    <div class="container_links">
        <div class="each_links">
            <div class="icon_links">
                <a href="#"><i class='bx bxs-school'></i>
            </div>
                <p>École</p>
            </a>
        </div>
        <div class="each_links">
            <div class="icon_links">
                <a href="#"><i class='bx bx-bus-school'></i>
            </div>
                <p>Transport</p>
            </a>
        </div>
        <div class="each_links">
            <div class="icon_links">
                <a href="#"><i class='bx bx-football' ></i>
            </div>
                <p>Sport</p>
            </a>
        </div>
        <div class="each_links">
            <div class="icon_links">
                <a href="#"><i class='bx bx-health'></i>
            </div>
                <p>Santé</p>
            </a>
        </div>
        <div class="each_links">
            <div class="icon_links">
                <a href="#"><i class='bx bxs-contact'></i>
            </div>
                <p>Contact</p>
            </a>
        </div>
    </div>
    
</section>

<!--ACTUALITES CAROUSEL-->
    <section class="carousel-container">
        <div class="titre_actu">
            <h2> Actualités </h2>
            <button class="btn_actu">
                <a href="#">Toutes les actus</a>
            </button>
        </div>
        <div class="swiffy-slider slider-item-show3 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein">
            <ul class="slider-container py-4">

<?php include('actus.php') ; ?>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
        
    </section>
    <



<!--AGENDA-->
<section class="agenda">
    <div class="titre_agenda">
        <h2>Agenda</h2>
    </div>
    <div class="agenda_content">
        <div class="texte_gauche">
            <p>Ici vous retrouverez tous les évènemments dans les jours à venir.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores facilis inventore minima, pariatur repudiandae quam a dicta vero ratione doloremque. Id labore alias eaque ipsa nostrum. Maxime deleniti placeat aliquid!
            </p>
        </div>
        <div class="calendar_container">
            <iframe src="https://calendar.google.com/calendar/embed?height=1080&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FParis&showTitle=1&showDate=1&src=NTFiYjYzZGU3ZDNkZGE2MDU2ZmE4YjFjZWMyNTQ2MDk2ZWQwNGMxODhjNTE0YTA4MGM3NzFkNmNmYjM1MWQxNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%237CB342" class="style_calendar" style="border-width:0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</section>


<!--FOOTER-->

    <div class="footer-clean">
        <footer>
            <div class="trait"></div>
            <div class="container_footer">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Quelque plus</h3>
                        <ul>
                            <li><a href="#">Recrutement</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Plan Du Site</a></li>
                            <li><a href="#">Mentions Légales</a></li>
                        </ul>
                        <div class="logo_footer_2">
                            <a href="#"><img src="images/lauzerte_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Horaires d'ouverture</h3>
                        <ul>
                            <li>Lundi au mercredi :<br>09h-12h / 14h-17h30</li>
                            <li>Fermé le Jeudi</li>
                            <li>Vendredi : <br>09h-12h / 14h-17h30 </li>
                            <li>Samedi : <br>09h-12h<br>(uniquement les 1er samedi du mois)</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contacts</h3>
                        <ul>
                            
                            <li><a href="tel:+563946514">05 63 94 65 14</a></li>
                            <li><a href="#">mairie@lauzerte.fr</a></li>
                            <li><a href="https://maps.app.goo.gl/1uJsWiaNzoePKQAo9" target="_blank">5, Rue de la Mairie, 82110 Lauzerte</a></li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2857.593716464785!2d1.1354945866256625!3d44.25660372423344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ab860a276e705f%3A0x51f98a5757569f41!2sMairie%20de%20Lauzerte!5e0!3m2!1sfr!2sfr!4v1702901217737!5m2!1sfr!2sfr" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="https://www.facebook.com/MairieLauzerte/?locale=fr_FR" target="_blank" ><i class="icon ion-social-facebook"></i></a>
                        <a href="https://www.instagram.com/mairielauzerte/?hl=fr" target="_blank" ><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Commune de Lauzerte © 2023</p>
                        <div class="logo_footer">
                        <a href="https://www.les-plus-beaux-villages-de-france.org/fr/" target="_blank"><img src="images/logo_village_fr.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<script>
AOS.init();
</script>

<script src="js/menu.js"></script>

</body>
</html>