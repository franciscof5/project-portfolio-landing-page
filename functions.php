<?php
function init_pplp() {
	wp_enqueue_style("project-lp-css", get_template_directory_uri()."/project-lp.css");
	#echo get_template_directory_uri()."/project-lp.css";die;
}
add_action("wp_head", "init_pplp");

# TEMPLATE GENERATE FUNCTION 
function generate_content($posts_status) {
	$posts_get_arg = array(
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'post',
		'post_status'      => $posts_status
	);
	echo "<ul class='project-list'>";
	foreach ( get_posts($posts_get_arg) as $post ) : 
		//var_dump($post);die;
		generate_template($post);
	endforeach;
	echo "</ul>";
	wp_reset_postdata();
}

function generate_template($post) { 
	if($_SERVER["HTTP_HOST"]==$post->post_title) {
		$class = 'current';
	}  ?>
	<li class="<?php echo $class; ?>">
		<h3 class="linkt"><a href="http://<?php echo $post->post_title; ?>" class="link"><?php echo $post->post_title; ?></a></h3>
		<?php if($class) { ?> <span class="you_are_here">you are here</span> <?php }; ?>
		<span class="launch_date">(aprox.<?php  echo  human_time_diff( strtotime($post->post_date), current_time('timestamp') ) . ''; ?>)</span><br/>
		<p><?php echo $post->post_content; ?> </p>
		<p class="project_actions"><a href="http://grupof.com.br/?tag=<?php echo $post->post_title; ?>">News</a> | <a href="http://<?php echo $post->post_title; ?>/?&preview=true">Preview</a> | <a href="#">Notify me</a> | <a href="#">Stats</a></p>
	</li>
<?php } ?>

<?php
/* Developed by Francisco Matelli Matulovic - franciscomat.com - f5sites.com */
?>
