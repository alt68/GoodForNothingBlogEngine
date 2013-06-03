<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 12:58:37
         compiled from "C:\xampp\htdocs\GoodForNothingBlogEngine\Alt68\views\blog\posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1826551922ae04afd58-45122989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53eb847f96ac5931e0e1a9cbdb75f4cab96dc79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\Alt68\\views\\blog\\posts.tpl',
      1 => 1368615514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826551922ae04afd58-45122989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51922ae0654425_86732730',
  'variables' => 
  array (
    'posts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51922ae0654425_86732730')) {function content_51922ae0654425_86732730($_smarty_tpl) {?><li class="nav-header">Cikkek</li>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['posts']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <li><a href="index.php?controller=blog&amp;action=read&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>    
<li>Még nem írt posztot</li>
<?php } ?>
<?php }} ?>