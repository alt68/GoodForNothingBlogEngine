<?php /* Smarty version Smarty-3.1.13, created on 2013-06-02 14:13:40
         compiled from ".\Alt68\views\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497518a3e790fa413-74024530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6ce3522b32eae6d2802b1e26e4c4487ba0fb24' => 
    array (
      0 => '.\\Alt68\\views\\main.tpl',
      1 => 1370175203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497518a3e790fa413-74024530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a3e7941efd6_22596074',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a3e7941efd6_22596074')) {function content_518a3e7941efd6_22596074($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Good For Nothing Blog Engine - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="Alt68/css/bootstrap.min.css">
            <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
        <link rel="stylesheet" href="Alt68/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="Alt68/css/main.css">

        <script src="Alt68/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <?php echo $_smarty_tpl->getSubTemplate ("elements/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <?php echo $_smarty_tpl->getSubTemplate ("elements/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </ul>
          </div><!--/.well -->
        </div><!--/span-->
                    
 
                <!-- Main hero unit for a primary marketing message or call to action -->
                <div class="span9">

                    <!-- Example row of columns -->
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
            </div>
            <hr>

            <footer>
                <p class="text-center"><small>&copy; <b><a href="mailto:alt68@freemail.hu">Alt68</a></b> 2013</small></p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="Alt68/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="Alt68/js/vendor/bootstrap.min.js"></script>

        <script src="Alt68/js/main.js"></script>

        

    </body>
</html><?php }} ?>