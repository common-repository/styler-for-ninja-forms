
jQuery(document).ready(function($) {
    if (typeof Backbone != 'undefined' && typeof Marionette != 'undefined') {

        var nfstylerRadio = Backbone.Radio;
        var nfstylercontroller = Marionette.Object.extend({
            initialize: function() {
				this.listenTo(nfstylerRadio.channel('app'), 'init:domainCollection', this.updatedomainCollection);
            },
			 updatedomainCollection: function(model){
				model.add({
					id: 'nf_styler_link',
					nicename: 'Style Form',
					classes: 'nf_styler_link',
					url: nf_styler_url
				})
			 }
        })

         new nfstylercontroller();
    }

});
