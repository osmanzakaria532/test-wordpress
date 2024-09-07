(function (api) {

	// Extends our custom "Blog Starter" section.
	api.sectionConstructor['electronic-store'] = api.Section.extend({

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	});
	// jQuery("#accordion-panel-electronic-store-theme-options").addClass("custom-class");

})(wp.customize);