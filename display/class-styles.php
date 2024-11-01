<?php
$get_form_options = get_option( "nf_styler_form_id_".$css_form_id );
if ( isset( $get_form_options['form-wrapper']['font'] ) ) {
    $font_name = $get_form_options['form-wrapper']['font'];
    $font_name= str_replace( ' ', '+', $font_name );
    if ( $font_name !== 'Default' ) {
        echo "<link href='https://fonts.googleapis.com/css?family=".$font_name."' rel='stylesheet' type='text/css'>";
    }
} ?>
<style type="text/css">
body #nf-form-<?php echo $css_form_id ?>-cont {
<?php echo $main_class_object->get_form_styles( $css_form_id, 'form-wrapper' );  ?>
<?php echo empty( $get_form_options['form-wrapper']['background-image'] )?'':'background-image:url("'. $get_form_options['form-wrapper']['background-image'].'");' ;  ?>
<?php
if ( !empty( $get_form_options['form-wrapper']['font'] ) ) {
    if ( $get_form_options['form-wrapper']['font'] == 'Default' ) {
        echo 'font-family:inherit;' ;
    }
    else {
        echo 'font-family:'. $get_form_options['form-wrapper']['font'].';' ;
    }
} ?>
}



body #nf-form-title-<?php echo $css_form_id ?>  h3 {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'form-title' );  ?>
    }



	body #nf-form-<?php echo $css_form_id ?>-cont .submit-container input[type=button]:hover {
    <?php echo isset($get_form_options['submit-button']['hover-color'])?'background-color:'. $get_form_options['submit-button']['hover-color'].';':''; ?>
    <?php echo isset($get_form_options['submit-button']['font-hover-color'])?'color:'. $get_form_options['submit-button']['font-hover-color'].';':''; ?>
   }

   body #nf-form-<?php echo $css_form_id ?>-cont .submit-container input[type=button] {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'submit-button' );  ?>
    <?php
if ( empty( $get_form_options['submit-button']['border-size'] ) ) {
    echo 'border-width: 0px;';
}
if ( !empty( $get_form_options['submit-button']['text-align'] ) ) {
    echo 'float:'. $get_form_options['submit-button']['text-align'].';' ;
}
?>
}




body #nf-form-<?php echo $css_form_id ?>-cont .textbox-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .email-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .firstname-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .lastname-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .address-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .city-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .zip-container input,
body #nf-form-<?php echo $css_form_id ?>-cont .spam-container input

{
 <?php echo $main_class_object->get_form_styles( $css_form_id, 'text-fields' );  ?>
       <?php
if ( empty( $get_form_options['text-fields']['border-size'] ) ) {
    echo 'border-width: 1px;';
}
?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .textarea-container textarea {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'paragraph-textarea' );  ?>
        <?php
if ( empty( $get_form_options['text-fields']['border-size'] ) ) {
    echo 'border-width: 1px;';
}
?>
    <?php echo empty( $get_form_options['text-fields']['background-color'] )?'':'background:'. $get_form_options['text-fields']['background-color'].';'; ?>
    <?php echo empty( $get_form_options['text-fields']['border-size'] )?'':'border-width:'. $get_form_options['text-fields']['border-size'].$main_class_object->nf_styler_add_px_to_value($get_form_options['text-fields']['border-size']).';'; ?>
    <?php echo empty( $get_form_options['text-fields']['border-color'] )?'':'border-color:'. $get_form_options['text-fields']['border-color'].';'; ?>
    <?php echo empty( $get_form_options['text-fields']['border-type'] )?'':'border-style:'. $get_form_options['text-fields']['border-type'].';'; ?>
    <?php echo empty( $get_form_options['text-fields']['font-size'] )?'':'font-size:'. $get_form_options['text-fields']['font-size'].$main_class_object->nf_styler_add_px_to_value($get_form_options['text-fields']['font-size']).';'; ?>
    <?php echo empty( $get_form_options['text-fields']['font-color'] )?'':'color:'. $get_form_options['text-fields']['font-color'].';'; ?>
    <?php
if ( !empty( $get_form_options['text-fields']['border-radius'] ) ) {
    echo 'border-radius:'.$get_form_options['text-fields']['border-radius'].$main_class_object->nf_styler_add_px_to_value($get_form_options['text-fields']['border-radius']).';';
    echo '-web-border-radius:'.$get_form_options['text-fields']['border-radius'].$main_class_object->nf_styler_add_px_to_value($get_form_options['text-fields']['border-radius']).';';
    echo '-moz-border-radius:'.$get_form_options['text-fields']['border-radius'].$main_class_object->nf_styler_add_px_to_value($get_form_options['text-fields']['border-radius']).';';
}  ?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .listcountry-container select,
body #nf-form-<?php echo $css_form_id ?>-cont .listselect-container select
{

    <?php echo $main_class_object->get_form_styles( $css_form_id, 'dropdown-fields' );  ?>
         <?php
if ( empty( $get_form_options['dropdown-fields']['border-size'] ) ) {
    echo 'border-width: 1px;';
}
?>
}


body #nf-form-<?php echo $css_form_id ?>-cont .listradio-container .nf-field-element label {
   <?php echo $main_class_object->get_form_styles( $css_form_id, 'radio-inputs' );  ?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .listcheckbox-container .nf-field-element label {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'checkbox-inputs' );  ?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .nf-field-description {
 <?php echo $main_class_object->get_form_styles( $css_form_id, 'field-descriptions' );  ?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .nf-field-label  {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'field-labels' );  ?>
}


body #nf-form-<?php echo $css_form_id ?>-cont .nf-response-msg p  {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'confirmation-message' );  ?>
          <?php
		if ( empty( $get_form_options['confirmation-message']['border-size'] ) ) {
			echo 'border-width: 1px;';
		}
?>
}

body #nf-form-<?php echo $css_form_id ?>-cont .nf-error-msg {
    <?php echo $main_class_object->get_form_styles( $css_form_id, 'error-message' );  ?>
          <?php
if ( empty( $get_form_options['error-message']['border-size'] ) ) {
    echo 'border-width: 1px;';
}
?>
}




/* Option to style placeholder */
body #nf-form-<?php echo $css_form_id ?>-cont  ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  <?php echo $main_class_object->get_form_styles( $css_form_id, 'placeholders' );  ?>
}
body #nf-form-<?php echo $css_form_id ?>-cont  ::-moz-placeholder { /* Firefox 19+ */
  <?php echo $main_class_object->get_form_styles( $css_form_id, 'placeholders' );  ?>
}
body #nf-form-<?php echo $css_form_id ?>-cont  :-ms-input-placeholder { /* IE 10+ */
  <?php echo $main_class_object->get_form_styles( $css_form_id, 'placeholders' );  ?>
}
body #nf-form-<?php echo $css_form_id ?>-cont  :-moz-placeholder { /* Firefox 18- */
  <?php echo $main_class_object->get_form_styles( $css_form_id, 'placeholders' );  ?>
}


        </style>