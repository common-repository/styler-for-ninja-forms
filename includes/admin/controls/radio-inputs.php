<?php

$wp_customize->add_section( 'nf_styler_form_id_radio_inputs' , array(
		'title' => 'Radio Inputs',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[radio-inputs][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );



$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[radio-inputs][width]', array(
			'label'   => 'Width',
			'section' => 'nf_styler_form_id_radio_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[radio-inputs][width]',
			'input_attrs' =>array(
				'min'=>10,
				'max'=>1200,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[radio-inputs][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[radio-inputs][font-size]', array(
			'label'   => 'Font Size',
			'section' => 'nf_styler_form_id_radio_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[radio-inputs][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[radio-inputs][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[radio-inputs][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_radio_inputs',
		)
	)
);

//   $wp_customize->add_setting( 'nf_styler_form_id_'.$form_id.'[radio-inputs][margin]' , array(
//       'default'     => '',
//       'transport'   => 'postMessage',
//       'type' => 'option'
//   ) );

//   $wp_customize->add_control('nf_styler_form_id_'.$form_id.'[radio-inputs][margin]',   array(
//     'type' => 'text',
//     'priority' => 10, // Within the section.
//     'section' => 'nf_styler_form_id_radio_inputs', // Required, core or custom.
//     'label' => __( 'Margin' ),
//    'input_attrs' => array(
//     'placeholder' => 'Example: 5px 10px 5px 10px'
//   )
//   )
// );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[radio-inputs][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );




$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[radio-inputs][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_radio_inputs',
			'settings' => 'nf_styler_form_id_' . $form_id . '[radio-inputs][padding]',
		) ) );
