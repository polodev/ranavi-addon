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
    $this->add_control(
      'image',
      [
        'label' => __( 'Choose Image', 'plugin-domain' ),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => Helpers::get_asset_file('images/celebrity_talk.png')
        ],
      ]
    );
    
    $this->end_controls_section();


    /**
     * background block start
     */
    $this->start_controls_section(
      'backgroun_block',
      [
        'label' => __( 'Background Area', 'polodev-wp-companion' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_group_control(
      \Elementor\Group_Control_Background::get_type(),
      [
        'name' => 'celeb_background',
        'label' => __( 'Celeb Talk Background', 'polodev-wp-companion' ),
        'types' => [ 'classic', 'gradient', 'video' ],
        'fields_options'  => array(
          'background' => array(
            'label' => esc_html__( 'CelebrityTalk Background', 'polodev-wp-companion' ),
          ),
          'image' =>[ 
            'default' => [
              'url' => Helpers::get_asset_file('images/celeb-talk-bg.png')
            ],
          ],
        ),
        'selector' => '{{WRAPPER}} .celebrity-talk-box',
      ]
    );
    
    $this->add_group_control(
      \Elementor\Group_Control_Background::get_type(),
      [
        'name' => 'celeb_animation_background',
        'label' => __( 'Celeb Talk Animation Background', 'polodev-wp-companion' ),
        'types' => [ 'classic', 'gradient', 'video' ],
        'selector' => '{{WRAPPER}} #celeb-talk-anim',
        'fields_options'  => array(
          'background' => array(
            'label' => esc_html__( 'CelebrityTalk Animation Background', 'polodev-wp-companion' ),
          ),
          'image' => [
            'default' => [
              'url' => Helpers::get_asset_file('images/celebrity_talk.png')
            ],
          ],
        ),
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
