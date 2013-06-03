<?php /* Smarty version Smarty-3.1.13, created on 2013-05-14 13:48:11
         compiled from ".\Alt68\views\login\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265335192080b995f25-43553385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d1fa67c57e1c4c0b02080f76e48943f3cd40c0' => 
    array (
      0 => '.\\Alt68\\views\\login\\registration.tpl',
      1 => 1368532086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265335192080b995f25-43553385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5192080ba472a9_35365973',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5192080ba472a9_35365973')) {function content_5192080ba472a9_35365973($_smarty_tpl) {?><form class="form-horizontal" action="index.php?controller=login&amp;action=registration" method="post">
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





<?php }} ?>