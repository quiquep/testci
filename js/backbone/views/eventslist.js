(function(context) {
	'use strict';
	
	define([
	        'jquery',
	        'underscore',
	        'backbone',
	        'text!../../backbone/tpl/eventslist.html',
	        'text!../../backbone/tpl/eventslistitem.html',
	        'models/event',
	        'collections/events'
	        ], function($,_,Backbone,template,templateItem){
		
		context.EventsListView = Backbone.View.extend({
			el: $('#content'),
			
			initialize:function () {
				this.template = _.template(template);
			},
			events:{
				"click #createevent":"createevent"
			},
			
			render:function () {
				$(this.el).html(this.template());
				new context.EventsListItemView({el:$('#eventlist-content', this.el)}).render();
			},
			createevent:function(event){
				event.preventDefault();
				window.location.replace('#newevent');
			}
		});
		
		context.EventsListItemView = Backbone.View.extend({
			tagName:'ul',
			
			className:'nav nav-list',
			
			initialize:function () {
				console.log('Initializing Events List View');
				this.model = new context.EventCollection();
				this.model.bind("all", this.render, this);
				this.model.fetch();
				
			},
			
			render:function () {
				var self = this;
				$(self.el).empty();
				_.each(this.model.models, function (event) {
					new context.EventsItemView({model:event, el: $(self.el)}).render();
				}, this);
			}
		});
		
		context.EventsItemView = Backbone.View.extend({
			
			tagName:"li",
			
			initialize:function () {
				this.template = _.template(templateItem);
				this.model.bind("change", this.render, this);
				this.model.bind("destroy", this.close, this);
			},
			
			render:function () {
				$(this.el).append(this.template(this.model.toJSON()));
			}
			
		});
		
	});
	
})(app);