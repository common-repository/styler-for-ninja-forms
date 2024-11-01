<?php
/*
Plugin Name: Ninja Forms Styler
Plugin URI:  http://ninjastyler.com
Description: Style your Ninja Forms with live preview in Customizer
Version:     3.2
Author:      ninjastyler
License:     GPL2License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) die( '-1' );

define( "NF_STYLER_DIR", WP_PLUGIN_DIR . "/" . basename( dirname( __FILE__ ) ) );
define( "NF_STYLER_URL", plugins_url() . "/" . basename( dirname( __FILE__ ) ) );

require_once 'includes/admin/class-nf-styler-customizer.php';

//Main class of Ninja Forms Styler
class NF_Styler_Main {
	public $all_found_forms_ids = array();
	/**
	 *  method for all hooks
	 *
	 * @since  v3.0
	 * @author Ninja Styler
	 */
	function __construct() {
		$this->all_found_forms_ids = '';
		add_action( 'admin_head', array( $this, '_set_customizer_url' ) );

		add_action( 'customize_preview_init', array( $this, 'nf_styler_live_preview' ) );
		add_action( 'customize_save_after', array( $this, 'nf_styler_action_after_saving' ) );

		add_action( 'ninja_forms_before_container', array( $this, 'ninja_forms_display_before_form' ) );
		add_action( 'customize_controls_print_scripts', array( $this, 'customizer_scripts' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}



	function customizer_scripts() {
		wp_enqueue_style( 'nf_styler_admin', NF_STYLER_URL . '/css/nf-styler-admin.css' );
		wp_enqueue_script( 'nf_styler_auto_save_form', NF_STYLER_URL . '/js/customize.js', array( 'jquery', 'customize-controls' ), '', true );
	}

	function admin_scripts() {
		wp_enqueue_script( 'nf_styler_admin', NF_STYLER_URL . '/js/nf-styler-admin.js', array( 'jquery' ) );
	}

	/**
	 *  shows live preview of css changes
	 *
	 * @since  v1.0
	 * @author Ninja Styler
	 * @return null
	 */
	function nf_styler_live_preview() {
		$current_form_id = get_option( 'nf_styler_form_id_customizer' );
		wp_enqueue_script( 'nf_styler_show_live_changes', NF_STYLER_URL . '/js/live-preview-changes.js', array( 'jquery', 'customize-preview' ), '', true );
		wp_localize_script( 'nf_styler_show_live_changes', 'nf_styler_localize_current_form', $current_form_id );

	}


	function get_form_styles( $form_id, $category ) {
		$settings = get_option( 'nf_styler_form_id_' . $form_id );
		if ( empty( $settings ) ) {
			return;
		}

		$input_styles = '';
		$input_styles .= empty( $settings[$category]['color'] )?'':'color:' . $settings[$category]['color'] . ';';
		$input_styles .= empty( $settings[$category]['background-color'] )?'':'background-color:' . $settings[$category]['background-color'] . ';';
		$input_styles .= empty( $settings[$category]['background-color1'] )?'':'background:-webkit-linear-gradient(to left,' . $settings[$category]['background-color'] . ',' . $settings[$category]['background-color1'] . ');';
		$input_styles .= empty( $settings[$category]['background-color1'] )?'':'background:linear-gradient(to left,' . $settings[$category]['background-color'] . ',' . $settings[$category]['background-color1'] . ');';
		$input_styles .= empty( $settings[$category]['width'] )?'':'width:' . $settings[$category]['width'] . $this->nf_styler_add_px_to_value( $settings[$category]['width'] ) . ';';
		$input_styles .= empty( $settings[$category]['height'] )?'':'height:' . $settings[$category]['height'] . $this->nf_styler_add_px_to_value( $settings[$category]['height'] ) . ';';

		$input_styles .= empty( $settings[$category]['title-position'] )?'':'text-align:' . $settings[$category]['title-position'] . ';';
		$input_styles .= empty( $settings[$category]['text-align'] )?'':'text-align:' . $settings[$category]['text-align'] . ';';
		$input_styles .= empty( $settings[$category]['error-position'] )?'':'text-align:' . $settings[$category]['error-position'] . ';';
		$input_styles .= empty( $settings[$category]['description-position'] )?'':'text-align:' . $settings[$category]['description-position'] . ';';

		$input_styles .= empty( $settings[$category]['title-color'] )?'':'color:' . $settings[$category]['title-color'] . ';';
		$input_styles .= empty( $settings[$category]['font-color'] )?'':'color:' . $settings[$category]['font-color'] . ';';

		$input_styles .= empty( $settings[$category]['button-color'] )?'':'background-color:' . $settings[$category]['button-color'] . ';';
		$input_styles .= empty( $settings[$category]['description-color'] )?'':'color:' . $settings[$category]['description-color'] . ';';

		$input_styles .= empty( $settings[$category]['font-family'] )?'':'font-family:' . $settings[$category]['font-family'] . ';';
		$input_styles .= empty( $settings[$category]['font-size'] )?'':'font-size:' . $settings[$category]['font-size'] . $this->nf_styler_add_px_to_value( $settings[$category]['font-size'] ) . ';';
		$input_styles .= empty( $settings[$category]['max-width'] )?'':'max-width:' . $settings[$category]['max-width'] . $this->nf_styler_add_px_to_value( $settings[$category]['max-width'] ) . ';';
		$input_styles .= empty( $settings[$category]['maximum-width'] )?'':'max-width:' . $settings[$category]['maximum-width'] . $this->nf_styler_add_px_to_value( $settings[$category]['maximum-width'] ) . ';';
		$input_styles .= empty( $settings[$category]['margin'] )?'':'margin:' . $settings[$category]['margin'] . ';';
		$input_styles .= empty( $settings[$category]['padding'] )?'':'padding:' . $settings[$category]['padding'] . ';';

		$input_styles .= empty( $settings[$category]['border-size'] )?'':'border-width:' . $settings[$category]['border-size'] . $this->nf_styler_add_px_to_value( $settings[$category]['border-size'] ) . ';';
		$input_styles .= empty( $settings[$category]['border-color'] )?'':'border-color:' . $settings[$category]['border-color'] . ';';
		$input_styles .= empty( $settings[$category]['border-type'] )?'':'border-style:' . $settings[$category]['border-type'] . ';';
		$input_styles .= empty( $settings[$category]['border-bottom'] )?'':'border-bottom-style:' . $settings[$category]['border-bottom'] . ';';
		$input_styles .= empty( $settings[$category]['border-bottom-size'] )?'':'border-bottom-width:' . $settings[$category]['border-bottom-size'] . $this->nf_styler_add_px_to_value( $settings[$category]['border-bottom-size'] ) . ';';
		$input_styles .= empty( $settings[$category]['border-bottom-color'] )?'':'border-bottom-color:' . $settings[$category]['border-bottom-color'] . ';';

		$input_styles .= empty( $settings[$category]['background-image-url'] )?'':'background: url(' . $settings[$category]['background-image-url'] . ') no-repeat;';
		$input_styles .= empty( $settings[$category]['border-bottom-color'] )?'':'border-bottom-color:' . $settings[$category]['border-bottom-color'] . ';';
		if ( isset( $settings[$category]['display'] ) ) {
			$input_styles .=  $settings[$category]['display'] ?'display:none;':'display:inherit;';
		}
		if ( ! empty( $settings[$category]['border-radius'] ) ) {
			$input_styles .= 'border-radius:' . $settings[$category]['border-radius'] . $this->nf_styler_add_px_to_value( $settings[$category]['border-radius'] ) . ';';
			$input_styles .= '-web-border-radius:' . $settings[$category]['border-radius'] . $this->nf_styler_add_px_to_value( $settings[$category]['border-radius'] ) . ';';
			$input_styles .= '-moz-border-radius:' . $settings[$category]['border-radius'] . $this->nf_styler_add_px_to_value( $settings[$category]['border-radius'] ) . ';';
		}
		$input_styles .= empty( $settings[$category]['custom-css'] )?'':$settings[$category]['custom-css'] . ';';
		return $input_styles;
	}

	/**
	 * Function to add px if not available
	 */

	function nf_styler_add_px_to_value( $value ) {
		$int_parsed = (int) $value;
		if ( ctype_digit( $value ) ) {
			$value = 'px';
		}

		else {
			$value = '';
		}
		return $value;
	}



	function nf_styler_action_after_saving() {
		//get name of style to be deleted
		$style_to_be_deleted = get_option( 'nf_styler_general_settings' );
		if ( $style_to_be_deleted['reset-styles'] != -1 || ! empty( $style_to_be_deleted['reset-styles'] ) ) {
			delete_option( 'nf_styler_form_id_' . $style_to_be_deleted['reset-styles'] );
			$style_to_be_deleted['reset-styles'] = -1;
			update_option( 'nf_styler_general_settings', $style_to_be_deleted );
		}
	}

	function ninja_forms_display_before_form( $form_id ) {
		//show css in frontend
		$style_current_form = get_option( 'nf_styler_form_id_' . $form_id );
		if ( ! empty( $style_current_form ) ) {
			$css_form_id = $form_id;
			$main_class_object = $this;
			include 'display/class-styles.php';
		}
		do_action( 'nf_styler_after_post_style_display', $this );

	}

	/**
	 * Set the customizer url
	 *
	 * @since 1.0.0
	 */
	public function _set_customizer_url(  ) {

		if ( isset( $_GET['page'] ) && ( $_GET['page'] == 'ninja-forms' ) && isset( $_GET['form_id'] ) ) {
			$post_id = $_GET['form_id'];
			$url = admin_url( 'customize.php' );

			$url = add_query_arg( 'nf-styler-customizer', 'true', $url );

			$url = add_query_arg( 'nf_form_id', $post_id, $url );

			$url = add_query_arg( 'url', wp_nonce_url(  urlencode( add_query_arg( array( 'nf_form_id' => $post_id, 'nf-styler-customizer' => 'true' ), site_url() ) ), 'preview-form' ), $url );

			$url = add_query_arg( 'return', urlencode( add_query_arg( array( 'page' => 'ninja-forms', 'form_id='=>'' ), admin_url( 'admin.php' ) )  ), $url );

?>
			<script>
				var nf_styler_url= "<?php echo esc_url_raw( $url ); ?>";
			</script>
			<?php

		}
	}



}// class ends here

new NF_Styler_Main();
