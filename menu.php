<?php
if (!function_exists('nav_item')) {
    function nav_item(string $lien, string $title, string $linkclass = ''): string
    {
        $class = $linkclass;
        if ($_SERVER['SCRIPT_NAME'] === $lien) $class .= ' active';

        $html = <<<AAA
    <li class="$class">
    <a class="$class" href=" $lien "> $title </a>
    </li>
AAA;
        return $html;
    }
}
/* require_once 'menu_functions.php' */
/*signature=> nav_item('/index.php','Accueil');*/

?>
<?= nav_item('/index.php', 'Accueil', $class); ?>
<?= nav_item('/contact.php', 'Contact', $class); ?>
<?= nav_item('/jeu.php', 'Jeu', $class); ?>