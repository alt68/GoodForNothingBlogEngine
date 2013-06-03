<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 23:18:31
         compiled from ".\Alt68\views\blog\posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30428518a4a7b0b6aa0-46446957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b93620a4a023a167eb21fc8ba3f0f0f6cda4588' => 
    array (
      0 => '.\\Alt68\\views\\blog\\posts.tpl',
      1 => 1370035105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30428518a4a7b0b6aa0-46446957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a4a7b23cb66_34359983',
  'variables' => 
  array (
    'posts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a4a7b23cb66_34359983')) {function content_518a4a7b23cb66_34359983($_smarty_tpl) {?><li class="nav-header">Cikkek</li>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['posts']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <li><a href="index.php?controller=blog&amp;action=read&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['blogid'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>    
<li>Még nem írt posztot</li>
<?php } ?>
<?php }} ?>