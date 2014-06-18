var NewsView = Backbone.View.extend({
	el : '.news',
	initialize : function() {
		this.model.bind('change:title', this.render , this); 
		this.render();	    
	},	 
	render : function() {
        var variables = {},
            template = _.template( $("#news_template").html(), this.attributes );
        
        this.$el.html( template );		
	}
});

var NewsCollectionView = Backbone.View.extend({
	el: '.carousel-container',
	model: News,
    initialize: function(){
    	this.collection.bind("reset", _.bind(this.render, this));
    },
    render: function(){
    	 var template = _.template($('#news-list-template').html(), {news: this.collection.models});
         this.$el.html(template);   	
    },    
});
