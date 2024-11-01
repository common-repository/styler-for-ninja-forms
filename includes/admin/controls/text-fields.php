<?php
//form text fields section

$wp_customize->add_section( 'nf_styler_form_id_text_fields' , array(
		'title' => 'Text Fields',
		// 'panel' => 'nf_styler_panel',
	) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][width]', array(
	'label'   => 'Width',
	'section' => 'nf_styler_form_id_text_fields',
	'settings' => 'nf_styler_form_id_' . $form_id . '[text-fields][width]',
	'input_attrs' =>array(
		'min'=>10,
		'max'=>1200,
		'step'=>1
	),
) ) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][font-size]', array(
	'label'   => 'Font Size',
	'section' => 'nf_styler_form_id_text_fields',
	'settings' =>'nf_styler_form_id_' . $form_id . '[text-fields][font-size]',
	'input_attrs' =>array(
		'min'=>0,
		'max'=>50,
		'step'=>1
	),
) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[text-fields][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_text_fields',
		)
	)
);
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][border-size]' , array(
		'default'     => '0px',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][border-size]', array(
			'label'   => 'Border Size',
			'section' => 'nf_styler_form_id_text_fields',
			'settings' => 'nf_styler_form_id_' . $form_id . '[text-fields][border-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][border-type]' , array(
		'default'     => 'inherit',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[text-fields][border-type]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_text_fields', // Required, core or custom.
		'label' => __( 'Border Type' ),
		'choices'        => $border_types,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][border-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[text-fields][border-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Border Color' ),
			'section' => 'nf_styler_form_id_text_fields',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][border-radius]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][border-radius]', array(
	'label'   => 'Border Radius',
	'section' => 'nf_styler_form_id_text_fields',
	'settings' => 'nf_styler_form_id_' . $form_id . '[text-fields][border-radius]',
	'input_attrs' =>array(
		'min'=>0,
		'max'=>20,
		'step'=>1
	),
) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][background-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[text-fields][background-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Background Color' ),
			'section' => 'nf_styler_form_id_text_fields',
		)
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[text-fields][margin]',   array(
		'type' => 'text',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_text_fields', // Required, core or custom.
		'label' => __( 'Margin' ),
		'input_attrs' => array(
			'placeholder' => 'Example: 5px 10px 5px 10px'
		)
	)
);

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][margin]', array(
			'label'   => 'Margin',
			'section' => 'nf_styler_form_id_text_fields',
			'settings' => 'nf_styler_form_id_' . $form_id . '[text-fields][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[text-fields][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[text-fields][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_text_fields',
			'settings' => 'nf_styler_form_id_' . $form_id . '[text-fields][padding]',
		) ) );
