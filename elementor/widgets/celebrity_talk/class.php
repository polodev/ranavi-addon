<?php
namespace ibauthor\Polodev_WP_Companion;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if (!defined('ABSPATH')) exit; // Exit if accessed directly
class CelebrityTalk extends Widget_Base
{
  use ElementorHelperTrait;
  public function get_name()
  {
    return 'celebrity-talk';
  }
  public function get_title()
  {
    return __('Celebrity Talk', 'polodev-wp-companion');
  }
  public function get_icon()
  {
    return 'eicon-site-title';
  }
  public function get_categories()
  {
    return [ 'basic' ];
  }
  protected function _register_controls()
  {
    $this->start_controls_section(
      'section_content',
      [
        'label' => __('Content', 'polodev-wp-companion'),
      ]
    );
    $this->add_control(
      'title',
      [
        'label' => __('Title', 'polodev-wp-companion'),
        'type' => Controls_Manager::TEXT,
        'label_block' => false,
        'default' => __( 'Talks About Us', 'polodev-wp-companion' ),
      ]
    );
    $this->add_control(
      'subtitle',
      [
        'label' => __('subtitle', 'polodev-wp-companion'),
        'type' => Controls_Manager::TEXT,
        'label_block' => false,
        'default' => __( 'CELEBRITY', 'polodev-wp-companion' ),
      ]
    );
    $this->end_controls_section();
  }

  protected function render()
  {
    $settings = $this->get_settings_for_display();
    $template = "view";
    $this->get_template( $template, $settings );
  }
}
