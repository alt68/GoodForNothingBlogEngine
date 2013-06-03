<?php /* Smarty version Smarty-3.1.13, created on 2013-06-01 22:21:25
         compiled from ".\Alt68\views\site\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23639518a3e7966dd01-31440373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34f49f1f32505c0148babc4cf83f0fd060efd50' => 
    array (
      0 => '.\\Alt68\\views\\site\\home.tpl',
      1 => 1370118081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23639518a3e7966dd01-31440373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a3e796d5f97_85008389',
  'variables' => 
  array (
    'posts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a3e796d5f97_85008389')) {function content_518a3e796d5f97_85008389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\GoodForNothingBlogEngine\\vendor\\smarty\\libs\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['p']->iteration=0;
 $_smarty_tpl->tpl_vars['p']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->iteration++;
 $_smarty_tpl->tpl_vars['p']->index++;
 $_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->index === 0;
 $_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total;
?>
    <?php if ($_smarty_tpl->tpl_vars['p']->first){?>        
    <div class="hero-unit">
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <p><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['body'], ENT_QUOTES, 'UTF-8', true),500);?>
</p>
        <p><a class="btn btn-primary btn-large" href="index.php?controller=site&amp;action=show&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['blogid'], ENT_QUOTES, 'UTF-8', true);?>
">Tovább &raquo;</a></p>
    </div>
    <?php }else{ ?>

        <?php if ((!($_smarty_tpl->tpl_vars['p']->index % 3))&&(!$_smarty_tpl->tpl_vars['p']->first)){?>
            <div class="row-fluid">
        <?php }?> 
        
            <div class="span4">
                <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                <p><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['body'], ENT_QUOTES, 'UTF-8', true),200);?>
</p>
                <p><a class="btn" href="index.php?controller=site&amp;action=show&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['blogid'], ENT_QUOTES, 'UTF-8', true);?>
">Tovább &raquo;</a></p>
            </div>
        <?php if (((!($_smarty_tpl->tpl_vars['p']->index % 3))&&(!$_smarty_tpl->tpl_vars['p']->first))||($_smarty_tpl->tpl_vars['p']->last)){?>
            </div>
        <?php }?> 

    <?php }?>
          
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
    <div>
        <h2>Még nem írtak cikket</h2>
    </div>
<?php } ?>
</div>

<?php }} ?>