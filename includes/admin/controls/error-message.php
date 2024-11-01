<?php

$wp_customize->add_section( 'nf_styler_form_id_error_message' , array(
		'title' => 'Validation Error Messages',
		// 'panel' => 'nf_styler_panel',
	) );




$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[error-message][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[error-message][font-size]', array(
			'label'   => 'Font Size',
			'section' => 'nf_styler_form_id_error_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[error-message][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[error-message][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[error-message][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_error_message',
		)
	)
);
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[error-message][text-align]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[error-message][text-align]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_error_message', // Required, core or custom.
		'label' => __( 'Text Alignment' ),
		'choices'        => $align_pos,
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[error-message][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[error-message][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_error_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[error-message][padding]',
		) ) );
