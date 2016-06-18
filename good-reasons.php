<?php
/**
 Plugin Name: Good Reasons
 Plugin URI: http://www.dewey.be
 Description: Good Reasons is a Wordpress plugin that allows blog readers to signal argumentation errors to
 the author
 Version: 0.1
 Author: Dewey ASBL
 Author URI: http://www.dewey.be
 License: GPL2
*/

defined( 'ABSPATH' ) or exit;
defined( 'GOOD_REASONS_DEBUG' ) or define( 'GOOD_REASONS_DEBUG', false );
defined( 'GOOD_REASONS_PATH' ) or define( 'GOOD_REASONS_PATH', plugin_dir_path( __FILE__ ) );



/**
 *
 * Add a settings to show or hide bootstrap.js
 *
 */
new gdr_general_setting();
class gdr_general_setting {
    function gdr_general_setting() {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'gdr_resolve', 'esc_attr' );
        add_settings_field( 'gdr_resolve_field', '<label for="gdr_resolve_parcent">Resolve Good Reason Javascript Problem</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        echo '<label><input type="checkbox" id="gdr_resolve" name="gdr_resolve" value="1"' . checked( 1, get_option( 'gdr_resolve' ), false ) . '" /> ' . __( 'Check to hide bootstrap.js for Good Reason plugin to prevent a conflict with other plugins or the theme.', 'gdr' ) . '</label>';
    }
}



/**
 *
 * Add the necessary javascript
 *
 */
add_action( 'wp_head', 'gdr_scripts' );
function gdr_scripts() {
	if ( get_option( 'gdr_resolve' ) != 1 ) {
		wp_enqueue_script( 'gdr_bootstrap_script', plugins_url() . '/good-reasons/bootstrap.js', array( 'jquery' ), '3.5', true );
	}
	wp_enqueue_style( 'gdr_bootstrap_style', plugins_url() . '/good-reasons/bootstrap.css', false );
}


add_shortcode( 'GoodReason', 'gdr_modal_callback' );
function gdr_modal_callback() { ?>

<a href="#" id="gdr_modal_trig" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gdrModal"><?php _e( 'Good Reasons : The Argumentation Toolkit', 'gdr' ); ?></a>


	<div class="modal fade" id="gdrModal" tabindex="-1" role="dialog" aria-labelledby="gdrModalLabel">
		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h4 class="modal-title" id="myModalLabel"><?php _e( 'Good Reasons - the Argumentation Toolkit !', 'gdr' ); ?></h4>
      			</div>
      			<div class="modal-body">
					<input type="hidden" id="gdr_post_ID" value="<?php echo get_the_ID(); ?>" />
					<input type="hidden" id="gdr_post_IP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
					<?php require_once( 'html.php' ); ?>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-primary gdr-submit"><?php _e( 'Submit', 'gdr' ); ?></button>
		      	</div>
		    </div>
		  </div>
		</div>
<?php
}



/**
 *
 * Admin ajax for data capture
 *
 */
add_action( 'init', 'gdr_ajax_call' );
function gdr_ajax_call() {
	add_action( 'wp_head', 'gdr_ajax_javascript' );
	add_action( 'wp_ajax_nopriv_gdr_ajax', 'gdr_ajax_callback' );
	add_action( 'wp_ajax_gdr_ajax', 'gdr_ajax_callback' );
}

function gdr_ajax_javascript() { ?>
	<script type="text/javascript">

		jQuery(document).ready(function() {

			jQuery('[data-toggle="tooltip"]').tooltip();

			//define
			var gdr_text = false;
			var gdr_validity = false;
			var gdr_why = false;
			var gdr_type = false;
			var gdr_com = false;
			var gdr_name = false;
			var gdr_email = false;
			var gdr_ID = jQuery("#gdr_post_ID").val();
			var gdr_IP = jQuery("#gdr_post_IP").val();

			//restore
			jQuery("#gdr_modal_trig").click(function(){
				jQuery("#gdr_2,#gdr_3a,#gdr_3b,#gdr_4,#gdr_5,#gdr_arg_msg,#gdr_com_msg").hide();
				jQuery(".gdr-submit").attr("disabled", "disabled");
				jQuery("#gdr_2,#gdr_3a,#gdr_3b,#gdr_4,#gdr_5").hide();
				jQuery(".gdr-submit,#gdr_1").show();
				jQuery("#gdr_arg,#gdr_validity").val("");
			});

			//step 1
			jQuery("#gdr_validity").change(function() {
				gdr_text = jQuery("#gdr_arg").val();
				gdr_validity = jQuery(this).val();
				if ( gdr_text == '' || gdr_text == undefined ) {
					jQuery("#gdr_arg_msg").show();
					jQuery(this).val("");
					return false;
				}

				if ( gdr_validity == 'No' ) {
					jQuery("#gdr_1,#gdr_2,#gdr_3a,#gdr_3b,#gdr_5").hide();
					jQuery("#gdr_4").show();
					jQuery(".gdr-submit").removeAttr("disabled");
				} else {
					jQuery("#gdr_1,#gdr_3a,#gdr_3b,#gdr_4,#gdr_5").hide();
					jQuery("#gdr_2").show();
				}
			});

			//step 2
			jQuery("input:radio[name=gdr_why]").change(function() {
				gdr_why = jQuery(this).val();
				if ( gdr_why == 'Formal Fallacy' ) {
					jQuery("#gdr_1,#gdr_2,#gdr_3b,#gdr_4,#gdr_5").hide();
					jQuery("#gdr_3a").show();
				} else if ( gdr_why == 'Informal Fallacy' ) {
					jQuery("#gdr_1,#gdr_3a,#gdr_2,#gdr_4,#gdr_5").hide();
					jQuery("#gdr_3b").show();
				} else if ( gdr_why == 'Formal + Informal' ) {
					jQuery("#gdr_1,#gdr_2,#gdr_3a,#gdr_3b,#gdr_5").hide();
					jQuery("#gdr_4").show();
				}
			});

			//step 3
			jQuery("input:radio[name=gdr_type]").change(function() {
				gdr_type = jQuery(this).val();
				jQuery("#gdr_1,#gdr_2,#gdr_3a,#gdr_3b,#gdr_5").hide();
				jQuery("#gdr_4").show();
				jQuery(".gdr-submit").removeAttr("disabled");
			});

			//submit
			jQuery(".gdr-submit").click(function() {
				gdr_com = jQuery("#gdr_com").val();
				gdr_name = jQuery("#gdr_name").val();
				gdr_email = jQuery("#gdr_email").val();
				if ( gdr_name == '' || gdr_name == undefined || gdr_email == '' || gdr_email == undefined ) {
					jQuery("#gdr_com_msg").show();
					return false;
				}

				jQuery("#gdr_com_msg").hide();

				//make a ajax call
				var params = {
						'action': 'gdr_ajax', 'ID': gdr_ID, 'IP': gdr_IP, 'text': gdr_text, 'validity': gdr_validity, 'why': gdr_why, 'type': gdr_type, 'com': gdr_com, 'name': gdr_name, 'email': gdr_email
					};
				jQuery.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", params, function(data) {
					if ( data ) {
						jQuery("#gdr_1,#gdr_2,#gdr_3a,#gdr_3b,#gdr_4").hide();
						jQuery("#gdr_5").show();
						jQuery(".gdr-submit").hide();
					}
				});
			});
		});
	</script>
<?php }

//send email and post comment conditionally
function gdr_ajax_callback() {

	$ID = $_POST['ID'];
	$IP = $_POST['IP'];
	$text = $_POST['text'];
	$invalidity = $_POST['validity'];
	$why = $_POST['why'];
	$type = $_POST['type'];
	$com = $_POST['com'];
	$name = $_POST['name'];
	$email = sanitize_email( $_POST['email'] );

	if ( ! $email ) {
		wp_die();
	}

	$msg = __( 'Validity of an argument', 'gdr' );
	$msg .= 'Post ID: ' . $ID . "\r\n";
	$msg .= 'Argumentation: ' . $text . "\r\n";
	$msg .= 'Validity: ' . $invalidity . "\r\n";
	$msg .= 'Why: ' . $why . "\r\n";
	$msg .= 'Type: ' . $type . "\r\n";
	$msg .= 'Comments: ' . $com . "\r\n";
	$msg .= 'Name: :' . $name . "\r\n";
	$msg .= 'Email: ' . $email . "\r\n";

	$headers = "From: mathieu.simonson@gmail.com" . "\r\n";
	$headers .= "Reply-To: mathieu.simonson@gmail.com" . "\r\n";

	wp_mail( get_option( 'admin_email' ), __( 'GOOD REASONS - VALIDITY OF AN ARGUMENT', 'gdr' ), $msg, $headers );

	if ( $com ) {

		$comment = 'Argumentation: ' . $text . "\r\n";
		if ( $invalidity == 'Yes' ) {
			$comment .= 'Invalid argument' . "\r\n";
			$comment .= 'Why: ' . $why . "\r\n";
			$comment .= 'Type: ' . $type . "\r\n";
		} else {
			$comment .= 'Valid argument' . "\r\n";
		}
		$comment .= $com;

		$data = array(
				'comment_post_ID' => $ID,
				'comment_author' => $name,
				'comment_author_email' => $email,
				'comment_author_url' => site_url(),
				'comment_content' => $comment,
				'comment_author_IP' => $IP,
				'comment_agent' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; fr; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3',
				'comment_date' => date('Y-m-d H:i:s'),
				'comment_date' => $time,
				'comment_approved' => 0,
		);
		wp_insert_comment($data);
	}
	echo 'ok';
	wp_die();
} ?>

