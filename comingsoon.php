<?php
/**
 * Plugin Name: Coming Soon
 * Description: Coming Soon Plugin
 * Version: 1.0 
 * Author: Test
 */

add_action('init', 'comingsoon_template');

function comingsoon_template(){
	$comingsoon_option =  get_option('comingsoon_option');
	if($comingsoon_option){
		if($comingsoon_option == 1){
			add_filter ('page_template', 'wpse255804_redirect_page_template');
		}
	}
}

function wpse255804_redirect_page_template ($template) {
    $template = WP_PLUGIN_DIR . '/comingsoon/template.php';
    return $template;
}

//add register_mysettings
function register_mysettings() {
        register_setting( 'comingsoon-settings-group', 'comingsoon_title' );
        register_setting( 'comingsoon-settings-group', 'comingsoon_description' );
        register_setting( 'comingsoon-settings-group', 'comingsoon_option' );
}
 
//add menu
function comingsoon_create_menu() {
        add_menu_page('Coming Soon Settings', 'Coming Soon Settings', 'administrator', __FILE__, 'comingsoon_settings_page','dashicons-admin-plugins', 100);
        add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'comingsoon_create_menu'); 
 
//Create form 
function comingsoon_settings_page() {
?>
<div class="wrap">
<h2>Setting Coming Soon</h2>
<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>
<form method="post" action="options.php">
    <?php settings_fields( 'comingsoon-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
	        <th scope="row">Heading </th>
	        <td><input type="text" name="comingsoon_title" value="<?php echo get_option('comingsoon_title'); ?>" /></td>
        </tr>
        <tr valign="top">
	        <th scope="row">Description </th>
	        <td>
				<textarea name="comingsoon_description" cols="30" rows="10">
					<?php echo get_option('comingsoon_description'); ?>
				</textarea>
			</td>
        </tr>
        <tr valign="top">
	        <th scope="row">Enable Comingsoon mode</th>
	        <td>
	        	<?php echo get_option('comingsoon_option')==0?'selected':''; ?>
	        	<select name='comingsoon_option'>
	        		<option value="0" selected="<?php echo get_option('comingsoon_option')==0?'selected':''; ?>">Tắt</option>
	        		<option value="1" selected="<?php echo get_option('comingsoon_option')==1?'selected':''; ?>"></option>
	        		<option value="2" selected="<?php echo get_option('comingsoon_option')==2?'selected':''; ?>">Chọn Page</option>
	        		<option value="3" selected="<?php echo get_option('comingsoon_option')==3?'selected':''; ?>">IP</option>
	        	</select>
	        </td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php } ?>


