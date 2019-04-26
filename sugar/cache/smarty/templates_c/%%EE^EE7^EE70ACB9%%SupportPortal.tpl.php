<?php /* Smarty version 2.6.11, created on 2013-06-21 12:26:30
         compiled from modules/Administration/SupportPortal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'modules/Administration/SupportPortal.tpl', 56, false),)), $this); ?>


<?php if ($this->_tpl_vars['helpFileExists']): ?>
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<?php echo $this->_tpl_vars['styleSheet']; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
</head>
<body onLoad='window.focus();'>
<table width='100%'>
<tr>
    <td align='right'>
        <a href='javascript:window.print()'><?php echo $this->_tpl_vars['MOD']['LBL_HELP_PRINT']; ?>
</a> - 
        <a href='mailto:?subject="<?php echo $this->_tpl_vars['MOD']['LBL_SUGARCRM_HELP']; ?>
&body=<?php echo $this->_tpl_vars['currentURL']; ?>
'><?php echo $this->_tpl_vars['MOD']['LBL_HELP_EMAIL']; ?>
</a> - 
        <a href='#' onmousedown="createBookmarkLink('<?php echo $this->_tpl_vars['MOD']['LBL_SUGARCRM_HELP']; ?>
 - <?php echo $this->_tpl_vars['moduleName']; ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['currentURL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
')"><?php echo $this->_tpl_vars['MOD']['LBL_HELP_BOOKMARK']; ?>
</a>
    </td>
</tr>
</table>
<table class='edit view'>
<tr>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['helpPath']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
</tr>
</table>
<?php echo '
<script type="text/javascript" language="JavaScript">
<!--
function createBookmarkLink(title, url){
    if (document.all)
        window.external.AddFavorite(url, title);
    else if (window.sidebar)
        window.sidebar.addPanel(title, url, "")
}
-->
</script>
'; ?>

</body>
</html>	
<?php else: ?>
<IFRAME frameborder="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" SRC="<?php echo $this->_tpl_vars['iframeURL']; ?>
" TITLE="<?php echo $this->_tpl_vars['iframeURL']; ?>
" NAME="SUGARIFRAME" ID="SUGARIFRAME" WIDTH="100%" height="1000"></IFRAME>
<?php endif; ?>