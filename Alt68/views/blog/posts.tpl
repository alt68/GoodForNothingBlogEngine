<li class="nav-header">Cikkek</li>
{foreach $posts|default:null as $p}
    <li><a href="index.php?controller=blog&amp;action=read&amp;id={$p.blogid|escape}">{$p.headline|escape}</a></li>
{foreachelse}    
<li>Még nem írt posztot</li>
{/foreach}
