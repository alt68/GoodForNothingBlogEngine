<li><a href="index.php?controller=site&amp;action=home">Kezdőlap</a></li>
{if $isLogged|default:false}
    <li><a href="index.php?controller=blog&amp;action=posts">Blog</a></li>
    <li><a href="index.php?controller=login&amp;action=logout">Kilépés</a></li>                
{else}
    <li><a href="index.php?controller=login&amp;action=login">Belépés</a></li>
    <li><a href="index.php?controller=login&amp;action=registration">Regisztráció</a></li>
{/if}
