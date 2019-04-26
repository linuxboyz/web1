Ext.namespace('K.kreports.DetailView');var snapshotMask=new Ext.LoadMask(Ext.getBody(),{msg:"taking snapshot ... "});var ajaxMask=new Ext.LoadMask(Ext.getBody(),{msg:"loading"});Ext.onReady(function(){Ext.Ajax.timeout=90000;if(document.getElementById('reportoptions').value!='')bI=Ext.JSON.decode(document.getElementById('reportoptions').value);else bI=new Object();K.kreports.DetailView.bl=[{name:'fieldid',mapping:'fieldid'},{name:'sequence',mapping:'sequence'},{name:'name',mapping:'name'},{name:'groupid',mapping:'groupid'},{name:'path',mapping:'path'},{name:'displaypath',mapping:'displaypath'},{name:'operator',mapping:'operator'},{name:'type',mapping:'type'},{name:'value',mapping:'value'},{name:'valuekey',mapping:'valuekey'},{name:'valueto',mapping:'valueto'},{name:'valuetokey',mapping:'valuetokey'},{name:'jointype',mapping:'jointype'},{name:'include',mapping:'include'},{name:'usereditable',mapping:'usereditable'}];Ext.define('K.kreports.DetailView.bj',{extend:'Ext.data.Model',fields:K.kreports.DetailView.bl});K.kreports.DetailView.af=new Ext.data.JsonStore({model:K.kreports.DetailView.bj,paramsAsHash:true,sortInfo:{field:'sequence',direction:'ASC'},listeners:{'add':function(thisItem){this.updatewherefield();},'update':function(thisItem){this.updatewherefield();},'remove':function(thisItem){this.updatewherefield();}},updatewherefield:function(){var aR='[';function addWhereClause(record){if(aR!='[')aR+=',';aR+=Ext.JSON.encode(record.data);};K.kreports.DetailView.af.each(addWhereClause);aR+=']';document.getElementById('dynamicoptions').value=aR;}});K.kreports.DetailView.ae=function(store){var aR='[';function addWhereClause(record){if(aR!='['){aR+=',';}aR+=Ext.JSON.encode(record.data);};K.kreports.DetailView.af.each(addWhereClause);aR+=']';return aR;};K.kreports.DetailView.updatewherefield=function(){var aR='[';function addWhereClause(record){if(aR!='[')aR+=',';aR+=Ext.JSON.encode(record.data);};K.kreports.DetailView.af.each(addWhereClause);aR+=']';document.getElementById('dynamicoptions').value=aR;};if(document.getElementById('dynamicoptions').value!=''){var dynamicoptions;eval("dynamicoptions = "+document.getElementById('dynamicoptions').value);K.kreports.DetailView.af.loadData(dynamicoptions);var hideDynamicOperators=true;if(K.kreports.DetailView.af.findExact('usereditable','yes')!= -1)hideDynamicOperators=false;var hideOnOffSwitch=true;if(K.kreports.DetailView.af.findExact('usereditable','yo1')!= -1||K.kreports.DetailView.af.findExact('usereditable','yo2')!= -1)hideOnOffSwitch=false;var bf=[{header:bi('LBL_FIELDNAME'),readOnly:true,dataIndex:'displaypath',width:150,sortable:true,hidden:true},{id:'name',header:bi('LBL_NAME'),dataIndex:'name',sortable:true,width:150},{id:'onoffswitch',header:bi('LBL_ONOFF_COLUMN'),readOnly:true,dataIndex:'usereditable',width:40,sortable:true,hidden:hideDynamicOperators,renderer:function(value){if(value=='yo1'||value=='yo2')return bi('LBL_ONOFF_'+value.toUpperCase());else return '';},editor:new Ext.form.TextField()},{id:'operator',header:bi('LBL_OPERATOR'),readOnly:true,dataIndex:'operator',width:150,sortable:true,hidden:hideDynamicOperators,renderer:function(value){return bi('LBL_OP_'+value.toUpperCase());},editor:new Ext.form.TextField()},{id:'value',header:bi('LBL_VALUE_FROM'),dataIndex:'value',sortable:true,hidden:false,width:150,editor:new Ext.form.TextField()},{id:'valueto',header:bi('LBL_VALUE_TO'),dataIndex:'valueto',sortable:true,hidden:false,width:150,editor:new Ext.form.TextField()}];if(bI.optionsFolded!=undefined&&bI.optionsFolded=='open')optionsCollapsed=false;else optionsCollapsed=true;var thisTool=function(){if(bI.updateOnRequest!=undefined&&bI.updateOnRequest==true)return[{type:'search',handler:function(){reloadWhereGridStore();}}];else return[{type:'search',handler:function(){reloadWhereGridStore();}}];return null;};var reloadWhereGridStore=function(){if(K.kreports.visualizationmanager!=undefined)K.kreports.visualizationmanager.update();Ext.getCmp('kReporterPresentation').reloadPresentation(K.kreports.DetailView.ae(),0);};K.kreports.DetailView.bH=new Ext.grid.Panel({store:K.kreports.DetailView.af,columns:bf,titleCollapse:true,autoHeight:true,collapsed:optionsCollapsed,collapsible:true,renderTo:'optionsArea',title:bi('LBL_DYNAMIC_OPTIONS'),tools:thisTool(),viewConfig:{markDirty:false,stripeRows:true},plugins:[Ext.create('Ext.grid.plugin.CellEditing',{clicksToEdit:1,listeners:{'beforeedit':function(editor,e,Opts){bM(e,K.kreports.DetailView.bH);},'edit':function(editor,e){aL(e);if(e.field=='usereditable'||e.field=='value'||e.field=='valueto'||(e.field=='operator'&&(e.value=='ignore'||e.value=='isempty'||e.value=='isemptyornull'||e.value=='isnull'||e.value=='isnotempty'||e.value=='today'||e.value=='past'||e.value=='future'||e.value=='thismonth'||e.value=='next3month'||e.value=='thisyear'||e.value=='lastmonth'||e.value=='last3month'||e.value=='lastyear'))){if(bI.updateOnRequest==undefined||(bI.updateOnRequest!=undefined&&bI.updateOnRequest==false))reloadWhereGridStore();}}}})],listeners:{'viewready':function(){K.kreports.DetailView.bH.setHeight();}}});};Ext.define('K.kreports.DetailView.snapshotModel',{extend:'Ext.data.Model',fields:[{name:'snapshot'},{name:'description'}]});K.kreports.DetailView.snapshotStore=new Ext.data.Store({model:K.kreports.DetailView.snapshotModel,proxy:{type:'ajax',url:'index.php?module=KReports&action=get_snapshots&to_pdf=true&requester='+document.getElementById('recordid').value,reader:{type:'json'}}});K.kreports.DetailView.snapshotStore.load();K.kreports.DetailView.snapshotCombo=new Ext.form.field.ComboBox({store:K.kreports.DetailView.snapshotStore,id:'snapshot_combo',name:'snapshot_combo',displayField:'description',valueField:'snapshot',typeAhead:true,editable:false,value:bi('LBL_CURRENT_SNAPSHOT'),queryMode:'local',triggerAction:'all',selectOnFocus:true,width:135,iconCls:'no-icon',listeners:{'select':function(){if(document.getElementById('dynamicoptions').value!=''){if(K.kreports.DetailView.snapshotCombo.value==0)K.kreports.DetailView.bH.show();else K.kreports.DetailView.bH.hide();}Ext.getCmp('kReporterPresentation').reloadPresentation(null,K.kreports.DetailView.snapshotCombo.value);if(K.kreports.visualizationmanager!=undefined)K.kreports.visualizationmanager.update();}}});var takeSnapshot=function(){snapshotMask.show();Ext.Ajax.request({url:'index.php?module=KReports&to_pdf=true&action=take_snapshot',success:function(){snapshotMask.hide();snapshotStore.load();},failure:function(){snapshotMask.hide();snapshotStore.load();},params:{record:document.getElementById('recordid').value}});};K.kreports.DetailView.snapshotChartComparionsItem=new Ext.menu.Item({text:bi('LBL_COMPARE_SNAPSHOTS_BUTTON_LABEL'),icon:'modules/KReports/images/chart_comparison.png',handler:function(){snapShotComparisonWindow.show();},disabled:true});K.kreports.DetailView.snapshotBasicTrendItem=new Ext.menu.Item({text:bi('LBL_BASIC_TRENDLINE_BUTTON_LABEL'),icon:'modules/KReports/images/trend_analysis.png',handler:function(){snapShotBasicTrendChartWindow.show();},disabled:true});if(bI.showSnapshots!=undefined&&bI.showSnapshots==false)showSnapshots=true;else showSnapshots=false;if(bI.showTools!=undefined&&bI.showTools==false)showTools=true;else showTools=false;var ReportGridToolbar=new Ext.Toolbar({renderTo:'toolbarArea',items:[{text:bi('LBL_EDIT_BUTTON_LABEL'),icon:'modules/KReports/images/report_edit.png',handler:function(){var form=document.getElementById('form');if(!form)var form=document.getElementById('formDetailView');form.return_module.value='KReports';form.return_action.value='DetailView';form.action.value='EditView';form.submit();},id:'KReportsEditReportButton',disabled:(accessLevel>0?false:true)},{text:bi('LBL_DUPLICATE_REPORT_BUTTON_LABEL'),id:'KReportsDuplicateReportButton',icon:'modules/KReports/images/copy.png',handler:function(){Ext.Msg.prompt(bi('LBL_DUPLICATE_NAME'),bi('LBL_DUPLICATE_PROMPT'),function(btn,text){if(btn=='ok'){Ext.Ajax.request({url:'index.php?module=KReports&to_pdf=true&action=duplicate_report',params:{newName:text,record:document.getElementById('recordid').value}});}});},disabled:(accessLevel>0?false:true)},{text:bi('LBL_DELETE_BUTTON_LABEL'),icon:'modules/KReports/images/report_delete.png',handler:function(){Ext.MessageBox.confirm(bi('LBL_DIALOG_CONFIRM'),bi('LBL_DIALOG_DELETE_YN'),function(btn){if(btn=='yes'){var form=document.getElementById('form');if(!form)var form=document.getElementById('formDetailView');form.return_module.value='KReports';form.return_action.value='ListView';form.action.value='Delete';form.submit();}});},id:'KReportsDeleteReportButton',disabled:(accessLevel>1?false:true)},'-',{text:bi('LBL_EXPORTMENU_BUTTON_LABEL'),icon:'modules/KReports/images/export.png',menu:{items:kintegrationpluginsarray['export']},disabled:(kintegrationpluginsarray['export'].length==0?true:false)},'-',{text:bi('LBL_SNAPSHOTMENU_BUTTON_LABEL'),icon:'modules/KReports/images/snapshot.png',disabled:showSnapshots,menu:{items:[K.kreports.DetailView.snapshotCombo,'-',{text:bi('LBL_SNAPSHOT_BUTTON_LABEL'),icon:'modules/KReports/images/snapshot.png',handler:function(){takeSnapshot();}}]}},'-',{text:bi('LBL_TOOLSMENU_BUTTON_LABEL'),icon:'modules/KReports/images/tools.png',menu:{items:kintegrationpluginsarray['tool']},disabled:(kintegrationpluginsarray['tool'].length==0?true:false)},'->',{xtype:'tbtext',text:K.kreports.decode64(K.kreports.M),style:{fontWeight:'bold',fontStyle:'italic'}},new Ext.toolbar.Item({width:38,html:K.kreports.decode64(K.kreports.H),style:{'margin-right':'5px'}})]});Ext.getCmp('kReporterPresentation').renderPresentation();Ext.fly(Ext.getBody().dom.parentNode).removeCls('x-border-box');Ext.fly('content').addCls('x-border-box');}); 