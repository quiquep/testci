var app = app || {};

define([
        'jquery','underscore','backbone','utils','views/login',
        ,'views/eventslist',
        'models/event'
        ], function($,_,Backbone){
	
		var utils = app.utils || ( app.utils = {} );
	
		app.AppRouter = Backbone.Router.extend({
			routes:{
				"" : "login",
				
				"eventslist":"eventslist",
				
			},
			
			initialize:function () {
				
				//utils.renderView( 'HeaderView' );
			},
			
			
			
			
			login: function() {
				utils.renderView( 'LoginView' );
			},
			
			eventslist: function() {
				utils.renderView( 'EventsListView');
			}
		
		});
		
		var initialize = function(){
			//app = new AppRouter();
			app.application = new app.AppRouter();
			Backbone.history.start();
		};
		
		return {
			initialize: initialize
		};
		
});