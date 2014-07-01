(function(context) {
	'use strict';

	define([
	        'jquery',
	        'underscore',
	        'backbone',
	        'text!../../backbone/tpl/login.html'
	    ], function($,_,Backbone,template){
		
		context.LoginView = Backbone.View.extend({
			
			el: $('#content'),
			
			initialize:function () {
				console.log('Initializing Login View');
				this.template = _.template(template);
			},
			
			events: {
				"click #loginButton": "authenticate"
				//"click #createAcount": "createAcount"	
			},
			
			render:function () {
				$(this.el).html(this.template());
		    	 // si esta en modo confirmation
		    	 	//si ok:
		    	 		//$('.alert-success)
		    	 	//sino
		    	 		//$('.alert-error').
			},
			
			authenticate:function (event) {
				event.preventDefault(); // Don't let this button submit the form
				$('.alert-error').hide(); // Hide any errors on a new submit
				
				var json = { username: $('#username').val(), password: $('#password').val() };
				var json_encoded = JSON.stringify(json);
				
				$.ajax({
					url:'/testci/rest/session',
					type:'POST',
					dataType:"json",
					data: {'json':json_encoded},
					success:function (data) {
						console.log(["Login request details: ", data]);
						
						if(data.error) {  // If there is an error, show the error messages
							$('.alert-error').text(data.error).show();
						}
						else { // If not, send them back to the home page
							window.location.replace('#eventslist'); // todo: tasklist
						}
					},
					error: function( data ) {
		            	 $('.alert-error').text(data.statusText + ' - ' + data.responseText ).show();
		            }
				});
			}
			
			
			
		});
	});

})(app);