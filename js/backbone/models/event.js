(function(context) {
	'use strict';

	define([
	        'jquery',
	        'underscore',
	        'backbone'
	    ], function($,_,Backbone){
		
		context.Event = Backbone.Model.extend({
		    defaults: {
		        title: 'None',
		        description: 'None',
		        datetime:'12/12/04'
		    }	
		});
		
		
	});


}(app));