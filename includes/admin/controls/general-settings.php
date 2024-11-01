<?php
/* $wp_customize->add_section( 'nf_styler_form_id_general_settings' , array(
		'title' => 'Tools',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_general_settings[reset-styles]' , array(
		'default'     => -1,
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

//get all Ninja_Forms created by user
if ( function_exists( 'Ninja_Forms' ) ) {
	$forms =Ninja_Forms()->form()->get_forms();
	
	$select_form = array( -1 => '---Select form --' );
	foreach ( $forms as $form ) {
	
		$select_form[$form->get_id()] = $form->get_setting( 'title' );
	}
}
else {
	$select_form['form not installed'] = 'Ninja Forms not installed';
}

$wp_customize->add_control( 'nf_styler_general_settings[reset-styles]', array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_general_settings', // Required, core or custom.
		'label' => __( 'Select Form to Reset Styles' ),
		'choices'        => $select_form,

	) );

//reset styles button
$wp_customize->add_setting( 'nf_styler_form_id_reset_style_button', array(
		'default' => 'Delete Styles',
		'transport' => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_reset_style_button', array(
		'type' => 'button',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_general_settings', // Required, core or custom.
		'input_attrs' => array(
			'style' => 'float:left',
			'class' => 'gf-stla-reset-style-button'
		)
	) );


 */