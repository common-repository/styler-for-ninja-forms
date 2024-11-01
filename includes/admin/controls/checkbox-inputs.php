<?php

$wp_customize->add_section( 'nf_styler_form_id_checkbox_inputs' , array(
		'title' => 'Checkbox Inputs',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][width]', array(
			'label'   => 'Width',
			'section' => 'nf_styler_form_id_checkbox_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][width]',
			'input_attrs' =>array(
				'min'=>10,
				'max'=>1200,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][font-size]', array(
			'label'   => 'Font Size',
			'section' => 'nf_styler_form_id_checkbox_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[checkbox-inputs][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_checkbox_inputs',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_checkbox_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[checkbox-inputs][padding]',
		) ) );
