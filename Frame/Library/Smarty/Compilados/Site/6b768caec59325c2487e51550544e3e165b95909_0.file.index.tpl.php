<?php
/* Smarty version 3.1.30, created on 2016-12-23 23:12:23
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\Site\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585da14777a9b6_62235257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b768caec59325c2487e51550544e3e165b95909' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\Site\\index.tpl',
      1 => 1482531139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../topo.tpl' => 1,
    'file:../menu.tpl' => 1,
  ),
),false)) {
function content_585da14777a9b6_62235257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
    <div id="systemContentDiv">
    </div>
</main>
<?php echo '<script'; ?>
>

$.ajax({
    url: '<?php echo @constant('__SYSTEM_URL');
echo $_smarty_tpl->tpl_vars['className']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['methodName']->value;?>
',
    success: function (response) {
        $('#systemContentDiv').html(response);
    },
    error: function (jqXHR, exception) {
        alert('Algum erro aconteceu!');
    }
});

<?php echo '</script'; ?>
><?php }
}
