<form class="form-horizontal" action="index.php?controller=login&amp;action=registration" method="post">
    <fieldset>
        <legend>Regisztráció</legend>  
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
        <input type="text" id="email" name="email" placeholder="Email" required autofocus>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Jelszó</label>
    <div class="controls">
        <input type="password" id="password" name="password" placeholder="Jelszó" required>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password2">Jelszó megerősítése</label>
    <div class="controls">
        <input type="password" id="password2" name="password2" required>
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="name">Név</label>
    <div class="controls">
        <input type="text" id="name" name="name" placeholder="Név" required>
    </div>
  </div>
    <div class="control-group">
    <div class="controls">
      <button type="submit" name="registration" class="btn">Regisztrálok</button>
    </div>
  </div>
    </fieldset>
</form>





{*
<form action="index.php?controller=login&amp;action=registration" method="post">
            <h1>Regisztráció</h1>
            <fieldset>
                <legend>Regisztrációs adatok:</legend>
                <label>E-mail cím:
                    <input name="email" type="email" placeholder="E-mail cím" required autofocus>
                </label>
                <label>Jelszó:
                    <input name="password" type="password" placeholder="Jelszó" required>               
                </label>
                <label>Jelszó megerősítése:
                    <input name="password2" type="password" placeholder="Jelszó megerősítése" required>               
                </label>
                <label>Név:
                    <input name="name" type="text" placeholder="Név" required>               
                </label>
                <input name="registration" type="submit" value="Regisztráció">
            </fieldset>
        </form>
*}