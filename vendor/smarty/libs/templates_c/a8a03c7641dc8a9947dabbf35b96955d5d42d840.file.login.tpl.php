<?php /* Smarty version Smarty-3.1.13, created on 2013-04-23 12:45:13
         compiled from ".\Alt68\views\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1000851766639849013-48856521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a03c7641dc8a9947dabbf35b96955d5d42d840' => 
    array (
      0 => '.\\Alt68\\views\\login\\login.tpl',
      1 => 1366571876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1000851766639849013-48856521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51766639858830_77220348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51766639858830_77220348')) {function content_51766639858830_77220348($_smarty_tpl) {?>        <form action="login.php" method="post">
            <h1>Bejelentkezés</h1>
            <fieldset>
                <legend>Bejelentkezési adatok:</legend>
                <label>E-mail cím:
                    <input id="email" type="email" placeholder="E-mail cím" required autofocus>
                </label>
                <label>Jelszó:
                    <input name="password" type="password" placeholder="Jelszó" required>               
                </label>
                <input id="login" type="submit" value="Bejelentkezés">
            </fieldset>
        </form><?php }} ?>