<style>
body.nf_styler_preview{
	background:#fff !important;
	padding: 20px;
}

</style>
<?php 

$form_id = get_option( 'nf_styler_form_id_customizer' );

echo '<div class="nf-styler-preview" style="max-width:900px; margin:0 auto;">';
echo do_shortcode('[ninja_form id='.$form_id.']');
echo '</div>';