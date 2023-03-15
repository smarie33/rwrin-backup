function cptui_register_my_cpts() {

	/**
	 * Post Type: Interviews.
	 */

	$labels = [
		"name" => esc_html__( "Interviews", "bootscore" ),
		"singular_name" => esc_html__( "Interview", "bootscore" ),
	];

	$args = [
		"label" => esc_html__( "Interviews", "bootscore" ),
		"labels" => $labels,
		"description" => "Each interview from the collection",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "interview", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-video-alt2",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
		"taxonomies" => [ "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "interview", $args );

	/**
	 * Post Type: Committee.
	 */

	$labels = [
		"name" => esc_html__( "Committee", "bootscore" ),
		"singular_name" => esc_html__( "Committee", "bootscore" ),
	];

	$args = [
		"label" => esc_html__( "Committee", "bootscore" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "committee", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "committee", $args );

	/**
	 * Post Type: Documentaries.
	 */

	$labels = [
		"name" => esc_html__( "Documentaries", "bootscore" ),
		"singular_name" => esc_html__( "Documentary", "bootscore" ),
	];

	$args = [
		"label" => esc_html__( "Documentaries", "bootscore" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "documentaries", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-video-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "documentaries", $args );

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => esc_html__( "Events", "bootscore" ),
		"singular_name" => esc_html__( "Event", "bootscore" ),
	];

	$args = [
		"label" => esc_html__( "Events", "bootscore" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
