<form action="index.php?controller=comment&amp;action=create&amp;id={$post.0.id|escape}" method="post" >
    <fieldset>
        <legend>Új hozzászólás</legend>   
        <textarea class="input-block-level" name="comment" rows="10" required></textarea>
        <div class="control-group">
            <div class="controls">
              <button type="submit" name="send" class="btn">Küldés</button>
            </div>
        </div>
    </fieldset>
</form>