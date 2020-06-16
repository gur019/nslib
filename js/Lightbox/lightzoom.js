/**
* jQuery lightzoom v1.0.1
* Copyright 2018
* Contributing Author: Aleksey Savin
* E-mail: asavin.work@yandex.ru
*/
var cursorX = 0;
var cursorY = 0;


;( function( $, window, document, undefined ) {

"use strict";

	// Create the defaults once
	var pluginName = "lightzoom",
		defaults = {
			speed:                  400,
			imgPadding:             10,
			overlayOpacity:         '0.5',
			viewTitle:              false,
			isOverlayClickClosing:  false,
			isWindowClickClosing:   false,
			isEscClosing:           false
		},

		html  = '<div id="lz-container">\
							 <div id="lz-box">\
								 <div id="lz-overlay"></div>\
							 </div>\
							 <div id="loading-center">\
								 <div id="loading-center-absolute">\
									 <div class="object" id="object_one"></div>\
									 <div class="object" id="object_two"></div>\
									 <div class="object" id="object_three"></div>\
								</div>\
							 </div>\
						 </div>';

	// The actual plugin constructor
	function Plugin ( element, options ) {
		this.element = element;

		this.settings = $.extend( {}, defaults, options );
		this._defaults = defaults;
		this._name = pluginName;
		this.init();
	}

	// Avoid Plugin.prototype conflicts
	$.extend( Plugin.prototype, {
		init : function() {

			var $this = this;

			$this.build();

			$( document ).on( 'click', '#lz-close', function( event ) {
				event.preventDefault();
				$this.closeZoom();
			});

			if ( $this.settings.isWindowClickClosing ) {
				$( document ).on( 'click', '#lz-container', function( event ) {
					$this.closeZoom();
				});
			} else if ( $this.settings.isOverlayClickClosing ) {
				$( document ).on( 'click', '#lz-overlay', function( event ) {
					$this.closeZoom();
				});
			}

			if ( $this.settings.isEscClosing ) {
				$( document ).keydown( function( event ) {
					if ( event.which === 27 ) {
						$this.closeZoom();
					}
				});
			}

			$this.resize();
		},

		build : function () {
			var $this = this;

			$(this.element).on( 'mousedown', function( e ) {
				e.preventDefault();

				cursorX = (window.Event) ? e.pageX : event.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft);
				cursorY = (window.Event) ? e.pageY : event.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
			});

			$(this.element).on( 'click', function( e ) {
				e.preventDefault();
				
				var curCursorX = (window.Event) ? e.pageX : event.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft);
				var curCursorY = (window.Event) ? e.pageY : event.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);

				if ((cursorX - curCursorX) > 10 || (cursorX - curCursorX) < -10){
					return;
				}else if ((cursorY - curCursorY) > 10 || (cursorY - curCursorY) < -10){
					return;
				}
				
				$( 'body' ).append( html );

				var lz      = $( '#lz-box' ),
					img       = $(this).children('img'),
					src       = $(this).attr('href'),
					overlayCss = {};

				var title = img.attr('title');

				overlayCss = {
					opacity : $this.settings.overlayOpacity
				};
				$('#lz-overlay').css( overlayCss );
				$('#lz-container').fadeIn({ 'display' : 'block' });
				// ----------------------------------
				$("body").disableScroll();
				
				$(new Image()).attr('src', src).on( 'load', function() {

					lz.append( '<img src="' + src + '">' );

					$this.showTitle( title );

					$this.setPadding( title );

					$this.setDim();

					lz.append( '<a href="#" id="lz-close" title="Close">Close</a>' );

					$('#loading-center').remove();

					$('#lz-box img').animate({opacity: 1}, $this.settings.speed);

				});

			});
			
		},

		showTitle : function (title) {
			if ( this.settings.viewTitle && title ) {
				$( '#lz-box' ).append( '<p>' + title + '</p>' );
			}
		},

		setPadding : function (title) {
			var padding = 0,
			 backgroundColor = this.settings.imgPadding > 0 ? "#FFF" : "none",
			 imgCss = {};

			if ( this.settings.viewTitle && title ) {
				padding = this.settings.imgPadding + "px " + this.settings.imgPadding + "px " + ( this.settings.imgPadding + 30 ) + "px " + this.settings.imgPadding + "px";
			} else {
				padding = this.settings.imgPadding;
			}

			imgCss = {
				padding         : padding,
				backgroundColor : backgroundColor
			}

			$('#lz-box img').css( imgCss );
		},

		setDim : function () {

			var width, height, imgCss = {};
			var winWidth = window.innerWidth ? window.innerWidth : $( window ).width();
			var winHeight = window.innerHeight ? window.innerHeight : $( window ).height();

			if ( winWidth > winHeight ) {
				width  = "100%";
				height = "80%";
			} else {
				width  = "80%";
				height = "100%";
			}

			// Reset dimensions on mobile orientation change
			if ( 'onorientationchange' in window ) {

				window.addEventListener( 'orientationchange', function() {

					if (window.orientation === 0) {
						width = "80%";
						height = "100%";
					} else if (window.orientation === 90 || window.orientation === -90) {
						width = "100%";
						height = "80%";
					}
				}, false );

			}

			imgCss = {
					maxWidth        : width,
					maxHeight       : height,
			};

			$( '#lz-box img' ).css( imgCss );

		},

		closeZoom : function () {
			var $this = this;

			$('#lz-container').fadeOut($this.settings.speed, function() {
				$this.destroy();
				// ----------------------------------
				$("body").enableScroll();
				
			});

		},

		resize : function () {
			var $this = this;

			$( window ).resize( function() {
				$this.setDim();
			} ).resize();
		},

		destroy : function () {
			$('#lz-container').remove();
		},

	});

	$.fn[ pluginName ] = function( options ) {
		return this.each( function() {
			if ( !$.data( this, "plugin_" + pluginName ) ) {
				$.data( this, "plugin_" +
					pluginName, new Plugin( this, options ) );
			}
		} );
	};

} )( jQuery, window, document );


$.fn.disableScroll = function() {
    window.oldScrollPos = $(window).scrollTop();

    $(window).on('scroll.scrolldisabler',function ( event ) {
       $(window).scrollTop( window.oldScrollPos );
       event.preventDefault();
    });
};
$.fn.enableScroll = function() {
    $(window).off('scroll.scrolldisabler');
};