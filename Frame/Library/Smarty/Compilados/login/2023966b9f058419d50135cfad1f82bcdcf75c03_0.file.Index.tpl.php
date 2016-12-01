<?php
/* Smarty version 3.1.30, created on 2016-11-30 00:21:46
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\login\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583e0d8abdd471_51697265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2023966b9f058419d50135cfad1f82bcdcf75c03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\login\\Index.tpl',
      1 => 1480461533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../topo.tpl' => 1,
  ),
),false)) {
function content_583e0d8abdd471_51697265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="elemento">
</div>
<?php echo '<script'; ?>
>

$.ajax({
    url: '<?php echo @constant('__SYSTEM_URL');
echo $_smarty_tpl->tpl_vars['className']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['methodName']->value;?>
',
    success: function (response) {
        $('#elemento').html(response);
    },
    error: function (jqXHR, exception) {
        alert('Algum erro aconteceu!');
    }
});

<?php echo '</script'; ?>
><?php }
}
