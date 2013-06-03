<?php /* Smarty version Smarty-3.1.13, created on 2013-04-23 14:24:07
         compiled from ".\Alt68\views\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13450517666384867f7-69359949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6ce3522b32eae6d2802b1e26e4c4487ba0fb24' => 
    array (
      0 => '.\\Alt68\\views\\main.tpl',
      1 => 1366719844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13450517666384867f7-69359949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517666393d4318_59080007',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517666393d4318_59080007')) {function content_517666393d4318_59080007($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Alt68/css/main.css">
        <title>Good For Nothing Blog Engine - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
    </head>
    <body>
        <header class="header"> 
            <h1>Good For Nothing Blog Engine</h1>
        </header>
        <nav class="menu">
            <?php echo $_smarty_tpl->getSubTemplate ("content/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </nav>
        <div class="content-container"> 
            <article class="content left">
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </article>
            <aside class="sidebar left"> 
                <h3>Oldalsáv címe</h3>
                    <p>Oldalsáv tartalma</p>
            </aside>
        </div>
        <div class="clear"></div>
        <footer class="footer">
            <p><small>Készítette:&nbsp;<b><a href="mailto:alt68@freemail.hu">Alt68</a></b></small></p>
        </footer> <!-- page footer -->
    </body>
</html><?php }} ?>