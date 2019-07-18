<?php
/* Smarty version 3.1.33, created on 2019-07-18 07:29:11
  from 'C:\laragon\www\Smarty\page1.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d301fc78ffbc7_79565774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c203b3f1f84e82e2de941ca36ba81d466d85b3' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\page1.html.tpl',
      1 => 1563434931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5d301fc78ffbc7_79565774 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SMARTY</title>
  </head>
  <body>
    <h1>Hello world!</h1>
    <h2>Hello wy</h2>


<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (isset($_smarty_tpl->tpl_vars['DATA']->value)) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</div>
    <?php } else { ?>
    <div>toto</div>

    
    <?php }?>
  </body>
</html>
<?php }
}
