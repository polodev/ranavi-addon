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

    $repeater = new \Elementor\Repeater();
    $repeater->add_control(
      'name', [
        'label' => __( 'Name', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
      ]
    );
    
    $repeater->add_control(
      'photo', [
        'label' => __( 'Celebrity Photo', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
      ]
    );
    $repeater->add_control(
      'thumbnail', [
        'label' => __( 'Celebrity Photo Thumbnail', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
      ]
    );
    $repeater->add_control(
      'profession', [
        'label' => __( 'Profession', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
      ]
    );
    $repeater->add_control(
      'comment', [
        'label' => __( 'Comment', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'label_block' => true,
      ]
    );
    $this->add_control(
      'celeb_talks',
      [
        'label' => __( 'Repeater List', 'polodev-wp-companion' ),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
          [
            "name" => "Ferdous Ahmed",
            "photo" => [
              'url' => Helpers::get_asset_file('images/celebrity-full/ferdous.png'),
            ],
            "thumbnail" => [
              'url' => Helpers::get_asset_file('images/celebrity-thumb/ferdous.png'),
            ],
            "profession" => "Actor",
            "comment" => "<small>Thank You!<br>Eagles Dance Company.<br>Great Experience With You. Best Wishes.</small>"
          ],
          [
            "name" => "Dilara Hanif Purnima",
            "photo" => [
              'url' => Helpers::get_asset_file('images/celebrity-full/ferdous.png'),
            ],
            "thumbnail" => [
              'url' => Helpers::get_asset_file('images/celebrity-thumb/ferdous.png'),
            ],
            "profession" => "Actor",
            "comment" => "<small>Great Experience!<br>Great Work Ethics.<br>Love To Work With Again And Again.</small>"
          ],
          [
            "name" => "Shakib Khan",
            "photo" => [
              'url' => Helpers::get_asset_file('images/celebrity-full/ferdous.png'),
            ],
            "thumbnail" => [
              'url' => Helpers::get_asset_file('images/celebrity-thumb/ferdous.png'),
            ],
            "profession" => "Actor",
            "comment" => "<small>Very Professional!<br>Had Fun Working With You.<br>Looking Forword To Work With You Again.</small>"
          ],
          [
            "name" => "Mehazabien Chowdhury",
            "photo" => [
              'url' => Helpers::get_asset_file('images/celebrity-full/ferdous.png'),
            ],
            "thumbnail" => [
              'url' => Helpers::get_asset_file('images/celebrity-thumb/ferdous.png'),
            ],
            "profession" => "Actor",
            "comment" => "<small>One Of The Best Place To Work!<br>Nice Studio And Best People.<br>Best Wishes To You.</small>"
          ],
          [
            "name" => "Bidya Sinha Saha Mim",
            "photo" => [
              'url' => Helpers::get_asset_file('images/celebrity-full/ferdous.png'),
            ],
            "thumbnail" => [
              'url' => Helpers::get_asset_file('images/celebrity-thumb/ferdous.png'),
            ],
            "profession" => "Actor",
            "comment" => "<small>Best Experience!<br>A Team Of Very Good Dancers.<br>We Expect Many Great Things In The Future.</small>"
          ],
        ],
      ]
    );
    
    $this->end_controls_section();

    /**
     * celebrity-talk background
     */
    $this->start_controls_section (
      'celebrity_talk_background_section',
      [
        'label' => __( 'Celeb Talk Background', 'polodev-wp-companion' ),
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

    $this->end_controls_section();
    
    /**
     * background block start
     */
    $this->start_controls_section(
      'celeb_animation_background_section',
      [
        'label' => __( 'Celeb Talk Animation Background', 'polodev-wp-companion' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
