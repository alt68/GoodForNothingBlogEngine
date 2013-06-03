<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 20:29:08
         compiled from "C:\xampp\htdocs\GoodForNothingBlogEngine\Alt68\views\elements\crudmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1456251ab36f4baba45-14384380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d93f15b5b1968b6741274d79c83e4619829fb42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\Alt68\\views\\elements\\crudmenu.tpl',
      1 => 1370284135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456251ab36f4baba45-14384380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ab36f4e298e8_64804266',
  'variables' => 
  array (
    'crudmenu' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab36f4e298e8_64804266')) {function content_51ab36f4e298e8_64804266($_smarty_tpl) {?><li class="nav-header">Műveletek</li>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['crudmenu']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <li><a href="index.php?controller=blog&amp;action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
&amp;id=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['c']->value['id'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['item'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
<?php }} ?>