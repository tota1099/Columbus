<?php
/* Smarty version 3.1.30, created on 2016-12-26 02:10:05
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58606ded051833_88735869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ed57b1bd43248b8a499c68b5117bb5045f28e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\menu.tpl',
      1 => 1482714604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58606ded051833_88735869 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuCollapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="menuCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Sobre</a>
                </li>
                <li>
                    <a class="page-scroll" href="#habilidades">Habilidades</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php echo '<script'; ?>
>
    var $doc = $('html, body');
    $('a').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
<?php echo '</script'; ?>
><?php }
}
