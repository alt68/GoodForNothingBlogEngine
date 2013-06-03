<?php /* Smarty version Smarty-3.1.13, created on 2013-05-12 21:52:16
         compiled from ".\Alt68\views\items\crudmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836518a3e796fa027-75942603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2be62a16c86bce83973c921c2dff8962c6ec6bb' => 
    array (
      0 => '.\\Alt68\\views\\items\\crudmenu.tpl',
      1 => 1368388331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836518a3e796fa027-75942603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a3e798a79a6_71769401',
  'variables' => 
  array (
    'crudmenu' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a3e798a79a6_71769401')) {function content_518a3e798a79a6_71769401($_smarty_tpl) {?><h3>Műveletek</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['crudmenu']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <li><a href="index.php?controller=blog&amp;action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['item'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
</ul><?php }} ?>