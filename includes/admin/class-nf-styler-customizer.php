<?php
if ( ! class_exists( 'NF_Styler_Customizer' ) ) :

	/**
	 * WC Email Customizer class
	 */
	class NF_Styler_Customizer {
	private $trigger;
	private $nf_form_id;
	/**
	 * Constructor
	 */
	public function __construct() {
		global $wp_version;

		// add customizer settings
		/* add_action( 'customize_register', array( $this, 'customizer_settings' ) ); */
		if (  class_exists( 'Ninja_Forms' ) ) {
			add_action( 'customize_register', array( $this, 'customizer_controls' ), 50 );
			$this->trigger = 'nf-styler-customizer';
			// only load controls for this plugin
			if ( isset( $_GET[ $this->trigger ] ) ) {

				update_option( 'nf_styler_form_id_customizer', $_REQUEST['nf_form_id' ] );

				add_filter( 'customize_register', array( $this, 'remove_sections' ), 600 );

				if ( version_compare( $wp_version, '4.4', '>=' ) ) {
					add_filter( 'customize_loaded_components', array( $this, 'remove_widget_panels' ), 60 );
					add_filter( 'customize_loaded_components', array( $this, 'remove_nav_menus_panels' ), 60 );
				} else {
					add_filter( 'customize_register', array( $this, 'remove_panels' ), 60 );
				}
				add_filter( 'customize_control_active', array( $this, 'control_filter' ), 10, 2 );
				// add_action( 'customize_register', array( $this, 'customizer_controls' ), 50 );

				// add our custom query vars to the whitelist
				add_filter( 'query_vars', array( $this, 'add_query_vars' ) );
				// enqueue customizer js
				/* add_action( 'customize_preview_init', array( $this, 'enqueue_customizer_script' ) ); */
				// listen for the query var and load template
				add_action( 'template_redirect', array( $this, 'load_styler_template' ) );
			}else{
				add_filter( 'customize_control_active', array( $this, 'hide_styler_sections' ), 10, 2 );
			}


		} else {

			add_action( 'admin_notices', array( $this, 'missing_notice' ) );

		}

		return true;
	}

	public function enqueue_customizer_script() {
		wp_enqueue_script( 'nf-styler-customizer-live-preview', NF_POPUPS_URL . '/js/customizer-preview.js', array( 'jquery', 'customize-preview' ) );
		return true;
	}



	/**
	 * Show only our  settings in the preview
	 *
	 * @since 1.0.0
	 */
	public function control_filter( $active, $control ) {
		$settings_section = array( 
			'nf_styler_form_id_checkbox_inputs',
			'nf_styler_form_id_confirmation_message',
			'nf_styler_form_id_dropdown_fields',
			'nf_styler_form_id_error_message',
			'nf_styler_form_id_field_descriptions',
			'nf_styler_form_id_field_labels',
			'nf_styler_form_wrapper_section',
			'nf_styler_form_id_general_settings',
			'nf_styler_form_id_paragraph_textarea',
			'nf_styler_form_id_placeholders',
			'nf_styler_form_id_radio_inputs',
			'nf_styler_form_id_submit_button',
			'nf_styler_form_id_text_fields',
			'custom_css',
		 );
		if ( in_array( $control->section, $settings_section ) ) {
			return true;
		}

		return false;
	}
	function hide_styler_sections($active, $control ) {
		$settings_section = array( 
			'nf_styler_form_id_checkbox_inputs',
			'nf_styler_form_id_confirmation_message',
			'nf_styler_form_id_dropdown_fields',
			'nf_styler_form_id_error_message',
			'nf_styler_form_id_field_descriptions',
			'nf_styler_form_id_field_labels',
			'nf_styler_form_wrapper_section',
			'nf_styler_form_id_general_settings',
			'nf_styler_form_id_paragraph_textarea',
			'nf_styler_form_id_placeholders',
			'nf_styler_form_id_radio_inputs',
			'nf_styler_form_id_submit_button',
			'nf_styler_form_id_text_fields'
		 );
		if ( ! in_array( $control->section, $settings_section ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Add our controls to the WordPress Customizer.
	 *
	 * @since 1.0.0
	 * @param object  $wp_customize
	 */
	public function customizer_controls( $wp_customize ) {
		global $wp_customize;

		include 'class-nf-styler-customizer-controls.php';

		NF_Styler_Customizer_Controls::add_controls( );

		return true;
	}



	/**
	 * Remove any unwanted default conrols.
	 *
	 * @since 1.0.0
	 * @param object  $wp_customize
	 */
	public function remove_sections( $wp_customize ) {
		global $wp_customize;

		$wp_customize->remove_section( 'themes' );
		$wp_customize->remove_panel( 'themes' );
		return true;
	}

	/**
	 * Removes the core 'Widgets' panel from the Customizer.
	 *
	 * @param array   $components Core Customizer components list.
	 * @return array (Maybe) modified components list.
	 */
	public function remove_widget_panels( $components ) {
		$i = array_search( 'widgets', $components );
		if ( false !== $i ) {
			unset( $components[ $i ] );
		}
		return $components;
	}

	/**
	 * Removes the core 'Menus' panel from the Customizer.
	 *
	 * @param array   $components Core Customizer components list.
	 * @return array (Maybe) modified components list.
	 */
	public function remove_nav_menus_panels( $components ) {
		$i = array_search( 'nav_menus', $components );
		if ( false !== $i ) {
			unset( $components[ $i ] );
		}

		return $components;
	}

	/**
	 * Remove any unwanted default panels.
	 *
	 * @since 1.1.2
	 * @param object  $wp_customize
	 */
	public function remove_panels( $wp_customize ) {
		global $wp_customize;

		// because above causes issues, for now use below work around
		$wp_customize->get_panel( 'nav_menus' )->active_callback = '__return_false';
		$wp_customize->remove_panel( 'widgets' );

		return true;
	}

	/**
	 * Add custom variables to the available query vars
	 *
	 * @since 1.0.0
	 * @param mixed   $vars
	 * @return mixed
	 */
	public function add_query_vars( $vars ) {
		$vars[] = $this->trigger;

		return $vars;
	}

	/**
	 * If the right query var is present load the popup template
	 *
	 * @since 1.0.0
	 */
	public function load_styler_template( $wp_query ) {

		// load this conditionally based on the query var
		if ( get_query_var( $this->trigger ) ) {
			wp_head();

			$nf_form_id = sanitize_text_field( $_REQUEST['nf_form_id'] );

			include NF_STYLER_DIR . '/includes/admin/views/nf-styler-preview.php';

			$message = ob_get_clean();

			wp_footer();

			echo $message;
			exit;
		}

		return $wp_query;
	}

	/**
	 *  fallback notice.
	 *
	 * @return string
	 */
	public function missing_notice() {
		echo '<div class="error"><p>' . sprintf( __( 'Styler for Ninja Forms requires Ninja Forms 3.0 or later to be installed and active. You can download %s here.', 'nf-styler' ), '<a href="http://www.ninjaforms.com" target="_blank">Ninja Forms</a>' ) . '</p></div>';
		return true;
	}

	public static function get_value( $nf_form_id, $var ) {
		$val = get_option( 'nf_styler' );

		if ( isset( $val[$nf_form_id][$var] ) ) {
			return $val[$nf_form_id][$var];
		}else {
			return '';
		}
	}


}

add_action( 'plugins_loaded', 'nf_styler_customizer_init', 0 );

/**
 * init function
 *
 * @package
 * @since 1.0.0
 * @return bool
 */
function nf_styler_customizer_init() {
	new NF_Styler_Customizer();

	return true;
}
endif;
