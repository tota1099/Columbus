<?php
/* Smarty version 3.1.30, created on 2016-12-08 00:47:52
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\Login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58489fa81b9413_38618656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa55592f04bdb8407a6c397e2b440b6f6121c39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\Login\\index.tpl',
      1 => 1480931635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../topo.tpl' => 1,
    'file:../menu.tpl' => 1,
  ),
),false)) {
function content_58489fa81b9413_38618656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
