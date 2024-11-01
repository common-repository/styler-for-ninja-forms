<?php
//form text fields section

$wp_customize->add_section( 'nf_styler_form_id_paragraph_textarea' , array(
		'title' => 'Textarea Fields',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][width]', array(
			'label'   => 'Width',
			'section' => 'nf_styler_form_id_paragraph_textarea',
			'settings' => 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][width]',
			'input_attrs' =>array(
				'min'=>10,
				'max'=>1200,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][margin]', array(
			'label'   => 'Margin',
			'section' => 'nf_styler_form_id_paragraph_textarea',
			'settings' => 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );



$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_paragraph_textarea',
			'settings' => 'nf_styler_form_id_' . $form_id . '[paragraph-textarea][padding]',
		) ) );
