<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 22:48:50
         compiled from ".\Alt68\views\site\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130451aa5b0e99c7c4-99501456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241939f6b15e57ee14209f5a3e46c0e6a539eeb4' => 
    array (
      0 => '.\\Alt68\\views\\site\\show.tpl',
      1 => 1370206117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130451aa5b0e99c7c4-99501456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51aa5b0ecc9c11_05673504',
  'variables' => 
  array (
    'post' => 0,
    'c' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa5b0ecc9c11_05673504')) {function content_51aa5b0ecc9c11_05673504($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><section id="post">
    <div class="page-header">
        <h1><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['headline'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</h1>
        <p><small>Írta: <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['blogger']['name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
 | Kategória: <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['post']->value[0]['category']['name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
 | Készült: <?php echo (($tmp = @htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value[0]['created'],'Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</small></p>                    
    </div>
    <p>
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post']->value[0]['body'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>

    </p>
    
    <div class="footer">
        <small></small>
    </div>
</section>

<section id="comment">
    <div class="well well-large">
        <h3>Hozzászólások</h3>
    </div>

    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['post']->value[0]['assignedComments'])===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <div class="well">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['c']->value['commenter']['name'];?>
 <?php echo (($tmp = @htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['created'],'Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? null : $tmp);?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['c']->value['comment'];?>
</p>
            </div>
        </div>
    </div>
    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <div class="well well-large">
            <p>Még nem volt hozzászólás</p>
        </div>
    <?php } ?>
</section>

<section id="writecomment">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isLogged']->value)===null||$tmp==='' ? false : $tmp)){?>
    <?php echo $_smarty_tpl->getSubTemplate ("../comment/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <div class="well well-large">
        <p>Hozzászóláshoz lépjen be</p>
        <a href='index.php?controller=login&amp;action=login'>Bejelentkezés</a>
    </div>
<?php }?>
</section><?php }} ?>