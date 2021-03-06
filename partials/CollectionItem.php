<?php 
require __DIR__ . "/../data/database.php";
require __DIR__ . "/../functions/databaseFilters.php";

?>
<div class="c-collection l-container">
    <?php foreach($databaseFilter3 as $album) { ?>
    <div class="c-album">
        <img src="<?= $album["poster"] ?>" :alt="<?= $album["title"] ?>" class="c-album__img">
        <h3 class="c-album__title"><?= $album["title"] ?></h3>
        <p class="c-album__data"><?= $album["author"] ?></p>
        <p class="c-album__data"><?= $album["year"] ?></p>
    </div>
    <?php } ?>
</div>