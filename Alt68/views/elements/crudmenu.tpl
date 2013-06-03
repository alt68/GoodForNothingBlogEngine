<li class="nav-header">Műveletek</li>
{foreach $crudmenu|default:null as $c}
    <li><a href="index.php?controller=blog&amp;action={$c.action|escape}&amp;id={$c.id|default:null|escape}">{$c.item|escape}</a></li>
{/foreach}
