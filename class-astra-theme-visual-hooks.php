<?php

defined( 'ABSPATH' ) or exit;

class Astra_Theme_Visual_Hooks {

	private static $_instance = null;

	/**
	 * All the Astra Hooks
	 * 
	 * @since  1.0.0
	 * @var array
	 */
	private $astra_hooks = array();

	public static function instance() {
		
		if ( ! isset( self::$_instance ) ) {
			self::$_instance = new self;
		}

		return self::$_instance;
	}

	public function set_hooks() {
		$this->astra_hooks = array(
			'head' => array(
				'title' => __( 'Head', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_html_before' => array(
						'title'       => 'html_before',
						'description' => __( 'Action to add your content or snippet just before the opening of <html> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_head_top' => array(
						'title'       => 'head_top',
						'description' => __( 'Action to add your content or snippet at top of the <head> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_head_bottom' => array(
						'title'       => 'head_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the <head> tag.', 'astra-theme-visual-hooks' ),
					),
					'wp_head' => array(
						'title'       => 'wp_head',
						'description' => __( 'Action to add custom style, script and meta at the bottom of <head> tag.', 'astra-theme-visual-hooks' ),
					),
				),
			),
			'header' => array(
				'title' => __( 'Header', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_body_top' => array(
						'title'       => 'body_top',
						'description' => __( 'Action to add your content or snippet at top of the <body> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_header_before' => array(
						'title'       => 'header_before',
						'description' => __( 'Action to add your content or snippet just before the opening <header> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_masthead_top' => array(
						'title'       => 'masthead_top',
						'description' => __( 'Action to add your content or snippet at  top of the <header> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_main_header_bar_top' => array(
						'title'       => 'main_header_bar_top',
						'description' => __( 'Action to add your content or snippet at top of the Main header.', 'astra-theme-visual-hooks' ),
					),
					'astra_masthead_content' => array(
						'title'       => 'masthead_content',
						'description' => __( 'Action to add your content or snippet in <header> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_masthead_toggle_buttons_before' => array(
						'title'       => 'masthead_toggle_buttons_before',
						'description' => __( 'Action to add your content or snippet before responsive menu toggle button.', 'astra-theme-visual-hooks' ),
					),
					'astra_masthead_toggle_buttons_after' => array(
						'title'       => 'masthead_toggle_buttons_after',
						'description' => __( 'Action to add your content or snippet after responsive menu toggle button.', 'astra-theme-visual-hooks' ),
					),
					'astra_main_header_bar_bottom' => array(
						'title'       => 'main_header_bar_bottom',
						'description' => __( 'Action to add your content or snippet after at bottom of the Main header.', 'astra-theme-visual-hooks' ),
					),
					'astra_masthead_bottom' => array(
						'title'       => 'masthead_bottom',
						'description' => __( 'Action to add your content or snippet at  bottom of the <header> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_header_after' => array(
						'title'       => 'header_after',
						'description' => __( 'Action to add your content or snippet after the closing <header> tag.', 'astra-theme-visual-hooks' ),
					),
				),
			),
			'content' => array(
				'title' => __( 'Content', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_content_before' => array(
						'title'       => 'content_before',
						'description' => __( 'Action to add your content or snippet before main content.', 'astra-theme-visual-hooks' ),
					),
					'astra_content_top' => array(
						'title'       => 'content_top',
						'description' => __( 'Action to add your content or snippet at top of main content.', 'astra-theme-visual-hooks' ),
					),
					'astra_primary_content_top' => array(
						'title'       => 'primary_content_top',
						'description' => __( 'Action to add your content or snippet at top of the primary content.', 'astra-theme-visual-hooks' ),
					),
					'astra_content_while_before' => array(
						'title'       => 'content_while_before',
						'description' => __( 'Action to add your content or snippet before loop start.', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_before' => array(
						'title'       => 'entry_before',
						'description' => __( 'Action to add your content or snippet before <artical> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_top' => array(
						'title'       => 'entry_top',
						'description' => __( 'Action to add your content or snippet at top of the <artical> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_single_header_before' => array(
						'title'       => 'single_header_before',
						'description' => __( 'Action to add your content or snippet before single post header.', 'astra-theme-visual-hooks' ),
					),
					'astra_single_header_top' => array(
						'title'       => 'single_header_top',
						'description' => __( 'Action to add your content or snippet at top of the single post header.', 'astra-theme-visual-hooks' ),
					),
					'astra_single_header_bottom' => array(
						'title'       => 'single_header_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the single post header.', 'astra-theme-visual-hooks' ),
					),
					'astra_single_header_after' => array(
						'title'       => 'single_header_after',
						'description' => __( 'Action to add your content or snippet after single post header.', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_content_before' => array(
						'title'       => 'entry_content_before',
						'description' => __( 'Action to add your content or snippet before post content.', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_content_after' => array(
						'title'       => 'entry_content_after',
						'description' => __( 'Action to add your content or snippet after post content', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_bottom' => array(
						'title'       => 'entry_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the <artical> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_entry_after' => array(
						'title'       => 'entry_after',
						'description' => __( 'Action to add your content or snippet after closing <artical> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_primary_content_bottom' => array(
						'title'       => 'primary_content_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the primary content.', 'astra-theme-visual-hooks' ),
					),
					'astra_content_while_after' => array(
						'title'       => 'content_while_after',
						'description' => __( 'Action to add your content or snippet after loop end.', 'astra-theme-visual-hooks' ),
					),
					'astra_content_bottom' => array(
						'title'       => 'content_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the main content.', 'astra-theme-visual-hooks' ),
					),
					'astra_content_after' => array(
						'title'       => 'content_after',
						'description' => __( 'Action to add your content or snippet after main content.', 'astra-theme-visual-hooks' ),
					),
				),
			),
			'comment' => array(
				'title' => __( 'Comment', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_comments_before' => array(
						'title'       => 'comments_before',
						'description' => __( 'Action to add your content or snippet before opening of comment start.', 'astra-theme-visual-hooks' ),
					),
					'astra_comments_after' => array(
						'title'       => 'comments_after',
						'description' => __( 'Action to add your content or snippet after closing of comment wrapper.', 'astra-theme-visual-hooks' ),
					),
				),
			),
			'sidebar' => array(
				'title' => __( 'Sidebar', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_sidebars_before' => array(
						'title'       => 'sidebars_before',
						'description' => __( 'Action to add your content or snippet before opening of sidebar wrapper.', 'astra-theme-visual-hooks' ),
					),
					'astra_sidebars_after' => array(
						'title'       => 'sidebars_after',
						'description' => __( 'Action to add your content or snippet after closing of sidebar wrapper.', 'astra-theme-visual-hooks' ),
					),
				),
			),
			'footer' => array(
				'title' => __( 'Footer', 'astra-theme-visual-hooks' ),
				'hooks' => array(
					'astra_footer_before' => array(
						'title'       => 'footer_before',
						'description' => __( 'Action to add your content or snippet before the opening <footer> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_footer_content_top' => array(
						'title'       => 'footer_content_top',
						'description' => __( 'Action to add your content or snippet at top of the <footer> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_footer_content_bottom' => array(
						'title'       => 'footer_content_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the <footer> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_footer_after' => array(
						'title'       => 'footer_after',
						'description' => __( 'Action to add your content or snippet after the closing <footer> tag.', 'astra-theme-visual-hooks' ),
					),
					'astra_body_bottom' => array(
						'title'       => 'body_bottom',
						'description' => __( 'Action to add your content or snippet at bottom of the <body> tag.', 'astra-theme-visual-hooks' ),
					),
					'wp_footer' => array(
						'title'       => 'wp_footer',
						'description' => __( 'Action to add your content or snippet at end of the document.', 'astra-theme-visual-hooks' ),
					),
				),
			),
		);
	}

	private function get_hooks() {
		return $this->astra_hooks;
	}

	private function __construct() {

		add_action( 'admin_bar_menu', array( $this, 'admin_bar_menu'), 90 );

		if( ( isset( $_GET['astra-hooks' ] ) && 'show' === $_GET['astra-hooks' ] ) || apply_filters( 'astra_hooks_enable_for_non_admin_user', false ) ) {

			$this->set_hooks();

			add_action( 'wp', array( $this, 'display_hooks' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_css' ) );
		}
	}

	/**
	 * Admin Bar Menu
	 * 
	 * @since  1.1.0
	 * 
	 * @param  array $wp_admin_bar Admin bar menus.
	 * @return array               Admin bar menus.
	 */
	function admin_bar_menu( $wp_admin_bar = array() )
	{
		$title 	= __( 'Show Astra Hooks' , 'astra-theme-visual-hooks' );

		$href = add_query_arg( 'astra-hooks', 'show' );
		if( isset( $_GET['astra-hooks' ] ) && 'show' === $_GET['astra-hooks' ] ) {
			$title 	= __( 'Hide Astra Hooks' , 'astra-theme-visual-hooks' );
			$href = remove_query_arg( 'astra-hooks' );
		}
		
		$wp_admin_bar->add_menu( array(
			'title'		=> $title,
			'id'		=> 'astra-hooks-menu',
			'parent'	=> false,
			'href'		=> $href,
		) );

	}

	public function add_css() {
		$css = '   

		.astra-hook{ 
	        text-align: left;
		    margin: 10px;
		    padding: 5px 5px 5px 10px;
		    border: 0px;
		    outline: 0px;
		    font-size: 14px;
		    overflow: auto;
		    color: #333333;
		    direction: ltr;
		    word-spacing: normal;
		    line-height: 1.5;
		    word-wrap: normal;
		    border: 1px solid #b1b1b1;
		}

		.astra-hook-astra_footer_content_top,
		.astra-hook-astra_footer_content_bottom {
		    color: #b1b1b1;
		}

		';

		wp_add_inline_style( 'astra-theme-css', $css );
	}

	public function display_hooks() {

		foreach ( $this->get_hooks() as $section => $hooks_info ) {

			$hooks =  isset( $hooks_info[ 'hooks' ] ) ? $hooks_info[ 'hooks' ] : array();

			foreach ( $hooks as $hook => $hook_details ) {

				add_action( $hook, function() use ( $hook, $hook_details ) {
					echo "<div class='astra-hook astra-hook-$hook'>". esc_attr( $hook ) ."</div>";
				} );

			}
			
		}
	}

}

add_action( 'plugins_loaded', 'Astra_Theme_Visual_Hooks::instance' );