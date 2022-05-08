<?php
/*signature=> nav_item('/index.php','Accueil');*/
function nav_item(string $lien, string $title): string
{
    $class = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) $class .= ' active';

    $html = <<<AAA
    <li class="$class">
    <a class="nav-link" href=" $lien "> $title </a>
    </li>
AAA;
    return $html;
}

/*<li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/contact.php') : ?>active <?php endif; ?>">
    <a class="nav-link" href="contact.php">contact</a>
    </li>*/
