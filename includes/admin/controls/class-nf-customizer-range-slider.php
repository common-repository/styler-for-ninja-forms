<?php 
  	/**
	 * Range-based sliding value picker for Customizer
	 */
	class NF_Customize_Control_Slider extends WP_Customize_Control {
		public $type = 'stylerrange';

		public function render_content() {
		?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif;
			if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<input class="nf-styler-range-btn" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> data-reset_value="<?php echo esc_attr( $this->setting->default ); ?>" />
			<input type="number" <?php $this->input_attrs(); ?> class="nf-styler-range-input" value="<?php echo esc_attr( $this->value() ); ?>" />px
			<!-- <span class="nf_styler_reset_slider"></span> -->
		</label>
		<?php
		}
	}

  	/**
	 * Spacing Field (Margin & Padding) for Customizer
	 */
	class NF_Customize_Control_Spacing extends WP_Customize_Control {
		public $type = 'stylerspacing'; 

		public function render_content() {
		?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?> (px)</span> 
			<?php endif;
			if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<style>
			.nf_styler_spacing_control_ul h4{
				text-align:center;
			}
			.nf_styler_spacing_control_ul li{
				display: inline-block;
				width: 50px;
				float: left;
				margin-right:10px;
			}


			</style>
			<ul class="nf_styler_spacing_control_ul">
			<li>
			<h4>Top</h3>
			<input  type="number" class="spacing-top">
			</li>
			<li>
			<h4>Bottom</h3>
			<input  type="number" class="spacing-bottom">
			</li>
			<li>
			<h4>Left</h3>
			<input  type="number" class="spacing-left">
			</li>
			<li>
			<h4>Right</h3>
			<input  type="number" class="spacing-right">
			</li>
			</ul>
			<input type="hidden" <?php $this->input_attrs(); ?> class="nf-styler-spacing-input" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>" />
		</label>
		<?php
	}
}