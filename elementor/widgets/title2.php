<?php
namespace ibauthor\Polodev_WP_Companion;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if (!defined('ABSPATH')) exit; // Exit if accessed directly
class Title2 extends Widget_Base
{
	public function get_name()
	{
		return 'advanced-title2';
	}
	public function get_title()
	{
		return __('Borishal Title 2', 'polodev-wp-companion');
	}
	public function get_icon()
	{
		return 'eicon-site-title';
	}
	public function get_categories()
	{
		return [ 'general' ];
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
			]
		);
		$this->add_control(
			'heading',
			[
				'label' => __('Heading', 'polodev-wp-companion'),
				'type' => Controls_Manager::TEXTAREA,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_style',
			[
				'label' => __('Style', 'polodev-wp-companion'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'align',
			[
				'label' => __('Alignment', 'polodev-wp-companion'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', 'polodev-wp-companion'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __('Center', 'polodev-wp-companion'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __('Right', 'polodev-wp-companion'),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __('Justified', 'polodev-wp-companion'),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __('Title Typography', 'polodev-wp-companion'),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .heading-intro',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'label' => __('Heading Typography', 'polodev-wp-companion'),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .heading-xl',
			]
		);
		$this->add_control(
			'title_color',
			[
				'label' => __('Title Color', 'polodev-wp-companion'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-intro' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'heading_color',
			[
				'label' => __('Heading Color', 'polodev-wp-companion'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-xl' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();
?>
		<span class="heading-intro"><?php echo esc_html($settings['title']); ?></span>
		<h2 class="heading-xl"><?php echo esc_html($settings['heading']); ?></h2>
<?php
	}
}
