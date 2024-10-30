<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accordion</title>
<script type="text/javascript" src="../../../wp-includes/js/jquery/jquery.js"></script>
<!--<script type="text/javascript" src="../../../wp-includes/js/tinymce/tiny_mce.js"></script>-->
<script type="text/javascript" src="../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($){
	 
	    $('#caccordion_submit').click(function(event){
			  event.preventDefault();
			  var title = jQuery('#caccordion_title').val();
			  var content = jQuery('#caccordion_content').val();
			   var text = jQuery('.caccordion_hidden');
			   $(text).html('<div class="caccordion_container"><div class="caccordion_title">'+ title + '</div><div class="caccordion_content">'+content.replace(/\n/g,"<br>")+'</div>');
			  
			if(title)
			 tinyMCE.activeEditor.execCommand('mceInsertContent', 0, '[caccordion]'+$(text).html()+'[/caccordion]');
			 tinyMCEPopup.close();
		});
  });
</script>
</head>
<body>
<div id="caccordin-form">
	<div>
		<label for="caccordoin-title" style="font-family:Helvetica,Arial,sans-serif;"><strong>Title</strong></label>
		<input type="text" id="caccordion_title" name="caccordion_title" value="" style="font-family:Helvetica,Arial,sans-serif; font-size:13px; height:20px; margin:5px 0; width:99%; border:1px solid #E5E5E5 !important;" />
	</div>
	<div>
		<label for="caccordion-content" style="font-family:Helvetica,Arial,sans-serif;"><strong>Content</strong></label>
		<textarea cols="30" rows="5" class="caccordion_content" id="caccordion_content" name="caccordion_content" style="font-family:Helvetica,Arial,sans-serif; font-size:13px; height:20px; margin:5px 0; width:99%; border:1px solid #E5E5E5 !important; height:70px;"></textarea>
	</div>
	<p class="submit">
		<input type="submit" class="button-primary" id="caccordion_submit"  name="caccordion_submit" value="Submit" style="font-family:Helvetica,Arial,sans-serif; font-size:13px; height:20px; margin:5px 0; background:#91A33D; color:#FFFFFF; border:1px solid #E5E5E5 !important;"/>
	</p>
</div>
<div class="caccordion_hidden" style="display:none;"></div>
</body>
</html>
