/**
 * File main.js.
 *
 * Series of initialize tasks.
 *
 * Please see comments below.
 */

( function( $ ) {

	// clean load site after all elements loaded. fix object fit for ie
	$(document).ready(function() {
	  document.getElementsByTagName("html")[0].style.visibility = "visible";
		objectFitImages();
	});

  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document. `${vh}px`
  document.documentElement.style.setProperty('--vh', vh + 'px');

  // fixed navigation header add sticky class on scroll
	$(document).ready(function() {
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};
    // Get the header
    var header = document.getElementById("masthead");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        $('.hero-banner-content').addClass('vh-50');
        $('.mouse_wrap').addClass('vh-90');
      } else {
        header.classList.remove("sticky");
        $('.hero-banner-content').removeClass('vh-50');
        $('.mouse_wrap').removeClass('vh-90');
      }
    }
	});

	// add bootstrap container to gutenberg wp-block-column class
	$('header.page-header').addClass('container');
	$('header.entry-header').addClass('container');
	$('.has-1-columns .wp-block-column').addClass('container');

} )( jQuery );
