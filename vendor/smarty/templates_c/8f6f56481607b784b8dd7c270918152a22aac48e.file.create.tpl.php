<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 23:05:12
         compiled from ".\Alt68\views\blog\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21858518a3e852b6188-61336508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6f56481607b784b8dd7c270918152a22aac48e' => 
    array (
      0 => '.\\Alt68\\views\\blog\\create.tpl',
      1 => 1370034302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21858518a3e852b6188-61336508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a3e8546aa71_75602047',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a3e8546aa71_75602047')) {function content_518a3e8546aa71_75602047($_smarty_tpl) {?><form class="form-horizontal" action="index.php?controller=blog&amp;action=create" method="post" >
    <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>   
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

    
    
    
<?php }} ?>