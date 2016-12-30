<?php
/* Smarty version 3.1.30, created on 2016-12-05 10:56:43
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584539db84f0d6_69416959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb841eefb05c4668588c93b309bd833784c02336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\menu.tpl',
      1 => 1480931802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584539db84f0d6_69416959 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo @constant('URL_CSS');?>
/menu.css">
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_JS');?>
/menu.js" type="text/javascript" language="javascript"><?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-folder-close"></span>
                    <p>Shopping</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-calendar"></span>
                    <p>Calendar</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-globe"></span>
                    <p>Network</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-leaf"></span>
                    <p>Ecology</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-time"></span>
                    <p>Statistics</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-bell"></span>
                    <p>Events</p>
                </button>
            </div>
        </div>
    </div>
</div><?php }
}
