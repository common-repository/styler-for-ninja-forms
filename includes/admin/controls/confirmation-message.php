<?php

$wp_customize->add_section( 'nf_styler_form_id_confirmation_message' , array(
		'title' => 'Confirmation Message',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[confirmation-message][width]', array(
			'label'   => 'Width',
			'section' => 'nf_styler_form_id_confirmation_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[confirmation-message][width]',
			'input_attrs' =>array(
				'min'=>10,
				'max'=>1200,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[confirmation-message][font-size]', array(
			'label'   => 'Font Size',
			'section' => 'nf_styler_form_id_confirmation_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[confirmation-message][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[confirmation-message][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_confirmation_message',
		)
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][text-align]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[confirmation-message][text-align]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
		'label' => __( 'Text Alignment' ),
		'choices'        => $align_pos,
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][border-size]' , array(
		'default'     => '1px',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[confirmation-message][border-size]', array(
			'label'   => 'Border Size',
			'section' => 'nf_styler_form_id_confirmation_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[confirmation-message][border-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][border-type]' , array(
		'default'     => 'inherit',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[confirmation-message][border-type]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
		'label' => __( 'Border Type' ),
		'choices'        => $border_types,
	)
);

//  $wp_customize->add_setting( 'nf_styler_form_id_'.$form_id.'[confirmation-message][border-color]' , array(
//       'default'     => '',
//       'transport'   => 'postMessage',
//       'type' => 'option'
//   ) );

//   $wp_customize->add_control(
//   new WP_Customize_Color_Control(
//     $wp_customize, // WP_Customize_Manager
//     'nf_styler_form_id_'.$form_id.'[confirmation-message][border-color]', // Setting id
//     array( // Args, including any custom ones.
//       'label' => __( 'Border Color' ),
//       'section' => 'nf_styler_form_id_confirmation_message',
//     )
//   )
// );

//  $wp_customize->add_setting( 'nf_styler_form_id_'.$form_id.'[confirmation-message][border-radius]' , array(
//       'default'     => '',
//       'transport'   => 'postMessage',
//       'type' => 'option'
//   ) );

//   $wp_customize->add_control('nf_styler_form_id_'.$form_id.'[confirmation-message][border-radius]',   array(
//     'type' => 'text',
//     'priority' => 10, // Within the section.
//     'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
//     'label' => __( 'Border Radius' ),
//    'input_attrs' => array(
//     'placeholder' => 'Example: 4px or 10%'
//   )
//   )
// );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][background-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[confirmation-message][background-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Background Color' ),
			'section' => 'nf_styler_form_id_confirmation_message',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[confirmation-message][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[confirmation-message][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_confirmation_message',
			'settings' => 'nf_styler_form_id_' . $form_id . '[confirmation-message][padding]',
		) ) );
