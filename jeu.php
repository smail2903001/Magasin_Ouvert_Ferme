<?php
require 'header.php';
require 'functions.php';
$class = 'nav-link';
$title = 'composer votre galce';
// Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
// Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
// Checkbox 
$supplements = [
    'Pepites de chocolat' => 1,
    'Chantilly' => 0.5
];
$ingredients = [];
$total = 0;
if (isset($_GET['parfum'])) {
    foreach ($_GET['parfum'] as $parfum) {
        if (isset($parfums[$parfum])) {
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
    dump($ingredients);
}

?>

<h1>Composer votre glace</h1>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Votre Glace</h5>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="./jeu.php">
            <h2>Choissiez Votre Parfum</h2>
            <?php foreach ($parfums as $parfum => $value) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('parfum', $parfum, $_GET); ?>
                        <?= $parfum ?> ( <?= $value ?>$ )
                    </label>
                </div>
            <?php endforeach; ?>
            <h2>Choissiez Votre Cornets</h2>
            <?php foreach ($cornets as $cornet => $value) : ?>
                <div class="radio">
                    <label>
                        <?= radio('corent', $cornet, $_GET); ?>
                        <?= $cornet ?> ( <?= $value ?>$ )
                    </label>
                </div>
            <?php endforeach; ?>
            <h2>Choissiez Votre Supplements</h2>
            <?php foreach ($supplements as $supplement => $prix) : ?>
                <div>
                    <label>
                        <?= checkbox('supplements', $supplement, $_GET) ?>
                        <?= $supplement ?> ( <?= $prix ?>)
                    </label>
                </div>
            <?php endforeach;  ?>
            <button type="submit" class="btn btn-primary">Composer votre glace</button>
        </form>
    </div>
</div>