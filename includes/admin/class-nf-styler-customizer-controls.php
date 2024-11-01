<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class NF_Styler_Customizer_Controls {
	private function __construct() {
	}

	public static function add_controls() {
		global $wp_customize;
		$form_id = get_option( 'nf_styler_form_id_customizer' );
		$border_types = array( "inherit" => "Inherit", "solid" =>"Solid", "dotted"=> "Dotted", "dashed"=> "Dashed", "double"=> "Double", "groove"=> "Groove", "ridge"=> "Ridge", "inset"=> "Inset", "outset"=> "Outset" );
		$align_pos = array( "left" =>"Left", "center" => "Center", "justify" => "Justify", "right" => "Right", );
		$font_collection = array( 'Default'=>'Default', "Roboto"=>"Roboto", "Open Sans"=>"Open Sans", "Lato"=>"Lato", "Slabo 27px"=>"Slabo 27px", "Oswald"=>"Oswald", "Roboto Condensed"=>"Roboto Condensed", "Source Sans Pro"=>"Source Sans Pro", "Montserrat"=>"Montserrat", "Raleway"=>"Raleway", "PT Sans"=>"PT Sans", "Roboto Slab"=>"Roboto Slab", "Merriweather"=>"Merriweather", "Open Sans Condensed"=>"Open Sans Condensed", "Droid Sans"=>"Droid Sans", "Ubuntu"=>"Ubuntu", "Lora"=>"Lora", "Droid Serif"=>"Droid Serif", "Playfair Display"=>"Playfair Display", "Arimo"=>"Arimo", "PT Serif"=>"PT Serif", "Noto Sans"=>"Noto Sans", "Titillium Web"=>"Titillium Web", "PT Sans Narrow"=>"PT Sans Narrow", "Muli"=>"Muli", "Indie Flower"=>"Indie Flower", "Bitter"=>"Bitter", "Poppins"=>"Poppins", "Fjalla One"=>"Fjalla One", "Inconsolata"=>"Inconsolata", "Hind"=>"Hind", "Dosis"=>"Dosis", "Oxygen"=>"Oxygen", "Anton"=>"Anton", "Cabin"=>"Cabin", "Noto Serif"=>"Noto Serif", "Arvo"=>"Arvo", "Lobster"=>"Lobster", "Crimson Text"=>"Crimson Text", "Yanone Kaffeesatz"=>"Yanone Kaffeesatz", "Nunito"=>"Nunito", "Libre Baskerville"=>"Libre Baskerville", "Bree Serif"=>"Bree Serif", "Catamaran"=>"Catamaran", "Josefin Sans"=>"Josefin Sans", "Merriweather Sans"=>"Merriweather Sans", "Abel"=>"Abel", "Exo 2"=>"Exo 2", "Gloria Hallelujah"=>"Gloria Hallelujah", "Abril Fatface"=>"Abril Fatface", "Fira Sans"=>"Fira Sans", "Pacifico"=>"Pacifico", "Varela Round"=>"Varela Round", "Ubuntu Condensed"=>"Ubuntu Condensed", "Roboto Mono"=>"Roboto Mono", "Quicksand"=>"Quicksand", "Karla"=>"Karla", "Asap"=>"Asap", "Amatic SC"=>"Amatic SC", "Rokkitt"=>"Rokkitt", "Signika"=>"Signika", "Rubik"=>"Rubik", "Archivo Narrow"=>"Archivo Narrow", "Play"=>"Play", "Shadows Into Light"=>"Shadows Into Light", "Questrial"=>"Questrial", "Work Sans"=>"Work Sans", "Cuprum"=>"Cuprum", "Dancing Script"=>"Dancing Script", "Francois One"=>"Francois One", "Alegreya"=>"Alegreya", "PT Sans Caption"=>"PT Sans Caption", "Vollkorn"=>"Vollkorn", "Exo"=>"Exo", "Maven Pro"=>"Maven Pro", "Patua One"=>"Patua One", "Orbitron"=>"Orbitron", "Acme"=>"Acme", "Ropa Sans"=>"Ropa Sans", "Source Code Pro"=>"Source Code Pro", "Pathway Gothic One"=>"Pathway Gothic One", "EB Garamond"=>"EB Garamond", "Crete Round"=>"Crete Round", "Cinzel"=>"Cinzel", "Comfortaa"=>"Comfortaa", "Lobster Two"=>"Lobster Two", "Alegreya Sans"=>"Alegreya Sans", "Josefin Slab"=>"Josefin Slab", "News Cycle"=>"News Cycle", "Architects Daughter"=>"Architects Daughter", "Noticia Text"=>"Noticia Text", "Yellowtail"=>"Yellowtail", "Russo One"=>"Russo One", "Poiret One"=>"Poiret One", "Source Serif Pro"=>"Source Serif Pro", "ABeeZee"=>"ABeeZee", "Monda"=>"Monda", "Satisfy"=>"Satisfy", "Quattrocento Sans"=>"Quattrocento Sans", "Hammersmith One"=>"Hammersmith One" );

		include 'controls/class-nf-customizer-range-slider.php';
		do_action( 'nf_styler_add_theme_section', $wp_customize, $form_id );
		include 'controls/form-wrapper.php';
		include 'controls/field-labels.php';
		include 'controls/field-descriptions.php';
		include 'controls/placeholders.php';
		include 'controls/text-fields.php';
		include 'controls/dropdown-fields.php';
		include 'controls/radio-inputs.php';
		include 'controls/checkbox-inputs.php';
		include 'controls/paragraph-textarea.php';
		include 'controls/confirmation-message.php';
		include 'controls/error-message.php';
		include 'controls/submit-button.php';
		include 'controls/general-settings.php';
	}
}
