<form class="form-horizontal" action="index.php?controller=blog&amp;action=create" method="post" >
    <fieldset>
        <legend>{$title}</legend>   
        <div class="control-group">
            <label class="control-label" for="headline">Cím</label>
            <div class="controls">
                <input class="input-block-level" type="text" id="headline" name="headline" placeholder="Cím" required autofocus>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="body">Szöveg</label>
            <div class="controls">
                <textarea class="input-block-level" name="body" rows="10" required></textarea>
            </div>
        </div>            
      <div class="control-group">
        <div class="controls">
          <button type="submit" name="save" class="btn">Mentés</button>
        </div>
      </div>
    </fieldset>
</form>

    
    
    
