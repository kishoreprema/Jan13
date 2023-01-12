<?php
/* Smarty version 3.1.33, created on 2023-01-10 18:11:20
  from '/var/www/html/modules/email_template/themes/default/parameterFaxMail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63bd5cf0f0a118_62846644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a60d1cfff169aa26827cf75854008bc8cd92c46' => 
    array (
      0 => '/var/www/html/modules/email_template/themes/default/parameterFaxMail.tpl',
      1 => 1664271816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd5cf0f0a118_62846644 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
          <input class="button" type="submit" name="submit_apply_change" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
          <?php } else { ?>
          <input class="button" type="submit" name="submit_edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['remite']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['remite']->value['INPUT'];?>
</td>
        <td width="10%" rowspan='3'><?php echo $_smarty_tpl->tpl_vars['content']->value['LABEL'];?>
: </td>
	<td width="30%" rowspan='3'><?php echo $_smarty_tpl->tpl_vars['content']->value['INPUT'];?>
</td>	
      </tr>
      <tr>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['remitente']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['remitente']->value['INPUT'];?>
</td>
     </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['subject']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['subject']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }
}
