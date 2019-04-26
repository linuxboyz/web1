Ext.namespace('K.kreports.googlechartspanel');K.kreports.googlechartspanel.bQ=new Ext.data.Store({fields:['dimension','label'],data:[{'dimension':'111','label':bi('LBL_DIMENSION_111')}]});K.kreports.googlechartspanel.aX=new Ext.data.Store({fields:['dimension','charttype','label'],data:[{'dimension':'111','charttype':'Area','label':bi('LBL_CHARTTYPE_AREA')},{'dimension':'111','charttype':'SteppedArea','label':bi('LBL_CHARTTYPE_STEPPEDAREA')},{'dimension':'111','charttype':'Bar','label':bi('LBL_CHARTTYPE_BAR')},{'dimension':'111','charttype':'Column','label':bi('LBL_CHARTTYPE_COLUMN')},{'dimension':'111','charttype':'Line','label':bi('LBL_CHARTTYPE_LINE')},{'dimension':'111','charttype':'Pie','label':bi('LBL_CHARTTYPE_PIE')}]});K.kreports.googlechartspanel.ah=new Ext.form.field.ComboBox({fieldLabel:bi('LBL_DIMENSIONS'),store:K.kreports.googlechartspanel.bQ,queryMode:'local',disabled:true,editable:false,displayField:'label',valueField:'dimension',listeners:{select:function(thisCombo){K.kreports.googlechartspanel.aX.clearFilter();K.kreports.googlechartspanel.aX.filter('dimension',new RegExp(thisCombo.getValue()));if(K.kreports.googlechartspanel.bO.getValue()!=''&&K.kreports.googlechartspanel.aX.count()>0){if(K.kreports.googlechartspanel.aX.findRecord('charttype',K.kreports.googlechartspanel.bO.getValue())==null){K.kreports.googlechartspanel.bO.enable();K.kreports.googlechartspanel.bO.setValue(K.kreports.googlechartspanel.aX.getAt(0).get('charttype'));}}else if(K.kreports.googlechartspanel.aX.count()>0){K.kreports.googlechartspanel.bO.enable();K.kreports.googlechartspanel.bO.setValue(K.kreports.googlechartspanel.aX.getAt(0).get('charttype'));}else{K.kreports.googlechartspanel.bO.disable();K.kreports.googlechartspanel.bO.setValue();}}},setInitialValue:function(value){this.setValue(value);this.fireEvent('select',this);}});K.kreports.googlechartspanel.bO=new Ext.form.field.ComboBox({fieldLabel:bi('LBL_CHARTTYPES'),store:K.kreports.googlechartspanel.aX,value:'',queryMode:'local',editable:false,displayField:'label',valueField:'charttype',listeners:{select:function(thisCombo){K.kreports.googlechartspanel.bL.clearFilter();K.kreports.googlechartspanel.bL.filter('charttype',new RegExp('all|'+thisCombo.getValue()));}}});K.kreports.googlechartspanel.dimension1Combo=new Ext.form.field.ComboBox({typeAhead:true,editable:false,border:1,fieldLabel:bi('LBL_CHARTTYPE_DIMENSION1'),triggerAction:'all',lazyRender:true,queryMode:'local',store:listGridStore,valueField:'fieldid',displayField:'name',listeners:{select:function(thisCombo){}}});K.kreports.googlechartspanel.ar=new Ext.form.field.ComboBox({typeAhead:true,editable:false,border:1,fieldLabel:bi('LBL_CHARTTYPE_DATASERIES'),triggerAction:'all',lazyRender:true,queryMode:'local',store:listGridStore,valueField:'fieldid',displayField:'name',listeners:{select:function(thisCombo){}}});K.kreports.googlechartspanel.aY=new Ext.panel.Panel({frame:false,bodyPadding:5,border:false,items:[{xtype:'fieldset',collapsible:false,title:bi('LBL_CHARTFS_DATA'),bodyPadding:5,items:[{xtype:'form',border:false,layout:'column',items:[{columnWidth:0.5,border:false,layout:'anchor',defaults:{anchor:'90%'},items:[K.kreports.googlechartspanel.ah,{xtype:'fieldset',collapsible:false,style:{'border-bottom':'0px','border-left':'0px','border-right':'0px'},layout:'anchor',bodyPadding:0,defaults:{anchor:'100%'},title:bi('LBL_CHARTFS_SERIES'),items:[K.kreports.googlechartspanel.dimension1Combo,]}]},{columnWidth:0.5,border:false,layout:'anchor',defaults:{anchor:'90%'},items:[K.kreports.googlechartspanel.bO,{xtype:'fieldset',collapsible:false,layout:'anchor',bodyPadding:0,defaults:{anchor:'100%'},style:{'border-bottom':'0px','border-left':'0px','border-right':'0px'},title:bi('LBL_CHARTFS_VALUES'),items:[K.kreports.googlechartspanel.ar,]}]}]}]},{xtype:'fieldset',defaultType:'textfield',title:bi('LBL_CHARTOPTIONS_FS'),collapsible:false,layout:'anchor',items:[{xtype:'form',border:false,layout:'column',items:[{xtype:'form',border:false,columnWidth:0.5,layout:'anchor',defaults:{anchor:'90%'},items:[{xtype:'textfield',id:'GCchartOptionsTitle',fieldLabel:bi('LBL_CHARTOPTIONS_TITLE')}]},{xtype:'form',border:false,columnWidth:0.5,layout:'anchor',defaults:{anchor:'90%'},items:[{columns:2,xtype:'checkboxgroup',id:'GCchartOptionsCheckBoxGroup',items:[{boxLabel:bi('LBL_CHARTOPTIONS_LEGEND'),name:'legend',inputValue:true},{boxLabel:bi('LBL_CHARTOPTIONS_3D'),name:'is3D'}]}]}]}]}]});K.kreports.googlechartspanel.panel=new Ext.panel.Panel({layout:'fit',height:400,border:false,aZ:new Object(),al:0,items:[K.kreports.googlechartspanel.aY],setPanelData:function(aZ){this.aZ=aZ;if(this.aZ.dims!=undefined){K.kreports.googlechartspanel.ah.setValue(this.aZ.dims);K.kreports.googlechartspanel.bO.setValue(this.aZ.type);K.kreports.googlechartspanel.dimension1Combo.setValue(this.aZ.dimensions.dimension1);switch(this.aZ.dims.substr(2,1)){case '1':K.kreports.googlechartspanel.ar.setValue(this.aZ.dataseries[0].fieldid);break;}Ext.getCmp('GCchartOptionsTitle').setValue(this.aZ.title);}else{K.kreports.googlechartspanel.bO.clearValue();K.kreports.googlechartspanel.dimension1Combo.clearValue();K.kreports.googlechartspanel.ar.clearValue();Ext.getCmp('GCchartOptionsTitle').setValue();K.kreports.googlechartspanel.ah.setValue('111');}if(this.aZ.options!=undefined)Ext.getCmp('GCchartOptionsCheckBoxGroup').setValue(this.aZ.options);else Ext.getCmp('GCchartOptionsCheckBoxGroup').setValue();K.kreports.googlechartspanel.ah.fireEvent('select',K.kreports.googlechartspanel.ah);},getPanelData:function(){if(this.aZ.uid==undefined)this.aZ.uid=kGuid();this.aZ.dims=K.kreports.googlechartspanel.ah.getValue();this.aZ.type=K.kreports.googlechartspanel.bO.getValue();this.aZ.dimensions={dimension1:K.kreports.googlechartspanel.dimension1Combo.getValue()};this.aZ.dataseries=new Array();switch(K.kreports.googlechartspanel.ah.getValue().substr(2,1)){case '1':if(K.kreports.googlechartspanel.ar.getValue()!=null)this.aZ.dataseries.push({fieldid:K.kreports.googlechartspanel.ar.getValue(),name:listGridStore.findRecord('fieldid',K.kreports.googlechartspanel.ar.getValue()).get('name'),chartfunction:'SUM',meaning:'value',axis:'P',renderer:'bars'});break;}this.aZ.options=Ext.getCmp('GCchartOptionsCheckBoxGroup').getValue();this.aZ.title=Ext.getCmp('GCchartOptionsTitle').getValue();return this.aZ;}}); 