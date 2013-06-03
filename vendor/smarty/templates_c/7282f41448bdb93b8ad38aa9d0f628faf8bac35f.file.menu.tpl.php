<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 14:13:40
         compiled from ".\Alt68\views\elements\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2323651ab36f48bdf41-53434208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7282f41448bdb93b8ad38aa9d0f628faf8bac35f' => 
    array (
      0 => '.\\Alt68\\views\\elements\\menu.tpl',
      1 => 1368531900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2323651ab36f48bdf41-53434208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ab36f4a30167_96497956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab36f4a30167_96497956')) {function content_51ab36f4a30167_96497956($_smarty_tpl) {?><li><a href="index.php?controller=site&amp;action=home">Kezdőlap</a></li>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isLogged']->value)===null||$tmp==='' ? false : $tmp)){?>
    <li><a href="index.php?controller=blog&amp;action=posts">Blog</a></li>
    <li><a href="index.php?controller=login&amp;action=logout">Kilépés</a></li>                
<?php }else{ ?>
    <li><a href="index.php?controller=login&amp;action=login">Belépés</a></li>
    <li><a href="index.php?controller=login&amp;action=registration">Regisztráció</a></li>
<?php }?>
<?php }} ?>