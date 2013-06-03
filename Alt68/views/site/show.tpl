<section id="post">
    <div class="page-header">
        <h1>{$post.0.headline|escape|default:null}</h1>
        <p><small>Írta: {$post.0.blogger.name|escape|default:null} | Kategória: {$post.0.category.name|escape|default:null} | Készült: {$post.0.created|date_format:'Y-m-d H:i:s'|escape|default:null}</small></p>                    
    </div>
    <p>
        {$post.0.body|default:null|escape}
    </p>
    
    <div class="footer">
        <small></small>
    </div>
</section>

<section id="comment">
    <div class="well well-large">
        <h3>Hozzászólások</h3>
    </div>

    {foreach $post.0.assignedComments|default:null as $c}
    <div class="well">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{$c.commenter.name} {$c.created|date_format:'Y-m-d H:i:s'|escape|default:null}</h4>
                <p>{$c.comment}</p>
            </div>
        </div>
    </div>
    {foreachelse}
        <div class="well well-large">
            <p>Még nem volt hozzászólás</p>
        </div>
    {/foreach}
</section>

<section id="writecomment">
{if $isLogged|default:false}
    {include file="../comment/create.tpl"}
{else}
    <div class="well well-large">
        <p>Hozzászóláshoz lépjen be</p>
        <a href='index.php?controller=login&amp;action=login'>Bejelentkezés</a>
    </div>
{/if}
</section>