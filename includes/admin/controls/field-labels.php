<?php
//form fields section

$wp_customize->add_section( 'nf_styler_form_id_field_labels' , array(
		'title' => 'Field Labels',
		// 'panel' => 'nf_styler_panel',
	) );



$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-labels][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-labels][font-size]', array(
			'label'   => 'Label Font Size',
			'section' => 'nf_styler_form_id_field_labels',
			'settings' =>'nf_styler_form_id_' . $form_id . '[field-labels][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-labels][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[field-labels][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Label Font Color' ),
			'section' => 'nf_styler_form_id_field_labels',
		)
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-labels][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-labels][margin]', array(
			'label'   => 'Margin',
			'section' => 'nf_styler_form_id_field_labels',
			'settings' => 'nf_styler_form_id_' . $form_id . '[field-labels][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-labels][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-labels][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_field_labels',
			'settings' => 'nf_styler_form_id_' . $form_id . '[field-labels][padding]',
		) ) );
