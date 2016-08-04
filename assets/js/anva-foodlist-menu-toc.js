(function ( $ ) {

	'use strict';

	var $foodlistMenuToc = $('.fl-menu-toc');

	if ( $foodlistMenuToc.length > 0 ) {
		
		var $target = $('.fl-menu ul > li > .fl-menu-section > h2'),
			$title = $foodlistMenuToc.attr('data-title'),
			htmlOutput = '',
			element,
			elementID,
			elementList,
			sectionTitle,
			sectionLink;

		htmlOutput += "<div class='fl-menu-toc__wrap'>";
		htmlOutput += "<h2 class='fl-menu-toc__heading'>";
		htmlOutput += "<i class='fl-menu-toc__icon fa fa-bars'></i>"
		htmlOutput += " " + $title
		htmlOutput += "</h2>";
		htmlOutput += "<ul class='fl-menu-toc__list clearfix'>";
		
		$target.each( function() {
			element    = $(this);
			elementID    = element.parent('.fl-menu-section');
			sectionTitle = element.text();
			sectionLink  = "#" + elementID.attr("id");
			elementList  = "<li class='fl-menu-toc__item'>" + "<a class='fl-menu-toc__link' href='" + sectionLink + "'>" + sectionTitle + "</a>" + "</li>";
			htmlOutput += elementList;
		});

		htmlOutput += "</ul>";
		htmlOutput += "</div>";

		$foodlistMenuToc.prepend( htmlOutput );

		$('.fl-menu .fl-menu-toc a').on( 'click', function(e) {
			e.preventDefault();
		});

		$('.fl-menu-toc__icon').on('click', function(e) {
			e.preventDefault();
			$('.fl-menu-toc__list').slideToggle();
		});
	}

})( jQuery );
