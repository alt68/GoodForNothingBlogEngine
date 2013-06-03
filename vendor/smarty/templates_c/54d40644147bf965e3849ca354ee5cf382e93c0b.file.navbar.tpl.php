<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 14:13:40
         compiled from ".\Alt68\views\elements\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2504751ab36f47c6b70-98103049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d40644147bf965e3849ca354ee5cf382e93c0b' => 
    array (
      0 => '.\\Alt68\\views\\elements\\navbar.tpl',
      1 => 1370175203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504751ab36f47c6b70-98103049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ab36f487bf49_22796909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab36f487bf49_22796909')) {function content_51ab36f487bf49_22796909($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top">
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
                    <?php echo $_smarty_tpl->getSubTemplate ("elements/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<?php }} ?>