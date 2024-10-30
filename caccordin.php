<?php
/**
* Plugin Name: Content Accordin
* Description: Display the accordin tab in content page
* Version: 1.0
* Author: pandikamal
*/


if(!class_exists('cAccordin')):

  class cAccordin{
	     var $plugin_url;
		 
		function __construct(){
		   $this->plugin_url = 	plugin_dir_url(__FILE__);
		   add_action('init', array(&$this,'add_caccordion_button' ));
		   add_filter( 'mce_external_plugins', array(&$this,'register_caccordion_tinymce_plugin' ));
		   add_filter( 'mce_buttons', array(&$this,'register_caccordion_tinymce_button' ));
		   add_action( 'wp_head', array(&$this,'caccordion_css') );
		   add_action( 'wp_footer', array(&$this,'caccordion_js') );
		   add_shortcode('caccordion', array(&$this,'shortcode_caccordion'));
		   
		}
		
		/**
	    * hook in only, if current user can 
	    * see the editor and want to have 
	    * a rich text editor
	    */
		function add_caccordion_button(){
			if ( is_admin() ) {
				if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
				  return;
			    if ( 'true' == get_user_option( 'rich_editing' )  ) {
				  add_action( 'admin_head', array(&$this,'inline_css') );
				}
           }
		}
		
		function shortcode_caccordion($atts, $content = null){
			 return $content;
		}
		
		function caccordion_js(){
			
			echo '<script type="text/javascript" src="'.$this->plugin_url.'js/caccordion.js"></script>';
		}
		function caccordion_css(){
			
		   echo '<style type="text/css">.caccordion_container
{
padding:10px 0px 0px 0px;
}
.caccordion_title
{
background:#f5f6ca url("'.$this->plugin_url.'images/accordion_slope.jpg") top left no-repeat;
padding:10px 40px 10px 30px;
margin:15px 0px 0px 0px;
font-size:12px;
font-weight:bold;
}
.caccordion_arrow
{
	padding:0px;
	float:right;
	width:15px;
	height:15px;
	background:url("'.$this->plugin_url.'images/accordion_arrow_side.png") no-repeat right;
}
.caccordion_arrow_side
{
	float:right;
	width:15px;
	height:15px;
	background:url("'.$this->plugin_url.'images/accordion_arrow.png") no-repeat right !important;
}
.caccordion_content
{
padding:10px 10px 10px 40px;
display:none;
}
</style>';
        }
		
		function inline_css(){
		 echo '<style>.caccordin_div_hidden{display:none;}</style>';	
		}
		
		
	    /**
		 * register_caccordin_tinymce_plugin
		 *
		 * @param array $mce_plugins
		 * @return array $mce_plugins
		 */
		function register_caccordion_tinymce_plugin( $mce_plugins ) {
		  $mce_plugins[ 'cAccordion' ] = $this->plugin_url . 'js/editor_plugin.js';
		  return $mce_plugins;
		}
		
		/**
		 * register_caccordin_tinymce_button
		 *
		 * @param array $buttons
		 * @return array $buttons
		 */
		function register_caccordion_tinymce_button( $buttons ) {
		  array_push( $buttons, '|', 'c_accordion' );
		  return $buttons;
		}
  }
  
  $cAccordin = new cAccordin();
  
endif;


