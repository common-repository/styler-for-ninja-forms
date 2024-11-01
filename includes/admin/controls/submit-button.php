<?php
//submit button

$wp_customize->add_section( 'nf_styler_form_id_submit_button' , array(
		'title' => 'Submit Button',
		// 'panel' => 'nf_styler_panel',
	) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][width]', array(
	'label'   => 'Width',
	'section' => 'nf_styler_form_id_submit_button',
	'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][width]',
	'input_attrs' =>array(
		'min'=>10,
		'max'=>1200,
		'step'=>1
	),
) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][height]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][height]', array(
	'label'   => 'Height',
	'section' => 'nf_styler_form_id_submit_button',
	'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][height]',
	'input_attrs' =>array(
		'min'=>10,
		'max'=>1200,
		'step'=>1
	),
) ) );
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][font-size]', array(
	'label'   => 'Font Size',
	'section' => 'nf_styler_form_id_submit_button',
	'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][font-size]',
	'input_attrs' =>array(
		'min'=>0,
		'max'=>50,
		'step'=>1
	),
  ) ) );
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[submit-button][font-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Font Color' ),
			'section' => 'nf_styler_form_id_submit_button',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][font-hover-color]' , array(
		'default'     => '',
		'transport'   => 'refresh',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[submit-button][font-hover-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Hover Font Color' ),
			'section' => 'nf_styler_form_id_submit_button',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][button-align]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[submit-button][button-align]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_submit_button', // Required, core or custom.
		'label' => __( 'Button Position' ),
		'choices'        => $align_pos,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][button-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[submit-button][button-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Button Background Color' ),
			'section' => 'nf_styler_form_id_submit_button',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][hover-color]' , array(
		'default'     => '',
		'transport'   => 'refresh',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[submit-button][hover-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Hover Color' ),
			'section' => 'nf_styler_form_id_submit_button',
		)
	)
);



$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][border-size]' , array(
		'default'     => '0px',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][border-size]', array(
			'label'   => 'Border Size',
			'section' => 'nf_styler_form_id_submit_button',
			'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][border-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][border-type]' , array(
		'default'     => 'inherit',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[submit-button][border-type]',   array(
		'type' => 'select',
		'priority' => 10, // Within the section.
		'section' => 'nf_styler_form_id_submit_button', // Required, core or custom.
		'label' => __( 'Border Type' ),
		'choices'        => $border_types,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][border-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, // WP_Customize_Manager
		'nf_styler_form_id_' . $form_id . '[submit-button][border-color]', // Setting id
		array( // Args, including any custom ones.
			'label' => __( 'Border Color' ),
			'section' => 'nf_styler_form_id_submit_button',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][border-radius]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][border-radius]', array(
			'label'   => 'Border Radius',
			'section' => 'nf_styler_form_id_submit_button',
			'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][border-radius]',
			'choices' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][margin]', array(
			'label'   => 'Margin',
			'section' => 'nf_styler_form_id_submit_button',
			'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[submit-button][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );



$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[submit-button][padding]', array(
			'label'   => 'Padding',
			'section' => 'nf_styler_form_id_submit_button',
			'settings' => 'nf_styler_form_id_' . $form_id . '[submit-button][padding]',
		) ) );
