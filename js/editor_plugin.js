(function() {  
    tinymce.create('tinymce.plugins.cAccordion', {  
        init : function(ed, url) {  
            url = url.substring(0,url.lastIndexOf('/'));
			ed.addButton(
				'c_accordion', 
				{
				  cmd   : 'caccordion_button_cmd',
				  title : 'cAccordion',
				  image : url + '/images/caccordin.png'
				}
			  );
            ed.addCommand('caccordion_button_cmd', function() {
				// _nonce = b6422ef875 -> caccordin_dialog
			
                ed.windowManager.open({
                        file : url + '/dialog.php',
                        width : 500,
						title : 'Accordion',
                        height : 300,
                        inline : 1
                });
            });
        },  
        createControl : function(n, cm) {  
            return null;  
        },  

    });  
    tinymce.PluginManager.add('cAccordion', tinymce.plugins.cAccordion);  
	jQuery(function(){
		
		
	});
})(); 