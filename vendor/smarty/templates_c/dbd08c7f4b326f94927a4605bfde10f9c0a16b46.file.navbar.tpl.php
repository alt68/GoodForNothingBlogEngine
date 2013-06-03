<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 12:55:31
         compiled from ".\Alt68\views\items\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26578519228793aa156-99970802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbd08c7f4b326f94927a4605bfde10f9c0a16b46' => 
    array (
      0 => '.\\Alt68\\views\\items\\navbar.tpl',
      1 => 1368615324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26578519228793aa156-99970802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519228793e4e56_20403178',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519228793e4e56_20403178')) {function content_519228793e4e56_20403178($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Good For Nothing Blog Engine</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php echo $_smarty_tpl->getSubTemplate ("items/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<?php }} ?>