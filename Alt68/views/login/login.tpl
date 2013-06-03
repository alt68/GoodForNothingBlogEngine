<form class="form-horizontal" action="index.php?controller=login&amp;action=login" method="post">
    <fieldset>
        <legend>{$title}</legend>  
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="Email" required autofocus>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="password">Jelszó</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="Jelszó">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" name="rememberme" checked="checked"> Maradjak belépve
              </label>
              <button type="submit" name="login" class="btn">Belépés</button>
            </div>
          </div>
    </fieldset>
</form>







{*
<form action="index.php?controller=login&amp;action=login" method="post">
            <h1>Bejelentkezés</h1>
            <fieldset>
                <legend>Bejelentkezési adatok:</legend>
                <label>E-mail cím:
                    <input name="email" type="email" placeholder="E-mail cím" required autofocus />
                </label>
                <label>Jelszó:
                    <input name="password" type="password" placeholder="Jelszó" required />               
                </label>
                <input type="checkbox" name="rememberme" checked="checked">
                <label for="rememberme">Emlékezz rám</label>

                <input name="login" type="submit" value="Bejelentkezés">
            </fieldset>
        </form>
        *}