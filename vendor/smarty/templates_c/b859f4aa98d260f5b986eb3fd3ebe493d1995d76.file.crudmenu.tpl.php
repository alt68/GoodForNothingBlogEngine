<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 12:55:32
         compiled from "C:\xampp\htdocs\GoodForNothingBlogEngine\Alt68\views\items\crudmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16222519369a4690808-80034657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b859f4aa98d260f5b986eb3fd3ebe493d1995d76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\Alt68\\views\\items\\crudmenu.tpl',
      1 => 1368615324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16222519369a4690808-80034657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'crudmenu' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519369a476eb99_54687789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519369a476eb99_54687789')) {function content_519369a476eb99_54687789($_smarty_tpl) {?><li class="nav-header">Műveletek</li>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['crudmenu']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <li><a href="index.php?controller=blog&amp;action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['item'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
<?php }} ?>