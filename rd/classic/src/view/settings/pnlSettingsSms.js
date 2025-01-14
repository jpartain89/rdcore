Ext.define('Rd.view.settings.pnlSettingsSms', {
    extend      : 'Ext.form.Panel',
    alias       : 'widget.pnlSettingsSms',
    autoScroll	: true,
    plain       : true,
    frame       : false,
    layout      : {
        type    : 'vbox',
        pack    : 'start',
        align   : 'stretch'
    },
    margin      : 5,
    nr          : 1,
    cloud_id    : -1, 
    fieldDefaults: {
        msgTarget       : 'under',
        labelAlign      : 'left',
        labelSeparator  : '',
        labelWidth      : Rd.config.labelWidth+20,
        margin          : Rd.config.fieldMargin,
        labelClsExtra   : 'lblRdReq',
        defaultType     : 'textfield'
    },
    buttons : [
        {
            itemId  : 'save',
            text    : 'SAVE',
            scale   : 'large',
            formBind: true,
            glyph   : Rd.config.icnYes,
            margin  : Rd.config.buttonMargin,
            ui      : 'button-teal'
        }
    ],
    requires: [
        'Rd.view.settings.vcSettingsSms',
        'Rd.view.settings.winSettingsSmsTest',
        'Rd.view.settigs.gridSmsHistories',
        'Rd.view.components.cmbSmsMethods'
    ],
    controller  : 'vcSettingsSms',
    listeners       : {
        activate  : 'onViewActivate' //Trigger a load of the settings (This is only on the initial load)
    },
    initComponent: function(){
        var me      = this;
        var w_prim  = 550;
        
        var cntTwilio = {
            xtype           : 'container',
            itemId          : 'cntTwilio',
            layout          : 'anchor',
            hidden          : true,
            disabled        : true,
            defaults        : {
                anchor  : '100%'
            },
            defaultType     : 'textfield',
            items           : [
                {
	                fieldLabel      : 'Twilio SSID',
	                name            : 'sms_'+me.nr+'_twilio_ssid',
	                allowBlank      : false
	            },            
                {
	                fieldLabel      : 'Twilio Token',
	                name            : 'sms_'+me.nr+'_twilio_token',
	                allowBlank      : false
	            },
                {
	                fieldLabel      : 'Twilio Number',
	                name            : 'sms_'+me.nr+'_twilio_from',
	                allowBlank      : false
	            }
            ]       
        };
         
        var cntApiMain = {
            xtype           : 'container',
            itemId          : 'cntApiMain',
            layout          : 'anchor',
           // hidden          : true,
          // disabled        : true,
            defaults        : {
                anchor  : '100%'
            },
            defaultType     : 'textfield',
            items           : [
                {
	                fieldLabel      : 'URL',
	                name            : 'sms_'+me.nr+'_url',
	                allowBlank      : false,
	                vtype           : 'url'
	            },
	            {
                    fieldLabel      : 'Sender Parameter',
                    name            : 'sms_'+me.nr+'_sender_parameter',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                },
                {
                    fieldLabel      : 'Sender Value',
                    name            : 'sms_'+me.nr+'_sender_value',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                },
                {
                    fieldLabel      : 'Receiver Parameter',
                    name            : 'sms_'+me.nr+'_receiver_parameter',
                    allowBlank      : false
                },
                {
                    fieldLabel      : 'Message Parameter',
                    name            : 'sms_'+me.nr+'_message_parameter',
                    allowBlank      : false
                },
                {
                    fieldLabel      : 'Key Parameter',
                    name            : 'sms_'+me.nr+'_key_parameter',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                },
                {
                    fieldLabel      : 'Key Value',
                    name            : 'sms_'+me.nr+'_key_value',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                }
            ]
        };
        
        
        var cntGeneral  = {
            xtype       : 'container',
            width       : w_prim,
            layout      : 'anchor',
            defaults    : {
                anchor  : '100%'
            },
            defaultType : 'textfield',
            items       : [
                 { 
                    name            : 'nr',
                    value           : me.nr,
                    hidden          : true,
                    itemId          : 'hiddenNr'
                 },
                 { 
                    name            : 'edit_cloud_id',
                    value           : me.cloud_id,
                    hidden          : true,
                    itemId          : 'editCloudId'          
                 },
                 { 
                    fieldLabel      : 'Enable', 
                    name            : 'sms_'+me.nr+'_enabled', 
                    inputValue      : '1',
                    itemId          : 'chkSmsEnabled',
                    labelClsExtra   : 'lblRdReq',
                    checked         : true, 
                    xtype           : 'checkbox'
                },
                {
                    xtype           : 'cmbSmsMethods',
                    name            : 'sms_'+me.nr+'_method'
                },
                cntApiMain,
                cntTwilio    
            ]
        }
        
        
        
                       
        var cntClient  = {
            xtype       : 'container',
            width       : w_prim,
            layout      : 'anchor',
            defaults    : {
                anchor  : '100%'
            },
            defaultType : 'textfield',
            items       : [
                {
                    fieldLabel      : 'Content-Type',
                    name            : 'sms_'+me.nr+'_header_content_type',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                },
                {
                    fieldLabel      : 'Authorization',
                    name            : 'sms_'+me.nr+'_header_authorization',
                    allowBlank      : true,
                    labelClsExtra   : 'lblRd'
                },
                {
                    xtype       : 'checkboxgroup',
                    vertical    : false,
                    columns     : 2,
                    vertical    : false,
                    items: [
                        { boxLabel: 'SSL Verify Host',  name: 'sms_'+me.nr+'_ssl_verify_host'},
                        { boxLabel: 'SSL Verify Peer',  name: 'sms_'+me.nr+'_ssl_verify_peer'}                      
                    ]
                } 
            ]
        }
        
                      
        me.items = [
            {
                xtype       : 'panel',
                title       : "General",
                glyph       : Rd.config.icnGears,
                ui          : 'panel-blue',
                layout      : {
                  type  : 'vbox',
                  align : 'start',
                  pack  : 'start'
                },
                bodyPadding : 10,
                items       : cntGeneral				
            },
            {
                xtype       : 'panel',
                itemId      : 'pnlApiClient',
                title       : "HTTP Client Options",
                glyph       : Rd.config.icnGlobe,
                ui          : 'panel-green',
                layout      : {
                  type  : 'vbox',
                  align : 'start',
                  pack  : 'start'
                },
                bodyPadding : 10,
                items       : cntClient				
            },
            {
                xtype       : 'panel',
                title       : "Test Settings",
                glyph       : Rd.config.icnGears,
                ui          : 'panel-green',
                layout      : {
                  type  : 'vbox',
                  align : 'start',
                  pack  : 'start'
                },
                bodyPadding : 10,
                items       : {
                    xtype       : 'container',
                    width       : w_prim,
                    layout      : 'anchor',
                    itemId      : 'cntTestSms',
                    defaults    : {
                        anchor  : '100%'
                    },
                    defaultType : 'textfield',
                    items       : [
                        {
                            xtype           : 'button',
                            text            : 'Test SMS Settings',
                            ui              : 'button-teal',
                            itemId          : 'btnSmsTest',
                            scale           : 'large',
                            padding         : 5,
                            margin          : 5,
                            disabled        : false,
                            listeners   : {
                                click     : 'onSmsTestClick'
                            }    
                        }        
                    
                    ]			
                }
            },
            {
                xtype       : 'panel',
                title       : "History Of SMSs",
                glyph       : Rd.config.icnHistory,
                ui          : 'panel-green',
                layout      : {
                  type  : 'vbox',
                  align : 'start',
                  pack  : 'start'
                },
                bodyPadding : 10,
                items       : {
                    xtype       : 'container',
                    width       : w_prim,
                    layout      : 'anchor',
                    defaults    : {
                        anchor  : '100%'
                    },
                    defaultType : 'textfield',
                    items       : [
                        {
                            xtype           : 'button',
                            text            : 'Show Sent History',
                            ui              : 'button-teal',
                            itemId          : 'btnSmsHistory',
                            glyph           : Rd.config.icnHistory,
                            scale           : 'large',
                            padding         : 5,
                            margin          : 5,
                            disabled        : false,
                            listeners   : {
                                click     : 'onSmsHistoryClick'
                            }    
                        }        
                    
                    ]			
                }
            }
        ];    
        me.callParent(arguments);
    }
});
