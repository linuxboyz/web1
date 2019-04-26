<?php /* Smarty version 2.6.11, created on 2013-06-21 12:52:52
         compiled from modules/Campaigns/RoiDetailView.tpl */ ?>
<!-- BEGIN: main -->

<?php echo $this->_tpl_vars['chartResources']; ?>

<script>SUGAR.loadChart = true;</script>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<form action="index.php" method="post" name="DetailView" id="form">
			<input type="hidden" name="module" value="CampaignLog">
			<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
			<input type="hidden" name="isDuplicate" value=false>
			<input type="hidden" name="action">
			<input type="hidden" name="return_module">
			<input type="hidden" name="return_action">
			<input type="hidden" name="return_id" >
			<input type="hidden" name="campaign_id" value="<?php echo $this->_tpl_vars['ID']; ?>
">
			<input type="hidden" name="mode" value="">
			<input id="deleteTestEntriesButtonId" title="<?php echo $this->_tpl_vars['MOD']['LBL_TRACK_DELETE_BUTTON_TITLE']; ?>
" class="button" onclick="this.form.module.value='Campaigns'; this.form.action.value='Delete';this.form.return_module.value='Campaigns'; this.form.return_action.value='TrackDetailView';this.form.mode.value='Test';return confirm('<?php echo $this->_tpl_vars['MOD']['LBL_TRACK_DELETE_CONFIRM']; ?>
');" type="submit" name="button" value="  <?php echo $this->_tpl_vars['MOD']['LBL_TRACK_DELETE_BUTTON_LABEL']; ?>
  ">
	</td>
	<td align='right'><span style="<?php echo $this->_tpl_vars['DISABLE_LINK']; ?>
" >
		<input type="button" class="button" id="launch_wizard_button" onclick="javascript:window.location='index.php?module=Campaigns&action=WizardHome&record=<?php echo $this->_tpl_vars['ID']; ?>
';" value="<?php echo $this->_tpl_vars['MOD']['LBL_TO_WIZARD_TITLE']; ?>
" />
		<input type="button" class="button" id="view_status_button" onclick="javascript:window.location='index.php?module=Campaigns&action=TrackDetailView&record=<?php echo $this->_tpl_vars['ID']; ?>
';" value="<?php echo $this->_tpl_vars['MOD']['LBL_TRACK_BUTTON_LABEL']; ?>
" /></SPAN><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

		<input type="button" class="button" id="view_details_button" onclick="javascript:window.location='index.php?module=Campaigns&action=DetailView&record=<?php echo $this->_tpl_vars['ID']; ?>
';" value="<?php echo $this->_tpl_vars['MOD']['LBL_TODETAIL_BUTTON_LABEL']; ?>
" />
	</td>
	</form>
	<td align='right'><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>
</td>
</tr>
</table>
<p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['NAME']; ?>
</slot></td>
	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_ASSIGNED_TO']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['ASSIGNED_TO']; ?>
</slot></td>
	</tr><tr>
	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_STATUS']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['STATUS']; ?>
</slot></td>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	</tr><tr>
	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_START_DATE']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['START_DATE']; ?>
</slot></td>
	<td ><slot><?php echo $this->_tpl_vars['APP']['LBL_DATE_MODIFIED']; ?>
&nbsp;</slot></td>
	<td ><slot><?php echo $this->_tpl_vars['DATE_MODIFIED']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['MODIFIED_BY']; ?>
</slot></td>
	</tr><tr>
	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_END_DATE']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['END_DATE']; ?>
</slot></td>
	<td ><slot><?php echo $this->_tpl_vars['APP']['LBL_DATE_ENTERED']; ?>
&nbsp;</slot></td>
	<td ><slot><?php echo $this->_tpl_vars['DATE_ENTERED']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['CREATED_BY']; ?>
</slot></td>
	</tr><tr>
	<td width="20%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_TYPE']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['TYPE']; ?>
</slot></td>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	</tr><tr>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	</tr><tr>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_BUDGET']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['BUDGET']; ?>
</slot></td>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_IMPRESSIONS']; ?>
</slot></td>
	<td width="30%" nowrap><slot><?php echo $this->_tpl_vars['IMPRESSIONS']; ?>
</slot></td>
	</tr><tr>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_EXPECTED_COST']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['EXPECTED_COST']; ?>
</slot></td>
		<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_OPPORTUNITIES_WON']; ?>
</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['OPPORTUNITIES_WON']; ?>
</slot></td>
	</tr><tr>
	</tr><tr>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_ACTUAL_COST']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['ACTUAL_COST']; ?>
</slot></td>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_COST_PER_IMPRESSION']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%" nowrap><slot><?php echo $this->_tpl_vars['COST_PER_IMPRESSION']; ?>
</slot></td>
	</tr><tr>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_EXPECTED_REVENUE']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%" nowrap><slot><?php echo $this->_tpl_vars['EXPECTED_REVENUE']; ?>
</slot></td>
	<td width="20%" nowrap><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_COST_PER_CLICK_THROUGH']; ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)</slot></td>
	<td width="30%"><slot><?php echo $this->_tpl_vars['COST_PER_CLICK_THROUGH']; ?>
</slot></td>
	</tr><tr>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	<td width="20%"><slot>&nbsp;</slot></td>
	<td width="30%"><slot>&nbsp;</slot></td>
	</tr>
<!--
	<tr>
	<td width="20%" valign="top" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_OBJECTIVE']; ?>
</slot></td>
	<td colspan="3"><slot><?php echo $this->_tpl_vars['OBJECTIVE']; ?>
</slot></td>
</tr><tr>
	<td width="20%" valign="top" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_CONTENT']; ?>
</slot></td>
	<td colspan="3"><slot><?php echo $this->_tpl_vars['CONTENT']; ?>
</slot></td>
</tr>
-->
</table>
</p>
<div align=center class="reportChartContainer"><?php echo $this->_tpl_vars['MY_CHART_ROI']; ?>
</div>

<!-- END: main -->