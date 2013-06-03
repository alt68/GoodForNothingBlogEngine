<form class="form-horizontal" action="index.php?controller=blog&amp;action=update&amp;id={$post.0.blogid|escape}" method="post" >
    <fieldset>
        <legend>{$title}</legend>   
        <div class="control-group">
            <label class="control-label" for="headline">Cím</label>
            <div class="controls">
                <input class="input-block-level" type="text" value="{$post.0.headline|escape}" name="headline" required autofocus>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="body">Szöveg</label>
            <div class="controls">
                <textarea class="input-block-level" name="body" rows="10" required>{$post.0.body|escape}</textarea>
            </div>
        </div>            
      <div class="control-group">
        <div class="controls">
          <button type="submit" name="save" class="btn">Mentés</button>
        </div>
      </div>
    </fieldset>
</form>
