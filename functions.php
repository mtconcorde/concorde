<?php
/*
 *  Author: Concorde
 *  URL: concorde.edu	
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

function header_desktop_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'main-desktop-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="menu">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function header_mobile_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'main-mobile-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="list-unstyled list-unformatted">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function footer_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="footer-nav">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load Concorde scripts
function concorde_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) { 
        
	    wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.7.1.min.js', array(), '1.0.0'); // Script
        wp_enqueue_script('modernizr'); // Enqueue it!
        
        wp_register_script('jqbrowser', get_template_directory_uri() . '/js/plattform/jqbrowser.js', array('jquery'), '1.0.0'); // Script
        wp_enqueue_script('jqbrowser'); // Enqueue it!
        
        wp_register_script('script', get_template_directory_uri() . '/js/plattform/script.js', array('jquery'), '1.0.0'); // Script
        wp_enqueue_script('script'); // Enqueue it!
	    
	    wp_register_script('plugins', get_template_directory_uri() . '/js/plattform/plugins.js', array('jquery'), '1.0.0'); // plugins
        wp_enqueue_script('plugins'); // Enqueue it
        
        wp_register_script('main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '1.0.0'); // Script
        wp_enqueue_script('main'); // Enqueue it!
        
    }
}

// Load Concorde styles
function concorde_styles()
{  
    wp_register_style('forms', get_template_directory_uri() . '/css/forms.css', array(), '1.0', 'all');
    wp_enqueue_style('forms'); // Enqueue it!
    
    wp_register_style('concorde', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('concorde'); // Enqueue it!
    
    wp_register_style('plattform', get_template_directory_uri() . '/css/plattform.css', array(), '1.0', 'all');
    wp_enqueue_style('plattform'); // Enqueue it!
}

// Register Concorde Navigation (if not hard-coded within header/footer.php)
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'main-desktop-menu' => __('Main Desktop Menu', 'concorde'), // Main Desktop Navigation
        'main-mobile-menu' => __('Main Mobile Menu', 'concorde'), // Main Mobile Navigation
        'sidebar-menu' => __('Sidebar Menu', 'concorde'), // Sidebar Navigation
        'footer-menu' => __('Footer Menu', 'concorde') // Footer Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Blog Sidebar Widget Area
    register_sidebar(array(
        'name' => __('Blog Widget Area', 'html5blank'),
        'description' => __('Sidebar widgets that will appear on the blog pages.', 'html5blank'),
        'id' => 'blog-widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function concorde_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function concorde_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 35;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function concorde_view_article($more)
{
    global $post;
    return '... <div class="text-center"><a class="btn-primary" href="' . get_permalink($post->ID) . '">' . __('Read More', 'concorde') . '</a></div>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function concordegravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'concorde_header_scripts'); // Add Custom Scripts to wp_head
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'concorde_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'concorde_pagination'); // Add our Pagination
add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'concordegravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'concorde_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


/*Add extra classes to the body tag depending on the page template*/
add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if (in_array('page-template-nxnw-templates',$classes) || is_404()) {
	   $classes[] = 'nxnw-template';
     } elseif ( is_blog() || is_search() || is_archive() || is_single() ) {
	     $classes[] = 'nxnw-template blog';
	 } 	elseif ( is_page_template( 'pf-templates/template-financial-aid.php' ) ){
	     $classes[] = 'pf-template no-sidebars';
     } else {
	     $classes[] = 'pf-template';
     }
     return $classes; 
}

/*Making is_blog function available*/
function is_blog () {
	global  $post;
	$posttype = get_post_type($post);
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/*Adding the title attribute of each menu item to the navigation. This will allow us to add the certificates next to the navigation items within the WordPress admin*/
add_filter('walker_nav_menu_start_el', 'description_in_nav_el', 10, 4);
function description_in_nav_el($item_output, $item, $depth, $args)
{	
	return preg_replace('/(<a.*?>[^<]*?)</', '$1' . " <span>{$item->attr_title}</span><", $item_output);
}

/*Add Promos Section Tab */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Promos Section',
		'menu_title'	=> 'Promos Section',
		'menu_slug' 	=> 'promos-section',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/*Check Source ID*/ 
function set_source_phone ($landing=FALSE) {
    if (empty($_SESSION['SourceID']) || empty($_SESSION['PhoneNum'])) {
        $organic = '9168DB';
        $direct = '704403';
        $other = '3BCF64';
        if( !empty($_GET['SourceID']) ) {
            $_SESSION['SourceID'] = $_GET['SourceID'];
        } 
        else if( !empty($_SERVER['HTTP_REFERER']) ) {
            $refer = $_SERVER['HTTP_REFERER'];
            $host = parse_url($refer, PHP_URL_HOST);
            if( stristr($host, 'google') || stristr($host, 'yahoo') || stristr($host, 'bing') ) {
                $_SESSION['SourceID'] = $organic;
            } else if( !stristr($host, 'concorde.edu') && !stristr($host, 'localhost') ) {
                $_SESSION['SourceID'] = $other;
            } else {
                $_SESSION['SourceID'] = $direct;
            }
        }
        else {
            $_SESSION['SourceID'] = $direct;
        }
        
        $hostname=gethostname();
        $hosts = array("cccpublicwebdev", "drupal-master", "localhost.localdomain");   
        if (in_array($hostname, $hosts)){
            $db = WEBSERVICES_DB_NAME;
            $db_host = DB_HOST; 
            $pdb = new PDO("mysql:dbname={$db};host={$db_host};port=3306", DB_USER, DB_PASSWORD); 
            $query = "SELECT * FROM campaign_mapping WHERE source_id = '{$_SESSION['SourceID']}'";
            $stmt = $pdb->prepare($query);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            if (!empty($results[0]['phone_number'])) {
                $_SESSION['PhoneNum'] = $results[0]['phone_number'];
                
            } else {
                if($landing) {
                    $_SESSION['PhoneNum'] = '1-888-849-9394';               
                }else {
                    $_SESSION['PhoneNum'] = '1-800-693-7010';    
                }
                 
            }
        } else {
            $_SESSION['PhoneNum'] = '1-800-693-7010';
        }
               

    }
}

/*Set Form Submission URL variable*/
$form_submission_url = 'http://webservices.concorde.edu/webservices/submit';

?>
