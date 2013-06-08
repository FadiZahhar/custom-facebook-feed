<?php 
function cff_menu() {
    add_menu_page('Settings', 'Custom Facebook Feed', 'manage_options', 'cff-top', 'cff_settings_page');
}
add_action('admin_menu', 'cff_menu');

//Create Settings page
function cff_settings_page() {

    //Declare variables for fields
    $hidden_field_name  = 'cff_submit_hidden';
    $access_token       = 'cff_access_token';
    $page_id            = 'cff_page_id';
    $num_show           = 'cff_num_show';

    // Read in existing option value from database
    $access_token_val = get_option( $access_token );
    $page_id_val = get_option( $page_id );
    $num_show_val = get_option( $num_show );

    // See if the user has posted us some information. If they did, this hidden field will be set to 'Y'.
    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $access_token_val = $_POST[ $access_token ];
        $page_id_val = $_POST[ $page_id ];
        $num_show_val = $_POST[ $num_show ];

        // Save the posted value in the database
        update_option( $access_token, $access_token_val );
        update_option( $page_id, $page_id_val );
        update_option( $num_show, $num_show_val );

        // Put an settings updated message on the screen 
    ?>
    <div class="updated"><p><strong><?php _e('Settings saved.', 'custom-facebook-feed' ); ?></strong></p></div>

    <?php } ?> 
 
    <div class="wrap">

        <h2><?php _e('Custom Facebook Feed'); ?></h2>

        <form name="form1" method="post" action="">

            <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">


            <h3><?php _e('Feed Settings'); ?></h3>


            <table class="form-table">

                <tbody>

                    <tr valign="top">

                        <th scope="row"><?php _e('Access Token'); ?></th>

                        <td>

                            <input name="cff_access_token" type="text" value="<?php esc_attr_e( $access_token_val ); ?>" size="60" />

                            <a href="http://smashballoon.com/custom-facebook-feed/access-token/" target="_blank">How to get an Access Token</a>

                        </td>

                    </tr>

                    <tr valign="top">

                        <th scope="row"><?php _e('Page ID'); ?></th>

                        <td>

                            <input name="cff_page_id" type="text" value="<?php esc_attr_e( $page_id_val ); ?>" size="60" />

                            <a href="http://smashballoon.com/custom-facebook-feed/faq/" target="_blank">What's my Page ID?</a>

                        </td>

                    </tr>

                    <tr valign="top">

                        <th scope="row"><?php _e('Number of posts to display'); ?></th>

                        <td>

                            <input name="cff_num_show" type="text" value="<?php esc_attr_e( $num_show_val ); ?>" size="4" />

                        </td>

                    </tr>

                </tbody>

            </table>

            <?php submit_button(); ?>


        </form>

        <hr />

        <h4>How to use</h4>

        <p>Copy and paste this shortcode directly into the page, post or widget where you'd like the feed to show up:</p>

        <input type="text" value="[custom-facebook-feed]" size="23" />

        <p>You can override the Page ID and the number of posts directly in the shortcode like so:</p>

        <p>[custom-facebook-feed <b>id=Your_Page_ID show=3</b>]</p>

        <br /><br /><a href="http://smashballoon.com/custom-facebook-feed/" target="_blank">Plugin Support</a>

        <br /><br /><br />
        <a href="http://smashballoon.com/custom-facebook-feed/" target="_blank"><img src="<?php echo plugins_url( 'img/pro.jpg' , __FILE__ ) ?>" /></a>

<?php 
} //End Settings_Page 
?>