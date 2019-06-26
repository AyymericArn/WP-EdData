<?php
add_action( 'wp_ajax_ajax-actionpost', 'post_function' );
add_action( 'wp_ajax_nopriv_ajax-actionpost', 'post_function' );

function post_function() {

    global $wpdb, $_POST;

	$cat = $_POST['category'];
	
	$args = array(
		'posts_per_page' => -1,
		'category_name' => $cat,
		'orderby' => 'date'
	);
	
	$the_query = new WP_Query($args);

	$postsData = [];

	if ($the_query->have_posts() ) : while ( $the_query->have_posts() ) { 
        $the_query->the_post();

		$postsData[] = [
            'title' => get_the_title(),
			'link' => get_the_permalink(),
			'content' => get_the_content(),
			'excerpt' => get_the_excerpt(),
			'illu' => get_the_post_thumbnail_url(),
			'category' => get_the_category(),
			'author' => get_the_author(),
			'date' => get_the_date(),
			'question' => $question[0]
		];

	}
	endif;
		
	echo json_encode($postsData);
    die();

 }