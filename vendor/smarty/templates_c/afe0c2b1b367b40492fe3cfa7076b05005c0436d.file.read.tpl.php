<?php /* Smarty version Smarty-3.1.13, created on 2013-05-23 14:02:58
         compiled from ".\Alt68\views\blog\read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14475518aacb1604f68-25833514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe0c2b1b367b40492fe3cfa7076b05005c0436d' => 
    array (
      0 => '.\\Alt68\\views\\blog\\read.tpl',
      1 => 1369310573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14475518aacb1604f68-25833514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518aacb1716e95_45656130',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518aacb1716e95_45656130')) {function content_518aacb1716e95_45656130($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><section id="post">
    <header>
        <h1><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['headline'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</h1>
        <p><small>Írta:&nbsp;<?php echo $_smarty_tpl->tpl_vars['post']->value[0]['name'];?>
&nbsp;&nbsp;Kategória:<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['category'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</small></p>                    
    </header>
    <p>
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post']->value[0]['body'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>

    </p>
    <footer><small>Készült:<?php echo (($tmp = @htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value[0]['created'],'Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</small></footer>
</section>

<?php }} ?>