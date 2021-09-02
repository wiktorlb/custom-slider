<?php
/**
 * Parent module (module which has module item / child module) with FULL builder support
 * This module appears on Visual Builder and requires react component to be provided
 * Due to full builder support, all advanced options (except button options) are added by default
 *
 * @since 1.0.0
 */
class DICM_SLIDER_Parent extends ET_Builder_Module {
	// Module slug (also used as shortcode tag)
	public $slug       = 'dicm_slider_parent';

	// Full Visual Builder support
	public $vb_support = 'on';

	/**
	 * Module properties initialization
	 *
	 * @since 1.0.0
	 */
	function init() {
		// Module name
		$this->name                    = esc_html__( 'Custom SLIDER', 'dicm-divi-custom-modules' );

		// Module Icon
		// Load customized svg icon and use it on builder as module icon. If you don't have svg icon, you can use
		// $this->icon for using etbuilder font-icon. (See CustomCta / DICM_CTA class)
		$this->icon_path               =  plugin_dir_path( __FILE__ ) . 'icon.svg';

		// Toggle settings
		$this->settings_modal_toggles  = array(
			'general'  => array(
				'toggles' => array(
					'main_content' 		=> esc_html__( 'Text', 'dicm-divi-custom-modules' ),
                    'slider_options'    => esc_html__( 'Slider options', 'dicm-divi-custom-modules' ),
				),
			),
		);
	}

	/**
	 * Module's specific fields
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	function get_fields() {
		return array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'dicm-divi-custom-modules' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'dicm-divi-custom-modules' ),
				'toggle_slug'     => 'main_content',
			),
            /*'amount_photos' => array(
				'label'           => esc_html__( 'Amount of photos', 'dicm-divi-custom-modules' ),
				'type'            => 'multiple_checkboxes',
				'option_category' => 'basic_option',
                'options'         => [ '3' => '3', '6' => '6', '9' => '9'], 
				'description'     => esc_html__( 'gdgdrgdrg.', 'dicm-divi-custom-modules' ),
				'toggle_slug'     => 'slider_options',
			), */
			'amount_photos' => array(
				'label'           => esc_html__( 'Amount of photos', 'dicm-divi-custom-modules' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
                'options'         => ['1' => '1', '2' => '2', '3'=> '3'],
				'description'     => esc_html__( 'gdgdrgdrg.', 'dicm-divi-custom-modules' ),
				'toggle_slug'     => 'slider_options',
			),
            'stop_hover' => array(
				'label'           => esc_html__( 'Stop on hover', 'dicm-divi-custom-modules' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
                'options'         => ['yes', 'no'],
				'description'     => esc_html__( 'gdgdrgdrg.', 'dicm-divi-custom-modules' ),
				'toggle_slug'     => 'slider_options',
			),
            'range_slider' => array(
				'label'           => esc_html__( 'Range', 'dicm-divi-custom-modules' ),
				'type'            => 'range',
				'option_category' => 'basic_option',
                'range_settings'  => ['min' => '0', 'max' => '50', 'step' => '5'],
				'description'     => esc_html__( 'gdgdrgdrg.', 'dicm-divi-custom-modules' ),
				'toggle_slug'     => 'slider_options',
			),
    
		);
	}

	/**
	 * Render module output
	 *
	 * @since 1.0.0
	 *
	 * @param array  $attrs       List of unprocessed attributes
	 * @param string $content     Content being processed
	 * @param string $render_slug Slug of module that is used for rendering output
	 *
	 * @return string module's rendered output
	 */
	public function render( $attrs, $content = null, $render_slug ) { // Czemu tutaj jsx jest wrzucony? tak bylo z tego co pamietam , nope
		return '       <div class="front-slick"> 
		<div> 
			<img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
		</div>
		<div>
			<img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
		</div>
		<div>
			<img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
		</div>
		<div>
			<img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
		</div>
	</div>';


		// Module specific props added on $this->get_fields()
		// $title = $this->props['title'];
        // var_dump( print_r($this->props));

		// Render module content
		// $output = sprintf(
		// 	'<h2 class="dicm-title">%1$s</h2>
		// 	<div class="dicm-content">%2$s</div>',
		// 	esc_html( $title ),
		// 	et_sanitized_previously( $this->content )
		// );

        // $output = '<h2 class="dicm-title">' .  $title . '</h2>';
        // $output .= '<h2 class="dicm-content">' .  $this->content . '</h2>';
        // $output .= '<h2 class="dicm-content"> Wartość slidera : ' .  $this->props['range_slider'] . '</h2>';
        // $output .= '<h2 class="dicm-content"> Wartość stop hovera : ' .  $this->props['stop_hover'] . '</h2>';
        // $output .= '<h2 class="dicm-content"> Ilość zdjęć : ' .  $this->props['amount_photos'] . '</h2>';

		// Render wrapper
		// 3rd party module with no full VB support has to wrap its render output with $this->_render_module_wrapper().
		// This method will automatically add module attributes and proper structure for parallax image/video background
		return $this->_render_module_wrapper( $output, $render_slug );
	}
}

new DICM_SLIDER_Parent;
