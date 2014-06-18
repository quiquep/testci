var NewsCollection = Backbone.Collection.extend({
	model: News,
	url: '/testci/rest/news',
});