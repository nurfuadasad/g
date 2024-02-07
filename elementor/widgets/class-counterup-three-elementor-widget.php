<?php

/**
 * Elementor Widget
 * @package Edus
 * @since 1.0.0
 */


namespace Elementor;

class Edus_Counterup_Three_Widget extends Widget_Base {


	/**
	 * Get widget name.
	 *
	 * Retrieve Elementor widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_name() {

		return 'edus-counterup-three-widget';

	}


	/**
	 * Get widget title.
	 *
	 * Retrieve Elementor widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_title() {

		return esc_html__( 'Counterup: 03', 'edus-master' );

	}


	/**
	 * Get widget icon.
	 *
	 * Retrieve Elementor widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_icon() {

		return 'eicon-counter';

	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Elementor widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_categories() {

		return [ 'edus_widgets' ];

	}


	/**
	 * Register Elementor widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function _register_controls() {


		$this->start_controls_section(

			'settings_section',

			[

				'label' => esc_html__( 'General Settings', 'edus-master' ),

				'tab' => Controls_Manager::TAB_CONTENT,

			]

		);


		$this->add_control(

			'theme',

			[

				'label' => esc_html__( 'Theme', 'edus-master' ),

				'type' => Controls_Manager::SELECT,

				'options' => [

					'black' => esc_html__( 'Black', 'edus-master' ),

					'white' => esc_html__( 'White', 'edus-master' ),

				],

				'default' => 'black',

				'description' => esc_html__( 'select theme.', 'edus-master' )

			]

		);

		$this->add_control(

			'icon',

			[

				'label' => esc_html__( 'Icon', 'libo-master' ),

				'type' => Controls_Manager::ICONS,

				'description' => esc_html__( 'select Icon.', 'libo-master' ),

				'default' => [

					'value' => 'flaticon-safe',

					'library' => 'solid',

				]

			]

		);

		$this->add_control( 'title_status',

			[

				'label' => esc_html__( 'Subtitle Show/Hide', 'edus-master' ),

				'type' => Controls_Manager::SWITCHER,

				'description' => esc_html__( 'show/hide Subtitle', 'edus-master' ),

			] );

		$this->add_control( 'title', [

			'label' => esc_html__( 'Title', 'edus-master' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( 'Projects Done', 'edus-master' ),

			'description' => esc_html__( 'enter title', 'edus-master' )

		] );

		$this->add_control( 'number', [

			'label' => esc_html__( 'Number', 'edus-master' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( '25', 'edus-master' ),

			'description' => esc_html__( 'enter counterup number', 'edus-master' )

		] );

		$this->add_control( 'sign', [

			'label' => esc_html__( 'sign', 'edus-master' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( 'k+', 'edus-master' ),

			'description' => esc_html__( 'enter counterup sign', 'edus-master' )

		] );


		$this->end_controls_section();


		$this->start_controls_section(

			'styling_settings_section',

			[

				'label' => esc_html__( 'Styling Settings', 'edus-master' ),

				'tab' => Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_control(

			'shape-radius',

			[

				'label' => esc_html__( 'Radius', 'edus-master' ),

				'type' => Controls_Manager::DIMENSIONS,

				'size_units' => [ 'px', '%', 'em' ],

				'selectors' => [

					'{{WRAPPER}} .single-counterup-03' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

				],

			]

		);

		$this->add_group_control(

			Group_Control_Box_Shadow::get_type(),

			[

				'name' => 'box_shadow',

				'label' => esc_html__( 'Box Shadow', 'edus-master' ),

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);

		$this->add_control(

			'shape_height',

			[

				'label' => esc_html__( 'Height', 'edus-master' ),

				'type' => Controls_Manager::SLIDER,

				'size_units' => [ 'px', '%' ],

				'range' => [

					'px' => [

						'min' => 0,

						'max' => 5000,

						'step' => 5,

					],

					'%' => [

						'min' => 0,

						'max' => 100,

					],

				],

				'default' => [

					'px' => 'px',

					'size' => 240,

				],

				'selectors' => [

					'{{WRAPPER}} .single-counterup-03' => 'height: {{SIZE}}{{UNIT}};',

				],

			]

		);

		$this->add_control(

			'shape_width',

			[

				'label' => esc_html__( 'Width', 'edus-master' ),

				'type' => Controls_Manager::SLIDER,

				'size_units' => [ 'px', '%' ],

				'range' => [

					'px' => [

						'min' => 0,

						'max' => 5000,

						'step' => 5,

					],

					'%' => [

						'min' => 0,

						'max' => 100,

					],

				],

				'default' => [

					'px' => 'px',

					'size' => 270,

				],

				'selectors' => [

					'{{WRAPPER}}  .single-counterup-03' => 'width: {{SIZE}}{{UNIT}};',

				],

			]

		);

		$this->add_group_control(

			Group_Control_Background::get_type(),

			[

				'name' => 'background',

				'label' => esc_html__( 'Background', 'edus-master' ),

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);

		$this->add_group_control(

			Group_Control_Border::get_type(),

			[

				'name' => 'border',

				'label' => esc_html__( 'Border', 'edus-master' ),

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);
        $this->add_control( 'icon_color', [

            'label' => esc_html__( 'Icon Color', 'edus-master' ),

            'type' => Controls_Manager::COLOR,

            'selectors' => [

                "{{WRAPPER}} .single-counterup-03 .content .icon" => "color: {{VALUE}}"

            ]

        ] );
		$this->add_control( 'number_color', [

			'label' => esc_html__( 'Number Color', 'edus-master' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap .count-num" => "color: {{VALUE}}",

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap " => "color: {{VALUE}}"

			]

		] );

		$this->add_control( 'sign_color', [

			'label' => esc_html__( 'Sign Color', 'edus-master' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap .sing-plus" => "color: {{VALUE}}"

			]

		] );

		$this->add_control( 'title_color', [

			'label' => esc_html__( 'Title Color', 'edus-master' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .title" => "color: {{VALUE}}"

			]

		] );

		$this->end_controls_section();


		$this->start_controls_section(

			'typography_settings_section',

			[

				'label' => esc_html__( 'Typography Settings', 'edus-master' ),

				'tab' => Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_group_control(

			Group_Control_Typography::get_type(),

			[

				'name' => 'number_typography',

				'label' => esc_html__( 'Number Typography', 'edus-master' ),

				'selector' => '{{WRAPPER}} .single-counterup-03 .count-wrap',

			]

		);

		$this->add_group_control(

			Group_Control_Typography::get_type(),

			[

				'name' => 'title_typography',

				'label' => esc_html__( 'Title Typography', 'edus-master' ),

				'selector' => '{{WRAPPER}} .single-counterup-03 .title',

			]

		);

		$this->end_controls_section();

	}


	/**
	 * Render Elementor widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function render() {


		$settings = $this->get_settings_for_display();


		$title = $settings['title'];

		$number = $settings['number'];

		$this->add_render_attribute( 'counterup_wrapper', 'class', 'single-counterup-03' );

		$this->add_render_attribute( 'counterup_wrapper', 'class', $settings['theme'] );


		?>

        <div <?php echo $this->get_render_attribute_string( 'counterup_wrapper' ); ?>>
            <div class="content-wrap">
                <div class="content">

                    <div class="icon">

						<?php
						Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );

						?>
                    </div>

                    <div class="count-wrap">

                        <span class="count-num"><?php echo esc_html( $number ); ?></span><?php echo esc_html( $settings['sign'] ) ?>

                    </div>
					<?php

					if ( ! empty( $settings['title_status'] ) ) : ?>

                        <h4 class="title"><?php echo esc_html( $title ); ?></h4>

					<?php endif; ?>
                </div>
            </div>

        </div>

		<?php

	}

}


Plugin::instance()->widgets_manager->register_widget_type( new Edus_Counterup_Three_Widget() );