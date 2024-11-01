( function ( $ ) {
$(function(){
	var form_id  = nfForms[0].id;
	$( document.body ).on( 'click', '.textbox-container input,.email-container input,.firstname-container input,.lastname-container input,.address-container input,.city-container input,.spam-container input,.zip-container input', function(){
		var data={'form_id':form_id, 'control_type':'text-input'};
		wp.customize.preview.send( 'nf-focus-control', data );
	});
	$( document.body ).on( 'click', '.textarea-container textarea', function(){
		var data={'form_id':form_id, 'control_type':'paragraph-textarea'};
		wp.customize.preview.send( 'nf-focus-control', data );
	});
	$( document.body ).on( 'click', '.listcountry-container .nf-field-element,.liststate-container .nf-field-element, .listselect-container .nf-field-element', function(){
		var data={'form_id':form_id, 'control_type':'dropdown'};
		wp.customize.preview.send( 'nf-focus-control', data );
	});
	$( document.body ).on( 'click', '.nf-field-label', function(){
		var data={'form_id':form_id, 'control_type':'field-labels'};
		wp.customize.preview.send( 'nf-focus-control', data );
	});
	$( document.body ).on( 'click', '.nf-error-msg', function(){
		var data={'form_id':form_id, 'control_type':'error-msg'};
		wp.customize.preview.send( 'nf-focus-control', data );
	});
	
})

	var form_id = nf_styler_localize_current_form;
	$( "body" ).addClass( "nf_styler_preview");

	//Check if px is added, if not then add automatically
	function addPxToValue( to ) {
		var parsedTo = parseInt( to );
		if ( parsedTo == to ) {
			to = to + 'px';
		}
		return to;
	}

	function addGoogleFont( FontName ) {
		var fontPlus = '';
		FontName = FontName.split( " " );
		if ( $.isArray( FontName ) ) {
			fontPlus = FontName[ 0 ];
			for ( var i = 1; i < FontName.length; i++ ) {
				fontPlus = fontPlus + '+' + FontName[ i ];
			}

		}
		$( "head" ).append( "<link href='https://fonts.googleapis.com/css?family=" + fontPlus + "' rel='stylesheet' type='text/css'>" );
	}
	//********************************* Form Wrapper *******************************************

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont' ).css( 'width', to );

		} );
	} );
	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont' ).css( 'background', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][font]', function ( value ) {
		value.bind( function ( to ) {
			if ( to == 'Default' ) {
				$( '#nf-form-' + form_id + '-cont' ).css( 'font-family', 'inherit' );
			}
			else {
				addGoogleFont( to );
				$( '#nf-form-' + form_id + '-cont' ).css( 'font-family', to );
			}
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont' ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont' ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont' ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][border-radius]', function ( value ) {
	
		value.bind( function ( to ) {
			to = addPxToValue( to );
			console.log(to)
			$( '#nf-form-' + form_id + '-cont' ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][background-image]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont' ).css( 'background-image', 'url(' + to + ')' );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][margin]', function ( value ) {

		value.bind( function ( to ) {
			   to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-wrapper][padding]', function ( value ) {
		value.bind( function ( to ) {
			 to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont' ).css( 'padding', to );
		} );
	} );

	//********************************* Form Title *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[form-title][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-title-' + form_id + ' h3' ).css( 'color', to );
		} );
	} );



	wp.customize( 'nf_styler_form_id_' + form_id + '[form-title][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-title-' + form_id + ' h3' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-title][text-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-title-' + form_id + ' h3' ).css( 'text-align', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[form-title][margin]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-title-' + form_id + ' h3' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[form-title][padding]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$( '#nf-form-title-' + form_id + ' h3' ).css( 'padding', to );
		} );
	} );

	

	//********************************* Field Labels *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-labels][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-field-label' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[field-labels][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-field-label' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-labels][text-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-field-label' ).css( 'text-align', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-labels][margin]', function ( value ) {
		value.bind( function ( to ) {
			//   to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-field-label' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[field-labels][padding]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-field-label' ).css( 'padding', to );
		} );
	} );

	



	//********************************* Field Descriptions *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-descriptions][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-field-description' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[field-descriptions][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$('#nf-form-' + form_id + '-cont .nf-field-description' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-descriptions][text-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-field-description').css( 'display', 'block' );
			$( '#nf-form-' + form_id + '-cont .nf-field-description' ).css( 'text-align', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[field-descriptions][margin]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$('#nf-form-' + form_id + '-cont .nf-field-description' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[field-descriptions][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$('#nf-form-' + form_id + '-cont .nf-field-description').css( 'padding', to );
		} );
	} );

	//********************************* Text Fields *******************************************

	var nf_all_text_field_types = '#nf-form-' + form_id + '-cont .textbox-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .email-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .firstname-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .lastname-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .address-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .city-container input,';
	nf_all_text_field_types += '#nf-form-' + form_id + '-cont .spam-container input';
	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_text_field_types ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_text_field_types ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][width]', function ( value ) {
		value.bind( function ( to ) {
		
			to = addPxToValue( to );
			$( nf_all_text_field_types ).css( 'width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_text_field_types ).css( 'background', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_text_field_types ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_text_field_types ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_text_field_types ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_text_field_types ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][margin]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( nf_all_text_field_types ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( nf_all_text_field_types ).css( 'padding', to );
		} );
	} );

	//********************************* Dropdown Fields *******************************************
	var nf_all_dropdown_field_types = '#nf-form-' + form_id + '-cont .listcountry-container select,';
	nf_all_dropdown_field_types += '#nf-form-' + form_id + '-cont .listselect-container select';

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$(nf_all_dropdown_field_types ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_dropdown_field_types ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_dropdown_field_types ).css( 'width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_dropdown_field_types ).css( 'background', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_dropdown_field_types ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_dropdown_field_types ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( nf_all_dropdown_field_types ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( nf_all_dropdown_field_types ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][margin]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$( nf_all_dropdown_field_types ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[dropdown-fields][padding]', function ( value ) {
		value.bind( function ( to ) {
			//    to = addPxToValue(to);
			$( nf_all_dropdown_field_types ).css( 'padding', to );
		} );
	} );

	
	//********************************* Radio Inputs *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[radio-inputs][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .listradio-container .nf-field-element label' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[radio-inputs][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .listradio-container .nf-field-element label' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[radio-inputs][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .listradio-container .nf-field-element label' ).css( 'width', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[radio-inputs][margin]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .listradio-container .nf-field-element label' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[radio-inputs][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .listradio-container .nf-field-element label' ).css( 'padding', to );
		} );
	} );

	//********************************* Checkbox Inputs *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[checkbox-inputs][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .listcheckbox-container .nf-field-element label' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[checkbox-inputs][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .listcheckbox-container .nf-field-element label' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[checkbox-inputs][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .listcheckbox-container .nf-field-element label' ).css( 'width', to );
		} );
	} );


	// wp.customize( 'nf_styler_form_id_'+form_id+'[checkbox-inputs][margin]', function( value ) {
	//     value.bind( function( to ) {
	//             $( '#gform_wrapper_'+form_id+' .gform_body .gform_fields .gfield .gfield_checkbox' ).css( 'margin',to );
	//          } );
	//   } );

	wp.customize( 'nf_styler_form_id_' + form_id + '[checkbox-inputs][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .listcheckbox-container .nf-field-element label' ).css( 'padding', to );
		} );
	} );

	//********************************* Paragraph Textarea Fields *******************************************
	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$('#nf-form-' + form_id + '-cont .textarea-container textarea').css( 'background', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea').css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[text-fields][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'border-radius', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[paragraph-textarea][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'width', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[paragraph-textarea][margin]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[paragraph-textarea][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .textarea-container textarea' ).css( 'padding', to );
		} );
	} );



	//********************************* Submit Button *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][button-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'background', to );
		} );
	} );

	// wp.customize( 'nf_styler_form_id_'+form_id+'[submit-button][hover-color]', function( value ) {
	//   value.bind( function( to ) {
	//           $( '#gform_wrapper_'+form_id+' .gform_footer input[type=submit]:hover' ).css( 'background',to );
	//           $( '#gform_wrapper_'+form_id+' .gform_footer button.mdl-button:hover' ).css( 'background',to );
	//        } );
	// } );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$('#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][height]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'height', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][button-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'text-align', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][margin]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[submit-button][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .submit-container input[type=button]' ).css( 'padding', to );
		} );
	} );

	

	//********************************* Confirmation Message *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'color', to );
			
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][text-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'text-align', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'background', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][margin]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[confirmation-message][padding]', function ( value ) {
		value.bind( function ( to ) {
			// to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-response-msg p' ).css( 'padding', to );
		} );
	} );

	//********************************* error Message *******************************************


	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][font-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][text-align]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'text-align', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][font-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'font-size', to );
		} );
	} );


	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][width]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][background-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'background', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][border-size]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'border-width', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][border-type]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'border-style', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][border-color]', function ( value ) {
		value.bind( function ( to ) {
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'border-color', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][border-radius]', function ( value ) {
		value.bind( function ( to ) {
			to = addPxToValue( to );
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'border-radius', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][margin]', function ( value ) {
		value.bind( function ( to ) {
			//   to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'margin', to );
		} );
	} );

	wp.customize( 'nf_styler_form_id_' + form_id + '[error-message][padding]', function ( value ) {
		value.bind( function ( to ) {
			//  to = addPxToValue(to);
			$( '#nf-form-' + form_id + '-cont .nf-error-msg' ).css( 'padding', to );
		} );
	} );



} )( jQuery );