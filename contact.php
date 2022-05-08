<?php
$title = "Nous contact";
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Africa/casablanca');
// Recuperer l'heure d'ajourd'hui $heure
$heure = (int)($_GET['heure'] ?? date('G'));
// Recuperer les creneaux d'aujourd'hui $creneaux
$jour = (int)($_GET ?? date(date('N') - 1));
$creneaux = CRENEAUX[$jour];
// Recuperer l'etat d'ouverture du magasin 
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
$nav = "contact";
require './header.php'; ?>


<div class="row">
    <div class="col-md-8">
        <h2> Nous conatcter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eum distinctio maiores ipsa! Sapiente cum totam impedit dolore hic, perspiciatis at doloremque ab nulla? Incidunt laudantium delectus ducimus sunt officia.</p>
    </div>
    <div class="col-md-4">
        <h2> HORAIRE D'OUVERTURES</h2>
        <?php if ($ouvert) : ?>
            <div class="alert alert-success">
                Le Magasin sera ouvert
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin sera ferme
            </div>
        <?php endif; ?>
        <form action="" method="GET">
            <div class="form-group">
                <?= select('jour', $jour, JOURS) ?>
            </div>
            <div class="form-group">
                <label> HEURE<input type="number" name="heure" class="form-control" value="<?= $heure ?>"></label>
            </div>
            <button type="submit" class="btn btn-primary">Voir si le magasin est ouvert</button>
        </form>
        <hr>
        <!-- -lundi: De 9h a 14h et de 15h a 18h -->
        <ul>
            <?php foreach (JOURS as $k => $jour) : ?>
                <li><strong><?= $jour ?></strong>:
                    <?= creneaux_html(CRENEAUX[$k]); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php require './footer.php'; ?>