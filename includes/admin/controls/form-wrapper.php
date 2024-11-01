<?php
//form wrapper section

$wp_customize->add_section( 'nf_styler_form_wrapper_section' , array(
		'title' => 'Form Wrapper & Title',
		// 'panel' => 'nf_styler_panel',
	) );


// Form Wrapper
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][width]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-wrapper][width]', array(
			'label'   => 'Form Width',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-wrapper][width]',
			'input_attrs' =>array(
				'min'=>10,
				'max'=>1200,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][font]' , array(
		'default'     => 'Default',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[form-wrapper][font]',   array(
		'type' => 'select',
		'priority' => 10,
		'section' => 'nf_styler_form_id_form_wrapper',
		'label' => __( 'Form Font Family' ),
		'choices' => $font_collection,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][background-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nf_styler_form_id_' . $form_id . '[form-wrapper][background-color]', // Setting id
		array(
			'label' => __( 'Form Background Color' ),
			'section' => 'nf_styler_form_wrapper_section',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][background-image]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'nf_styler_form_id_' . $form_id . '[form-wrapper][background-image]',
		array(
			'label'      => 'Form Background Image' ,
			'section'    => 'nf_styler_form_wrapper_section',
			'settings'   => 'nf_styler_form_id_' . $form_id . '[form-wrapper][background-image]',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-size]' , array(
		'default'     => '0px',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-size]', array(
			'label'   => 'Form Border Size',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-type]' , array(
		'default'     => 'inherit',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-type]',   array(
		'type' => 'select',
		'priority' => 10,
		'section' => 'nf_styler_form_wrapper_section',
		'label' => __( 'Form Border Type' ),
		'choices'        => $border_types,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nf_styler_form_id_' . $form_id . '[form-wrapper][border-color]', // Setting id
		array(
			'label' => __( 'Form Border Color' ),
			'section' => 'nf_styler_form_wrapper_section',
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-radius]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );



$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-radius]', array(
			'label'   => 'Form Border Radius',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-wrapper][border-radius]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>20,
				'step'=>1
			),
		) ) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );


$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-wrapper][margin]', array(
			'label'   => 'Form Wraper Margin',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-wrapper][margin]',
		) ) );


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-wrapper][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-wrapper][padding]', array(
			'label'   => 'Form Wraper Padding',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-wrapper][padding]',
		) ) );


// Form Title
$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-title][font-color]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nf_styler_form_id_' . $form_id . '[form-title][font-color]', // Setting id
		array(
			'label' => __( 'Form Title Font Color' ),
			'section' => 'nf_styler_form_wrapper_section',
		)
	)
);


$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-title][font-size]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Slider( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-title][font-size]', array(
			'label'   => 'Form Title Font Size',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-title][font-size]',
			'input_attrs' =>array(
				'min'=>0,
				'max'=>50,
				'step'=>1
			),
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-title][text-align]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( 'nf_styler_form_id_' . $form_id . '[form-title][text-align]',   array(
		'type' => 'select',
		'priority' => 10,
		'section' => 'nf_styler_form_wrapper_section',
		'label' => __( 'Form Title Font Alignment' ),
		'choices'        => $align_pos,
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-title][margin]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );

$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-title][margin]', array(
			'label'   => 'Form Title Margin',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-title][margin]',
		) ) );

$wp_customize->add_setting( 'nf_styler_form_id_' . $form_id . '[form-title][padding]' , array(
		'default'     => '',
		'transport'   => 'postMessage',
		'type' => 'option'
	) );
$wp_customize->add_control( new NF_Customize_Control_Spacing( $wp_customize, 'nf_styler_form_id_' . $form_id . '[form-title][padding]', array(
			'label'   => 'Form Title Padding',
			'section' => 'nf_styler_form_wrapper_section',
			'settings' => 'nf_styler_form_id_' . $form_id . '[form-title][padding]',
		) ) );
