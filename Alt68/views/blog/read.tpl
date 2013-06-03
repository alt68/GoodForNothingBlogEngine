<section id="post">
    <header>
        <h1>{$post.0.headline|escape|default:null}</h1>
        <p><small>Írta:&nbsp;{$post.0.name}&nbsp;&nbsp;Kategória:{$post.0.category|escape|default:null}</small></p>                    
    </header>
    <p>
        {$post.0.body|default:null|escape}
    </p>
    <footer><small>Készült:{$post.0.created|date_format:'Y-m-d H:i:s'|escape|default:null}</small></footer>
</section>

