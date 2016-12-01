<?php
/* Smarty version 3.1.30, created on 2016-11-29 23:33:22
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\login\listarEmpresas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583e2c627ce480_69854258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb26e3ef9999bfc72573952f6b914c795f4b5d5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\login\\listarEmpresas.tpl',
      1 => 1480469598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583e2c627ce480_69854258 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="fileUploadForm" name="fileUploadForm" action="Login/uploadExample" method="post" enctype="multipart/form-data">
      <input type="file" id="file1" name="file1" />
<span onclick="teste()" >Save</span>
</form>

<?php echo '<script'; ?>
>

function teste()
{
     $('#fileUploadForm').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            console.log(percentVal);
        },
        complete: function(response) {
            var responseJson = $.parseJSON(response.responseText);
            alert(responseJson.message);
        }
    }).submit();
}
<?php echo '</script'; ?>
>
<?php }
}
