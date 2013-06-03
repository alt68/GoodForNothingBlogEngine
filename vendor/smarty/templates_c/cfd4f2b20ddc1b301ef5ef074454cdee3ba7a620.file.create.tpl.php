<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 17:11:10
         compiled from "C:\xampp\htdocs\GoodForNothingBlogEngine\Alt68\views\comment\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2815051ab608ea628f1-39622597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd4f2b20ddc1b301ef5ef074454cdee3ba7a620' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\Alt68\\views\\comment\\create.tpl',
      1 => 1370185738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2815051ab608ea628f1-39622597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ab608eab8544_25286104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab608eab8544_25286104')) {function content_51ab608eab8544_25286104($_smarty_tpl) {?><form action="index.php?controller=comment&amp;action=create&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['id'], ENT_QUOTES, 'UTF-8', true);?>
" method="post" >
    <fieldset>
        <legend>Új hozzászólás</legend>   
        <textarea class="input-block-level" name="comment" rows="10" required></textarea>
        <div class="control-group">
            <div class="controls">
              <button type="submit" name="send" class="btn">Küldés</button>
            </div>
        </div>
    </fieldset>
</form><?php }} ?>