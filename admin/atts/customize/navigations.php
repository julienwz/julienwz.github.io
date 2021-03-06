<?php

// -----------------------------------------
// semplice
// admin/atts/customize/navigations.php
// -----------------------------------------

$navigations = array(
	'tabs' => array(
		'styling' => array(
			'general_options' => array(
				'title' => 'Name your Navigation',
				'break' => '1,2',
				'hide-title' => false,
				'name' => array(
					'title'				=> 'Name',
					'hide-title'		=> true,
					'size'				=> 'span4',
					'data-input-type'	=> 'input-text',
					'default'			=> '',
					'placeholder'		=> 'My Nav',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'navigations',
					'data-target'		=> 'none',
				),
				'default' => array(
					'data-input-type' 	=> 'button',
					'title'		 		=> 'Make Default',
					'button-title'		=> 'Default',
					'help'				=> 'You can set this navigation as your global default whenever you create a new page or project.<br /><br />Note that this will not overwrite the navigations you selected in the page settings for your individual pages and projects.',
					'size'		 		=> 'span2',
					'class'				=> 'semplice-button navbar-default white-button',
				),
				'preview_bg' => array(
					'title'			=> 'Preview BG Color',
					'help'		=> 'Change the background color for the preview container to adapt the navigation to your actual design.',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'	=> '.customize-content',
					'default'		=> '#ffffff',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-css-attribute'=> 'background-color',
					'data-picker'		=> 'navigations',
				),
			),
			'logo_options' => array(
				'title' => 'Logo options',
				'break' => '1,2,2,2,2,2,1,1',
				'hide-title' => false,
				'logo_type' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Logo Type',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'img,text',
					'data-visibility-prefix'	=> 'ov-logo',
					'default' 	 				=> 'text',
					'switch-values' => array(
						'text'  	=> 'Textlogo',
						'img'	 	=> 'Image',
					),
				),
				'logo_text' => array(
					'title'				=> 'Textlogo',
					'size'				=> 'span2',
					'data-input-type'	=> 'input-text',
					'default'			=> get_bloginfo('name'),
					'placeholder'		=> 'My Textlogo',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'navigations',
					'style-class'		=> 'ov-logo-text',
				),
				'logo_text_color' => array(
					'title'			=> 'Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'	=> '.logo a',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-css-attribute'=> 'color',
					'style-class'		=> 'ov-logo-text',
					'data-picker'		=> 'navigations',
				),
				'logo_text_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'data-target'		=> '.logo a',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'style-class'		=> 'ov-logo-text',
					'select-box-values' => $fonts,
				),
				'logo_text_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'default'			=> 'none',
					'style-class'		=> 'ov-logo-text',
					'data-target'		=> '.logo a',
					'data-css-attribute'=> 'text-transform',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
				'logo_text_fontsize' => array(
					'title'				=> 'Fontsize',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'style-class'		=> 'ov-logo-text',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.logo a',
					'data-has-unit'		=> true,
					'default'			=> 22,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'logo_text_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-logo-text',
					'data-target'		=> '.logo a',
					'data-css-attribute'=> 'letter-spacing',
					'data-divider'		=> 10,
					'data-has-unit'		=> true,
					'data-negative' 	=> true,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'data-range-slider' => 'navigations',
				),
				'logo_img' => array(
					'title'				=> 'Upload',
					'help'				=> 'Please note that on many servers due to security reasons you can\'t upload an svg. If you can\'t upload an svg image please use the \'SVG Code\' field below.',
					'size'				=> 'span2',
					'data-input-type'	=> 'admin-image-upload',
					'data-target'		=> '.content-block',
					'default'			=> '',
					'class'				=> 'admin-listen-handler',
					'style-class'		=> 'ov-logo-img',
					'data-handler'		=> 'navigations',
					'data-upload'		=> 'logoImg',
				),
				'logo_img_width' => array(
					'title'				=> 'Width',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 100,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-css-attribute'=> 'width',
					'data-target'		=> '.logo img, .logo svg',
					'style-class'		=> 'ov-logo-img',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'logo_margin' => array(
					'title'				=> 'Logo Ver Margin',
					'size'				=> 'span2',
					'help'				=> 'To further align your logo you can set the vertical margin which can be positive or negative.',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'navigations',
					'data-css-attribute'=> 'margin-top',
					'data-target'		=> '.logo',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
					'style-class'		=> 'logo-margin',
				),
				'logo_padding' => array(
					'title'				=> 'Logo Hor Padding',
					'size'				=> 'span2',
					'help'				=> 'Change the horizontal logo padding to define the distance from your logo to the menu items on both sides.',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'navigations',
					'data-css-attribute'=> 'padding',
					'data-target'		=> '.logo',
					'data-has-unit'		=> true,
					'default'			=> 40,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
					'style-class'		=> 'navbar-logo-padding',
				),
				'logo_svg' => array(
					'title'				=> 'SVG Code',
					'size'				=> 'span4',
					'help'				=> 'In order to see your SVG Image please make sure that there is no logo image uploaded above. (because that will be displayed instead)',
					'data-input-type'	=> 'codemirror',
					'data-target'		=> '.content-block',
					'placeholder'		=> '<!-- Please paste your svg code here. Example: <svg>...</svg> -->',
					'default'			=> '',
					'button-title'		=> 'SVG Code',
					'class'				=> 'semplice-button codemirror white-button admin-click-handler',
					'style-class'		=> 'ov-logo-img',
					'data-handler'		=> 'codemirror',
				),
				'logo_padding_left' => array(
					'title'				=> 'Logo Padding Left',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.logo',
					'data-css-attribute'=> 'padding-left',
					'default'			=> 40,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'logo_padding_right' => array(
					'title'				=> 'Logo Padding Right',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.logo',
					'data-css-attribute'=> 'padding-right',
					'default'			=> 40,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'logo_margin_bottom' => array(
					'title'				=> 'Logo Bottom Margin',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.logo',
					'data-css-attribute'=> 'margin-bottom',
					'default'			=> 20,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'logo_alignment' => array(
					'title'				=> 'Alignment',
					'size'				=> 'span4',
					'data-input-type'	=> 'select-box',
					'data-target'		=> '.logo',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-css-attribute'=> 'align-items',
					'data-target'		=> '.logo',
					'help'				=> 'This setting is has no effect on some navigations.',
					'style-class'	 	=> 'logo-alignment',
					'select-box-values' => array(
						'center'	 => 'Middle',
						'flex-start' => 'Top',
					),
				),
			),
			'navigation_bar' => array(
				'title' => 'Navigation Bar',
				'break' => '2,2,2,1,1',
				'hide-title' => false,
				'navbar_type' => array(
					'data-input-type' 			=> 'switch',
					'help'						=> 'For certain navigations (for example centered ones) this setting is irrelevant.',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Width',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'container,container-fluid',
					'data-visibility-prefix'	=> 'ov-navwidth',
					'default' 	 				=> 'container',
					'style-class'				=> 'navbar-type',
					'switch-values' => array(
						'container'  		=> 'Grid',
						'container-fluid'	=> 'Fluid',
					),
				),
				'navbar_mode' => array(
					'data-input-type' 			=> 'switch',
					'help'						=> 'Select if you want your Navigation Bar to stay sticky or not.',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Mode',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'data-target'				=> 'none',
					'default' 	 				=> 'sticky',
					'style-class'				=> 'navbar-mode',
					'switch-values' => array(
						'sticky'  	=> 'Sticky',
						'normal'	=> 'Normal',
					),
				),
				'navbar_padding' => array(
					'title'				=> 'Padding Hor',
					'help'				=> 'If you have a centered menu and logo this setting is still viable for the mobile hamburger fallback.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.navbar-left',
					'data-css-attribute'=> 'left',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'style-class'		=> 'ov-navwidth-container-fluid',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'navbar_padding_vertical' => array(
					'title'				=> 'Padding Ver',
					'help'				=> 'If you have a top aligned logo and menu you can add spacing with this option.<br /><br />Please note that if you use this settings its recommended to have a transparent navbar background and a navbar height of 0.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.semplice-navbar',
					'data-css-attribute'=> 'padding',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'navbar_height' => array(
					'title'				=> 'Height',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '.semplice-navbar',
					'data-css-attribute'=> 'height',
					'default'			=> 70,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'style-class'		=> 'navbar-height',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'navbar_bg_color' => array(
					'title'			=> 'Background',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'	=> '.semplice-navbar',
					'data-css-attribute' => 'background-color',
					'default'		=> '#ffffff',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-picker'		=> 'navigations',
					'style-class'		=> 'navbar-bg',
				),
				'navbar_bg_opacity' => array(
					'title'				=> 'BG Opacity',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'min'				=> 0,
					'max'				=> 100,
					'default'			=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'navigations',
					'style-class'		=> 'navbar-bg-opacity',
				),
				'navbar_cover_transparent' => array(
					'title'				=> 'Transparent while in Cover',
					'help'				=> 'Enabled your navbar background will be transparent while above the cover image or video. After scrolling out of the cover your defined background-color will fade in.<br /><br /><b>Note:</b> You can add a \'Cover\' in the editor by clicking on \'Cover\' and then enable it.',
					'data-input-type' 	=> 'switch',
					'switch-type'		=> 'twoway',
					'size'				=> 'span4',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'default'			=> 'disabled',
					'data-target'		=> 'none',
					'style-class'		=> 'navbar-cover-transparent',
					'switch-values' => array(
						'disabled'		=> 'Disabled',
						'enabled'		=> 'Enabled'
					),
				),
				'navbar_bg_visibility_overlay' => array(
					'title'				=> 'Background Visibility in Overlay',
					'help'				=> 'Select \'hidden\' if you want to hide the navbar background while the overlay is open.',
					'data-input-type' 	=> 'switch',
					'switch-type'		=> 'twoway',
					'size'				=> 'span4',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'default'			=> 'visible',
					'data-target'		=> 'none',
					'switch-values' => array(
						'visible'		=> 'Visible',
						'hidden'		=> 'Hidden'
					),
				),
				/*
				'preset' => array(
					'data-input-type' 	=> 'button',
					'title'		 		=> 'Navigation Preset',
					'button-title'		=> 'Change Preset',
					'size'		 		=> 'span4',
					'class'				=> 'white-button semplice-button admin-listen-handler',
					'data-handler'		=> 'navigations', 
				),
				*/
			),
		),

		'menu' => array(
			'edit_menu' => array(
				'title' => 'Edit Menu',
				'break' => '1',
				'hide-title' => false,
				'categories' => array(
					'data-input-type' 	=> 'button',
					'hide-title'		=> true,
					'title'		 		=> 'Edit Menu Items',
					'button-title'		=> 'Edit Menu Items',
					'size'		 		=> 'span4',
					'class'				=> 'semplice-button admin-click-handler',
					'data-handler'		=> 'editMenu',
				),
			),
			'menu_options' => array(
				'title' => 'Menu Options',
				'break' => '1,2,2,2,2,2,2,2,1',
				'hide-title' => false,
				'menu_type' => array(
					'help'						=> 'Please go to the tab \'Overlay/Mobile\' to customize the hamburger icon.',
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Type',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'default' 	 				=> 'text',
					'data-target'				=> 'none',
					'switch-values' => array(
							'text'  		=> 'Text',
						'hamburger'	 	=> 'Hamburger',
					),
				),
				'menu_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-target'		=> 'nav.standard',
					'select-box-values' => $fonts,
				),
				'menu_fontsize' => array(
					'title'				=> 'Fontsize',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 15,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'font-size',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'menu_color' => array(
					'title'			=> 'Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'color',
					'data-picker'		=> 'navigations',
				),
				'menu_padding' => array(
					'title'				=> 'Items Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'data-target'		=> '.semplice-navbar li a',
					'data-css-attribute'=> 'padding-right',
					'default'			=> 30,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'style-class'		=> 'menu-padding',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'menu_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'default'			=> 'none',
					'style-class'		=> 'ov-menu-text',
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'text-transform',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
				'menu_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 10,
					'data-has-unit'		=> true,
					'data-negative' 	=> true,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'letter-spacing',
					'data-range-slider' => 'navigations',
				),
				'menu_border_color' => array(
					'title'			=> 'Underline Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'		=> 'li a span',
					'data-css-attribute'=> 'border-bottom-color',
					'data-picker'		=> 'navigations',
				),
				'menu_border' => array(
					'title'				=> 'Underline',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 1000,
					'data-has-unit'		=> true,
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'border-bottom-width',
					'data-range-slider' => 'navigations',
				),
				'menu_border_padding' => array(
					'title'				=> 'Underline Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 1000,
					'data-has-unit'		=> true,
					'data-target'		=> '.semplice-navbar li a span',
					'data-css-attribute'=> 'padding-bottom',
					'data-range-slider' => 'navigations',
				),
				'menu_alignment' => array(
					'title'				=> 'Alignment',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-target'		=> 'nav.standard ul',
					'data-css-attribute'=> 'align-items',
					'help'				=> 'Some navigations have a fixed alignment so that this setting has no effect.',
					'style-class'		=> 'menu-alignment',
					'select-box-values' => array(
						'center'	 => 'Middle',
						'flex-start' => 'Top',
					),
				),
				'menu_mobile_fallback' => array(
					'help'						=> 'Select \'Disabled\' if you want to disable the mobile fallback (hamburger) and show your menu instead',
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Mobile Hamburger Fallback',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'default' 	 				=> 'enabled',
					'data-target'				=> 'none',
					'style-class'				=> 'menu-mobile-fallback',
					'switch-values' => array(
						'enabled'	 	=> 'Enabled',
						'disabled'  	=> 'Disabled',
					),
				),
			),
			'mouseover_options' => array(
				'title' => 'Mouseover Options',
				'break' => '2',
				'hide-title' => false,
				'style-class'	=> 'ov-menu-text',
				'help'			=> 'The mouseover color will be also the color of your active link.',
				'menu_mouseover_color' => array(
					'title'			=> 'TextColor',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'style-class'	=> 'ov-menu-text',
					'data-target'	=> 'mouseover',
					'data-picker'		=> 'navigations',
				),
				'menu_border_mouseover_color' => array(
					'title'			=> 'Border Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'style-class'	=> 'ov-menu-text',
					'data-target'	=> 'mouseover',
					'data-picker'		=> 'navigations',
				),
			),
		),
		'overlay' => array(
			'hamburger_options' => array(
				'title' => 'Hamburger',
				'break' => '2,2,1',
				'hide-title' => false,
				'hamburger_color' => array(
					'title'			=> 'Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'		=> '.open-menu span',
					'data-css-attribute'=> 'background-color',
					'data-picker'		=> 'navigations',
				),
				'hamburger_width' => array(
					'title'				=> 'Width',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 24,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'hamburger_thickness' => array(
					'title'				=> 'Thickness',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 2,
					'min'				=> 0,
					'max'				=> 9999,
					'data-target'		=> '.open-menu span',
					'data-css-attribute'=> 'height',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'hamburger_padding' => array(
					'title'				=> 'Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 6,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'hamburger_alignment' => array(
					'title'				=> 'Alignment',
					'size'				=> 'span4',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-css-attribute'=> 'align-items',
					'data-target'		=> '.hamburger',
					'help'				=> 'This setting is has no effect on some navigations.',
					'style-class'		=> 'hamburger-alignment',
					'select-box-values' => array(
						'center'	 => 'Middle',
						'flex-start' => 'Top',
					),
				),
			),
			'overlay_options' => array(
				'title' => 'Overlay Menu',
				'break' => '1,2,2,2,2,2,2,2,2,2',
				'hide-title' => false,
				'overlay_type' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Width',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'navigations',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'container,container-fluid',
					'data-visibility-prefix'	=> 'ov-overlaywidth',
					'default' 	 				=> 'container',
					'data-target'				=> 'none',
					'switch-values' => array(
						'container'  		=> 'Grid',
						'container-fluid'	=> 'Fluid',
					),
				),
				'overlay_bg_color' => array(
					'title'			=> 'Background',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-picker'	=> 'navigations',
				),
				'overlay_bg_opacity' => array(
					'title'				=> 'BG Opacity',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'min'				=> 0,
					'max'				=> 100,
					'default'			=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'navigations',
				),
				'overlay_padding_left' => array(
					'title'				=> 'Padding Left',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'left',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'style-class'		=> 'ov-overlaywidth-container-fluid',
					'data-range-slider' => 'navigations',
				),
				'overlay_padding_right' => array(
					'title'				=> 'Padding Right',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'right',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'style-class'		=> 'ov-overlaywidth-container-fluid',
					'data-range-slider' => 'navigations',
				),
				'overlay_padding_top' => array(
					'title'				=> 'Padding Top',
					'help'				=> 'Please note that the top padding for the menu only gets applied if your vertical alignment for the menu is set to \'Top\'',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'data-handler'		=> 'navigations',
					'class'				=> 'admin-listen-handler',
					'data-target'		=> '#overlay-menu nav',
					'data-css-attribute'=> 'padding-top',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'navigations',
				),
				'overlay_alignment_ver' => array(
					'title'				=> 'Alignment Ver',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-target'		=> '.overlay-menu-inner',
					'data-default'		=> 'middle',
					'select-box-values' => array(
						'align-middle'	=> 'Middle',
						'align-top'		=> 'Top',
					),
				),
				'overlay_alignment_hor' => array(
					'title'				=> 'Alignment Hor',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-target'		=> '#overlay-menu nav',
					'data-css-attribute'=> 'text-align',
					'select-box-values' => array(
						'center'	 => 'Center',
						'left' => 'Left',
						'right'	 => 'Right'
					),
				),
				'overlay_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'data-target'		=> '.overlay-nav',
					'select-box-values' => $fonts,
				),
				'overlay_fontsize' => array(
					'title'				=> 'Fontsize',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 32,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'font-size',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'overlay_color' => array(
					'title'			=> 'Link Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'color',
					'data-picker'		=> 'navigations',
				),
				'overlay_padding' => array(
					'title'				=> 'Items Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 20,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-target'		=> '#overlay-menu li a',
					'data-css-attribute'=> 'padding-bottom',
					'data-range-slider' => 'navigations',
					'data-mobile-options' => 'xl,lg,md,sm,xs',
				),
				'overlay_text_transform' => array(
					'title'				=> 'Text Transform',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'navigations',
					'default'			=> 'none',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'text-transform',
					'select-box-values' => array(
						'none'			=> 'None',
						'uppercase'		=> 'Uppercase',
					),
				),
				'overlay_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 10,
					'data-has-unit'		=> true,
					'data-negative' 	=> true,
					'help'				=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'letter-spacing',
					'data-range-slider' => 'navigations',
				),
				'overlay_border_color' => array(
					'title'			=> 'Underline Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'border-bottom-color',
					'data-picker'		=> 'navigations',
				),
				'overlay_border' => array(
					'title'				=> 'Underline',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 1000,
					'data-has-unit'		=> true,
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'border-bottom-width',
					'data-range-slider' => 'navigations',
				),
				'overlay_border_padding' => array(
					'title'				=> 'Underline Padding',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'logo-font-size admin-listen-handler',
					'data-handler'		=> 'navigations',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 1000,
					'data-has-unit'		=> true,
					'data-target'		=> '#overlay-menu li a span',
					'data-css-attribute'=> 'padding-bottom',
					'data-range-slider' => 'navigations',
				),
			),
			'overlay_mouseover_options' => array(
				'title' => 'Mouseover Options',
				'break' => '2',
				'hide-title' => false,
				'help'			=> 'The mouseover color will be also the color of your active link.',
				'overlay_mouseover_color' => array(
					'title'			=> 'TextColor',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'	=> 'mouseover',
					'data-picker'	=> 'navigations',
				),
				'overlay_border_mouseover_color' => array(
					'title'			=> 'Border Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-target'	=> 'mouseover',
					'data-picker'	=> 'navigations',
				),
			),
		),
	),
);