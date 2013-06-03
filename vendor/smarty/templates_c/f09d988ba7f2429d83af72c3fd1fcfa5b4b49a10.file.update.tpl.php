<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 20:31:29
         compiled from ".\Alt68\views\blog\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10260518bff4ad0d7e6-47400321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f09d988ba7f2429d83af72c3fd1fcfa5b4b49a10' => 
    array (
      0 => '.\\Alt68\\views\\blog\\update.tpl',
      1 => 1370284280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10260518bff4ad0d7e6-47400321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518bff4af11570_35079488',
  'variables' => 
  array (
    'post' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518bff4af11570_35079488')) {function content_518bff4af11570_35079488($_smarty_tpl) {?><form class="form-horizontal" action="index.php?controller=blog&amp;action=update&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['blogid'], ENT_QUOTES, 'UTF-8', true);?>
" method="post" >
    <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>   
        <div class="control-group">
            <label class="control-label" for="headline">Cím</label>
            <div class="controls">
                <input class="input-block-level" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['headline'], ENT_QUOTES, 'UTF-8', true);?>
" name="headline" required autofocus>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="body">Szöveg</label>
            <div class="controls">
                <textarea class="input-block-level" name="body" rows="10" required><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['body'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
        </div>            
      <div class="control-group">
        <div class="controls">
          <button type="submit" name="save" class="btn">Mentés</button>
        </div>
      </div>
    </fieldset>
</form>
<?php }} ?>