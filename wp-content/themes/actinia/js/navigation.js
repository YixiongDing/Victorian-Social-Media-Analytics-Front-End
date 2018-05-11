/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function($) {
	var container, button, buttonSearch, menu, searchform, links, subMenus, i, len;

	container = document.getElementById('site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}
        
        buttonSearch = document.getElementsByClassName("searchform-toggle")[0];
        searchform = document.getElementsByClassName("search-form")[0];
        
        if (buttonSearch) {
            buttonSearch.onclick = function() {
                    if ( -1 !== searchform.className.indexOf( 'toggled' ) ) {
                            searchform.className = searchform.className.replace( ' toggled', '' );
                            buttonSearch.setAttribute( 'aria-expanded', 'false' );
                            searchform.setAttribute( 'aria-expanded', 'false' );
                    } else {
                            searchform.className += ' toggled';
                            buttonSearch.setAttribute( 'aria-expanded', 'true' );
                            buttonSearch.style.display = "none";
                            searchform.setAttribute( 'aria-expanded', 'true' );
                    }
            };
        }

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};
        
        addClassDropdownLeft();
        addToggleButton();   

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );      

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}
        
        var toggleButtons = $('.dropdown-toggle');
        
	toggleButtons.on( 'click', function(e) {
            e.preventDefault();
            var parentLink = $(this).closest('li');
            if (parentLink.hasClass('focus') ) {
	        parentLink.removeClass('focus');
	    } else {
		parentLink.addClass('focus');
	    }
        });               
        
        setMainHeight();
        
        if (pageYOffset == 0) {
            $(".anchor").css("display", "none");
        }
        
        $(window).on("resize", function() {
            addClassDropdownLeft();
            setMainHeight();
            $('li').removeClass('focus');
            
            if (window.innerWidth <= 600) {
                $(".anchor").css("display", "none");
            }
        });
        
        
        $(window).on("scroll", function(){
            if (window.innerWidth >= 600) {
                $(".anchor").css("display", "block"); 
            }
            if (pageYOffset == 0) {
                $(".anchor").css("display", "none");
            }
        }); 
        
        //remove .focus class from links when clicking outside of navigation bar
        if ( 'ontouchstart' in window && window.innerWidth >= 768 ) {
            $('*').click(function(e) {            
                if (!$('.main-navigation li > a').is(e.target)) {
                   $('li.focus').removeClass('focus');
                }                   
            });
        }
        
        function setMainHeight() {
            if ($('body').hasClass('navbar-side') && window.innerWidth >= 1024) {
                var menuHeight = $('nav').height();
                $('main').css('min-height', menuHeight);
            }
        }
        function addClassDropdownLeft() {
            var offsetLeft; 
            var offsetRight; 
            var subMenuWidth;
            var marginSubMenu;
            $("#primary-menu").children("li").removeClass("dropdown-left");
            
            if ($("body").hasClass("navbar-side") && $("body").hasClass("left-sidebar")) {
                    $("#primary-menu").children("li").addClass("dropdown-left");
            } else {
                $("#primary-menu").children("li").each(function(){
                    offsetLeft = $(this).offset().left;
                    marginSubMenu = parseInt($(this).children("ul").css("margin-left"));
                    offsetRight = $(window).width() - (offsetLeft + marginSubMenu);
                    subMenuWidth = $(this).children("ul").children("li:first").width() + $(this).children("ul").find("ul:first").width();
                    if (subMenuWidth > offsetRight) {
                        $(this).addClass("dropdown-left");
                    }
                });
            }
        }
        
        function addToggleButton() {
            $(".menu-item-has-children > a").append("<button class='dropdown-toggle'></button>");
            $("button.dropdown-toggle").append("<span class='screen-reader-text'>expand child menu</span>");          
        
        } 
                	
	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window && window.innerWidth >= 768 ) {
                    
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};
                        
			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
                        
                
		}
	}( container ) );           
        
} )(jQuery);

//to allow active styles in mobile browsers
document.addEventListener("touchstart", function(){}, false);