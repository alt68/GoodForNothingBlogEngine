{foreach $posts as $p}
    {if $p@first}        
    <div class="hero-unit">
        <h1>{$p.headline|escape}</h1>
        <p>{$p.body|escape|truncate:500}</p>
        <p><a class="btn btn-primary btn-large" href="index.php?controller=site&amp;action=show&amp;id={$p.blogid|escape}">Tovább &raquo;</a></p>
    </div>
    {else}

        {if ($p@index is div by 3) && (!$p@first)}
            <div class="row-fluid">
        {/if} 
        
            <div class="span4">
                <h2>{$p.headline|escape}</h2>
                <p>{$p.body|escape|truncate:200}</p>
                <p><a class="btn" href="index.php?controller=site&amp;action=show&amp;id={$p.blogid|escape}">Tovább &raquo;</a></p>
            </div>
        {if (($p@index is div by 3) && (!$p@first)) || ($p@last)}
            </div>
        {/if} 

    {/if}
          
{foreachelse}
    <div>
        <h2>Még nem írtak cikket</h2>
    </div>
{/foreach}
</div>

