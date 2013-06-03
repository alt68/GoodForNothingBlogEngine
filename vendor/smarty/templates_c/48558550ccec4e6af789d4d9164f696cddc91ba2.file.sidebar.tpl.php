<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 14:13:40
         compiled from ".\Alt68\views\elements\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350151ab36f4a71732-36051351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48558550ccec4e6af789d4d9164f696cddc91ba2' => 
    array (
      0 => '.\\Alt68\\views\\elements\\sidebar.tpl',
      1 => 1370175203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350151ab36f4a71732-36051351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ab36f4b81a99_37469693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab36f4b81a99_37469693')) {function content_51ab36f4b81a99_37469693($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['isLogged']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("../elements/crudmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>