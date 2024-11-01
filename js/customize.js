( function ( $ ) {

	$(function(){
	wp.customize.previewer.bind( 'nf-focus-control', function( data ) {
		var form_id = data.form_id;

		switch( data.control_type ){
			case'text-input':
			var control = wp.customize.control('nf_styler_form_id_'+form_id+'[text-fields][width]' );
			break;
			case'paragraph-textarea':
			var control = wp.customize.control('nf_styler_form_id_'+form_id+'[paragraph-textarea][width]' );
			break;
			case'dropdown':
			var control = wp.customize.control('nf_styler_form_id_'+form_id+'[dropdown-fields][width]' );
			break;
			case'field-labels':
			var control = wp.customize.control('nf_styler_form_id_'+form_id+'[field-labels][font-size]' );
			break;
			case'error-msg':
			var control = wp.customize.control('nf_styler_form_id_'+form_id+'[error-message][text-align]' );
			break;
		}
		control.focus();
	} );
} );
	// Extend Section
	var _sectionEmbed = wp.customize.Section.prototype.embed;
	var _sectionIsContextuallyActive = wp.customize.Section.prototype.isContextuallyActive;
	var _sectionAttachEvents = wp.customize.Section.prototype.attachEvents;

	wp.customize.Section = wp.customize.Section.extend( {
		attachEvents: function () {
			var sec_id = this.params.id;
			if (sec_id.indexOf("nf_styler_") == -1) {

				_sectionAttachEvents.call( this );

				return;

			}

			_sectionAttachEvents.call( this );

			var section = this;

			section.expanded.bind( function ( expanded ) {
				
				// var parent = api.section( section.params )
				if ( expanded ) {

					$('#sub-accordion-section-'+section.params.id).addClass( 'nf_styler_customizer_section' );

				} else {

					$('#sub-accordion-section-'+section.params.id).removeClass( 'nf_styler_customizer_section' );

				}

			} );

		}
	})

	$( function () {
		// Range Slider
		$( 'input.nf-styler-range-btn' ).on( 'mousedown', function () {
			var $range = $( this ),
				$range_input = $range.parent().children( '.nf-styler-range-input' );

			value = $( this ).attr( 'value' );
			$range_input.val( value );

			$( this ).mousemove( function () {
				value = $( this ).attr( 'value' );
				$range_input.val( value );
			} );
		} );

		// spacing control
		$( '.nf_styler_spacing_control_ul ' ).on( 'keyup mouseup', 'input', function () {
			var ul = $( this ).parent().parent();
			var spacing = nf_styler_get_spacing_val( ul.find( '.spacing-top' ).val() ) + 'px ';
			spacing += nf_styler_get_spacing_val( ul.find( '.spacing-right' ).val() ) + 'px ';
			spacing += nf_styler_get_spacing_val( ul.find( '.spacing-bottom' ).val() ) + 'px ';
			spacing += nf_styler_get_spacing_val( ul.find( '.spacing-left' ).val() ) + 'px ';
			ul.next().val( spacing ).trigger( 'change' );
			// console.log( ul.next().val());
		} )
	} );

	function nf_styler_get_spacing_val( val ) {
		if ( val == '' ) {
			return 0;
		}
		return val;
	}
} )( jQuery );





