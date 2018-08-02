function convert_root_cats_to_radio() {
global $post_type;
?>
	<script type="text/javascript">
	jQuery( document ).ready(function() {
		jQuery("#categorychecklist>li>input").each(function(){
			this.disabled = "disabled";
		});
		jQuery("#categorychecklist>li>label input").each(function(){
			this.type = 'radio';
		});
	});
	</script> <?php
}
add_action( 'admin_footer-post.php',     'convert_root_cats_to_radio' );
add_action( 'admin_footer-post-new.php', 'convert_root_cats_to_radio' );
