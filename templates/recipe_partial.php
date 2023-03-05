<div class="col-md-4 my-2">
    <div class="card h-100">
        <img src="<?= _RECIPE_IMG_PATH_ . $recipe['image']; ?>" class="card-img-top h-100" alt="<?= $recipe['title']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $recipe['title']; ?></h5>
            <p class="card-text"><?= $recipe['description']; ?></p>
            <a href="recette.php?id=<?= $key; ?>" class="btn btn-primary">Voir la recette</a>
        </div>
    </div>
</div>