var EventCollection = Backbone.Collection.extend({
	model: Event,
	url: '/testci/rest/events',
});