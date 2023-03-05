<?php

require_once('templates/header.php');
require_once('lib/recipe.php');


?>


        <!-- first section -->
        
        <section>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <h1>Liste des recettes</h1>
            </div>
        </section>

        <!-- second section  -->

        <section>
            <div class="row">

                <?php foreach ($recipes as $key => $recipe) { 
                    require('templates/recipe_partial.php');
                } ?>

            </div>
        </section>


<?php
require_once('templates/footer.php');
?>
