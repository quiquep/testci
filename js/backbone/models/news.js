(function(context) {
	'use strict';

	define([
	        'jquery',
	        'underscore',
	        'backbone'
	    ], function($,_,Backbone){
	
		context.News = Backbone.Model.extend({
		    defaults: {
		        title: 'None',
		        body: 'None'
		    }	
		});
		
		
	});


}(app));