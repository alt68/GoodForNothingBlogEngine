<?php /* Smarty version Smarty-3.1.13, created on 2013-05-14 13:46:00
         compiled from ".\Alt68\views\items\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29142518a3e79450f94-64641553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb96044f483361436c69ca78324a861db565597' => 
    array (
      0 => '.\\Alt68\\views\\items\\menu.tpl',
      1 => 1368531900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29142518a3e79450f94-64641553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a3e7964c477_88499662',
  'variables' => 
  array (
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a3e7964c477_88499662')) {function content_518a3e7964c477_88499662($_smarty_tpl) {?><li><a href="index.php?controller=site&amp;action=home">Kezdőlap</a></li>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isLogged']->value)===null||$tmp==='' ? false : $tmp)){?>
    <li><a href="index.php?controller=blog&amp;action=posts">Blog</a></li>
    <li><a href="index.php?controller=login&amp;action=logout">Kilépés</a></li>                
<?php }else{ ?>
    <li><a href="index.php?controller=login&amp;action=login">Belépés</a></li>
    <li><a href="index.php?controller=login&amp;action=registration">Regisztráció</a></li>
<?php }?>
<?php }} ?>