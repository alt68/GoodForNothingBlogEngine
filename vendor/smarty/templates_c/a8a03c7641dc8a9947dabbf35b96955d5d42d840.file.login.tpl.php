<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 13:16:10
         compiled from ".\Alt68\views\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1741451920203cfb998-48947464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a03c7641dc8a9947dabbf35b96955d5d42d840' => 
    array (
      0 => '.\\Alt68\\views\\login\\login.tpl',
      1 => 1368615127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741451920203cfb998-48947464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51920203dec775_19121953',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51920203dec775_19121953')) {function content_51920203dec775_19121953($_smarty_tpl) {?><form class="form-horizontal" action="index.php?controller=login&amp;action=login" method="post">
    <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>  
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







<?php }} ?>