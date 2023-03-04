<?php
    define('_RECIPE_IMG_PATH_', 'uploads/recipes/');
    // creation d'un tableau pour gestion des cards
    $recipes = [
        ['title' => 'Mousse au chocolat','description' => 'Mousse quick example text to build on the card title and make up the bulk of the card\'s content','image' => '1-chocolate-au-mousse.jpg'],
        ['title' => 'Gratin dauphinois','description' => 'Gratin quick example text  on the card title and make up the bulk of the card\'s content','image' => '2-gratin-dauphinois.jpg'],
        ['title' => 'Salade de chèvre','description' => 'Salade quick example text to on the  title and make up the bulk of the card\'s content','image' => '3-salade.jpg'],
    ];

require_once('templates/header.php');

?>


        <!-- first section -->
        
        <section>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo-cuisinea" width="350" height="150" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Cuisinéa - Recettes de cuisine</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- second section  -->

        <section>
            <div class="row">

                <?php foreach ($recipes as $key => $recipe) { ?>
                    <div class="col-md-4 my-2">
                        <div class="card h-100">                       
                            <img src="<?=_RECIPE_IMG_PATH_.$recipe['image'];?>" class="card-img-top h-100" alt="<?=$recipe['title'];?>">
                            <div class="card-body">
                                <h5 class="card-title"><?=$recipe['title'];?></h5>
                                <p class="card-text"><?=$recipe['description'];?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>    
                    </div>
                <?php } ?>

            </div>
        </section>


<?php
require_once('templates/footer.php');
?>
