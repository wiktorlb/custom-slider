// External Dependencies
import $ from 'jquery';

// Internal Dependencies
import modules from './modules';

/*$('.slider').slick({
  infinite: true,
	dots: true,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 3000,
	fade: true,
	fadeSpeed: 1000
}); */

$(window).on('et_builder_api_ready', (event, API) => {
  // Register custom modules
  API.registerModules(modules);
});
