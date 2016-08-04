<?php
/**
 * Foodlist menu template.
 *
 * @param   string $tpl
 * @return  $tpl
 *
 * @since   1.0.0
 */
function anva_menu_template( $tpl ) {
	
	$tpl = '
		<div class="fl-menu-toc" id="fl-menu-toc" data-title="' . __( 'Table Of Contents', 'anva-foodlist' ) . '"></div>
		<div class="fl-menu" id="fl-menu-[menu_id]">
			[menu_title]
				<h1 class="fl-menu__heading">[menu_title_text]</h1>
			[/menu_title]
    		<div class="fl-excerpt fl-excerpt--menu">
        		[menu_excerpt]
    		</div>
			<ul class="fl-menu__list clearfix">
				[menu_sections]
					<li class="fl-menu__section">
						[menu_section]
					</li>
				[/menu_sections]
			</ul>
		</div>
	';

	return apply_filters( 'anva_menu_template', $tpl );

}

/**
 * Foodlist menu section template.
 *
 * @param  $tpl
 * @return  $tpl
 * 
 * @since  1.0.0
 */
function anva_menu_section_template( $tpl ) {
	
	$tpl = '
		<div class="fl-menu-section" id="fl-menu-section-[menu_section_id]-[menu_section_instance]">
			<h2 class="fl-menu-section__heading">[menu_section_title] <a class="fl-menu-section__up" href="#fl-menu-toc"><i class="fl-menu-section__icon fa fa-long-arrow-up"></i></a></h2>
			<div class="fl-excerpt fl-excerpt--section">
        		[menu_section_excerpt]
    		</div>
			<ul class="fl-menu-section__list clearfix">
				[menu_items]
					<li class="fl-menu-section__item">
						[menu_item]
					</li>
				[/menu_items]
			</ul>
		</div>
	';

	return apply_filters( 'anva_menu_section_template', $tpl );

}

/**
 * Foodlist menu item template.
 *
 * @param  $tpl
 * @return  $tpl
 * 
 * @since  1.0.0
 */
function anva_menu_item_template( $tpl ) {	
	
	$tpl = '
		<div class="fl-menu-item" id="fl-menu-item-[menu_item_id]-[menu_item_instance]">
			<div class="fl-menu-item__thumbnail">
				[menu_item_thumbnail]
			</div>
			<div class="fl-menu-item__content">
				<h3 class="fl-menu-item__heading">
					[menu_item_title]
				</h3>
				<div class="fl-excerpt fl-excerpt--item">
					[menu_item_excerpt]
				</div>
				<div class="fl-menu-item__meta clearfix">
					<span class="fl-menu-item__currency-sign">
						[currency_sign]
					</span>
					<span class="fl-menu-item__price">
						[menu_item_price]
					</span>
				</div>
				<div class="fl-menu-item__tags">
					[menu_item_tags]
	            		<img src="[menu_item_tag_icon_url]" alt="[menu_item_tag_description]" />
	        		[/menu_item_tags]
        		</div>
			</div>
		</div>
	';

	return apply_filters( 'anva_menu_item_template', $tpl );

}
