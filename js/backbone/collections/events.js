(function(context) {
	'use strict';
	
	define([
	        'jquery',
	        'underscore',
	        'backbone',
	        'models/event'
	    ], function($,_,Backbone){
		
		context.EventCollection = Backbone.Collection.extend({
			
			// Reference to this collection's model.
			model: context.Event,
			
			url:"/testci/rest/events",
			
			
		});
		
		
	});

}(app));