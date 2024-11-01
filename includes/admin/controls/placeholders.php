<?php
//form placeholders section uses refresh method

$wp_customize->add_section( 'nf_styler_form_id_placeholders' , array(
		'title' => 'Placeholders',
		// 'panel' => 'nf_styler_panel',
	) );



$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[placeholders][font-size]' , array(
		'default'     => '',
		'transport'   => 'refresh',
		'type' => 'option'
	) );
$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[placeholders][font-size]', array(
	'label'   => 'Font Size',
	'section' => 'nf_styler_form_id_placeholders',
	'settings' =>'nf_styler_form_id_' . $form_id . '[placeholders][font-size]',
	'input_attrs' =>array(
		'min'=>0,
		'max'=>50,
		'step'=>1
	),
) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[placeholders][font-color]' , array(
		'default'     => '',
		'transport'   => 'refresh',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[placeholders][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_placeholders',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[placeholders][padding]' , array(
		'default'     => '',
		'transport'   => 'refresh',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[placeholders][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_placeholders',
			'settings' => 'nf_styler_form_id_' . $form_id . '[placeholders][padding]',
		) ) );
