<?php /* Smarty version Smarty-3.1.13, created on 2013-05-22 13:31:38
         compiled from ".\Alt68\views\items\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3267251922ae03f14f6-81755474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fb2d2e3e5063907b4053193d0806207a24ecec' => 
    array (
      0 => '.\\Alt68\\views\\items\\sidebar.tpl',
      1 => 1369222288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267251922ae03f14f6-81755474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51922ae043af30_20188870',
  'variables' => 
  array (
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51922ae043af30_20188870')) {function content_51922ae043af30_20188870($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['isLogged']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("../items/crudmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>