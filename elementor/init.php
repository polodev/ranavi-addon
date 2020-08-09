<?php
namespace ibauthor\Polodev_WP_Companion;

use Elementor\Plugin;
class ElementorInit
{
	private static $_instance = null;
	public static function instance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
  public function __construct()
  {
    add_action('elementor/frontend/after_register_scripts', [$this, 'scripts_for_elementor']);
    add_action('elementor/frontend/after_enqueue_styles', [$this, 'styles_for_elementor']);
    // Register widgets
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
  }

	
  public function get_widget_list() {
     $widget_list = [
      [
          'file' => 'title.php',
          'class' => 'Title',
      ],
      [
          'file' => 'title2.php',
          'class' => 'Title2',
      ],
    ];
    return $widget_list;
  }
  public function register_widgets() {
    $widgets_manager = Plugin::instance()->widgets_manager; 
    $widget_list = $this->get_widget_list();

    foreach ($widget_list as $widget) {
      $file =  Constants::$plugin_elementor_widgets_dir . $widget['file'] ;
      if ( file_exists($file) ) {
        require Constants::$plugin_elementor_widgets_dir . $widget['file'] ;
        $class_name_with_namespace = Constants::$plugin_namespace . $widget['class'];
        $widgets_manager->register_widget_type( new $class_name_with_namespace() );
      }
    }
  }
  public function scripts_for_elementor()
  {
    $plugin_prefix = Constants::$plugin_prefix;
    wp_register_script( $plugin_prefix . '-frontend', Helpers::get_asset_file( 'js/script.js'  ), ['jquery'], false, true );
  }
  public function styles_for_elementor()
  {
    $plugin_prefix = Constants::$plugin_prefix;
    wp_enqueue_style( $plugin_prefix . '-styles', Helpers::get_asset_file( 'css/style.css' ));
  }
	
}
// Instantiate Plugin Class
ElementorInit::instance();
