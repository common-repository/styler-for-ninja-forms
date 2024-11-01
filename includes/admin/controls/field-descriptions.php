<?php
//form  section
$wp_customize->add_section( 'nf_styler_form_id_field_descriptions' , array(
		'title' => 'Field Description',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-descriptions][text-align]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[field-descriptions][text-align]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_field_descriptions', // Required, core or custom.
		'label' => __( 'Description Font Alignment' ),
		'choices'        => $align_pos,
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-descriptions][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-descriptions][font-size]', array(
			'label'   => 'Description Text Font Size',
			'section' => 'nf_styler_form_id_field_descriptions',
			'settings' =>'nf_styler_form_id_' . $form_id . '[field-descriptions][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-descriptions][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[field-descriptions][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Description Text Font Color' ),
			'section' => 'nf_styler_form_id_field_descriptions',
		)
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-descriptions][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-descriptions][margin]', array(
			'label'   => 'Margin',
			'section' => 'nf_styler_form_id_field_descriptions',
			'settings' => 'nf_styler_form_id_' . $form_id . '[field-descriptions][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[field-descriptions][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[field-descriptions][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_field_descriptions',
			'settings' => 'nf_styler_form_id_' . $form_id . '[field-descriptions][padding]',
		) ) );
