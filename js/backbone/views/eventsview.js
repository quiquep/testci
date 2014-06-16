var EventView = Backbone.View.extend({
	el : '.event',
	initialize : function() {
		this.model.bind('change:title', this.render , this); 
		this.render();	    
	},	 
	render : function() {
		//this.$el.text(this.model.get('title') );
        //Pass variables in using Underscore.js Template
        var variables = {};
        // Compile the template using underscore
        var template = _.template( $("#event_template").html(), this.attributes );
        // Load the compiled HTML into the Backbone "el"
        this.$el.html( template );		
	}
});

var EventCollectionView = Backbone.View.extend({
	el: '.table-responsive',
	model: Event,
    initialize: function(){
    	this.collection.bind("reset", _.bind(this.render, this));
    },
    render: function(){
    	 console.log('EventCollectionView.render()');
    	 var template = _.template($('#event-list-template').html(), {events: this.collection.models});
         this.$el.html(template);   	
    },    
});
